<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from pixelgeeklab.com/html/realestast/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Sep 2018 16:01:11 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Flatize - Shop HTML5 Responsive Template">
	<meta name="author" content="pixelgeeklab.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RealEstast</title>

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link href="{{ asset('assets/site/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Libs CSS -->
	<link href="{{ asset('assets/site/css/fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/site/vendor/owl-carousel/owl.carousel.css') }}" media="screen">
	<link rel="stylesheet" href="{{ asset('assets/site/vendor/owl-carousel/owl.theme.css') }}" media="screen">
	<link rel="stylesheet" href="{{ asset('assets/site/vendor/flexslider/flexslider.css') }}" media="screen">
	<link rel="stylesheet" href="{{ asset('assets/site/vendor/chosen/chosen.css') }}" media="screen">

	<!-- Theme -->
	<link href="{{ asset('assets/site/css/theme-animate.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/site/css/theme-elements.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/site/css/theme-blog.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/site/css/theme-map.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/site/css/theme.css') }}" rel="stylesheet">
	
	<!-- Style Switcher-->
	<link rel="stylesheet" href="{{ asset('assets/site/style-switcher/css/style-switcher.css') }}">
	<!-- <link href="{{ asset('assets/site/css/colors/red/style.html') }}" rel="stylesheet" id="layoutstyle"> -->

	<!-- Theme Responsive-->
	<link href="{{ asset('assets/site/css/theme-responsive.css') }}" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link href="{{ asset('css/site.css') }}" rel="stylesheet">
	<script src="{{ asset('assets/site/vendor/jquery.min.js') }}"></script>
</head>
<body>
	<div id="page">
		<header>
			<div id="top">
				<div class="container">
					<p class="pull-left text-note hidden-xs"><i class="fa fa-phone"></i> Need Support? 1-800-666-8888</p>
					<ul class="nav nav-pills nav-top navbar-right">
						@if(\Session::has('customer'))
						<li><a href="{{ route('customer.logout') }}" title="Logout" data-placement="bottom" data-toggle="tooltip" data-original-title="Logout"><i class="glyphicon glyphicon-log-out"></i></a></li>
						@else
						<li class="login"><a href="" data-toggle="modal" data-target="#login" title="Login"><i class="glyphicon glyphicon-log-in"></i></a></li>
						@endif
						<li><a href="" title="Email" data-placement="bottom" data-toggle="modal" data-original-title="Email" data-target="#report"><i class="fa fa-envelope-o"></i></a></li>
						<li><a href="https://www.facebook.com/" title="Facebook" data-placement="bottom" data-toggle="tooltip" data-original-title="Facebook" target="blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/" title="Twitter" data-placement="bottom" data-toggle="tooltip" data-original-title="Twitter" target="blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.linkedin.com/" title="Linkedin" data-placement="bottom" data-toggle="tooltip" data-original-title="Linkedin" target="blank"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="https://www.skype.com/" title="Skype" data-placement="bottom" data-toggle="tooltip" data-original-title="Skype" target="blank"><i class="fa fa-skype"></i></a></li>
						<li><a href="https://www.slack.com/" title="Slack" data-placement="bottom" data-toggle="tooltip" data-original-title="Slack" target="blank"><i class="fa fa-slack"></i></a></li>
					</ul>
				</div>
			</div>
			<nav class="navbar navbar-default pgl-navbar-main" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<a class="logo" href="{{ route('site.index') }}"><img src="{{ asset('images/logo.png') }}" alt="Flatize"></a> </div>
					
					<div class="navbar-collapse collapse width">
						<ul class="nav navbar-nav pull-right">
							<li class="dropdown active"><a href="{{ route('site.index') }}" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
								<ul class="dropdown-menu">
									<li><a href="{{ route('site.index-map') }}">Home Map</a></li>
									<li><a href="{{ route('site.index') }}">Home Slider</a></li>
								</ul>
							</li>
							<li class="dropdown"><a href="{{ route('propertiesforsell.dwelling_house') }}" class="dropdown-toggle" data-toggle="dropdown">Sell and Rental</a>
								<ul class="dropdown-menu">
									<li class="dropdown"><a href="{{ route('propertiesforsell.dwelling_house') }}" class="dropdown-toggle" data-target="#" data-toggle="dropdown">Properties for Sell</a>
										<ul class="dropdown-menu">
											<li><a href="{{ route('propertiesforsell.dwelling_house') }}">Dwelling House</a></li>
											<li><a href="{{ route('propertiesforsell.apartment') }}">Apartment</a></li>
											<li><a href="{{ route('propertiesforsell.land') }}">Land</a></li>
											<li><a href="{{ route('propertiesforsell.other_real_estate') }}">Other Real Estate</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="{{ route('propertiesforrental.dwelling_house') }}" class="dropdown-toggle" data-target="#" data-toggle="dropdown">Properties for Rental</a>
										<ul class="dropdown-menu">
											<li><a href="{{ route('propertiesforrental.dwelling_house') }}">Dwelling House</a></li>
											<li><a href="{{ route('propertiesforrental.apartment') }}">Apartment</a></li>
											<li><a href="{{ route('propertiesforrental.land') }}">land</a></li>
											<li><a href="{{ route('propertiesforrental.other_real_estate') }}">Other Real Estate</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="dropdown"><a href="{{ route('propertiesforpurchase.dwelling_house') }}" class="dropdown-toggle" data-toggle="dropdown">Purchase and Rent</a>
								<ul class="dropdown-menu">
									<li class="dropdown"><a href="{{ route('propertiesforpurchase.dwelling_house') }}" class="dropdown-toggle" data-target="#" data-toggle="dropdown">Properties for Purchase</a>
										<ul class="dropdown-menu">
											<li><a href="{{ route('propertiesforpurchase.dwelling_house') }}">Dwelling House</a></li>
											<li><a href="{{ route('propertiesforpurchase.apartment') }}">Apartment</a></li>
											<li><a href="{{ route('propertiesforpurchase.land') }}">land</a></li>
											<li><a href="{{ route('propertiesforpurchase.other_real_estate') }}">Other Real Estate</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="{{ route('propertiesforrent.dwelling_house') }}" class="dropdown-toggle" data-target="#" data-toggle="dropdown">Properties for Rent</a>
										<ul class="dropdown-menu">
											<li><a href="{{ route('propertiesforrent.dwelling_house') }}">Dwelling House</a></li>
											<li><a href="{{ route('propertiesforrent.apartment') }}">Apartment</a></li>
											<li><a href="{{ route('propertiesforrent.land') }}">land</a></li>
											<li><a href="{{ route('propertiesforrent.other_real_estate') }}">Other Real Estate</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="{{ route('postnews.index') }}">Post a news</a></li>
			              	<li><a href="{{ route('agent.index') }}">Agents</a></li>
			              	<li class="dropdown"><a href="{{ route('about_us.index') }}" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
			                	<ul class="dropdown-menu">
			                  		<li><a href="{{ route('about_us.index') }}">About Us</a></li>
			                  		<li><a href="{{ route('faq.index') }}">FAQs</a></li>
			                	</ul>
			              	</li>
			              	<li><a href="{{ route('blog.index') }}">Blog</a> </li>
			              	<li><a href="{{ route('contact_us.index') }}">Contact Us</a></li>
						</ul>
					</div><!--/.nav-collapse --> 
				</div><!--/.container-fluid --> 
			</nav>
		</header>
		
		<!-- Begin Main -->
			@yield('controller')	
		<!-- End Main -->
		
		<!-- Begin footer -->
		<footer class="pgl-footer">
			<div class="container">
				<div class="pgl-upper-foot">
					<div class="row">
						<div class="col-sm-4">
							<h2>Contact detail</h2>
							<p>Pellentesque nec erat. Aenean semper, neque non faucis. Malesuada, dui felis tempor felis, vel varius ante diam ut mauris.</p>
							<address>
								<i class="fa fa-map-marker"></i> Office : 1-800-666-8888<br>
								<i class="fa fa-phone"></i> Mobile : 0800-666-6666<br>
								<i class="fa fa-fax"></i> Fax : 1-800-666-8888<br>
								<i class="fa fa-envelope-o"></i> Mail: <a href="mailto:pixelgeklab@gmail.com">Pixelgeklab@gmail.com</a>
							</address>
						</div>
						<div class="col-sm-2">
							<h2>Useful links</h2>
							<ul class="list-unstyled">
								<li><a href="#">Help and FAQs</a></li>
								<li><a href="#">Home Price</a></li>
								<li><a href="#">Market View</a></li>
								<li><a href="#">Free Credit Report</a></li>
								<li><a href="#">Terms and Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Community Guidelines</a></li>
							</ul>
						</div>
						<div class="col-sm-2">
							<h2>Pages</h2>
							<ul class="list-unstyled">
								<li><a href="#">Font &amp; Color</a></li>
								<li><a href="#">Blogs</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">404 Page</a></li>
								<li><a href="#">Advanced Search</a></li>
								<li><a href="#">Property Custom Field</a></li>
								<li><a href="#">Google Map</a></li>
							</ul>
						</div>
						<div class="col-sm-4">
							<h2>Don’t miss out</h2>
							<p>In venenatis neque a eros laoreet eu placerat erat suscipit. Fusce cursus, erat ut scelerisque condimentum, quam odio ultrices leo.</p>
							<form class="form-inline pgl-form-newsletter" role="form">
								<div class="form-group">
									<label class="sr-only" for="exampleInputEmail2">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email here">
								</div>
								<button type="submit" class="btn btn-submit"><i class="icons icon-submit"></i></button>
							</form>
						</div>
					</div>
				</div>
				<div class="pgl-copyrights">
					<p>Copyright © 2014 RealEstast. Designed by <a href="http://pixelgeeklab.com/">PixelGeekLab</a></p>
				</div>
			</div>
		</footer>
		<!-- End footer -->
			
	</div>
	
	<!-- Begin Style Switcher -->
	@if(\Session::has('customer'))
	<div id="style-switcher">
		<div id="toggle_button"> <a href="#"><i class="fa fa-user"></i></a> </div>
		<div id="style-switcher-menu">
			<h4 class="text-center">Options</h4>
			<div class="segment">
				<div><a href="{{ route('customer.editprofile') }}" class="btn btn-sm">Manage</a></div>
				<div><a href="{{ route('postnews.index') }}" class="btn btn-sm">Post a news</a></div>
				<div><a href="{{ route('coint.index') }}" class="btn btn-sm">Buy Coint</a></div>
			</div>
			<div class="segment">
				<div id="reset"> <a href="{{ route('customer.logout') }}" class="btn btn-sm reset">Logout</a> </div>
			</div>
		</div>
	</div>
	@endif
	@include('Modal.LoginRegisterCustomerModal')
	@include('Modal.ReportModal')
	<!-- Begin Style Switcher -->
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
	 
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="{{ asset('assets/site/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/site/vendor/owl-carousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('assets/site/vendor/flexslider/jquery.flexslider-min.js') }}"></script>
	<script src="{{ asset('assets/site/vendor/chosen/chosen.jquery.min.js') }}"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
	<script src="{{ asset('assets/site/vendor/gmap/gmap3.infobox.min.js') }}"></script>
	<script src="{{ asset('assets/site/vendor/masonry/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('assets/site/vendor/masonry/masonry.pkgd.min.js') }}"></script>
	
	<!-- Theme Initializer -->
	<script src="{{ asset('assets/site/js/theme.plugins.js') }}"></script>
	<script src="{{ asset('assets/site/js/theme.js') }}"></script>
	
	<!-- Style Switcher -->
	<script type="text/javascript" src="{{ asset('assets/site/style-switcher/js/switcher.js') }}"></script>
	<script src="{{ asset('js/site/site.js') }}"></script>
	
</body>

<!-- Mirrored from pixelgeeklab.com/html/realestast/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Sep 2018 16:02:19 GMT -->
</html>