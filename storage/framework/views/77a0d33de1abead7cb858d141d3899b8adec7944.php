<div class="row">
  <div class="col-md-12">
    <hr>
    <h3><?php echo app('translator')->getFromJson('lang_v1.product_sold_details_register'); ?></h3>
    <table class="table">
      <tr>
        <th>#</th>
        <th><?php echo app('translator')->getFromJson('brand.brands'); ?></th>
        <th><?php echo app('translator')->getFromJson('sale.qty'); ?></th>
        <th><?php echo app('translator')->getFromJson('sale.total_amount'); ?></th>
      </tr>
      <?php
        $total_amount = 0;
        $total_quantity = 0;
      ?>
      <?php $__currentLoopData = $details['product_details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td>
            <?php echo e($loop->iteration, false); ?>.
          </td>
          <td>
            <?php echo e($detail->brand_name, false); ?>

          </td>
          <td>
            <?php echo e($detail->total_quantity, false); ?>

            <?php
              $total_quantity += $detail->total_quantity;
            ?>
          </td>
          <td>
            <span class="display_currency" data-currency_symbol="true">
              <?php echo e($detail->total_amount, false); ?>

            </span>
            <?php
              $total_amount += $detail->total_amount;
            ?>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      
      <?php
        $total_amount += ($details['transaction_details']->total_tax - $details['transaction_details']->total_discount);
      ?>

      <!-- Final details -->
      <tr class="success">
        <th>#</th>
        <th></th>
        <th><?php echo e($total_quantity, false); ?></th>
        <th>

          <?php if($details['transaction_details']->total_tax != 0): ?>
            <?php echo app('translator')->getFromJson('sale.order_tax'); ?>: (+)
            <span class="display_currency" data-currency_symbol="true">
              <?php echo e($details['transaction_details']->total_tax, false); ?>

            </span>
            <br/>
          <?php endif; ?>

          <?php if($details['transaction_details']->total_discount != 0): ?>
            <?php echo app('translator')->getFromJson('sale.discount'); ?>: (-)
            <span class="display_currency" data-currency_symbol="true">
              <?php echo e($details['transaction_details']->total_discount, false); ?>

            </span>
            <br/>
          <?php endif; ?>

          <?php echo app('translator')->getFromJson('lang_v1.grand_total'); ?>:
          <span class="display_currency" data-currency_symbol="true">
            <?php echo e($total_amount, false); ?>

          </span>
        </th>
      </tr>

    </table>
  </div>
</div>

<?php if($details['types_of_service_details']): ?>
  <div class="row">
    <div class="col-md-12">
      <hr>
      <h3><?php echo app('translator')->getFromJson('lang_v1.types_of_service_details'); ?></h3>
      <table class="table">
        <tr>
          <th>#</th>
          <th><?php echo app('translator')->getFromJson('lang_v1.types_of_service'); ?></th>
          <th><?php echo app('translator')->getFromJson('sale.total_amount'); ?></th>
        </tr>
        <?php
          $total_sales = 0;
        ?>
        <?php $__currentLoopData = $details['types_of_service_details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td>
              <?php echo e($loop->iteration, false); ?>

            </td>
            <td>
              <?php echo e($detail->types_of_service_name ?? "--", false); ?>

            </td>
            <td>
              <span class="display_currency" data-currency_symbol="true">
                <?php echo e($detail->total_sales, false); ?>

              </span>
              <?php
                $total_sales += $detail->total_sales;
              ?>
            </td>
          </tr>
          <?php
            $total_sales += $detail->total_sales;
          ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- Final details -->
        <tr class="success">
          <th>#</th>
          <th></th>
          <th>
            <?php echo app('translator')->getFromJson('lang_v1.grand_total'); ?>:
            <span class="display_currency" data-currency_symbol="true">
              <?php echo e($total_amount, false); ?>

            </span>
          </th>
        </tr>

      </table>
    </div>
  </div>
<?php endif; ?><?php /**PATH /home/benignanttg/pos.shoppersbill.com/resources/views/cash_register/register_product_details.blade.php ENDPATH**/ ?>