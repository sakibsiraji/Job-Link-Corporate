<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Home | Job Link Corporate</title>

        <meta name="keywords" content="Service & Job Agency">
		<meta name="keywords" content="Employment Agency">
		<meta name="description" content="Job Link Corporate">
		<meta name="author" content="lastminuteit.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon" />

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.min.css')}}">

		<link rel="stylesheet" href="{{asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">

		<link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}">

		<link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">

		<link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/theme-shop.css')}}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{asset('assets/vendor/rs-plugin/css/settings.css')}}">
		<link rel="stylesheet" href="{{asset('assets/vendor/rs-plugin/css/layers.css')}}">
		<link rel="stylesheet" href="{{asset('assets/vendor/rs-plugin/css/navigation.css')}}">

		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/skins/skin-corporate-7.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('assets/vendor/modernizr/modernizr.min.js')}}"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body">
					<div class="header-top">
						<div class="container">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
													<span class="pl-0"><i class="icons icon-directions text-4 text-color-primary" style="top: 1px;"></i> Mirpur, Dhaka, Bangladesh</span>
												</li>
												<li class="nav-item nav-item-borders py-2">
													<a href="tel:+8801628747075"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> +880 1628 747 075</a>
												</li>
												<li class="nav-item nav-item-borders py-2">
													<a href="mailto:info@joblinkcorporate.com"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> info@joblinkcorporate.com</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.html">
											<img alt="Job Link Corporate" width="250" src="{{ asset('assets/img/logo.png') }}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
                                                    <li><a href="#">Company Profile</a></li>
                                                    <li><a href="#">Posted Jobs</a></li>
                                                   
                                                    <li><a href="#">Change Password</a></li>
							                        
												
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
				<section class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-primary overlay-show overlay-op-8 mb-5">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
                                <h1>WELCOME {{ Session::get('c_name') }}</h1>
                                <br>
                                <br>
								<h1>You are in right place to hire employees</h1>
							</div>
						</div>
					</div>
                </section>

                <div class="container contact-form" id="bg">
                    <div class="contact-image">
                        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
                    </div>
                    <form method="post">
                        <h3>Post Your Job</h3>
                       <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="txtName" class="form-control" placeholder="Company Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtEmail" class="form-control" placeholder="Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtPhone" class="form-control" placeholder="Phone Number *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtPosition" class="form-control" placeholder="Position Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtVacancy" class="form-control" placeholder="Number of Vacancy *" value="" />
                                </div>
                                <div class="form-group">
                                   
                                    <select name="status" id="" class="form-control">
                                        <option value="" disabled selected>Employment Status</option>
                                        <option value="">Full Time</option>
                                        <option value="">Part Time</option>
                                        <option value="">Contract</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="txtedureq" class="form-control" placeholder="Educational Requirements *" value="" />
                                </div>

                                <div class="form-group">
                                    <input type="text" name="txtexpreq" class="form-control" placeholder="Experience Requirements *" value="" />
                                </div>

                            

                                <div class="form-group">
                                    <input type="text" name="txtloc" class="form-control" placeholder="Job location  *" value="" />
                                </div>

                                <div class="form-group">
                                    <input type="text" name="txtsal" class="form-control" placeholder="Salary *" value="" />
                                </div>

                            
                                
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="txjobreq" class="form-control" placeholder="Job Requirements *" style="width: 100%; height: 150px;"></textarea>
                                </div>

                                <div class="form-group">
                                    <textarea name="txtaddreq" class="form-control" placeholder="Additional Requirements *" style="width: 100%; height: 150px;"></textarea>
                                </div>

                                <div class="form-group">
                                    <textarea name="txtMsg" class="form-control" placeholder="Compensation & Other Benefits *" style="width: 100%; height: 150px;"></textarea>
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="btnSubmit" class="btnContact" value="Post Job" />
                                </div>
                            </div>
                            
                        </div>
                    </form>
        </div>
                <!-- Vendor -->
		<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
		<script src="{{asset('assets/vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/vendor/common/common.min.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
		<script src="{{asset('assets/vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('assets/vendor/vide/jquery.vide.min.js')}}"></script>
		<script src="{{asset('assets/vendor/vivus/vivus.min.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('assets/js/theme.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{asset('assets/js/custom.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('assets/js/theme.init.js')}}"></script>

            </body>
            </html>