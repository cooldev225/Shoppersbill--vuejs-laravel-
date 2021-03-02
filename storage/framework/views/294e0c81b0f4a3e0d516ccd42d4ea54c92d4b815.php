<?php $__env->startSection('title', 'POS Installation - Check server'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <h1 class="page-header text-center"><?php echo e(config('app.name', 'POS'), false); ?></h1>

        <div class="col-md-8 col-md-offset-2">
          <?php echo $__env->make('install.partials.nav', ['active' => 'app_details'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <div class="box box-primary active">
            <!-- /.box-header -->
            <div class="box-body">

              <?php if(session('error')): ?>
                <div class="alert alert-danger">
                  <?php echo e(session('error'), false); ?>

                </div>
              <?php endif; ?>

              <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                  <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error, false); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                </div>
              <?php endif; ?>

              <form class="form" method="post" 
                    action="<?php echo e(route('install.installAlternate'), false); ?>" 
                    id="env_details_form">
                  <?php echo e(csrf_field(), false); ?>


                  <h4 class="install_instuction">Hey, I need your help. </h4>
                  <p class="install_instuction">
                    Please create a file with name <code>.env</code> at <strong><?php echo e($envPath, false); ?></strong> with <code>read & write permission</code> and paste the below content. <br/> Press install after it.
                  </p>
                  <hr/>

                  <div class="col-md-12">
                    <div class="form-group">
                        <textarea rows="25" cols="50"><?php echo e($envContent, false); ?></textarea>
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pull-right" id="install_button">Install</button>
                  </div>

                  <div class="col-md-12 text-center text-danger install_msg hide">
                    <h3>Installation in progress, Please do not refresh, go back or close the browser.</strong>
                  </h3>
              </form>
            </div>
          <!-- /.box-body -->
          </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
  <script type="text/javascript">
    $(document).ready(function(){

      $('form#env_details_form').submit(function(){
        $('button#install_button').attr('disabled', true).text('Installing...');
        $(".install_instuction").addClass('hide');
        $('div.install_msg').removeClass('hide');
        $('textarea').addClass('hide');
        $('.back_button').hide();
      });

    })
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.install', ['no_header' => 1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/benignanttg/pos.shoppersbill.com/resources/views/install/envText.blade.php ENDPATH**/ ?>