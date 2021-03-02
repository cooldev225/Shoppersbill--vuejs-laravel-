<title><?php echo e(__('barcode.print_labels'), false); ?></title>
<button class="btn btn-success" onclick="window.print()">Print</button>
<div id="preview_body">
<?php
	$loop_count = 0;
?>
<?php $__currentLoopData = $product_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php while($details['qty'] > 0): ?>
		<?php
			$loop_count += 1;
			$is_new_row = ($barcode_details->stickers_in_one_row == 1 || ($loop_count % $barcode_details->stickers_in_one_row) == 1) ? true : false;
 
			$is_new_paper = ($barcode_details->is_continuous && $is_new_row) || (!$barcode_details->is_continuous && ($loop_count % $barcode_details->stickers_in_one_sheet == 1));

			$is_paper_end = (($barcode_details->is_continuous && ($loop_count % $barcode_details->stickers_in_one_row == 0)) || (!$barcode_details->is_continuous && ($loop_count % $barcode_details->stickers_in_one_sheet == 0)));

			
		?>

		<?php if($is_new_paper): ?>
			
			<div style="<?php if(!$barcode_details->is_continuous): ?> height:<?php echo e($barcode_details->paper_height*0.95, false); ?>in !important; <?php else: ?> height:<?php echo e($barcode_details->height*0.95, false); ?>in !important; <?php endif; ?> width:<?php echo e($barcode_details->paper_width, false); ?>in !important; line-height: 16px !important; page-break-after: always;" class="<?php if(!$barcode_details->is_continuous): ?> label-border-outer <?php endif; ?>">

			
			<div style="<?php if(!$barcode_details->is_continuous): ?>margin-top:<?php echo e($barcode_details->top_margin, false); ?>in !important; margin-bottom:<?php echo e($barcode_details->top_margin, false); ?>in !important; margin-left:<?php echo e($barcode_details->left_margin, false); ?>in !important;margin-right:<?php echo e($barcode_details->left_margin, false); ?>in !important;<?php endif; ?>" class="label-border-internal">
		<?php endif; ?>

		<?php if((!$barcode_details->is_continuous) && ($loop_count % $barcode_details->stickers_in_one_sheet) <= $barcode_details->stickers_in_one_row): ?>
			<?php $first_row = true ?>
		<?php elseif($barcode_details->is_continuous && ($loop_count <= $barcode_details->stickers_in_one_row) ): ?>
			<?php $first_row = true ?>
		<?php else: ?>
			<?php $first_row = false ?>
		<?php endif; ?>

		<div style="height:<?php echo e($barcode_details->height, false); ?>in !important; line-height: <?php echo e($barcode_details->height, false); ?>in; width:<?php echo e($barcode_details->width*0.97, false); ?>in !important; display: inline-block; <?php if(!$is_new_row): ?> margin-left:<?php echo e($barcode_details->col_distance, false); ?>in !important; <?php endif; ?> <?php if(!$first_row): ?>margin-top:<?php echo e($barcode_details->row_distance, false); ?>in !important; <?php endif; ?>" class="sticker-border text-center">
		<div style="display:inline-block;vertical-align:middle;line-height:16px !important;">
			
			<?php if(!empty($print['business_name'])): ?>
				<b style="display: block !important" class="text-uppercase"><?php echo e($business_name, false); ?></b>
			<?php endif; ?>

			
			<?php if(!empty($print['name'])): ?>
				<span style="display: block !important">
					<?php echo e($details['details']->product_actual_name, false); ?>

				</span>
			<?php endif; ?>

			
			<?php if(!empty($print['variations']) && $details['details']->is_dummy != 1): ?>
				<span style="display: block !important">
					<b><?php echo e($details['details']->product_variation_name, false); ?></b>:<?php echo e($details['details']->variation_name, false); ?>

				</span>
				
			<?php endif; ?>

			
			<?php if(!empty($print['price'])): ?>
				<b><?php echo app('translator')->getFromJson('lang_v1.price'); ?>:</b>
				<?php echo e(session('currency')['symbol'] ?? '', false); ?>


				<?php if($print['price_type'] == 'inclusive'): ?>
					<?php echo e(number_format($details['details']->sell_price_inc_tax, config('constants.currency_precision', 2), session('currency')['decimal_separator'], session('currency')['thousand_separator']), false); ?>

				<?php else: ?>
					<?php echo e(number_format($details['details']->default_sell_price, config('constants.currency_precision', 2), session('currency')['decimal_separator'], session('currency')['thousand_separator']), false); ?>

				<?php endif; ?>
			<?php endif; ?>

			<br>
			
			<img class="center-block" style="max-width:90%; !important;height: <?php echo e($barcode_details->height*0.24, false); ?>in !important;" src="data:image/png;base64,<?php echo e(DNS1D::getBarcodePNG($details['details']->sub_sku, $details['details']->barcode_type, 3,30,array(39, 48, 54), true), false); ?>">

		</div>
		</div>

		<?php if($is_paper_end): ?>
			
			</div>

			
			</div>
		<?php endif; ?>

		<?php
			$details['qty'] = $details['qty'] - 1;
		?>
	<?php endwhile; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if(!$is_paper_end): ?>
	
	</div>

	
	</div>
<?php endif; ?>


</div>

<script type="text/javascript">

</script>

<style type="text/css">

	.text-center{
		text-align: center;
	}

	.text-uppercase{
		text-transform: uppercase;
	}

	/*Css related to printing of barcode*/
	.label-border-outer{
	    border: 0.1px solid grey !important;
	}
	.label-border-internal{
	    /*border: 0.1px dotted grey !important;*/
	}
	.sticker-border{
	    border: 0.1px dotted grey !important;
	    overflow: hidden;
	    box-sizing: border-box;
	}
	#preview_box{
	    padding-left: 30px !important;
	}
	@media  print{
	    .content-wrapper{
	      border-left: none !important; /*fix border issue on invoice*/
	    }
	    .label-border-outer{
	        border: none !important;
	    }
	    .label-border-internal{
	        border: none !important;
	    }
	    .sticker-border{
	        border: none !important;
	    }
	    #preview_box{
	        padding-left: 0px !important;
	    }
	    #toast-container{
	        display: none !important;
	    }
	    .tooltip{
	        display: none !important;
	    }
	    .btn{
	    	display: none !important;
	    }
	}

	@media  print{
		#preview_body{
			display: block !important;
		}
	}
	@page  {
		size: <?php echo e($barcode_details->paper_width, false); ?>in <?php if(!$barcode_details->is_continuous && $barcode_details->paper_height != 0): ?><?php echo e($barcode_details->paper_height, false); ?>in <?php endif; ?>;

		/*width: <?php echo e($barcode_details->paper_width, false); ?>in !important;*/
		/*height:<?php if($barcode_details->paper_height != 0): ?><?php echo e($barcode_details->paper_height, false); ?>in !important <?php else: ?> auto <?php endif; ?>;*/
		margin-top: 0in;
		margin-bottom: 0in;
		margin-left: 0in;
		margin-right: 0in;
		
		<?php if($barcode_details->is_continuous): ?>
			/*page-break-inside : avoid !important;*/
		<?php endif; ?>
	}
</style><?php /**PATH /home/benignanttg/pos.shoppersbill.com/resources/views/labels/partials/preview.blade.php ENDPATH**/ ?>