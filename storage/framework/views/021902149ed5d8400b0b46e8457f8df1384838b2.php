<?php $__env->startSection('title', __('business.business_locations')); ?>

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1><?php echo app('translator')->getFromJson( 'business.business_locations' ); ?>
        <small><?php echo app('translator')->getFromJson( 'business.manage_your_business_locations' ); ?></small>
    </h1>
    <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol> -->
</section>

<!-- Main content -->
<section class="content">
    <?php $__env->startComponent('components.widget', ['class' => 'box-primary', 'title' => __( 'business.all_your_business_locations' )]); ?>
        <?php $__env->slot('tool'); ?>
            <div class="box-tools">
                <button type="button" class="btn btn-block btn-primary btn-modal" 
                    data-href="<?php echo e(action('BusinessLocationController@create'), false); ?>" 
                    data-container=".location_add_modal">
                    <i class="fa fa-plus"></i> <?php echo app('translator')->getFromJson( 'messages.add' ); ?></button>
            </div>
        <?php $__env->endSlot(); ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="business_location_table">
                <thead>
                    <tr>
                        <th><?php echo app('translator')->getFromJson( 'invoice.name' ); ?></th>
                        <th><?php echo app('translator')->getFromJson( 'lang_v1.location_id' ); ?></th>
                        <th><?php echo app('translator')->getFromJson( 'business.landmark' ); ?></th>
                        <th><?php echo app('translator')->getFromJson( 'business.city' ); ?></th>
                        <th><?php echo app('translator')->getFromJson( 'business.zip_code' ); ?></th>
                        <th><?php echo app('translator')->getFromJson( 'business.state' ); ?></th>
                        <th><?php echo app('translator')->getFromJson( 'business.country' ); ?></th>
                        <th><?php echo app('translator')->getFromJson( 'lang_v1.price_group' ); ?></th>
                        <th><?php echo app('translator')->getFromJson( 'invoice.invoice_scheme' ); ?></th>
                        <th><?php echo app('translator')->getFromJson( 'invoice.invoice_layout' ); ?></th>
                        <th><?php echo app('translator')->getFromJson( 'messages.action' ); ?></th>
                    </tr>
                </thead>
            </table>
        </div>
    <?php echo $__env->renderComponent(); ?>

    <div class="modal fade location_add_modal" tabindex="-1" role="dialog" 
    	aria-labelledby="gridSystemModalLabel">
    </div>
    <div class="modal fade location_edit_modal" tabindex="-1" role="dialog" 
        aria-labelledby="gridSystemModalLabel">
    </div>

</section>
<!-- /.content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/benignanttg/pos.shoppersbill.com/resources/views/business_location/index.blade.php ENDPATH**/ ?>