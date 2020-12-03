<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.multipurposethemes.com/admin/adminto-template/images/favicon.ico">

    <title>Adminto - Log in </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('admin/admin1/')}}/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('admin/admin1/')}}/css/style.css">
	<link rel="stylesheet" href="{{asset('admin/admin1/')}}/css/skin_color.css">	

</head>
	
<body class="hold-transition theme-primary bg-img" style="background-image: url({{asset('admin/')}}/images/auth-bg/bg-1.jpg)">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Daxil olun</h2>
								<p class="mb-0">Sign in to continue to Adminto.</p>	
								@if ($errors->any())
								<div class="alert alert-danger mt-2">
									{{$errors->first()}}
								</div>
								@endif				
							</div>
						
							<div class="p-40">
							
                            <form  method="post" action="{{route('admin.login.post')}}">
                                @csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
											<input type="text" class="form-control pl-15 bg-transparent" name="email" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent" placeholder="Password" name="password">
										</div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Daxil ol</button>
									
								</form>	
									
							</div>						
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{asset('admin/')}}/assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js"></script>

	<!-- Vendor JS -->
	<script src="{{asset('admin/admin1/')}}/js/pages/toastr.js"></script>
	<script src="{{asset('admin/admin1/')}}/js/vendors.min.js"></script>
    <script src="{{asset('admin/')}}/assets/icons/feather-icons/feather.min.js"></script>	

</body>

</html>
