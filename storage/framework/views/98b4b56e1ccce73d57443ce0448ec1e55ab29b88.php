<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">

    <div class="modal-header">
      <button type="button" class="close no-print" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h3 class="modal-title"><?php echo app('translator')->getFromJson( 'cash_register.register_details' ); ?> ( <?php echo e(\Carbon::createFromFormat('Y-m-d H:i:s', $register_details->open_time)->format('jS M, Y h:i A'), false); ?> -  <?php echo e(\Carbon::createFromFormat('Y-m-d H:i:s', $close_time)->format('jS M, Y h:i A'), false); ?> )</h3>
    </div>

    <div class="modal-body">
      <div class="row">
        <div class="col-sm-12">
          <table class="table">
            <tr>
              <td>
                <?php echo app('translator')->getFromJson('cash_register.cash_in_hand'); ?>:
              </td>
              <td>
                <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->cash_in_hand, false); ?></span>
              </td>
            </tr>
            <tr>
              <td>
                <?php echo app('translator')->getFromJson('cash_register.cash_payment'); ?>:
              </th>
              <td>
                <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_cash, false); ?></span>
              </td>
            </tr>
            <tr>
              <td>
                <?php echo app('translator')->getFromJson('cash_register.checque_payment'); ?>:
              </td>
              <td>
                <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_cheque, false); ?></span>
              </td>
            </tr>
            <tr>
              <td>
                <?php echo app('translator')->getFromJson('cash_register.card_payment'); ?>:
              </td>
              <td>
                <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_card, false); ?></span>
              </td>
            </tr>
            <tr>
              <td>
                <?php echo app('translator')->getFromJson('cash_register.bank_transfer'); ?>:
              </td>
              <td>
                <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_bank_transfer, false); ?></span>
              </td>
            </tr>
            <tr>
              <td>
                <?php echo app('translator')->getFromJson('lang_v1.advance_payment'); ?>:
              </td>
              <td>
                <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_advance, false); ?></span>
              </td>
            </tr>
            <?php if(array_key_exists('custom_pay_1', $payment_types)): ?>
              <tr>
                <td>
                  <?php echo e($payment_types['custom_pay_1'], false); ?>:
                </td>
                <td>
                  <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_custom_pay_1, false); ?></span>
                </td>
              </tr>
            <?php endif; ?>
            <?php if(array_key_exists('custom_pay_2', $payment_types)): ?>
              <tr>
                <td>
                  <?php echo e($payment_types['custom_pay_2'], false); ?>:
                </td>
                <td>
                  <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_custom_pay_2, false); ?></span>
                </td>
              </tr>
            <?php endif; ?>
            <?php if(array_key_exists('custom_pay_3', $payment_types)): ?>
              <tr>
                <td>
                  <?php echo e($payment_types['custom_pay_3'], false); ?>:
                </td>
                <td>
                  <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_custom_pay_3, false); ?></span>
                </td>
              </tr>
            <?php endif; ?>
            <tr>
              <td>
                <?php echo app('translator')->getFromJson('cash_register.other_payments'); ?>:
              </td>
              <td>
                <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_other, false); ?></span>
              </td>
            </tr>
            <tr class="success">
              <th>
                <?php echo app('translator')->getFromJson('cash_register.total_refund'); ?>
              </th>
              <td>
                <b><span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_refund, false); ?></span></b><br>
                <small>
                <?php if($register_details->total_cash_refund != 0): ?>
                  Cash: <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_cash_refund, false); ?></span><br>
                <?php endif; ?>
                <?php if($register_details->total_cheque_refund != 0): ?> 
                  Cheque: <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_cheque_refund, false); ?></span><br>
                <?php endif; ?>
                <?php if($register_details->total_card_refund != 0): ?> 
                  Card: <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_card_refund, false); ?></span><br> 
                <?php endif; ?>
                <?php if($register_details->total_bank_transfer_refund != 0): ?>
                  Bank Transfer: <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_bank_transfer_refund, false); ?></span><br>
                <?php endif; ?>
                <?php if($register_details->total_advance_refund != 0): ?>
                  <?php echo app('translator')->getFromJson('lang_v1.advance'); ?>: <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_advance_refund, false); ?></span><br>
                <?php endif; ?>
                <?php if(array_key_exists('custom_pay_1', $payment_types) && $register_details->total_custom_pay_1_refund != 0): ?>
                    <?php echo e($payment_types['custom_pay_1'], false); ?>: <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_custom_pay_1_refund, false); ?></span>
                <?php endif; ?>
                <?php if(array_key_exists('custom_pay_2', $payment_types) && $register_details->total_custom_pay_2_refund != 0): ?>
                    <?php echo e($payment_types['custom_pay_2'], false); ?>: <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_custom_pay_2_refund, false); ?></span>
                <?php endif; ?>
                <?php if(array_key_exists('custom_pay_3', $payment_types) && $register_details->total_custom_pay_3_refund != 0): ?>
                    <?php echo e($payment_types['custom_pay_3'], false); ?>: <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_custom_pay_3_refund, false); ?></span>
                <?php endif; ?>
                <?php if($register_details->total_other_refund != 0): ?>
                  Other: <span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->total_other_refund, false); ?></span>
                <?php endif; ?>
                </small>
              </td>
            </tr>
            <tr class="success">
              <th>
                <?php echo app('translator')->getFromJson('lang_v1.total_payment'); ?>
              </th>
              <td>
                <b><span class="display_currency" data-currency_symbol="true"><?php echo e($register_details->cash_in_hand + $register_details->total_cash - $register_details->total_cash_refund, false); ?></span></b>
              </td>
            </tr>
            <tr class="success">
              <th>
                <?php echo app('translator')->getFromJson('lang_v1.credit_sales'); ?>:
              </th>
              <td>
                <b><span class="display_currency" data-currency_symbol="true"><?php echo e($details['transaction_details']->total_sales - $register_details->total_sale, false); ?></span></b>
              </td>
            </tr>
            <tr class="success">
              <th>
                <?php echo app('translator')->getFromJson('cash_register.total_sales'); ?>:
              </th>
              <td>
                <b><span class="display_currency" data-currency_symbol="true"><?php echo e($details['transaction_details']->total_sales, false); ?></span></b>
              </td>
            </tr>
          </table>
        </div>
      </div>

      <?php echo $__env->make('cash_register.register_product_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
      <div class="row">
        <div class="col-xs-6">
          <b><?php echo app('translator')->getFromJson('report.user'); ?>:</b> <?php echo e($register_details->user_name, false); ?><br>
          <b><?php echo app('translator')->getFromJson('business.email'); ?>:</b> <?php echo e($register_details->email, false); ?><br>
          <b><?php echo app('translator')->getFromJson('business.business_location'); ?>:</b> <?php echo e($register_details->location_name, false); ?><br>
        </div>
        <?php if(!empty($register_details->closing_note)): ?>
          <div class="col-xs-6">
            <strong><?php echo app('translator')->getFromJson('cash_register.closing_note'); ?>:</strong><br>
            <?php echo e($register_details->closing_note, false); ?>

          </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-primary no-print" 
        aria-label="Print" 
          onclick="$(this).closest('div.modal').printThis();">
        <i class="fa fa-print"></i> <?php echo app('translator')->getFromJson( 'messages.print' ); ?>
      </button>

      <button type="button" class="btn btn-default no-print" 
        data-dismiss="modal"><?php echo app('translator')->getFromJson( 'messages.cancel' ); ?>
      </button>
    </div>

  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog --><?php /**PATH /home/benignanttg/pos.shoppersbill.com/resources/views/cash_register/register_details.blade.php ENDPATH**/ ?>