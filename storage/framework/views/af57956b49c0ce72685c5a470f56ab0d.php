<?php $__env->startSection('title', __('settings')); ?>
<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/vendors/datatables.net-bs5/dataTables.bootstrap5.css')); ?>">
    <style>
        .center-flex {
  display: flex; /* Enables Flexbox */
  justify-content: center; /* Centers items horizontally */
  align-items: center; /* Centers items vertically */
   /* Full viewport height for demonstration */
   padding-top: 20px
}
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-wrapper">
        <?php echo $__env->make('admin.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="page-wrapper">

            <?php echo $__env->make('admin.partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="page-content">

                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><?php echo e(__('Site Settings')); ?></a></li>
                       
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                       
                                    </div>

<div class="col-7 d-flex justify-content-end align-items-center"> <!-- Use Flexbox and right alignment -->
    <!-- First Select Element -->
 

    <!-- Second Select Element -->
    

    <!-- Input Element with Search Icon -->
    <div class="input-group ml-2" style="width: 200px;">
        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Search...">
        <div class="input-group-append" style="pointer:cursor" onclick="show_settings(0)">
            <span class="input-group-text">
                <i class="fas fa-search"></i> <!-- Search icon -->
            </span>
        </div>
    </div>
</div>
<div class="col-2 text-center justify-content-center mt-5">
    <button class="btn btn-outline-success me-2 mb-2 mb-md-5" id="addBtn" onclick="create_setting()"><?php echo e(__('Add New setting')); ?></button>
    <button class="btn btn-outline-success me-2 mb-2 mb-md-5" style="display: none" id="back2Btn" onclick="show_data(0)"><?php echo e(__('Back To Settings ')); ?></button>
  


</div>
</div>

                                <div class="btn-area text-right justify-center"> </div>
                                <div class="table-responsive" id="setting_list" name="setting_list">

                                </div>
                                </div>
 </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="../../../assets/js/saveV3.js" type="text/javascript"></script>
    <script type="text/javascript">
$( document ).ready(function() {

    show_data(0)
});




async function delete_setting(setting_id,page){
    Swal.fire({
            title: 'Ürün silinecek, eminmisiniz'+page,

            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet!',
            cancelButtonText: 'Hayır'
        }).then((result) => {
            // If confirmed
            if (result.isConfirmed) {
                $.get('/admin/settings/delete/'+setting_id,  // url

                    function (data) {  // success callback
                        Swal.fire({
                        icon: (data.status) ? 'success': 'error',
                        text: data.message
                    });
         // alert('status: ' + textStatus + ', data:' + data);
                });

                setTimeout(() => {
                        show_settings(page);
                }, 2000);
                   /// $('#logout-form').submit();
            }
        });
}


async function delete_setting(setting_id,page){
    Swal.fire({
            title: 'setting will be deleted ,are you sure '+page,

            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet!',
            cancelButtonText: 'Hayır'
        }).then((result) => {
            // If confirmed
            if (result.isConfirmed) {
                $.get('/admin/settings/web-settings/delete-setting/'+setting_id,  // url

                    function (data) {  // success callback
                        Swal.fire({
                        icon: (data.status) ? 'success': 'error',
                        text: data.message
                    });
         // alert('status: ' + textStatus + ', data:' + data);
                });

                setTimeout(() => {
                        show_data(page);
                }, 2000);
                   /// $('#logout-form').submit();
            }
        });
}



async function create_setting(){

let txt ="/admin/settings/web-settings/create-setting" ;
 



console.log(txt);
await $.get( txt, function( data ) {

$('#setting_list').html(data);
$('#addBtn').hide();
 $('#back2Btn').show();
});

}


async function update_setting(id){

let txt ="/admin/settings/web-settings/update-setting/"+id ;

await $.get( txt, function( data ) {

$('#setting_list').html(data);
$('#addBtn').hide();
 $('#back2Btn').show();
});

}


async function show_data(page=0 ){

    $('#addBtn').show();
 $('#back2Btn').hide();

    let keyword = $('#keyword').val();
 

    let txt ="/admin/settings/web-settings/general-list/"+page ;
    console.log(txt);
 
    


    console.log(txt);
$.get( txt, function( data ) {

   $('#setting_list').html(data);

});

}


function slugify(text) {
    return text
        .toString()                      // Convert to string
        .toLowerCase()                   // Convert to lowercase
        .trim()                          // Trim whitespace from start and end
        .replace(/[\s_-]+/g, '-')        // Replace spaces, underscores, and hyphens with a single hyphen
        .replace(/[^\w\-]+/g, '')        // Remove all non-word characters
        .replace(/\-\-+/g, '-');         // Replace multiple hyphens with a single hyphen
}

let type = 0 ;

function typeChange(){


    if(type ==0){
        // document.getElementById("myElement").style.display = "none";
        // document.getElementById("myElement").style.display = "";

        $('#image').show();
        $('#value').hide();
    
        type = 1;
    }else{
        $('#image').hide();
        $('#value').show();
        type = 0;
    }
    
}

async function formSubmit() {

let error = false;
 

if ($('#key').val() == '') {

$('#key').focus();
Swal.fire({
    icon: 'error',
    text: 'enter key'
});

error = true;
return false;
}else {
    $('#key').val(slugify($('#key').val()));

const response = await fetch('/admin/settings/web-settings/check-key/' + $('#key').val()+'/'+$('#id').val());
const data = await response.json();
if (data !== 'ok') {
    $('#key').focus();
    $('#key').val('');
    Swal.fire({
        icon: 'error',
        text: data
    });

    error = true;
    return false;
}

}
 if(type == 1){
    if ($('#image').val() == '') {

$('#image').focus();
Swal.fire({
    icon: 'error',
    text: 'select file ( jpg , png )' 
});

error = true;
return false;
}
 }else{
if ($('#value').val() == '') {

$('#value').focus();
Swal.fire({
    icon: 'error',
    text: 'enter value'
});

error = true;
return false;
}

}


 var formData = new FormData(document.getElementById('setting-form'));

  $('#submit_button').prop('disabled',true);
  //save(formData, '/admin-panel/products/store', '', '');
  save(formData, '/admin/settings/web-settings/create-setting', '', '',"<?php echo e(route('admin.general.settings')); ?>");
//async function save(formData,route,formID,btn,reload) {


  }



    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/caleg/resources/views/admin/settings/webGeneral.blade.php ENDPATH**/ ?>