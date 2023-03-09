<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
		<link href="{{ asset('css/project.css') }}" rel="stylesheet">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
		<!-- Externe CSS Bestanden -->
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
	</head>
	@extends('layouts.app')
	<body>
		
		@extends('layouts.nav')
		<div class="container portfolio">
			<div class="row">
				<div class="col-md-12">
					<div class="heading">				
						<img src="https://image.ibb.co/cbCMvA/logo.png" />
					</div>
				</div>
			</div>

			<div class="bio-info">
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<!-- <div class="col-md-12">
								<div class="bio-image">
									<img src="https://user-images.githubusercontent.com/1915268/67271462-31600380-f4d8-11e9-9143-18e197b26f48.png" alt="image" />
								</div>			
								</div> -->
							<div class="portfolio-details-slider swiper">
								<div class="swiper-wrapper align-items-center">
									<div class="swiper-slide">
										<img src="{{ asset('img/portfolio-details-1.jpg') }}" alt="">
									</div>
									<div class="swiper-slide">
										<img src="{{ asset('img/portfolio-details-2.jpg') }}" alt="">
									</div>
									<div class="swiper-slide">
										<img src="{{ asset('img/portfolio-details-3.jpg') }}" alt="">
									</div>
								</div>
								<div class="swiper-pagination"></div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="bio-content">
							<h1>Laravel</h1>
							<h6>Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.
								<br><br>Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.
								<br><br>Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.
							</h6>
							<!-- <p>P.S I have no special talent, I'm just passionately curious ;)</p> -->
						</div>
					</div>
				</div>
			</div>
		</div>

		@extends('layouts.iframe')


		<div id="preloader"></div>
		<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
		<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
		<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
		<script type="text/javascript" src="{{asset('js/main.js') }}"></script>
	</body>
</html>