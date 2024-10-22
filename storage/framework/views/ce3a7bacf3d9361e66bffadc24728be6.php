

<div class="center-flex "  >


    <table class="table table-bordered">

        <thead>
            <tr><td colspan="5">    <?php echo $__env->make("admin.products.product_comment_pagination", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td></tr>
          <tr>
            <th scope="col">Key</th>
            <th scope="col">Value/th>

           


            <th scope="col">#</th>
          </tr>
        </thead>
        <tbody>

            <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($setting['key']); ?></td>
            <td  style="width: 10%">
                <?php if($setting['type'] == 'image'): ?>
                <img src="<?php echo e(url('assets/images/site_data/'.$setting['value'])); ?>" alt="<?php echo e($setting['key']); ?>"  >
                    <?php else: ?> 

                    <?php echo e($setting['value']); ?>

                <?php endif; ?>
            </td>
           


        
            <td>
                <button type="button" class="btn btn-primary" onclick="update_setting(<?php echo e($setting['id']); ?>) "><i class="fa-solid fa-pen-to-square"></i></button>
                <button type="button" class="btn btn-danger" onclick="delete_setting(<?php echo e($setting['id']); ?>,<?php echo e($page); ?>)"><i class="fa-solid fa-trash-can"></i></button>
            </td>

          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
      </table>


        </div>
<?php /**PATH /home/vagrant/code/caleg/resources/views/admin/settings/settings_data.blade.php ENDPATH**/ ?>