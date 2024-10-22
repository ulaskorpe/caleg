<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row px-xl-5 p-5" style="height: 350px">
        
        <div class="container-lg mt-5 text-center pt-5 bg-secondary text-white rounded shadow"  ><h3><?php echo e($msg); ?></h3>
        
           

            <button   onclick="window.open('/','_self')" class="btn btn-main py-18 px-40">Devam &gt;</button>
        </div>     
    </div>
</div>
    
 <?php $__env->stopSection(); ?>


 <?php $__env->startSection('scripts'); ?> 
 <?php $__env->stopSection(); ?>
 
<?php echo $__env->make('marketpro.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/caleg/resources/views/marketpro/front/confirm.blade.php ENDPATH**/ ?>