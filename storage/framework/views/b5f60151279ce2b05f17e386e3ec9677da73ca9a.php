<?php $__env->startSection('title', __('role.add_role')); ?>

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1><?php echo app('translator')->getFromJson( 'role.add_role' ); ?></h1>
</section>

<!-- Main content -->
<section class="content">
    <?php $__env->startComponent('components.widget', ['class' => 'box-primary']); ?>
        <?php echo Form::open(['url' => action('RoleController@store'), 'method' => 'post', 'id' => 'role_add_form' ]); ?>

        <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <?php echo Form::label('name', __( 'user.role_name' ) . ':*'); ?>

              <?php echo Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'user.role_name' ) ]);; ?>

          </div>
        </div>
        </div>
        <?php if(in_array('service_staff', $enabled_modules)): ?>
        <div class="row">
        <div class="col-md-2">
          <h4><?php echo app('translator')->getFromJson( 'lang_v1.user_type' ); ?></h4>
        </div>
        <div class="col-md-9 col-md-offset-1">
          <div class="col-md-12">
          <div class="checkbox">
            <label>
              <?php echo Form::checkbox('is_service_staff', 1, false, 
              [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'restaurant.service_staff' ), false); ?>

            </label>
            <?php
                if(session('business.enable_tooltip')){
                    echo '<i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" 
                    data-container="body" data-toggle="popover" data-placement="auto bottom" 
                    data-content="' . __('restaurant.tooltip_service_staff') . '" data-html="true" data-trigger="hover"></i>';
                }
                ?>
          </div>
          </div>
        </div>
        </div>
        <?php endif; ?>
        <div class="row">
        <div class="col-md-3">
          <label><?php echo app('translator')->getFromJson( 'user.permissions' ); ?>:</label> 
        </div>
        </div>
        <div class="row check_group">
        <div class="col-md-1">
          <h4><?php echo app('translator')->getFromJson( 'role.user' ); ?></h4>
        </div>
        <div class="col-md-2">
          <div class="checkbox">
              <label>
                <input type="checkbox" class="check_all input-icheck" > <?php echo e(__( 'role.select_all' ), false); ?>

              </label>
            </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'user.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.user.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'user.create', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.user.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'user.update', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.user.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'user.delete', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.user.delete' ), false); ?>

              </label>
            </div>
          </div>
        </div>
        </div>
        <hr>
        <div class="row check_group">
        <div class="col-md-1">
          <h4><?php echo app('translator')->getFromJson( 'user.roles' ); ?></h4>
        </div>
        <div class="col-md-2">
          <div class="checkbox">
              <label>
                <input type="checkbox" class="check_all input-icheck" > <?php echo e(__( 'role.select_all' ), false); ?>

              </label>
            </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'roles.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'lang_v1.view_role' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'roles.create', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.add_role' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'roles.update', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.edit_role' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'roles.delete', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'lang_v1.delete_role' ), false); ?>

              </label>
            </div>
          </div>
        </div>
        </div>
        <hr>
        <div class="row check_group">
        <div class="col-md-1">
          <h4><?php echo app('translator')->getFromJson( 'role.supplier' ); ?></h4>
        </div>
        <div class="col-md-2">
          <div class="checkbox">
              <label>
                <input type="checkbox" class="check_all input-icheck" > <?php echo e(__( 'role.select_all' ), false); ?>

              </label>
            </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'supplier.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.supplier.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'supplier.create', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.supplier.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'supplier.update', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.supplier.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'supplier.delete', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.supplier.delete' ), false); ?>

              </label>
            </div>
          </div>
        </div>
        </div>
        <hr>
        <div class="row check_group">
        <div class="col-md-1">
          <h4><?php echo app('translator')->getFromJson( 'role.customer' ); ?></h4>
        </div>
        <div class="col-md-2">
          <div class="checkbox">
              <label>
                <input type="checkbox" class="check_all input-icheck" > <?php echo e(__( 'role.select_all' ), false); ?>

              </label>
            </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'customer.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.customer.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'customer.create', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.customer.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'customer.update', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.customer.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'customer.delete', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.customer.delete' ), false); ?>

              </label>
            </div>
          </div>
        </div>
        </div>
        <hr>
        <div class="row check_group">
        <div class="col-md-1">
          <h4><?php echo app('translator')->getFromJson( 'business.product' ); ?></h4>
        </div>
        <div class="col-md-2">
          <div class="checkbox">
              <label>
                <input type="checkbox" class="check_all input-icheck" > <?php echo e(__( 'role.select_all' ), false); ?>

              </label>
            </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'product.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.product.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'product.create', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.product.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'product.update', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.product.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'product.delete', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.product.delete' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'product.opening_stock', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'lang_v1.add_opening_stock' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'view_purchase_price', false,['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.view_purchase_price'), false); ?>

              </label>
              <?php
                if(session('business.enable_tooltip')){
                    echo '<i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" 
                    data-container="body" data-toggle="popover" data-placement="auto bottom" 
                    data-content="' . __('lang_v1.view_purchase_price_tooltip') . '" data-html="true" data-trigger="hover"></i>';
                }
                ?>
            </div>
          </div>
        </div>
        </div>
        <hr>
        <?php if(in_array('purchases', $enabled_modules) || in_array('stock_adjustment', $enabled_modules) ): ?>
        <div class="row check_group">
        <div class="col-md-1">
          <h4><?php echo app('translator')->getFromJson( 'role.purchase' ); ?></h4>
        </div>
        <div class="col-md-2">
          <div class="checkbox">
              <label>
                <input type="checkbox" class="check_all input-icheck" > <?php echo e(__( 'role.select_all' ), false); ?>

              </label>
            </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'purchase.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.purchase.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'purchase.create', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.purchase.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'purchase.update', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.purchase.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'purchase.delete', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.purchase.delete' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'purchase.payments', false,['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.purchase.payments'), false); ?>

              </label>
              <?php
                if(session('business.enable_tooltip')){
                    echo '<i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" 
                    data-container="body" data-toggle="popover" data-placement="auto bottom" 
                    data-content="' . __('lang_v1.purchase_payments') . '" data-html="true" data-trigger="hover"></i>';
                }
                ?>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'purchase.update_status', false,['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.update_status'), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'view_own_purchase', false,['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.view_own_purchase'), false); ?>

              </label>
            </div>
          </div>

        </div>
        </div>
        <hr>
        <?php endif; ?>
        <div class="row check_group">
        <div class="col-md-1">
          <h4><?php echo app('translator')->getFromJson( 'sale.sale' ); ?></h4>
        </div>
        <div class="col-md-2">
          <div class="checkbox">
              <label>
                <input type="checkbox" class="check_all input-icheck" > <?php echo e(__( 'role.select_all' ), false); ?>

              </label>
            </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'sell.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.sell.view' ), false); ?>

              </label>
            </div>
          </div>
          <?php if(in_array('pos_sale', $enabled_modules)): ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'sell.create', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.sell.create' ), false); ?>

              </label>
            </div>
          </div>
            <?php endif; ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'sell.update', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.sell.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'sell.delete', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.sell.delete' ), false); ?>

              </label>
            </div>
          </div>
          <?php if(in_array('add_sale', $enabled_modules)): ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'direct_sell.access', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.direct_sell.access' ), false); ?>

              </label>
            </div>
          </div>
          <?php endif; ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'list_drafts', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'lang_v1.list_drafts' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'list_quotations', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'lang_v1.list_quotations' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'view_own_sell_only', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'lang_v1.view_own_sell_only' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'sell.payments', false, ['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.sell.payments'), false); ?>

              </label>
              <?php
                if(session('business.enable_tooltip')){
                    echo '<i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" 
                    data-container="body" data-toggle="popover" data-placement="auto bottom" 
                    data-content="' . __('lang_v1.sell_payments') . '" data-html="true" data-trigger="hover"></i>';
                }
                ?>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'edit_product_price_from_sale_screen', false, ['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.edit_product_price_from_sale_screen'), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'edit_product_price_from_pos_screen', false, ['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.edit_product_price_from_pos_screen'), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'edit_product_discount_from_sale_screen', false, ['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.edit_product_discount_from_sale_screen'), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'edit_product_discount_from_pos_screen', false, ['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.edit_product_discount_from_pos_screen'), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'discount.access', false, ['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.discount.access'), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'access_shipping', false, ['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.access_shipping'), false); ?>

              </label>
            </div>
          </div>
          <?php if(in_array('types_of_service', $enabled_modules)): ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'access_types_of_service', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'lang_v1.access_types_of_service' ), false); ?>

              </label>
            </div>
          </div>
          <?php endif; ?>
        </div>
        </div>
        <hr>
        <div class="row check_group">
        <div class="col-md-1">
          <h4><?php echo app('translator')->getFromJson( 'role.brand' ); ?></h4>
        </div>
        <div class="col-md-2">
          <div class="checkbox">
              <label>
                <input type="checkbox" class="check_all input-icheck" > <?php echo e(__( 'role.select_all' ), false); ?>

              </label>
            </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'brand.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.brand.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'brand.create', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.brand.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'brand.update', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.brand.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'brand.delete', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.brand.delete' ), false); ?>

              </label>
            </div>
          </div>
        </div>
        </div>
        <hr>
        <div class="row check_group">
        <div class="col-md-1">
          <h4><?php echo app('translator')->getFromJson( 'role.tax_rate' ); ?></h4>
        </div>
        <div class="col-md-2">
          <div class="checkbox">
              <label>
                <input type="checkbox" class="check_all input-icheck" > <?php echo e(__( 'role.select_all' ), false); ?>

              </label>
            </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'tax_rate.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.tax_rate.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'tax_rate.create', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.tax_rate.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'tax_rate.update', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.tax_rate.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'tax_rate.delete', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.tax_rate.delete' ), false); ?>

              </label>
            </div>
          </div>
        </div>
        </div>
        <hr>
        <div class="row check_group">
        <div class="col-md-1">
          <h4><?php echo app('translator')->getFromJson( 'role.unit' ); ?></h4>
        </div>
        <div class="col-md-2">
          <div class="checkbox">
              <label>
                <input type="checkbox" class="check_all input-icheck" > <?php echo e(__( 'role.select_all' ), false); ?>

              </label>
            </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'unit.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.unit.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'unit.create', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.unit.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'unit.update', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.unit.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'unit.delete', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.unit.delete' ), false); ?>

              </label>
            </div>
          </div>
        </div>
        </div>
        <hr>
        <div class="row check_group">
        <div class="col-md-1">
          <h4><?php echo app('translator')->getFromJson( 'category.category' ); ?></h4>
        </div>
        <div class="col-md-2">
          <div class="checkbox">
              <label>
                <input type="checkbox" class="check_all input-icheck" > <?php echo e(__( 'role.select_all' ), false); ?>

              </label>
            </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'category.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.category.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'category.create', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.category.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'category.update', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.category.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'category.delete', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.category.delete' ), false); ?>

              </label>
            </div>
          </div>
        </div>
        </div>
        <hr>
        <div class="row check_group">
        <div class="col-md-1">
          <h4><?php echo app('translator')->getFromJson( 'role.report' ); ?></h4>
        </div>
        <div class="col-md-2">
          <div class="checkbox">
              <label>
                <input type="checkbox" class="check_all input-icheck" > <?php echo e(__( 'role.select_all' ), false); ?>

              </label>
            </div>
        </div>
        <div class="col-md-9">
            <?php if(in_array('purchases', $enabled_modules) || in_array('add_sale', $enabled_modules) || in_array('pos_sale', $enabled_modules)): ?>
              <div class="col-md-12">
                <div class="checkbox">
                  <label>
                    <?php echo Form::checkbox('permissions[]', 'purchase_n_sell_report.view', false, 
                    [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.purchase_n_sell_report.view' ), false); ?>

                  </label>
                </div>
              </div>
            <?php endif; ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'tax_report.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.tax_report.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'contacts_report.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.contacts_report.view' ), false); ?>

              </label>
            </div>
          </div>
          <?php if(in_array('expenses', $enabled_modules)): ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'expense_report.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.expense_report.view' ), false); ?>

              </label>
            </div>
          </div>
          <?php endif; ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'profit_loss_report.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.profit_loss_report.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'stock_report.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.stock_report.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'trending_product_report.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.trending_product_report.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'register_report.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.register_report.view' ), false); ?>

              </label>
            </div>
          </div>

          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'sales_representative.view', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.sales_representative.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'view_product_stock_value', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'lang_v1.view_product_stock_value' ), false); ?>

              </label>
            </div>
          </div> 

        </div>
        </div>
        <hr>
        <div class="row check_group">
        <div class="col-md-1">
          <h4><?php echo app('translator')->getFromJson( 'role.settings' ); ?></h4>
        </div>
        <div class="col-md-2">
          <div class="checkbox">
              <label>
                <input type="checkbox" class="check_all input-icheck" > <?php echo e(__( 'role.select_all' ), false); ?>

              </label>
            </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'business_settings.access', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.business_settings.access' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'barcode_settings.access', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.barcode_settings.access' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'invoice_settings.access', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.invoice_settings.access' ), false); ?>

              </label>
            </div>
          </div>
          <?php if(in_array('expenses', $enabled_modules)): ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'expense.access', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.expense.access' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'view_own_expense', false,['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.view_own_expense'), false); ?>

              </label>
            </div>
          </div>
          <?php endif; ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'access_printers', false,['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.access_printers'), false); ?>

              </label>
            </div>
          </div>

        </div>
        </div>
        <hr>
        <div class="row check_group">
        <div class="col-md-3">
          <h4><?php echo app('translator')->getFromJson( 'role.dashboard' ); ?> <?php
                if(session('business.enable_tooltip')){
                    echo '<i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" 
                    data-container="body" data-toggle="popover" data-placement="auto bottom" 
                    data-content="' . __('tooltip.dashboard_permission') . '" data-html="true" data-trigger="hover"></i>';
                }
                ?></h4>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'dashboard.data', true, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.dashboard.data' ), false); ?>

              </label>
            </div>
          </div>
        </div>
        </div>
        <hr>
        <div class="row check_group">
        <div class="col-md-3">
          <h4><?php echo app('translator')->getFromJson( 'account.account' ); ?></h4>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'account.access', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'lang_v1.access_accounts' ), false); ?>

              </label>
            </div>
          </div>
        </div>
        </div>
        <hr>
        <?php if(in_array('booking', $enabled_modules)): ?>
        <div class="row check_group">
        <div class="col-md-1">
          <h4><?php echo app('translator')->getFromJson( 'restaurant.bookings' ); ?></h4>
        </div>
        <div class="col-md-2">
          <div class="checkbox">
              <label>
                <input type="checkbox" class="check_all input-icheck" > <?php echo e(__( 'role.select_all' ), false); ?>

              </label>
            </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'crud_all_bookings', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'restaurant.add_edit_view_all_booking' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'crud_own_bookings', false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'restaurant.add_edit_view_own_booking' ), false); ?>

              </label>
            </div>
          </div>
        </div>
        </div>
        <hr>
        <?php endif; ?>
        <div class="row">
        <div class="col-md-3">
          <h4><?php echo app('translator')->getFromJson( 'lang_v1.access_selling_price_groups' ); ?></h4>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'access_default_selling_price', true, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__('lang_v1.default_selling_price'), false); ?>

              </label>
            </div>
          </div>
          <?php if(count($selling_price_groups) > 0): ?>
          <?php $__currentLoopData = $selling_price_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $selling_price_group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('spg_permissions[]', 'selling_price_group.' . $selling_price_group->id, false, 
                [ 'class' => 'input-icheck']);; ?> <?php echo e($selling_price_group->name, false); ?>

              </label>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>
        </div>
        <?php if(in_array('tables', $enabled_modules)): ?>
          <div class="row">
            <div class="col-md-3">
              <h4><?php echo app('translator')->getFromJson( 'restaurant.restaurant' ); ?></h4>
            </div>
            <div class="col-md-9">
              <div class="col-md-12">
                <div class="checkbox">
                  <label>
                    <?php echo Form::checkbox('permissions[]', 'access_tables', false, 
                    [ 'class' => 'input-icheck']);; ?> <?php echo e(__('lang_v1.access_tables'), false); ?>

                  </label>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
        
        <?php echo $__env->make('role.partials.module_permissions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
        <div class="col-md-12">
           <button type="submit" class="btn btn-primary pull-right"><?php echo app('translator')->getFromJson( 'messages.save' ); ?></button>
        </div>
        </div>

        <?php echo Form::close(); ?>

    <?php echo $__env->renderComponent(); ?>
</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/pos.shoppersbill.com/public_html/resources/views/role/create.blade.php ENDPATH**/ ?>