<?php $__env->startSection('title', __('New Product')); ?>
<?php $__env->startSection('styles'); ?>
    <style>
        .tox-promotion,
        .tox-statusbar__branding {
            display: none !important;
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
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.products.index')); ?>"><?php echo e(__('Products')); ?></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Edit Product')); ?>  </li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">

                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link   active  " id="simple-tab-0" data-bs-toggle="tab" href="#simple-tabpanel-0" role="tab" aria-controls="simple-tabpanel-0" aria-selected="true">Product Info</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link " id="simple-tab-1" data-bs-toggle="tab" href="#simple-tabpanel-1" role="tab" aria-controls="simple-tabpanel-1" aria-selected="false">Product Comments</a>
                                </li>

                              </ul>
                              <div class="tab-content pt-5" id="tab-content">
                                <div class="tab-pane active " id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">



                                        <?php echo $__env->make("admin.products.product_update", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="tab-pane " id="simple-tabpanel-1" role="tabpanel" aria-labelledby="simple-tab-1">
                                    <div id="product_comments"></div>
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

    <script src="<?php echo e(asset('assets/admin/vendors/tinymce/tinymce.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/vendors/jquery-tags-input/jquery.tagsinput.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/vendors/select2/select2.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/admin/js/tinymce.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/tags-input.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/select2.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/saveV3.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>


$(function() {
    console.log( "ready!" );
     <?php if(!empty($product['photo'])): ?>
     get_location();
         <?php endif; ?>
});


function delete_img(img){
            Swal.fire({
            title: 'Dosya silinecek, eminmisiniz',

            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet!',
            cancelButtonText: 'Hayır'
        }).then((result) => {
            // If confirmed
            if (result.isConfirmed) {
                $.get('/admin/products/images/<?php echo e($product["slug"]); ?>/'+img,  // url
                    function (data) {  // success callback
                    $('#product_images').html(data);
         // alert('status: ' + textStatus + ', data:' + data);
                });

                setTimeout(() => {
                        location.reload();
                }, 2000);
                   /// $('#logout-form').submit();
            }
        });
        }

function get_images(){
    $.get('/admin/products/images/<?php echo e($product["slug"]); ?>',  // url
      function (data) {  // success callback
        $('#product_images').html(data);
         // alert('status: ' + textStatus + ', data:' + data);
    });
}


function get_location(loc='<?php echo e($product['location']); ?>' ){
  //  let loc = ($('#location').val()!='' && ('#location').val()!='undefined')?$('#location').val():'<?php echo e($product['location']); ?>';
   // console.log('/admin/products/locations/<?php echo e($product["id"]); ?>/'+loc );
   // let location = (location =='')?'<?php echo e($selected_location); ?>':location
    $.get('/admin/products/locations/<?php echo e($product["id"]); ?>/'+loc ,  // url
      function (data) {  // success callback
        $('#product_locations').html(data);
         // alert('status: ' + textStatus + ', data:' + data);
    });
}


function make_slug(){

    let slug = slugify( $('#name').val());
    $('#slug').val(slug);
    $('#slug-span').html(slug);
}




function slugify(str) {
  return String(str)
      .normalize('NFKD') // split accented characters into their base characters and diacritical marks
      .replace(/[\u0300-\u036f]/g,
      '') // remove all the accents, which happen to be all in the \u03xx UNICODE block.
      .trim() // trim leading or trailing whitespace
      .toLowerCase() // convert to lowercase
      .replace(/[^a-z0-9 -]/g, '') // remove non-alphanumeric characters
      .replace(/\s+/g, '-') // replace spaces with hyphens
      .replace(/-+/g, '-'); // remove consecutive hyphens
}

document.getElementById('photo').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        document.getElementById('previewImage').src = e.target.result;
        $('#preview_pic').show();
    };

    reader.readAsDataURL(file);
});

// document.getElementById('name').addEventListener('input', function(event) {
//     // This function will be called whenever the text input changes
//     let slug = slugify(('#name').val());
//     $('#slug').val(slug);
//     $('#slug-span').html(slug);

// });


<?php if(!$submit_form): ?>

async function formSubmit() {

let error = false;


if ($('#name').val() == '') {

$('#name').focus();
Swal.fire({
    icon: 'error',
    text: 'ürün adı giriniz'
});

error = true;
return false;
}else {

const response = await fetch('/admin/products/check-slug/' + $('#slug').val()+'/<?php echo e($product['id']); ?>');
const data = await response.json();
if (data !== 'ok') {
    $('#name').focus();
    $('#name').val('');
    Swal.fire({
        icon: 'error',
        text: data
    });

    error = true;
    return false;
}

}


if ($('#title').val() == '') {

    $('#title').focus();
    Swal.fire({
        icon: 'error',
        text: 'ürün başlığı giriniz'
    });

    error = true;
    return false;
}




if ($('#price').val() =='0') {

$('#price').focus();
Swal.fire({
    icon: 'error',
    text: 'ürün fiyatı  giriniz'
});



error = true;
return false;
}


if ($('#type_id').val() === null || $('#type_id').val().length === 0) {

$('#type_id').focus();
Swal.fire({
    icon: 'error',
    text: 'ürün tipi seçiniz'
});

error = true;
return false;
}

if ($('#category_id').val() === null || $('#category_id').val().length === 0)  {

$('#category_id').focus();
Swal.fire({
    icon: 'error',
    text: 'ürün için kategori seçiniz'
});

error = true;
return false;
}


if ($('#tinymceExample').val() =='') {

$('#tinymceExample').focus();
Swal.fire({
    icon: 'error',
    text: 'ürün fiyatı  giriniz'
});

error = true;
return false;
}




 var formData = new FormData(document.getElementById('product-form'));

  $('#submit_button').prop('disabled',true);
  //save(formData, '/admin-panel/products/store', '', '');
  save(formData, '<?php echo e(route('admin.product.update')); ?>', '', '',"/admin/products/"+$('#slug').val()+"/edit");
//async function save(formData,route,formID,btn,reload) {


  }

<?php endif; ?>


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/caleg/resources/views/admin/products/edit.blade.php ENDPATH**/ ?>