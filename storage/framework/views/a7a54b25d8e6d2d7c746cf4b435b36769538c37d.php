<?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tr>
        <td>
            <?php echo e($product->product_name, false); ?>


            <?php if($product->variation_name != "DUMMY"): ?>
                <b><?php echo e($product->variation_name, false); ?></b>
            <?php endif; ?>
            <input type="hidden" name="products[<?php echo e($loop->index + $index, false); ?>][product_id]" value="<?php echo e($product->product_id, false); ?>">
            <input type="hidden" name="products[<?php echo e($loop->index + $index, false); ?>][variation_id]" value="<?php echo e($product->variation_id, false); ?>">
        </td>
        <td>
            <input type="number" class="form-control" min=1
            name="products[<?php echo e($loop->index + $index, false); ?>][quantity]" value="<?php if(isset($product->quantity)): ?><?php echo e($product->quantity, false); ?><?php else: ?><?php echo e(1, false); ?><?php endif; ?>">
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

<?php endif; ?><?php /**PATH /home/benignanttg/pos.shoppersbill.com/resources/views/labels/partials/show_table_rows.blade.php ENDPATH**/ ?>