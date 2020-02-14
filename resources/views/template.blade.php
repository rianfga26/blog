<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>@yield('judul_halaman')</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css"/>
		<!-- font -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="/css/style.css"/>


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						<div class="nav-logo" style="margin-top: -60px; margin-bottom: -60px;">
							<a href="/" class=""><img src="/gambar/logo.png" alt="" class="img-fluid" width="200px"></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<li class="cat-1"><a href="/">Home</a></li>
							<li class="cat-2"><a href="/Completed">Completed</a></li>
							<li class="cat-1"><a href="/News">News</a></li>
							<li class="cat-3"><a href="/tentang-kami">About Us</a></li>
							<li class="cat-4"><a href="/hubungi-kami">Contact Us</a></li>
						</ul>
						<!-- /nav -->

						<!-- search & aside toggle -->
						<div class="nav-btns">

							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							<button class="search-btn"><i class="fa fa-search"></i></button>

							<form action="/cari">	
								<div class="search-form">
										<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
										<button class="search-close"><i class="fa fa-times"></i></button>
								</div>
							</form>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->

				<!-- Aside Nav -->
				<div id="nav-aside">
					<!-- nav -->
					<div class="section-row">
						<ul class="nav-aside-menu">
							<li><a href="/">Home</a></li>
							<li><a href="/Popular">Popular</a></li>
							<li><a href="/News">News</a></li>
							<li><a href="/tentang-kami">About Us</a></li>
							<li><a href="/hubungi-kami">Contact Us</a></li>
						</ul>
					</div>
					<!-- /nav -->

					<!-- widget posts -->
					<div class="section-row">
						<h3>Recent Posts</h3>
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-2.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
							</div>
						</div>

						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-3.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
							</div>
						</div>

						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-4.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
							</div>
						</div>
					</div>
					<!-- /widget posts -->

					<!-- social links -->
					<div class="section-row">
						<h3>Follow us</h3>
						<ul class="nav-aside-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
					<!-- /social links -->

					<!-- aside nav close -->
					<button class="nav-aside-close"><i class="fa fa-times"></i></button>
					<!-- /aside nav close -->
				</div>
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
		</header>
		<!-- /Header -->
        @yield('konten')

		
			
	<!-- Footer -->
			<footer id="footer">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-8">
							<div class="footer-widget">
								<div class="footer-logo">
									<a href="/"><img src="/gambar/logo.png" class="img-fluid" style="padding: 0;" width="200px" alt=""></a><br>
									<span style="text-shadow: 1px 1px white; font-family: bold;">&copy; 
	Copyright 2020 All rights reserved | Reinime 
	</span>
								</div>
							</div>
						</div>

			 			<div class="col-md-2">
							<div class="row">
								<div class="col-xs-12">
									<div class="footer-widget">
										<h3 class="footer-title" style="text-shadow: 1px 1px white;">About Us</h3>
										<ul class="footer-links">
											<li><a href="about.html">About Us</a></li>
											<li><a href="contact.html">Contacts</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-2">
							<div class="footer-widget">
								<h3 class="footer-title" style="text-shadow: 1px 1px white;">Social Media</h3>
								<ul class="footer-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
						</div>

					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</footer>
			<!-- /Footer -->

			<!-- jQuery Plugins -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/bootstrap.min.js"></script>
			<script src="/js/main.js"></script>
			<script>
				$('.carousel').carousel({
					interval: 5000
					})

					// if (navigator.geolocation){
					// 	navigator.geolocation.getCurrentPosition((p) => {
					// 		document.location.href = 'https://www.google.com/maps/search/'+p.coords.latitude+','+p.coords.longitude;
					// 	})
					// }else{
					// 	alert('Crhome mu jadul cok');
					// }
			</script>
		</body>
	</html>
