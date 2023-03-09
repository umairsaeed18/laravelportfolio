<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
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

    <!-- ======= Mobile nav toggle button ======= -->
		<!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
		<i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
		
		<!-- ======= Header ======= -->
		<header id="header" class="d-flex flex-column justify-content-center">
			<nav id="navbar" class="navbar nav-menu">
				<ul>
					<li><a href="/#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
					<li><a href="/#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
					<li><a href="/#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
					<li><a href="/#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
					<li><a href="/#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
				</ul>
			</nav>
			<!-- .nav-menu -->
		</header>
		<!-- End Header -->

		<!-- ======= Hero Section ======= -->
		<section id="hero" class="d-flex flex-column justify-content-center">
			<div class="container" data-aos="zoom-in" data-aos-delay="100">
				<h1>Umair Saeed</h1>
				<p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
				<div class="social-links">
					<!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
						<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> -->
					<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
					<a href="#" class="google-plus"><i class="bx bxl-github"></i></a>
					<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
				</div>
			</div>
		</section>
		<!-- End Hero -->
		
		<main id="main">
			<!-- ======= About Section ======= -->
			<section id="about" class="about">
				<div class="container" data-aos="fade-up">
					<div class="section-title">
						<h2>About</h2>
						<p>
							A developer who knows how to design, code, test, correct and document complex programs and program modifications from supplied 
							specifications using agreed standards and tools, to achieve a well-engineered result. 
							Takes part in reviews of own work. Communicates and interfaces with clients and 
							business users on a regular basis and represents them in a positive and professional manner. 
							Experience of the full software & front-end development lifecycle with a focus on Agile processes.
						</p>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<img src="{{ asset('img/umair.png') }}" class="img-fluid" alt="">
						</div>
						<div class="col-lg-8 pt-4 pt-lg-0 content">
							<h3>UI/UX Designer &amp; Web Developer.</h3>
							<p class="fst-italic">
								I'm always experimenting, always learning, never bored & believe simplicity is the ultimate sophistication
							</p>
							<div class="row">
								<div class="col-lg-6">
									<ul>
										<li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>18 May 2000</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>i461339.hera.fhict.nl</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+31 6 40516301</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Helmond</span></li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul>
										<li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelors(ongoing)</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>461339@student.fontys.nl</span></li>
										<li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End About Section -->

			<!-- ======= Facts Section ======= -->
			<section id="facts" class="facts">
				<div class="container" data-aos="fade-up">
					<div class="section-title">
						<h2>Facts</h2>
						<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="count-box">
								<i class="bi bi-emoji-smile"></i>
								<span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
								<p>Happy Clients</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 mt-5 mt-md-0">
							<div class="count-box">
								<i class="bi bi-journal-richtext"></i>
								<span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
								<p>Projects</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
							<div class="count-box">
								<i class="bi bi-headset"></i>
								<span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
								<p>Hours Of Support</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
							<div class="count-box">
								<i class="bi bi-award"></i>
								<span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
								<p>Awards</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Facts Section -->

			<!-- ======= Skills Section ======= -->
			<section id="skills" class="skills section-bg">
				<div class="container" data-aos="fade-up">
					<div class="section-title">
						<h2>Skills</h2>
						<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
					</div>
					<div class="row skills-content">
						<div class="col-lg-6">
							<div class="progress">
								<span class="skill">HTML <i class="val">100%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="progress">
								<span class="skill">CSS <i class="val">90%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="progress">
								<span class="skill">JavaScript <i class="val">75%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="progress">
								<span class="skill">PHP <i class="val">80%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="progress">
								<span class="skill">WordPress/CMS <i class="val">90%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="progress">
								<span class="skill">Photoshop <i class="val">55%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Skills Section -->

			<!-- ======= Resume Section ======= -->
			<section id="resume" class="resume">
				<div class="container" data-aos="fade-up">
					<div class="section-title">
						<h2>Resume</h2>
						<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<h3 class="resume-title">Sumary</h3>
							<div class="resume-item pb-0">
								<h4>Umair Saeed</h4>
								<p><em>I'm a web developer with in-depth experience in UI/UX design. In a nutshell, I create websites that help organizations address business challenges and meet their needs. I manage everything from website navigation and layout to a company's web hosting and security architecture.</em></p>
								<ul>
									<li>Helmond</li>
									<li>+31 6 40516301</li>
									<li>umair_saeed32@hotmail.nl</li>
								</ul>
							</div>
							<h3 class="resume-title">Education</h3>
							<div class="resume-item">
							<h4>Bachelor of Fine Arts &amp; Graphic Design - HBO ICT & MEDIA</h4>
								<h5>2020 - Present</h5>
								<p><em>Fontys Hogeschool ICT - Eindhoven</em></p>
								<p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
							</div>
							<div class="resume-item">
								<h4>MBO - APPLICATION AND MEDIA DEVELOPMENT</h4>
								<h5>2017 - 2020</h5>
								<p><em>ROC TER AA - Helmond</em></p>
								<p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
							</div>
							<div class="resume-item">
								<h4>Secondary education</h4>
								<h5>2014 - 2017</h5>
								<p><em>Jan van Brabant College - Helmond</em></p>
								<p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
							</div>
						</div>
						<div class="col-lg-6">
							<h3 class="resume-title">Professional Experience</h3>
							<div class="resume-item">
								<h4>Senior graphic design specialist</h4>
								<h5>2019 - Present</h5>
								<p><em>Experion, New York, NY </em></p>
								<ul>
									<li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
									<li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
									<li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
									<li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
								</ul>
							</div>
							<div class="resume-item">
								<h4>Graphic design specialist</h4>
								<h5>2017 - 2018</h5>
								<p><em>Stepping Stone Advertising, New York, NY</em></p>
								<ul>
									<li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
									<li>Managed up to 5 projects or tasks at a given time while under pressure</li>
									<li>Recommended and consulted with clients on the most appropriate graphic design</li>
									<li>Created 4+ design presentations and proposals a month for clients and account managers</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Resume Section -->

			<!-- ======= Portfolio Section ======= -->
			<section id="portfolio" class="portfolio section-bg">
				<div class="container" data-aos="fade-up">
				<div class="row">
					<div class="col-sm-12">
						<div class="section-title">
							<h2>Portfolio</h2>
							<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="work-box">
									<a href="{{ asset('img/work-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
										<div class="work-img">
											<img src="{{ asset('img/work-1.jpg') }}" alt="" class="img-fluid">
										</div>
									</a>
									<div class="work-content">
										<div class="row">
											<div class="col-sm-8">
												<h2 class="w-title">Individual project</h2>
												<div class="w-more">
													<span class="w-ctegory">Web Design</span> / <span class="w-date">13 March 2023</span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="w-like">
													<a href="/projectOne"> <span class="bi bi-plus-circle"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="work-box">
									<a href="{{ asset('img/work-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
										<div class="work-img">
											<img src="{{ asset('img/work-2.jpg') }}" alt="" class="img-fluid">
										</div>
									</a>
									<div class="work-content">
										<div class="row">
											<div class="col-sm-8">
												<h2 class="w-title">Loreda Cuno Nere</h2>
												<div class="w-more">
													<span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="w-like">
													<a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="work-box">
									<a href="{{ asset('img/work-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
										<div class="work-img">
											<img src="{{ asset('img/work-3.jpg') }}" alt="" class="img-fluid">
										</div>
									</a>
									<div class="work-content">
										<div class="row">
											<div class="col-sm-8">
												<h2 class="w-title">Mavrito Lana Dere</h2>
												<div class="w-more">
													<span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="w-like">
													<a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="work-box">
									<a href="{{ asset('img/work-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
										<div class="work-img">
											<img src="{{ asset('img/work-4.jpg') }}" alt="" class="img-fluid">
										</div>
									</a>
									<div class="work-content">
										<div class="row">
											<div class="col-sm-8">
												<h2 class="w-title">Bindo Laro Cado</h2>
												<div class="w-more">
													<span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="w-like">
													<a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="work-box">
									<a href="{{ asset('img/work-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
										<div class="work-img">
											<img src="{{ asset('img/work-5.jpg') }}" alt="" class="img-fluid">
										</div>
									</a>
									<div class="work-content">
										<div class="row">
											<div class="col-sm-8">
												<h2 class="w-title">Studio Lena Mado</h2>
												<div class="w-more">
													<span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="w-like">
													<a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="work-box">
									<a href="{{ asset('img/work-6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
										<div class="work-img">
											<img src="{{ asset('img/work-6.jpg') }}" alt="" class="img-fluid">
										</div>
									</a>
									<div class="work-content">
										<div class="row">
											<div class="col-sm-8">
												<h2 class="w-title">Studio Big Bang</h2>
												<div class="w-more">
													<span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="w-like">
													<a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</section>
			<!-- End Portfolio Section -->

			<!-- ======= Services Section ======= -->
			<section id="services" class="services">
				<div class="container" data-aos="fade-up">
					<div class="section-title">
						<h2>Services</h2>
						<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
							<div class="icon-box iconbox-blue">
								<div class="icon">
									<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
										<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
									</svg>
									<i class="bx bxl-dribbble"></i>
								</div>
								<h4><a href="">Lorem Ipsum</a></h4>
								<p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
							<div class="icon-box iconbox-orange ">
								<div class="icon">
									<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
										<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
									</svg>
									<i class="bx bx-file"></i>
								</div>
								<h4><a href="">Sed Perspiciatis</a></h4>
								<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
							<div class="icon-box iconbox-pink">
								<div class="icon">
									<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
										<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
									</svg>
									<i class="bx bx-tachometer"></i>
								</div>
								<h4><a href="">Magni Dolores</a></h4>
								<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
							<div class="icon-box iconbox-yellow">
								<div class="icon">
									<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
										<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
									</svg>
									<i class="bx bx-layer"></i>
								</div>
								<h4><a href="">Nemo Enim</a></h4>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
							<div class="icon-box iconbox-red">
								<div class="icon">
									<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
										<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
									</svg>
									<i class="bx bx-slideshow"></i>
								</div>
								<h4><a href="">Dele Cardo</a></h4>
								<p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
							<div class="icon-box iconbox-teal">
								<div class="icon">
									<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
										<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
									</svg>
									<i class="bx bx-arch"></i>
								</div>
								<h4><a href="">Divera Don</a></h4>
								<p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<!-- End #main -->

		@extends('layouts.footer')

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