	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{ asset('images/elements/fav.png')}}">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>{{ config('app.name', 'Laravel') }} #FSTMKUIS</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{ asset('css/linearicons.css')}}">
			<link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{ asset('css/nice-select.css')}}">
			<link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{ asset('css/main.css')}}">
		</head>
		<body>

		  <header id="header" id="home">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><img src="{{ asset('images/logo_fstm.png')}}" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu-active"><a href="#">Home</a></li>

			          <li class="menu-has-children"><a href="">Trainings</a>
			            <ul>
			              <li><a href="#">Laravel</a></li>
			              <li><a href="#">PHP&MySQL</a></li>
							<li><a href="#">Video Filmora</a></li>
							<li><a href="#">Java & OOP</a></li>
							<li><a href="#">Android Studio</a></li>
							<li><a href="#">Photoshop</a></li>
			            </ul>
			          </li>
				      <li><a class="ticker-btn" href="http://fstm.kuis.edu.my" target="_blank">Official FSTMWeb</a></li>
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->	

			<!-- Start callto-action Area -->
			<section class="callto-action-area relative section-gap">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10 text-white">FSTM KUIS Training System</h1>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->		  

			<!-- Start Generic Area -->
			<section class="about-generic-area section-gap">
				<div class="container border-top-generic">
					<div class="row">

                        <!-- put your content here -->
                        @yield('content')

					</div>
				</div>
			</section>
			<!-- End Generic Start -->		

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Theme's Copyright</h6>
								<p>
									Do not remove this copyright notice.
								</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>	
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Socmed #fstmkuis</p>
								<div class="footer-social d-flex align-items-center">
									<a href="http://facebook.com/kuis.fstm" target="_blank"><i class="fa fa-facebook"></i></a>
									<a href="http://twitter.com/fstmkuis" target="_blank"><i class="fa fa-twitter"></i></a>
									<a href="http://instagram.com/kuis.fstm" target="_blank"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	
			
			<script src="{{ asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{ asset('js/vendor/bootstrap.min.js')}}"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{ asset('js/easing.min.js')}}"></script>
			<script src="{{ asset('js/hoverIntent.js')}}"></script>
			<script src="{{ asset('js/superfish.min.js')}}"></script>
			<script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
			<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
			<script src="{{ asset('js/jquery.sticky.js')}}"></script>
			<script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
			<script src="{{ asset('js/parallax.min.js')}}"></script>
			<script src="{{ asset('js/mail-script.js')}}"></script>
			<script src="{{ asset('js/main.js')}}"></script>
		</body>
	</html>
