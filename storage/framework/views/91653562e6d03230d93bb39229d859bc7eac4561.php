<?php $__env->startSection('title', __('lang_v1.reset_password')); ?>

<?php $__env->startSection('content'); ?>
<div class="login-form col-md-12 col-xs-12 right-col-content">
    <form  method="POST" action="<?php echo e(route('password.email'), false); ?>">
        <?php echo e(csrf_field(), false); ?>

         <div class="form-group has-feedback <?php echo e($errors->has('email') ? ' has-error' : '', false); ?>">
            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email'), false); ?>" required autofocus placeholder="<?php echo app('translator')->getFromJson('lang_v1.email_address'); ?>">
            <span class="fa fa-envelope form-control-feedback"></span>
            <?php if($errors->has('email')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('email'), false); ?></strong>
                </span>
            <?php endif; ?>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-flat">
                <?php echo app('translator')->getFromJson('lang_v1.send_password_reset_link'); ?>
            </button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/benignanttg/pos.shoppersbill.com/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>