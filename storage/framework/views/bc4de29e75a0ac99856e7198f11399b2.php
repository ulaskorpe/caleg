<div class="center-flex "  >
<?php echo e($page+1); ?> / <?php echo e($page_count); ?>

<nav aria-label="Page navigation example mt-2" style="margin: 0 auto;">
    <ul class="pagination">


        <?php if($page_count>0): ?>

      
        <?php if($page!=0): ?>
        <li class="page-item"><a class="page-link"  href="#comment_list" onclick="show_data(0)"  >First</a></li>
      <li class="page-item"><a class="page-link"  href="#comment_list" onclick="show_data(<?php echo e($page-1); ?>)"  >Previous</a></li>
        <?php endif; ?>
      
      
      <?php if($page_count>20): ?>

        <?php
        $factor = 6 ;
        $plus = $factor ;
        $minus = $factor ;
            if($page < $factor){
                $minus = $factor - $page;
                $plus = ($factor * 2 ) - $page;
            }
        ?>

      <?php for($i=$page-$minus;$i<$page+$plus;$i++): ?>

            <?php if($i>-1 && $i < $page_count): ?>
      <li class="page-item"><a class="page-link  <?php if($page==$i): ?> active <?php endif; ?>"  href="#comment_list" onclick="show_data(<?php echo e($i); ?>)"><?php echo e($i+1); ?></a></li>
             <?php endif; ?>


      <?php endfor; ?>

      <?php else: ?>
      <?php for($i=0;$i<$page_count;$i++): ?>


      <li class="page-item"><a class="page-link  <?php if($page==$i): ?> active <?php endif; ?>"  href="#comment_list" onclick="show_data(<?php echo e($i); ?>)"><?php echo e($i+1); ?></a></li>



      <?php endfor; ?>

      <?php endif; ?>
 
      <?php if($page+1 != $page_count): ?>
      <li class="page-item"><a class="page-link"  href="#comment_list" onclick="show_data(<?php echo e($page+1); ?>)" >Next</a></li>
      <li class="page-item"><a class="page-link"  href="#comment_list" onclick="show_data(<?php echo e($page_count-1); ?>)"  >Last</a></li>
            <?php endif; ?>
       <?php endif; ?>
    </ul>
  </nav>
</div>
<?php /**PATH /home/vagrant/code/caleg/resources/views/admin/products/product_comment_pagination.blade.php ENDPATH**/ ?>