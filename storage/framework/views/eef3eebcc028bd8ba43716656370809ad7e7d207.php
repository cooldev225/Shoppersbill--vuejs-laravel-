<?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	<div class="col-md-3 col-xs-4 product_list no-print">
		<div class="product_box" data-variation_id="<?php echo e($product->id, false); ?>" title="<?php echo e($product->name, false); ?> <?php if($product->type == 'variable'): ?>- <?php echo e($product->variation, false); ?> <?php endif; ?> <?php echo e('(' . $product->sub_sku . ')', false); ?>">

		<div class="image-container" 
			style="background-image: url(
					<?php if(count($product->media) > 0): ?>
						<?php echo e($product->media->first()->display_url, false); ?>

					<?php elseif(!empty($product->product_image)): ?>
						<?php echo e(asset('/uploads/img/' . rawurlencode($product->product_image)), false); ?>

					<?php else: ?>
						<?php echo e(asset('/img/default.png'), false); ?>

					<?php endif; ?>
				);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">
			
		</div>

		<div class="text_div">
			<small class="text text-muted"><?php echo e($product->name, false); ?> 
			<?php if($product->type == 'variable'): ?>
				- <?php echo e($product->variation, false); ?>

			<?php endif; ?>
			</small>

			<small class="text-muted">
				(<?php echo e($product->sub_sku, false); ?>)
			</small>
		</div>
			
		</div>
	</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	<input type="hidden" id="no_products_found">
	<div class="col-md-12">
		<h4 class="text-center">
			<?php echo app('translator')->getFromJson('lang_v1.no_products_to_display'); ?>
		</h4>
	</div>
<?php endif; ?><?php /**PATH /home/benignanttg/pos.shoppersbill.com/resources/views/sale_pos/partials/product_list.blade.php ENDPATH**/ ?>