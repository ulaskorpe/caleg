 

<div class="center-flex "  >


    <table class="table table-bordered">

     
        <tbody>
            <tr><td>
                
<?php if(false): ?>                
<form class="forms-sample" action="<?php echo e(route('admin.general.settings.create.post')); ?>" id="setting-form" method="POST"  
enctype="multipart/form-data" >
<?php else: ?>
<form class="forms-sample" action="#" id="setting-form" method="POST"  onsubmit="return false"
enctype="multipart/form-data" >

<?php endif; ?>
<div class="row "  >

<input type="hidden" name="id" value="<?php echo e($setting['id']); ?>" id="id">

<input type="hidden" name="_token" id="_token" value="<?php echo e(csrf_token()); ?>">

<div class="col-md-3">
    <input type="text" class="form-control" name="key" id="key" placeholder="Anahtar Değeri" value="<?php echo e($setting['key']); ?>">

</div>
<div class="col-md-3">
    <?php if($setting['type']=='text'): ?>
    <input type="text" class="form-control" name="value" id="value" placeholder="Değer" value="<?php echo e($setting['value']); ?>">
    <?php else: ?>
    <input type="file" class="form-control" name="image" id="image" placeholder="İmage" >

    <img src="<?php echo e(url('assets/images/site_data/'.$setting['value'])); ?>" alt="<?php echo e($setting['key']); ?>"  >
    <?php endif; ?>

</div>

 
<div class="col-md-3">
 <select name="type" id="id"  disabled class="form-control">
    <option value="text" <?php if($setting['type']=='text'): ?> selected <?php endif; ?>>text</option>
    <option value="image" <?php if($setting['type']=='image'): ?> selected <?php endif; ?>>image</option>
    </select>
</div>
<div class="col-md-3">

    <button class="btn btn-outline-primary submit"  onclick="formSubmit()" id="submit_button"
    class="btn btn-primary"
        type="submit">Update</button>

</div>
</div>



</form>
            </td></tr>
           
        </tbody>
      </table>


        </div>

 
<?php /**PATH /home/vagrant/code/caleg/resources/views/admin/settings/update_setting.blade.php ENDPATH**/ ?>