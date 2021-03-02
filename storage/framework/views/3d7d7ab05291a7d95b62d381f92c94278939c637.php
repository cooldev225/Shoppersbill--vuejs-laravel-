<?php $__env->startSection('title', __('lang_v1.register')); ?>

<?php $__env->startSection('content'); ?>
<div class="login-form col-md-12 col-xs-12 right-col-content-register">
    
    <p class="form-header text-white"><?php echo app('translator')->getFromJson('business.register_and_get_started_in_minutes'); ?></p>
    <?php echo Form::open(['url' => route('business.postRegister'), 'method' => 'post', 
                            'id' => 'business_register_form','files' => true ]); ?>

        <?php echo $__env->make('business.partials.register_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo Form::hidden('package_id', $package_id);; ?>

    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#change_lang').change( function(){
            window.location = "<?php echo e(route('business.getRegister'), false); ?>?lang=" + $(this).val();
        });
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/benignanttg/pos.shoppersbill.com/resources/views/business/register.blade.php ENDPATH**/ ?>