
<!DOCTYPE html>
<html lang="tr" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="description" content="Site Description">
		<meta name="author" content="Sitename">
		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

		<title>Admin - <?php echo $__env->yieldContent('title'); ?></title>

		
		
		<link rel="stylesheet" href="<?php echo e(asset('assets/admin/fonts/google-font/font.css')); ?>">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


		<link rel="stylesheet" href="<?php echo e(asset('assets/admin/vendors/core/core.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('assets/admin/vendors/flatpickr/flatpickr.min.css')); ?>">

		<link rel="stylesheet" href="<?php echo e(asset('assets/admin/fonts/feather-font/css/iconfont.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('assets/admin/vendors/flag-icon-css/css/flag-icon.min.css')); ?>">

		<link rel="stylesheet" href="<?php echo e(asset('assets/admin/vendors/select2/select2.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('assets/admin/vendors/easymde/easymde.min.css')); ?>">

		<link rel="stylesheet" href="<?php echo e(asset('assets/admin/vendors/sweetalert2/sweetalert2.min.css')); ?>">

		<link rel="stylesheet" href="<?php echo e(asset('assets/admin/vendors/jquery-tags-input/jquery.tagsinput.min.css')); ?>">

		<?php if(Session::has('theme') && Session::get('theme') == 'auto'): ?>
			<?php if( 6 > date('H') || date('H') > 18): ?>
				<link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/demo2/style.css')); ?>" id="theme">
			<?php else: ?>
				<link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/demo1/style.css')); ?>" id="theme">
			<?php endif; ?>
		<?php else: ?>
			<?php if(Session::has('theme')): ?>
				<?php if(Session::get('theme') == 'dark'): ?>
					<link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/demo2/style.css')); ?>" id="theme">
				<?php else: ?>
					<link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/demo1/style.css')); ?>" id="theme">
				<?php endif; ?>
			<?php else: ?>
				<?php if( 6 > date('H') || date('H') > 18): ?>
					<link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/demo2/style.css')); ?>" id="theme">
				<?php else: ?>
					<link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/demo1/style.css')); ?>" id="theme">
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>

		<style>
			.loader {
				position: fixed;
				left: 0px;
				top: 0px;
				width: 100%;
				height: 100%;
				z-index: 9999;
				background: url('<?php echo e(asset('assets/loading.gif')); ?>') 50% 50% no-repeat rgb(249,249,249);
				display: none;
			  }
		</style>
		<link rel="shortcut icon" href="<?php echo e(asset('assets/defualt_favicon.png')); ?>" />
		<?php echo $__env->yieldContent('styles'); ?>
	</head>
	<body>
		<div class="loader"><div></div><div></div><div></div><div></div></div>
		<?php echo $__env->yieldContent('content'); ?>

		<!-- core:js -->
		<script src="<?php echo e(asset('assets/admin/vendors/core/core.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/admin/vendors/sweetalert2/sweetalert2.min.js')); ?>"></script>
		<!-- endinject -->

		<!-- Plugin js for this page -->
		<!-- End plugin js for this page -->

		<!-- inject:js -->
		<script src="<?php echo e(asset('assets/admin/vendors/feather-icons/feather.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/admin/js/template.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/admin/js/sweet-alert.js')); ?>"></script>
		<!-- endinject -->
		<script>
			function changeTheme(){
				$.ajax({
					method:"GET",
					url:"<?php echo e(route('admin.changetheme')); ?>",
					contentType: false,
					cache: false,
					processData: false,
					success:function(data){
						if(data.theme == 'dark'){
							$('#theme').replaceWith('<link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/demo2/style.css')); ?>" id="theme">');
						}else{
							$('#theme').replaceWith('<link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/demo1/style.css')); ?>" id="theme">');
						}

					}
				});
			}

		</script>
		<script>

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$(document).on('submit','#szform',function(e){
				e.preventDefault();
				  $('.loader').show();

				var fd = new FormData(this);
				console.log(fd);
				var szform = $(this);
				$('button.submit').prop('disabled',true);
				$.ajax({
				  method: $('#szform').attr('method'),
				  url:$(this).prop('action'),
				  data:fd,
				  contentType: false,
				  cache: false,
				  processData: false,
				  success:function(data){

					$('.loader').hide();
					$('button.submit').prop('disabled',false);

					$(window).scrollTop(0);

					if(!data.status){
						Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 7000,
							timerProgressBar: true,
							}).fire({
							icon: 'error',
							title: data.message
						});
					}else{
						Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 7000,
							timerProgressBar: true,
						}).fire({
							icon: 'success',
							title: data.message
						});
					}



				  },
				  error: function(data) {
					$('.loader').hide();
					$('button.submit').prop('disabled',false);

					$(window).scrollTop(0);

					if(!data.status){
						Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 7000,
							timerProgressBar: true,
							}).fire({
							icon: 'error',
							title: data.message
						});
					}else{
						Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 7000,
							timerProgressBar: true,
						}).fire({
							icon: 'error',
							title: 'Somthing Went Wrong'
						});
					}
				  }
				});

			  });
		</script>

		<?php if(Session::has('success')): ?>
			<script>
				Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 7000,
                    timerProgressBar: true,
                  }).fire({
                    icon: 'success',
                    title: "<?php echo e(Session::get('success')); ?>"
                })
			</script>
		<?php elseif(Session::has('danger')): ?>
			<script>
				Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 7000,
                    timerProgressBar: true,
                  }).fire({
                    icon: 'error',
                    title: "<?php echo e(Session::get('danger')); ?>"
                })
			</script>
		<?php elseif(Session::has('warning')): ?>
			<script>
				Swal.mixin({
					toast: true,
					position: 'top-end',
					showConfirmButton: false,
					timer: 40000,
					timerProgressBar: true,
				}).fire({
					icon: 'warning',
					title: "<?php echo e(Session::get('warning')); ?>"
				})
			</script>
		<?php elseif(Session::has('errors')): ?>
			<script>
				<?php $__currentLoopData = Session::get('errors'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					$.ajax({
						success:function(){
							Snarl.addNotification({
								title: 'Error',
								text: "<?php echo e($error[0]); ?>",
								icon: '<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 40 40" width="160px" height="160px"><path fill="#f78f8f" d="M20,38.5C9.799,38.5,1.5,30.201,1.5,20S9.799,1.5,20,1.5S38.5,9.799,38.5,20S30.201,38.5,20,38.5z"/><path fill="#c74343" d="M20,2c9.925,0,18,8.075,18,18s-8.075,18-18,18S2,29.925,2,20S10.075,2,20,2 M20,1 C9.507,1,1,9.507,1,20s8.507,19,19,19s19-8.507,19-19S30.493,1,20,1L20,1z"/><path fill="#fff" d="M18.5 10H21.5V30H18.5z" transform="rotate(-134.999 20 20)"/><path fill="#fff" d="M18.5 10H21.5V30H18.5z" transform="rotate(-45.001 20 20)"/></svg>'
							});
						},
						error: function() {
							Snarl.addNotification({
								title: 'Error',
								text: "Something went wrong!",
								icon: '<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 40 40" width="160px" height="160px"><path fill="#f78f8f" d="M20,38.5C9.799,38.5,1.5,30.201,1.5,20S9.799,1.5,20,1.5S38.5,9.799,38.5,20S30.201,38.5,20,38.5z"/><path fill="#c74343" d="M20,2c9.925,0,18,8.075,18,18s-8.075,18-18,18S2,29.925,2,20S10.075,2,20,2 M20,1 C9.507,1,1,9.507,1,20s8.507,19,19,19s19-8.507,19-19S30.493,1,20,1L20,1z"/><path fill="#fff" d="M18.5 10H21.5V30H18.5z" transform="rotate(-134.999 20 20)"/><path fill="#fff" d="M18.5 10H21.5V30H18.5z" transform="rotate(-45.001 20 20)"/></svg>'
							});
						},
					});
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</script>
		<?php endif; ?>


		<?php echo $__env->yieldContent('scripts'); ?>

	</body>

</html>
<?php /**PATH /home/vagrant/code/caleg/resources/views/admin/layouts/master.blade.php ENDPATH**/ ?>