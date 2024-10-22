
<div class="center-flex "  >
<?php if(false): ?>
    <nav aria-label="Page navigation example mt-2" style="margin: 0 auto;">
      <ul class="pagination">
          <?php if($page_count>0): ?>

        <li class="page-item"><a class="page-link"  href="#product_list" onclick="show_products(<?php echo e($page-1); ?>)" <?php if($page==0): ?> disabled <?php endif; ?> >Önceki</a></li>
        <?php for($i=0;$i<$page_count;$i++): ?>


        <li class="page-item"><a class="page-link  <?php if($page==$i): ?> active <?php endif; ?>"  href="#product_list" onclick="show_products(<?php echo e($i); ?>)"><?php echo e($i+1); ?></a></li>



        <?php endfor; ?>
        <li class="page-item"><a class="page-link"  href="#product_list" onclick="show_products(<?php echo e($page+1); ?>)"  <?php if($page==$page_count): ?> disabled <?php endif; ?>>Sonraki</a></li>

         <?php endif; ?>
      </ul>
    </nav>
<?php endif; ?>


      </div>

        <table class="table table-bordered">
            <thead>
              <tr><td colspan="5">    <?php echo $__env->make("admin.products.product_comment_pagination", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td></tr>
              <tr>
                <th scope="col">Resim</th>
                <th scope="col">Ürün Adı</th>

                <th scope="col">Kategoriler</th>


                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td  style="width: 10%">
                    <?php if($product['thumbnail'] && $product['thumbnail']!='thumb'): ?>
                    <img src="<?php echo e(url('assets/products/'.$product['slug'].'/'.$product['thumbnail'])); ?>" alt="<?php echo e($product['thumbnail']); ?>"  >
                    <?php endif; ?>
                </td>
                <td><?php echo e($product['name']); ?></td>


                <td>
                        <?php $__currentLoopData = $product->categories()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($cat['name']); ?> <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="window.open('<?php echo e(route('admin.products.edit',$product['slug'])); ?>','_self')"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger" onclick="delete_product(<?php echo e($product['id']); ?>,<?php echo e($page); ?>)"><i class="fa-solid fa-trash-can"></i></button>
                </td>

              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <tr><td colspan="5">    <?php echo $__env->make("admin.products.product_comment_pagination", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td></tr>
            </tbody>
          </table>
 
<?php /**PATH /home/vagrant/code/caleg/resources/views/admin/products/datatable.blade.php ENDPATH**/ ?>