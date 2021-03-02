<?php
    $custom_labels = json_decode(session('business.custom_labels'), true);
?>
<div class="table-responsive">
    <table class="table table-bordered table-striped ajax_view" id="sell_table">
        <thead>
            <tr>
                <th><?php echo app('translator')->getFromJson('messages.action'); ?></th>
                <th><?php echo app('translator')->getFromJson('messages.date'); ?></th>
                <th><?php echo app('translator')->getFromJson('sale.invoice_no'); ?></th>
                <th><?php echo app('translator')->getFromJson('sale.customer_name'); ?></th>
                <th><?php echo app('translator')->getFromJson('lang_v1.contact_no'); ?></th>
                <th><?php echo app('translator')->getFromJson('sale.location'); ?></th>
                <th><?php echo app('translator')->getFromJson('sale.payment_status'); ?></th>
                <th><?php echo app('translator')->getFromJson('lang_v1.payment_method'); ?></th>
                <th><?php echo app('translator')->getFromJson('sale.total_amount'); ?></th>
                <th><?php echo app('translator')->getFromJson('sale.total_paid'); ?></th>
                <th><?php echo app('translator')->getFromJson('lang_v1.sell_due'); ?></th>
                <th><?php echo app('translator')->getFromJson('lang_v1.sell_return_due'); ?></th>
                <th><?php echo app('translator')->getFromJson('lang_v1.shipping_status'); ?></th>
                <th><?php echo app('translator')->getFromJson('lang_v1.total_items'); ?></th>
                <th><?php echo app('translator')->getFromJson('lang_v1.types_of_service'); ?></th>
                <th><?php echo e($custom_labels['types_of_service']['custom_field_1'] ?? __('lang_v1.service_custom_field_1' ), false); ?></th>
                <th><?php echo app('translator')->getFromJson('lang_v1.added_by'); ?></th>
                <th><?php echo app('translator')->getFromJson('sale.sell_note'); ?></th>
                <th><?php echo app('translator')->getFromJson('sale.staff_note'); ?></th>
                <th><?php echo app('translator')->getFromJson('sale.shipping_details'); ?></th>
                <th><?php echo app('translator')->getFromJson('restaurant.table'); ?></th>
                <th><?php echo app('translator')->getFromJson('restaurant.service_staff'); ?></th>
            </tr>
        </thead>
        <tfoot>
            <tr class="bg-gray font-17 footer-total text-center">
                <td colspan="6"><strong><?php echo app('translator')->getFromJson('sale.total'); ?>:</strong></td>
                <td id="footer_payment_status_count"></td>
                <td id="payment_method_count"></td>
                <td><span class="display_currency" id="footer_sale_total" data-currency_symbol ="true"></span></td>
                <td><span class="display_currency" id="footer_total_paid" data-currency_symbol ="true"></span></td>
                <td><span class="display_currency" id="footer_total_remaining" data-currency_symbol ="true"></span></td>
                <td><span class="display_currency" id="footer_total_sell_return_due" data-currency_symbol ="true"></span></td>
                <td colspan="2"></td>
                <td id="service_type_count"></td>
                <td colspan="7"></td>
            </tr>
        </tfoot>
    </table>
</div><?php /**PATH /home/benignanttg/pos.shoppersbill.com/resources/views/sale_pos/partials/sales_table.blade.php ENDPATH**/ ?>