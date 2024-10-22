<!DOCTYPE html>
<html lang="en" dir="ltr">
 
@include("partials.head");

	<body>
		<div class="preloader-activate preloader-active open_tm_preloader">
			<div class="preloader-area-wrap">
				<div class="spinner d-flex justify-content-center align-items-center h-100">
					<div class="bounce1"></div>
					<div class="bounce2"></div>
					<div class="bounce3"></div>
				</div>
			</div>
		</div>
		<div class="main-wrapper">

            @include('partials.header')

            @yield('content')

            @include('partials.footer')

            @yield('modals')

			<!-- Begin Scroll To Top -->
			<a class="scroll-to-top" href="">
				<i class="fa fa-chevron-up"></i>
			</a>
			<!-- Scroll To Top End Here -->

		</div>

		<!-- Global Vendor, plugins JS -->

		<!-- JS Files
		============================================ -->
		<!-- Global Vendor, plugins JS -->

		<!-- Vendor JS -->
		<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
		<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
		<script src="{{asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
		<script src="{{asset('assets/admin/vendors/sweetalert2/sweetalert2.min.js')}}"></script>

		<!--Plugins JS-->
		<script src="{{asset('assets/js/plugins/wow.min.js')}}"></script>
		<script src="{{asset('assets/js/plugins/jquery-ui.min.js')}}"></script>
		<script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
		<script src="{{asset('assets/js/plugins/jquery.nice-select.js')}}"></script>
		<script src="{{asset('assets/js/plugins/parallax.min.js')}}"></script>
		<script src="{{asset('assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('assets/js/plugins/tippy.min.js')}}"></script>
		<script src="{{asset('assets/js/plugins/ion.rangeSlider.min.js')}}"></script>
		<script src="{{asset('assets/js/plugins/mailchimp-ajax.js')}}"></script>
		<script src="{{asset('assets/admin/js/sweet-alert.js')}}"></script>

		<!--Main JS (Common Activation Codes)-->
		<script src="{{asset('assets/js/main.js')}}"></script>

        <script>
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
				}
			});
			$(document).on('submit','#szform',function(e){
				e.preventDefault();
				  $('.loader').show();

				var szform = $(this);
				$('button.submit').prop('disabled',true);
				$.ajax({
				  method:"POST",
				  url:$(this).prop('action'),
				  data:new FormData(this),
				  contentType: false,
				  cache: false,
				  processData: false,
				  success:function(data){

					$('.loader').hide();
					$('button.submit').prop('disabled',false);

					$(window).scrollTop(0);

					if(data.status == false){
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

					}else if(data.status == 404){
						location.replace(data.location)
					}if(data.status == 200){
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
						location.replace(data.location)
					}else if(data.status == true){
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

		@if (Session::has('success'))
			<script>
				Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 7000,
                    timerProgressBar: true,
                  }).fire({
                    icon: 'success',
                    title: "{{Session::get('success')}}"
                })
			</script>
		@elseif(Session::has('danger'))
			<script>
				Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 7000,
                    timerProgressBar: true,
                  }).fire({
                    icon: 'error',
                    title: "{{Session::get('danger')}}"
                })
			</script>
		@elseif(Session::has('warning'))
			<script>
				Swal.mixin({
					toast: true,
					position: 'top-end',
					showConfirmButton: false,
					timer: 40000,
					timerProgressBar: true,
				}).fire({
					icon: 'warning',
					title: "{{Session::get('warning')}}"
				})
			</script>
		@elseif(Session::has('errors'))
			<script>
				@foreach (Session::get('errors') as $error)
					$.ajax({
						success:function(){
							Snarl.addNotification({
								title: 'Error',
								text: "{{$error[0]}}",
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
				@endforeach
			</script>
		@endif

        @yield('scripts')

	</body>

</html>
