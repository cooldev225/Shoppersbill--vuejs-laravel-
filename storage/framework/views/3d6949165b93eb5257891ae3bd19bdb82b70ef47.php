<?php $__env->startSection('title', __('role.edit_role')); ?>

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1><?php echo app('translator')->getFromJson( 'role.edit_role' ); ?></h1>
</section>

<!-- Main content -->
<section class="content">
    <?php $__env->startComponent('components.widget', ['class' => 'box-primary']); ?>
        <?php echo Form::open(['url' => action('RoleController@update', [$role->id]), 'method' => 'PUT', 'id' => 'role_form' ]); ?>

        <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <?php echo Form::label('name', __( 'user.role_name' ) . ':*'); ?>

              <?php echo Form::text('name', str_replace( '#' . auth()->user()->business_id, '', $role->name) , ['class' => 'form-control', 'required', 'placeholder' => __( 'user.role_name' ) ]);; ?>

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
              <?php echo Form::checkbox('is_service_staff', 1, $role->is_service_staff, 
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
                <?php echo Form::checkbox('permissions[]', 'user.view', in_array('user.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.user.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'user.create', in_array('user.create', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.user.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'user.update', in_array('user.update', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.user.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'user.delete', in_array('user.delete', $role_permissions), 
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
                <?php echo Form::checkbox('permissions[]', 'roles.view', in_array('roles.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'lang_v1.view_role' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'roles.create', in_array('roles.create', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.add_role' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'roles.update', in_array('roles.update', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.edit_role' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'roles.delete', in_array('roles.delete', $role_permissions), 
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
                <?php echo Form::checkbox('permissions[]', 'supplier.view', in_array('supplier.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.supplier.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'supplier.create', in_array('supplier.create', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.supplier.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'supplier.update', in_array('supplier.update', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.supplier.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'supplier.delete', in_array('supplier.delete', $role_permissions), 
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
                <?php echo Form::checkbox('permissions[]', 'customer.view', in_array('customer.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.customer.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'customer.create', in_array('customer.create', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.customer.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'customer.update', in_array('customer.update', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.customer.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'customer.delete', in_array('customer.delete', $role_permissions), 
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
                <?php echo Form::checkbox('permissions[]', 'product.view', in_array('product.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.product.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'product.create', in_array('product.create', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.product.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'product.update', in_array('product.update', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.product.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'product.delete', in_array('product.delete', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.product.delete' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'product.opening_stock', in_array('product.opening_stock', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'lang_v1.add_opening_stock' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'view_purchase_price', in_array('view_purchase_price', $role_permissions),['class' => 'input-icheck']);; ?>

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
                <?php echo Form::checkbox('permissions[]', 'purchase.view', in_array('purchase.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.purchase.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'purchase.create', in_array('purchase.create', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.purchase.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'purchase.update', in_array('purchase.update', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.purchase.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'purchase.delete', in_array('purchase.delete', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.purchase.delete' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'purchase.payments', in_array('purchase.payments', $role_permissions),['class' => 'input-icheck']);; ?>

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
                <?php echo Form::checkbox('permissions[]', 'purchase.update_status', in_array('purchase.update_status', $role_permissions),['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.update_status'), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'view_own_purchase', in_array('view_own_purchase', $role_permissions),['class' => 'input-icheck']);; ?>

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
                <?php echo Form::checkbox('permissions[]', 'sell.view', in_array('sell.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.sell.view' ), false); ?>

              </label>
            </div>
          </div>
          <?php if(in_array('pos_sale', $enabled_modules)): ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'sell.create', in_array('sell.create', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.sell.create' ), false); ?>

              </label>
            </div>
          </div>
          <?php endif; ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'sell.update', in_array('sell.update', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.sell.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'sell.delete', in_array('sell.delete', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.sell.delete' ), false); ?>

              </label>
            </div>
          </div>
          <?php if(in_array('add_sale', $enabled_modules)): ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'direct_sell.access', in_array('direct_sell.access', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.direct_sell.access' ), false); ?>

              </label>
            </div>
          </div>
          <?php endif; ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'list_drafts', in_array('list_drafts', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'lang_v1.list_drafts' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'list_quotations', in_array('list_quotations', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'lang_v1.list_quotations' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'view_own_sell_only', in_array('view_own_sell_only', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'lang_v1.view_own_sell_only' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'sell.payments', in_array('sell.payments', $role_permissions), ['class' => 'input-icheck']);; ?>

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
                <?php echo Form::checkbox('permissions[]', 'edit_product_price_from_sale_screen', in_array('edit_product_price_from_sale_screen', $role_permissions), ['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.edit_product_price_from_sale_screen'), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'edit_product_price_from_pos_screen', in_array('edit_product_price_from_pos_screen', $role_permissions), ['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.edit_product_price_from_pos_screen'), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'edit_product_discount_from_sale_screen', in_array('edit_product_discount_from_sale_screen', $role_permissions), ['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.edit_product_discount_from_sale_screen'), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'edit_product_discount_from_pos_screen', in_array('edit_product_discount_from_pos_screen', $role_permissions), ['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.edit_product_discount_from_pos_screen'), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'discount.access', in_array('discount.access', $role_permissions), ['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.discount.access'), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'access_shipping', in_array('access_shipping', $role_permissions), ['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.access_shipping'), false); ?>

              </label>
            </div>
          </div>
          <?php if(in_array('types_of_service', $enabled_modules)): ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'access_types_of_service', in_array('access_types_of_service', $role_permissions), 
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
                <?php echo Form::checkbox('permissions[]', 'brand.view', in_array('brand.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.brand.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'brand.create', in_array('brand.create', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.brand.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'brand.update', in_array('brand.update', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.brand.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'brand.delete', in_array('brand.delete', $role_permissions), 
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
                <?php echo Form::checkbox('permissions[]', 'tax_rate.view', in_array('tax_rate.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.tax_rate.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'tax_rate.create', in_array('tax_rate.create', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.tax_rate.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'tax_rate.update', in_array('tax_rate.update', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.tax_rate.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'tax_rate.delete', in_array('tax_rate.delete', $role_permissions), 
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
                <?php echo Form::checkbox('permissions[]', 'unit.view', in_array('unit.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.unit.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'unit.create', in_array('unit.create', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.unit.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'unit.update', in_array('unit.update', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.unit.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'unit.delete', in_array('unit.delete', $role_permissions), 
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
                <?php echo Form::checkbox('permissions[]', 'category.view', in_array('category.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.category.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'category.create', in_array('category.create', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.category.create' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'category.update', in_array('category.update', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.category.update' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'category.delete', in_array('category.delete', $role_permissions), 
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
                <?php echo Form::checkbox('permissions[]', 'purchase_n_sell_report.view', in_array('purchase_n_sell_report.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.purchase_n_sell_report.view' ), false); ?>

              </label>
            </div>
          </div>
        <?php endif; ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'tax_report.view', in_array('tax_report.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.tax_report.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'contacts_report.view', in_array('contacts_report.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.contacts_report.view' ), false); ?>

              </label>
            </div>
          </div>
          <?php if(in_array('expenses', $enabled_modules)): ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'expense_report.view', in_array('expense_report.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.expense_report.view' ), false); ?>

              </label>
            </div>
          </div>
          <?php endif; ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'profit_loss_report.view', in_array('profit_loss_report.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.profit_loss_report.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'stock_report.view', in_array('stock_report.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.stock_report.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'trending_product_report.view', in_array('trending_product_report.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.trending_product_report.view' ), false); ?>

              </label>
            </div>
          </div>

          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'register_report.view', in_array('register_report.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.register_report.view' ), false); ?>

              </label>
            </div>
          </div>

          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'sales_representative.view', in_array('sales_representative.view', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.sales_representative.view' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'view_product_stock_value', in_array('view_product_stock_value', $role_permissions), 
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
                <?php echo Form::checkbox('permissions[]', 'business_settings.access', in_array('business_settings.access', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.business_settings.access' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'barcode_settings.access', in_array('barcode_settings.access', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.barcode_settings.access' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'invoice_settings.access', in_array('invoice_settings.access', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.invoice_settings.access' ), false); ?>

              </label>
            </div>
          </div>
          <?php if(in_array('expenses', $enabled_modules)): ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'expense.access', in_array('expense.access', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'role.expense.access' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'view_own_expense', in_array('view_own_expense', $role_permissions),['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.view_own_expense'), false); ?>

              </label>
            </div>
          </div>
          <?php endif; ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'access_printers', in_array('access_printers', $role_permissions),['class' => 'input-icheck']);; ?>

                <?php echo e(__('lang_v1.access_printers'), false); ?>

              </label>
            </div>
          </div>
        </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-md-3">
          <h4><?php echo app('translator')->getFromJson( 'role.dashboard' ); ?></h4>
        </div>
        <div class="col-md-9">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'dashboard.data', in_array('dashboard.data', $role_permissions), 
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
                <?php echo Form::checkbox('permissions[]', 'account.access', in_array('account.access', $role_permissions), 
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
                <?php echo Form::checkbox('permissions[]', 'crud_all_bookings', in_array('crud_all_bookings', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__( 'restaurant.add_edit_view_all_booking' ), false); ?>

              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('permissions[]', 'crud_own_bookings', in_array('crud_own_bookings', $role_permissions), 
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
                <?php echo Form::checkbox('permissions[]', 'access_default_selling_price', in_array('access_default_selling_price', $role_permissions), 
                [ 'class' => 'input-icheck']);; ?> <?php echo e(__('lang_v1.default_selling_price'), false); ?>

              </label>
            </div>
          </div>
          <?php if(count($selling_price_groups) > 0): ?>
          <?php $__currentLoopData = $selling_price_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $selling_price_group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <?php echo Form::checkbox('spg_permissions[]', 'selling_price_group.' . $selling_price_group->id, in_array('selling_price_group.' . $selling_price_group->id, $role_permissions), 
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
                    <?php echo Form::checkbox('permissions[]', 'access_tables', in_array('access_tables', $role_permissions), 
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
           <button type="submit" class="btn btn-primary pull-right"><?php echo app('translator')->getFromJson( 'messages.update' ); ?></button>
        </div>
        </div>

        <?php echo Form::close(); ?>

    <?php echo $__env->renderComponent(); ?>
</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/benignanttg/pos.shoppersbill.com/resources/views/role/edit.blade.php ENDPATH**/ ?>