<?php
	$featured_product_exist = !empty($featured_products) && count($featured_products) > 0;
?>
<?php if($featured_product_exist): ?>
	<?php echo $__env->make('sale_pos.partials.featured_products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<div class="row">
	<?php if(!empty($categories)): ?>
		<div class="<?php if($featured_product_exist): ?> col-md-4 <?php else: ?> col-md-6 <?php endif; ?>" id="product_category_div">
			<select class="select2" id="product_category" style="width:100% !important">

				<option value="all"><?php echo app('translator')->getFromJson('lang_v1.all_category'); ?></option>

				<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($category['id'], false); ?>"><?php echo e($category['name'], false); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if(!empty($category['sub_categories'])): ?>
						<optgroup label="<?php echo e($category['name'], false); ?>">
							<?php $__currentLoopData = $category['sub_categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<i class="fa fa-minus"></i> <option value="<?php echo e($sc['id'], false); ?>"><?php echo e($sc['name'], false); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</optgroup>
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
	<?php endif; ?>

	<?php if(!empty($brands)): ?>
		<div class="<?php if($featured_product_exist): ?> col-sm-4 <?php else: ?> col-md-6 <?php endif; ?>" id="product_brand_div">
			<?php echo Form::select('size', $brands, null, ['id' => 'product_brand', 'class' => 'select2', 'name' => null, 'style' => 'width:100% !important']); ?>

		</div>
	<?php endif; ?>

	<!-- used in repair : filter for service/product -->
	<div class="col-md-6 hide" id="product_service_div">
		<?php echo Form::select('is_enabled_stock', ['' => __('messages.all'), 'product' => __('sale.product'), 'service' => __('lang_v1.service')], null, ['id' => 'is_enabled_stock', 'class' => 'select2', 'name' => null, 'style' => 'width:100% !important']); ?>

	</div>

	<?php if($featured_product_exist): ?>
		<div class="col-sm-4" id="feature_product_div">
			<button type="button" class="btn btn-primary btn-flat" id="show_featured_products"><?php echo app('translator')->getFromJson('lang_v1.featured_products'); ?></button>
		</div>
	<?php endif; ?>
</div>
<br>
<div class="row">
	<input type="hidden" id="suggestion_page" value="1">
	<div class="col-md-12">
		<div class="eq-height-row" id="product_list_body"></div>
	</div>
	<div class="col-md-12 text-center" id="suggestion_page_loader" style="display: none;">
		<i class="fa fa-spinner fa-spin fa-2x"></i>
	</div>
</div><?php /**PATH /home/admin/web/pos.shoppersbill.com/public_html/resources/views/sale_pos/partials/pos_sidebar.blade.php ENDPATH**/ ?>