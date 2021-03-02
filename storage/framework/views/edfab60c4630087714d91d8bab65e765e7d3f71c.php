<!-- Custom Tabs -->
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li <?php if($loop->index == 0): ?> class="active" <?php endif; ?>>
                <a href="#cn_<?php echo e($key, false); ?>" data-toggle="tab" aria-expanded="true">
                <?php echo e($value['name'], false); ?> </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <div class="tab-content">
        <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="tab-pane <?php if($loop->index == 0): ?> active <?php endif; ?>" id="cn_<?php echo e($key, false); ?>">
                <div class="row">
                <div class="col-md-12">
                    <?php if(!empty($value['extra_tags'])): ?>
                        <strong><?php echo app('translator')->getFromJson('lang_v1.available_tags'); ?>:</strong>
                    <p class="text-primary"><?php echo e(implode(', ', $value['extra_tags']), false); ?></p>
                    <?php endif; ?>
                    <?php if(!empty($value['help_text'])): ?>
                    <p class="help-block"><?php echo e($value['help_text'], false); ?></p>
                    <?php endif; ?>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <?php echo Form::label($key . '_subject',
                        __('lang_v1.email_subject').':'); ?>

                        <?php echo Form::text('template_data[' . $key . '][subject]', 
                        $value['subject'], ['class' => 'form-control'
                        , 'placeholder' => __('lang_v1.email_subject'), 'id' => $key . '_subject']);; ?>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo Form::label($key . '_cc',
                        'CC:'); ?>

                        <?php echo Form::email('template_data[' . $key . '][cc]', 
                        $value['cc'], ['class' => 'form-control'
                        , 'placeholder' => 'CC', 'id' => $key . '_cc']);; ?>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo Form::label($key . '_bcc',
                        'BCC:'); ?>

                        <?php echo Form::email('template_data[' . $key . '][bcc]', 
                        $value['bcc'], ['class' => 'form-control'
                        , 'placeholder' => 'BCC', 'id' => $key . '_bcc']);; ?>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <?php echo Form::label($key . '_email_body',
                        __('lang_v1.email_body').':'); ?>

                        <?php echo Form::textarea('template_data[' . $key . '][email_body]', 
                        $value['email_body'], ['class' => 'form-control ckeditor'
                        , 'placeholder' => __('lang_v1.email_body'), 'id' => $key . '_email_body', 'rows' => 6]);; ?>

                    </div>
                </div>
                <div class="col-md-12 <?php if($key == 'send_ledger'): ?> hide <?php endif; ?>">
                    <div class="form-group">
                        <?php echo Form::label($key . '_sms_body',
                        __('lang_v1.sms_body').':'); ?>

                        <?php echo Form::textarea('template_data[' . $key . '][sms_body]', 
                        $value['sms_body'], ['class' => 'form-control'
                        , 'placeholder' => __('lang_v1.sms_body'), 'id' => $key . '_sms_body', 'rows' => 6]);; ?>

                    </div>
                </div>
                <?php if($key == 'new_sale'): ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="checkbox-inline">
                                <?php echo Form::checkbox('template_data[' . $key . '][auto_send]', 1, $value['auto_send'], ['class' => 'input-icheck']);; ?> <?php echo app('translator')->getFromJson('lang_v1.autosend_email'); ?>
                            </label>
                            <label class="checkbox-inline">
                                <?php echo Form::checkbox('template_data[' . $key . '][auto_send_sms]', 1, $value['auto_send_sms'], ['class' => 'input-icheck']);; ?> <?php echo app('translator')->getFromJson('lang_v1.autosend_sms'); ?>
                            </label>
                        </div>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH D:\workspace\laravel\Shoppersbill-Web-App\resources\views/notification_template/partials/tabs.blade.php ENDPATH**/ ?>