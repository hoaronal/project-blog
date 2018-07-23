<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="<?php echo site_url('assets/web/css/font-awesome.min.css');?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/web/css/bootstrap.css');?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/web/css/fancybox.css');?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/web/css/all.css');?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/web/css/style.css');?>" rel="stylesheet">

</head>
<body>
<div id="wrapper">
	<!-- header of the page -->
	<header id="header">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-3 tell-holder">
						<span class="tel"><i class="fa fa-phone"></i>Call Us: <a href="tel:+88 01911121288">0088 01911121288</a></span>
					</div>
					<div class="col-sm-8 col-md-6 col-md-push-3 col-lg-5 col-lg-push-4">
						<!-- social-networks of the page -->
						<ul class="social-networks list-inline">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
							<li><a href="#"><i class="fa fa-flickr"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
						<!-- <!-- <a href="#" class="login">Login/Sign Up</a> --> -->
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 holder">
					<!-- logo of the page -->
					<div class="logo"><a href="index.html"><img src="<?php echo site_url('assets/web/');?>images/logo.png" class="logo-img" alt="LAW FIRM THEME FOR Law"></a></div>
					<a href="#" class="nav-opener visible-xs"><i class="fa fa-bars"></i></a>
					<div class="nav-holder">
						<!-- <a href="#" class="btn-search"><i class="fa fa-search"></i></a>
                        <form action="#" class="header-searchform">
                            <div class="form-group">
                                <input type="search" placeholder="Search Here…" class="form-control">
                            </div>
                            <button type="submit" class="submit"><i class="fa fa-search"></i></button>
                        </form> -->
						<!-- nav of the page -->
						<nav id="nav">
							<ul class="list-inline">
								<li class="active"><a href="index.html">Home</a></li>
								<li>
									<a href="aboutus.html">About</a>
									<div class="small-drop">
										<div class="drop-holder">
											<ul class="list-unstyled">
												<li><a href="aboutus.html">About Us</a></li>
												<li><a href="team-details.html">CEO</a></li>
												<li><a href="team.html">Associates</a></li>
												<li><a href="team-details-2.html">Advisors</a></li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<a href="#">Services</a>
									<div class="small-drop">
										<div class="drop-holder">
											<ul class="list-unstyled">
												<li><a href="practice-area.html">Industries We Serve</a></li>
												<li><a href="services.html">Services</a></li>
											</ul>
										</div>
									</div>
								</li>
								<li><a href="news.html">News</a></li>
								<li><a href="blog.html">Blogs</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="contactus.html">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- main-gallery of the Page -->
	<div class="main-gallery beans-gallery">
		<div class="beans-mask">
			<div class="beans-slideset">
				<div class="beans-slide win-height">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 slide-content  win-min-height">
								<header class="slide-heading2">
									<h1>We are a registered Law firm providing legal assistance to global clients</h1>
								</header>
							</div>
						</div>
					</div>
					<div class="bg-stretch">
						<img src="<?php echo site_url('assets/web/');?>images/slider/1.jpg" alt="image description">
					</div>
				</div>
				<div class="beans-slide  win-height">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 slide-content  win-min-height">
								<header class="slide-heading2">
									<h1>We protect International Investment and ease International Trade for the global clients</h1>
								</header>
							</div>
						</div>
					</div>
					<div class="bg-stretch">
						<img src="<?php echo site_url('assets/web/');?>images/slider/2.jpg" alt="image description">
					</div>
				</div>

				<div class="beans-slide  win-height">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 slide-content  win-min-height">
								<header class="slide-heading2">
									<h1>WTO laws and Bangladesh perspective</h1>
								</header>
							</div>
						</div>
					</div>
					<div class="bg-stretch">
						<img src="<?php echo site_url('assets/web/');?>images/slider/s1.jpg" alt="image description">
					</div>
				</div>

			</div>
		</div>
		<div class="btn-box">
			<a class="btn-prev" href="#"><i class="fa fa-angle-left"></i></a>
			<a class="btn-next" href="#"><i class="fa fa-angle-right"></i></a>
		</div>
	</div>
	<!-- contain main informative part of the site -->
	<main id="main">
		<!-- container-block of the page -->
		<section class="container container-block">
			<header class="row main-heading">
				<div class="col-xs-12">
					<h2>We Provide you with!</h2>
				</div>
			</header>
			<!-- services-holder of the page -->
			<div class="row services-holder">
				<div class="col-sm-3 col-xs-12 services-col">
					<div class="img-box"></div>
					<h2><a href="services.html">Litigation & Free legal Advice</a></h2>
					<p class="height-200 text-justify">We provide Litigation support In Supreme Court of Bangladesh, District Courts and Tribunals. <!--We are in process of making network in all districts of Bangladesh.--> We provide litigation support in Labour Tribunal, VAT, Customs Tribunal, Administrative Tribunal and other tribunals.
						We provide free legal advice to our clients everyday (except Friday and Saturday) from 6pm to 7pm. For free legal advice call- 0088-01613776651</p>
					<a href="services.html" class="btn btn-default">Read More +</a>
				</div>
				<div class="col-sm-3 col-xs-12 services-col approch">
					<div class="img-box"></div>
					<h2><a href="services.html">Arbitration & Mediation</a></h2>
					<p class="height-200 text-justify">We advice mediation first, then Arbitration for any dispute resolution. We provide Arbitration support and help in arrangement of ad hoc or institutional arbitration.  </p>
					<a href="services.html" class="btn btn-default">Read More +</a>
				</div>
				<div class="col-sm-3 col-xs-12 services-col rules">
					<div class="img-box"></div>
					<h2><a href="services.html">Business Negotiation</a></h2>
					<br>
					<p class="height-200 text-justify">A good negotiation skill helps your business expansion. We provide training as well as we participate in business negotiations, such as, in International and National Procurement, Sales and in CBA issues etc.</p>
					<a href="services.html" class="btn btn-default">Read More +</a>
				</div>
				<div class="col-sm-3 col-xs-12 services-col client">
					<div class="img-box"></div>
					<h2><a href="services.html">Consultancy & Client Conferencing</a></h2>
					<p class="height-200 text-justify">We provide consultancy to FDI and other International Trade and Investments. We also provide consultancy to trade and investment to the national organizations.
						To give a perfect advice to our client, we arrange client conferencing to find out real merit of the case. Then give advice accordingly.</p>
					<a href="services.html" class="btn btn-default">Read More +</a>
				</div>
			</div>
		</section>
		<!-- container block practice of the page -->
		<section class="container container-block practice">
			<header class="row main-heading">
				<div class="col-xs-12">
					<h2>INDUSTRIES WE SERVE</h2>
				</div>
			</header>
			<!-- practice-block of the page -->
			<div class="row practice-block">
				<div class="col-sm-4 col-xs-12 practice-col">
					<a href="#">
							<span data-picture data-alt="image description">
								<span data-src="<?php echo site_url('assets/web/');?>images/industries_we_serve/1.jpg" data-width="368" data-height="279"></span>
								<span data-src="<?php echo site_url('assets/web/');?>images/industries_we_serve/1.jpg" data-width="368" data-height="279" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
								<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="<?php echo site_url('assets/web/');?>images/industries_we_serve/1.jpg"></span>
								<![endif]-->
								<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
								<noscript><img src="<?php echo site_url('assets/web/');?>images/industries_we_serve/1.jpg" width="368" height="279" alt="image description" ></noscript>
							</span>
						<h3>ENERGY, NATURAL RESOURCES & ENVIRONMENT</h3>
						<div class="over">
							<div class="box">
								<div class="block">
									<div class="frame">
										<strong class="title">ENERGY, NATURAL RESOURCES & ENVIRONMENT</strong>
										<!-- <p>Curabitur mollis neque vel ligula congue convallis id tristique</p>
                                        <span class="btn-read">[+]</span> -->
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-4 col-xs-12 practice-col">
					<a href="#">
							<span data-picture data-alt="image description">
								<span data-src="<?php echo site_url('assets/web/');?>images/industries_we_serve/2.jpg" data-width="368" data-height="279"></span>
								<span data-src="<?php echo site_url('assets/web/');?>images/industries_we_serve/2.jpg" data-width="368" data-height="279" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
								<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="<?php echo site_url('assets/web/');?>images/industries_we_serve/1.jpg"></span>
								<![endif]-->
								<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
								<noscript><img src="<?php echo site_url('assets/web/');?>images/industries_we_serve/2.jpg" width="368" height="279" alt="image description" ></noscript>
							</span>
						<h3>MARITIME, SHIPPING</h3>
						<div class="over">
							<div class="box">
								<div class="block">
									<div class="frame">
										<strong class="title">MARITIME, SHIPPING</strong>
										<!-- <p>Curabitur mollis neque vel ligula congue convallis id tristique</p>
                                        <span class="btn-read">[+]</span> -->
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-4 col-xs-12 practice-col">
					<a href="#">
							<span data-picture data-alt="image description">
								<span data-src="<?php echo site_url('assets/web/');?>images/industries_we_serve/3.jpg" data-width="368" data-height="279"></span>
								<span data-src="<?php echo site_url('assets/web/');?>images/industries_we_serve/3.jpg" data-width="368" data-height="279" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
								<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="<?php echo site_url('assets/web/');?>images/industries_we_serve/3.jpg"></span>
								<![endif]-->
								<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
								<noscript><img src="<?php echo site_url('assets/web/');?>images/industries_we_serve/3.jpg" width="368" height="279" alt="image description" ></noscript>
							</span>
						<h3>CONSTRUCTION AND ENGINEERING</h3>
						<div class="over">
							<div class="box">
								<div class="block">
									<div class="frame">
										<strong class="title">CONSTRUCTION AND ENGINEERING</strong>
										<!-- <p>Curabitur mollis neque vel ligula congue convallis id tristique</p>
                                        <span class="btn-read">[+]</span> -->
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</section>
		<!-- news-block of the page -->
		<section class="container container-block news-block">
			<div class="row">
				<header class="main-heading news">
					<h2>Latest Updates</h2>
				</header>
				<div class="col-sm-9 col-xs-12 latest-news">
					<div class="news-post">
						<div class="alignleft">
							<a href="news-details-3.html">
									<span data-picture data-alt="image description">
										<span data-src="<?php echo site_url('assets/web/');?>images/lawabode_news_img/n3.jpg" data-width="270" data-height="210"></span>
										<span data-src="<?php echo site_url('assets/web/');?>images/lawabode_news_img/n3.jpg" data-width="270" data-height="210" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
										<!--[if (lt IE 9) & (!IEMobile)]>
										<span data-src="<?php echo site_url('assets/web/');?>"images/lawabode_news_img/n7.jpg""></span>
										<![endif]-->
										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										<noscript><img src="<?php echo site_url('assets/web/');?>images/lawabode_news_img/n3.jpg"/> width="270" height="210" alt="image description" ></noscript>
									</span>
								<span class="date-box"><span class="month">October</span>14</span>
							</a>
						</div>
						<div class="txt-box">
							<span class="city">Dhaka, Bangladesh</span>
							<h3><a href="news-details-3.html">CEO attended a conference in International Arbitration by ICC and ICC International Court of Arbitration (ICA).</a></h3>
							<ul class="post-nav list-inline">
								<li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
								<li><a href="#"><i class="fa fa-tag"></i> News</a></li>
								<!--<li><a href="#"><i class="fa fa-comment"></i>2 Comments</a></li>-->
							</ul>
							<p>CEO attended a conference in International Arbitration by ICC and ICC International Court of Arbitration (ICA) in Hotel Grand Hayatt Regency, New Delhi, India [...] </p>
						</div>
					</div>
					<div class="news-post">
						<div class="alignleft">
							<a href="news-details-4.html">
									<span data-picture data-alt="image description">
										<span data-src="<?php echo site_url('assets/web/');?>images/lawabode_news_img/n4.jpg" data-width="270" data-height="210"></span>
										<span data-src="<?php echo site_url('assets/web/');?>images/lawabode_news_img/n4.jpg" data-width="270" data-height="210" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
										<!--[if (lt IE 9) & (!IEMobile)]>
										<span data-src="<?php echo site_url('assets/web/');?>"images/lawabode_news_img/n7.jpg""></span>
										<![endif]-->
										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										<noscript><img src="<?php echo site_url('assets/web/');?>images/lawabode_news_img/n4.jpg" width="270" height="210" alt="image description" ></noscript>
									</span>
								<span class="date-box"><span class="month">October</span>12</span>
							</a>
						</div>
						<div class="txt-box">
							<span class="city">Dhaka, Bangladesh</span>
							<h3><a href="news-details-4.html">CEO attended  SIAC India Conference and Hard talk</a></h3>
							<ul class="post-nav list-inline">
								<li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
								<li><a href="#"><i class="fa fa-tag"></i> News</a></li>
								<!--<li><a href="#"><i class="fa fa-comment"></i>2 Comments</a></li>-->
							</ul>
							<p>CEO in SIAC India Conference and Hard talk in Imperial Hotel New Delhi [...] </p>
						</div>
					</div>
					<div class="news-post">
						<div class="alignleft">
							<a href="news-details-13.html">
									<span data-picture data-alt="image description">
										<span data-src="<?php echo site_url('assets/web/');?>images/lawabode_news_img/n13.jpg" data-width="270" data-height="210"></span>
										<span data-src="<?php echo site_url('assets/web/');?>images/lawabode_news_img/n13.jpg" data-width="270" data-height="210" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
										<!--[if (lt IE 9) & (!IEMobile)]>
										<span data-src="<?php echo site_url('assets/web/');?>"images/lawabode_news_img/n7.jpg""></span>
										<![endif]-->
										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										<noscript><img src="<?php echo site_url('assets/web/');?>images/lawabode_news_img/n13.jpg" width="270" height="210" alt="image description" ></noscript>
									</span>
								<span class="date-box"><span class="month">February</span>8-9</span>
							</a>
						</div>
						<div class="txt-box">
							<span class="city">Dhaka, Bangladesh</span>
							<h3><a href="news-details-13.html">CEO was an invited guest in the ‘Asia-Pacific Business Forum’</a></h3>
							<ul class="post-nav list-inline">
								<li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
								<li><a href="#"><i class="fa fa-tag"></i> News</a></li>
								<!--<li><a href="#"><i class="fa fa-comment"></i>2 Comments</a></li>-->
							</ul>
							<p>CEO was an invited guest in the ‘Asia-Pacific Business Forum’ organized by ICC Bangladesh, Ministry of Commerce of Bangladesh and United Nations ESCAP in Pan Pacific Sonargaon Hotel, Dhaka, Bangladesh [...] </p>
						</div>
					</div>
					<div class="news-post">
						<div class="alignleft">
							<a href="news-details-14.html">
									<span data-picture data-alt="image description">
										<span data-src="<?php echo site_url('assets/web/');?>images/lawabode_news_img/n14.jpg" data-width="270" data-height="210"></span>
										<span data-src="<?php echo site_url('assets/web/');?>images/lawabode_news_img/n14.jpg" data-width="270" data-height="210" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
										<!--[if (lt IE 9) & (!IEMobile)]>
										<span data-src="<?php echo site_url('assets/web/');?>"images/lawabode_news_img/n7.jpg""></span>
										<![endif]-->
										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										<noscript><img src="<?php echo site_url('assets/web/');?>images/lawabode_news_img/n14.jpg" width="270" height="210" alt="image description" ></noscript>
									</span>
								<span class="date-box"><span class="month">January</span>24,25</span>
							</a>
						</div>
						<div class="txt-box">
							<span class="city">Dhaka, Bangladesh</span>
							<h3><a href="news-details-14.html">CEO was an invited guest in the ‘Investment and Policy Summit’</a></h3>
							<ul class="post-nav list-inline">
								<li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
								<li><a href="#"><i class="fa fa-tag"></i> News</a></li>
								<!--<li><a href="#"><i class="fa fa-comment"></i>2 Comments</a></li>-->
							</ul>
							<p>CEO was an invited guest in the ‘Investment and Policy  Summit’ organized by Board of Investment of Bangladesh, DCCI, BUILD in Hotel Radisson, Dhaka in January 24-25 of 2016[...] </p>
						</div>
					</div>
					<div class="news-post">
						<div class="alignleft">
							<a href="news-details-14.html">
									<span data-picture data-alt="image description">
										<span data-src="<?php echo site_url('assets/web/');?>images/lawabode_news_img/n14.jpg" data-width="270" data-height="210"></span>
										<span data-src="<?php echo site_url('assets/web/');?>images/lawabode_news_img/n14.jpg" data-width="270" data-height="210" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
										<!--[if (lt IE 9) & (!IEMobile)]>
										<span data-src="<?php echo site_url('assets/web/');?>"images/lawabode_news_img/n7.jpg""></span>
										<![endif]-->
										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										<noscript><img src="<?php echo site_url('assets/web/');?>images/lawabode_news_img/n14.jpg" width="270" height="210" alt="image description" ></noscript>
									</span>
								<span class="date-box"><span class="month">August</span>12</span>
							</a>
						</div>
						<div class="txt-box">
							<span class="city">Dhaka, Bangladesh</span>
							<h3><a href="news-details-14.html">CEO is contributing in the FGD on the Textile Sustainability Platform (TSP)</a></h3>
							<ul class="post-nav list-inline">
								<li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
								<li><a href="#"><i class="fa fa-tag"></i> News</a></li>
								<!--<li><a href="#"><i class="fa fa-comment"></i>2 Comments</a></li>-->
							</ul>
							<p>CEO participated in a Focus Group Discussion (FGD) on the Textile Sustainability Platform (TSP) implemented by IFC-WBG and BUILD in the BGMEA Bhaban [...] </p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="success-col">
						<div class="video-block">
							<a href="#video-popup1" class="lightbox">
								<img class="height-257" src="<?php echo site_url('assets/web/');?>images/t1.png" alt="iamge description">
								<span class="btn-play"><i class="fa fa-play-circle"></i></span>
							</a>
						</div>
						<h3>CEO at Ain Kanun Ep: 87</h3>
						<span class="title">Posted by: Admin</span>
						<p>Live talk show with our CEO about Law & Justice- discussing & answering several questions.</p>
					</div>
				</div>
			</div>
		</section>
		<!-- clients-gallery of the Page -->
		<div class="clients-gallery">
			<section class="container container-block gallery">
				<div class="row">
					<div class="col-xs-12">
						<header class="main-heading">
							<h2>What Our Client Say</h2>
						</header>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="quotes-gallery">
							<ul class="quotes-pagination list-inline">
								<li class="pagerslide">
									<a href="#">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/79x73" data-width="79" data-height="73"></span>
												<span data-src="http://placehold.it/79x73" data-width="79" data-height="73" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/79x73"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/79x73" width="79" height="73" alt="image description" ></noscript>
											</span>
									</a>
								</li>
								<li class="pagerslide">
									<a href="#">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/79x73" data-width="79" data-height="73"></span>
												<span data-src="http://placehold.it/79x73" data-width="79" data-height="73" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/79x73"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/79x73" width="79" height="73" alt="image description" ></noscript>
											</span>
									</a>
								</li>
								<li class="pagerslide">
									<a href="#">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/79x73" data-width="79" data-height="73"></span>
												<span data-src="http://placehold.it/79x73" data-width="79" data-height="73" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/79x73"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/79x73" width="79" height="73" alt="image description" ></noscript>
											</span>
									</a>
								</li>
								<li class="pagerslide">
									<a href="#">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/79x73" data-width="79" data-height="73"></span>
												<span data-src="http://placehold.it/79x73" data-width="79" data-height="73" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/79x73"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/79x73" width="79" height="73" alt="image description" ></noscript>
											</span>
									</a>
								</li>
								<li class="pagerslide">
									<a href="#">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/79x73" data-width="79" data-height="73"></span>
												<span data-src="http://placehold.it/79x73" data-width="79" data-height="73" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/79x73"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/79x73" width="79" height="73" alt="image description" ></noscript>
											</span>
									</a>
								</li>
								<li class="pagerslide">
									<a href="#">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/79x73" data-width="79" data-height="73"></span>
												<span data-src="http://placehold.it/79x73" data-width="79" data-height="73" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/79x73"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/79x73" width="79" height="73" alt="image description" ></noscript>
											</span>
									</a>
								</li>
							</ul>
							<div class="quotes-mask">
								<div class="quotes-slideset">
									<div class="quotes-slide">
										<blockquote class="gallery-quotes">
											<i class="fa fa-quote-left"></i>
											<p>We have always been looking for honest legal advices. Law Abode gave us honest best advices with the objective of resolving the dispute expeditiously, thus saving our time and cost.</p>
											<footer><cite title="Source Title">signature</cite></footer>
										</blockquote>
										<ul class="slide-social-networks list-inline">
											<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<a class="pager-prev" href="#"><i class="fa fa-chevron-left"></i></a>
							<a class="pager-next" href="#"><i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
				</div>
			</section>
			<div class="parallax-holder">
				<div class="parallax-frame">
					<img src="http://placehold.it/1280x854" height="854" width="1280" alt="image description">
				</div>
			</div>
		</div>

		<section class="container container-block clients2">
			<div class="row">
				<div class="col-xs-12">
					<header class="main-heading">
						<h2>Our Clients</h2>
					</header>
				</div>
			</div>
			<!-- our-clients of the Page -->
			<div class="row our-clients">
				<div class="col-xs-12">
					<!-- clients-carousel of the page -->
					<div class="clients-carousel">
						<div class="clients-mask">
							<div class="clients-slideset">
								<div class="clients-slide">
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/134x85" data-width="134" data-height="85"></span>
												<span data-src="http://placehold.it/134x85" data-width="134" data-height="85" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/134x85"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/134x85" width="134" height="85" alt="image description" ></noscript>
											</span>

									</a>
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/200x77" data-width="200" data-height="77"></span>
												<span data-src="http://placehold.it/200x77" data-width="200" data-height="77" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/200x77"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/200x77" width="200" height="77" alt="image description" ></noscript>
											</span>
									</a>
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/88x88" data-width="88" data-height="88"></span>
												<span data-src="http://placehold.it/88x88" data-width="88" data-height="88" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/88x88"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/88x88" width="88" height="88" alt="image description" ></noscript>
											</span>
									</a>
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/142x52" data-width="142" data-height="52"></span>
												<span data-src="http://placehold.it/142x52" data-width="142" data-height="52" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/142x52"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/142x52" width="142" height="52" alt="image description" ></noscript>
											</span>
									</a>
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/79x79" data-width="79" data-height="86"></span>
												<span data-src="http://placehold.it/79x79" data-width="79" data-height="86" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/142x52"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/79x79" width="79" height="86" alt="image description" ></noscript>
											</span>
									</a>
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/134x85" data-width="134" data-height="85"></span>
												<span data-src="http://placehold.it/134x85" data-width="134" data-height="85" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/134x85"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/134x85" width="134" height="85" alt="image description" ></noscript>
											</span>
									</a>
								</div>
								<div class="clients-slide">
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/134x85" data-width="134" data-height="85"></span>
												<span data-src="http://placehold.it/134x85" data-width="134" data-height="85" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/134x85"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/134x85" width="134" height="85" alt="image description" ></noscript>
											</span>
									</a>
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/200x77" data-width="200" data-height="77"></span>
												<span data-src="http://placehold.it/200x77" data-width="200" data-height="77" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/200x77"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/200x77" width="200" height="77" alt="image description" ></noscript>
											</span>
									</a>
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/88x88" data-width="88" data-height="88"></span>
												<span data-src="http://placehold.it/88x88" data-width="88" data-height="88" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/200x77"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/88x88" width="88" height="88" alt="image description" ></noscript>
											</span>
									</a>
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/142x52" data-width="142" data-height="52"></span>
												<span data-src="http://placehold.it/142x52" data-width="142" data-height="52" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/142x52"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/142x52" width="142" height="52" alt="image description" ></noscript>
											</span>
									</a>
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/79x86" data-width="79" data-height="86"></span>
												<span data-src="http://placehold.it/79x86" data-width="79" data-height="86" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/79x86"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/79x86" width="79" height="86" alt="image description" ></noscript>
											</span>
									</a>
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/134x85" data-width="134" data-height="85"></span>
												<span data-src="http://placehold.it/134x85" data-width="134" data-height="85" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/134x85"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/134x85" width="134" height="85" alt="image description" ></noscript>
											</span>

									</a>
								</div>
								<div class="clients-slide">
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/134x85" data-width="134" data-height="85"></span>
												<span data-src="http://placehold.it/134x85" data-width="134" data-height="85" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/134x85"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/134x85" width="134" height="85" alt="image description" ></noscript>
											</span>

									</a>
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/200x77" data-width="200" data-height="77"></span>
												<span data-src="http://placehold.it/200x77" data-width="200" data-height="77" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/200x77"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/200x77" width="200" height="154" alt="image description" ></noscript>
											</span>
									</a>
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/88x88" data-width="88" data-height="88"></span>
												<span data-src="http://placehold.it/88x88" data-width="88" data-height="88" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/88x88"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/88x88" width="88" height="88" alt="image description" ></noscript>
											</span>
									</a>
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/142x52" data-width="142" data-height="52"></span>
												<span data-src="http://placehold.it/142x52" data-width="142" data-height="52" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/142x52"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/142x52" width="142" height="52" alt="image description" ></noscript>
											</span>
									</a>
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/79x86" data-width="79" data-height="86"></span>
												<span data-src="http://placehold.it/79x86" data-width="79" data-height="86" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/79x86"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/79x86" width="79" height="86" alt="image description" ></noscript>
											</span>
									</a>
									<a href="#" class="img-holder">
											<span data-picture data-alt="image description">
												<span data-src="http://placehold.it/134x85" data-width="134" data-height="85"></span>
												<span data-src="http://placehold.it/134x85" data-width="134" data-height="85" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
												<!--[if (lt IE 9) & (!IEMobile)]>
												<span data-src="http://placehold.it/134x85"></span>
												<![endif]-->
												<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												<noscript><img src="http://placehold.it/134x85" width="134" height="85" alt="image description" ></noscript>
											</span>
									</a>
								</div>
							</div>
						</div>
						<a class="btn-prev2" href="#"><i class="fa fa-angle-left"></i></a>
						<a class="btn-next2" href="#"><i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!-- footer-holder of the Page -->

	<!-- footer of the Page -->
	<footer id="footer">
		<div class="container holder">
			<div class="row">
				<div class="col-sm-5 col-xs-12 copyrights">
					<p>
						&copy; Law Adobe Global Ltd
						| Developed by <a target="_blank" href="http://waaffsolutions.com/">WAAFF Solutions</a>
					</p>
				</div>
				<div class="col-sm-7 col-xs-12 copyrights">
					<ul class="footer-nav list-inline">
						<li><a href="index.html">Home</a></li>
						<li><a href="aboutus.html">About Us</a></li>
						<li><a href="practice-area.html">Industries We Serve</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="news.html">News</a></li>
						<li><a href="blog.html">Blogs</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="contactus.html">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- <div class="pre-loader"><span class="preloader1"></span></div> -->
	<div class="popup-holder">
		<div id="video-popup1" class="lightbox video-lightbox videoarea">
			<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/x1Q5vbAV9yo" frameborder="0" allowfullscreen></iframe> -->
			<iframe width="560" height="315" src="https://www.youtube.com/embed/uK_ARn-HNd0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
		</div>
	</div>
</div>

<script src="<?php echo site_url('assets/web/js/jquery-1.11.2.min.js');?>"></script>
<script src="<?php echo site_url('assets/web/js/bootstrap.js');?>"></script>
<script src="<?php echo site_url('assets/web/js/jquery.main.js');?>"></script>
<script src="<?php echo site_url('assets/web/js/jquery.datepicker.js');?>"></script>
<script type="text/javascript">
	if (navigator.userAgent.match(/IEMobile\/10\.0/) || navigator.userAgent.match(/MSIE 10.*Touch/)) {
		var msViewportStyle = document.createElement('style')
		msViewportStyle.appendChild(
			document.createTextNode(
				'@-ms-viewport{width:auto !important}'
			)
		)
		document.querySelector('head').appendChild(msViewportStyle)
	}
</script>
</body>
</html>
