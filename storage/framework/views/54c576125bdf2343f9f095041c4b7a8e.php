<div class="row mb-3"  >

    <div class="col-md-3 align-items-center justify-content-center">
        <label class="form-label"><?php echo e(__('Konum')); ?>  <?php echo e($selected_location); ?> </label>
        <select name="location" id="location" class="form-control" onchange="get_location(this.value)">
            <option value="none">Seçiniz</option>
            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option valıue="<?php echo e($value); ?>" <?php if($selected_location==$value): ?> selected <?php endif; ?> >  <?php echo e($value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>



    </div>
    <div class="col-md-3 align-items-center justify-content-center">
        <label class="form-label"><?php echo e(__('Sıra')); ?>  </label>
        <select name="order" id="order" class="form-control" <?php if($count == 0): ?> disabled <?php endif; ?>>

            <?php for( $i = $count ; $i>0;$i--): ?>
            <option value="<?php echo e($i); ?>" <?php if($order==$i): ?> selected <?php endif; ?>><?php echo e($i); ?></option>

            <?php endfor; ?>
        </select>



    </div>
</div>
<?php /**PATH /home/vagrant/code/caleg/resources/views/admin/products/product_location.blade.php ENDPATH**/ ?>