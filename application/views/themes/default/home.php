<section>
	<header class="row main-heading">
		<div class="col-xs-12">
			<h2>We Provide you with!</h2>
		</div>
	</header>
	<!-- services-holder of the page -->
	<div class="row services-holder">
		<?php if ($services): ?>
			<?php foreach ($services as $service): ?>
				<div class="col-sm-3 col-xs-12 services-col">
					<div class="img-box"></div>
					<h2><a href="services.html"><?php echo $service['name']; ?></a></h2>
					<p class="height-200 text-justify"><?php echo $service['content']; ?></p>
					<a href="<?php echo site_url('/read/services')?>" class="btn btn-default">Read More +</a>
				</div>
			<?php endforeach; ?>
		<?php else:?>
		<?php endif; ?>
	</div>
</section>
<!-- container block practice of the page -->
<section>
	<header class="row main-heading">
		<div class="col-xs-12">
			<h2>INDUSTRIES WE SERVE</h2>
		</div>
	</header>
	<!-- practice-block of the page -->

			<div class="row practice-block">
				<?php if ($industries): ?>
				<?php foreach ($industries as $industry): ?>
				<div class="col-sm-4 col-xs-12 practice-col">
					<a href="#">
							<span data-picture data-alt="image description">
								<span data-src="images/industries_we_serve/1.jpg" data-width="368" data-height="279"></span>
								<span data-src="images/industries_we_serve/1.jpg" data-width="368" data-height="279" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
								<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/industries_we_serve/1.jpg"></span>
								<![endif]-->
								<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
								<noscript><img src="<?php echo $industry['image_link']; ?>" width="368" height="279" alt="image description" ></noscript>
							</span>
						<h3><?php echo $industry['name']; ?></h3>
						<div class="over">
							<div class="box">
								<div class="block">
									<div class="frame">
										<strong class="title"><?php echo $industry['name']; ?></strong>
										<!-- <p>Curabitur mollis neque vel ligula congue convallis id tristique</p>
                                        <span class="btn-read">[+]</span> -->
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
					<?php endforeach; ?>
				<?php else:?>
				<?php endif; ?>
			</div>


</section>
<section>
	<div class="row">
		<header class="main-heading news">
			<h2>Latest Updates</h2>
		</header>
		<div class="col-sm-9 col-xs-12 latest-news">
			<?php if ($posts): ?>
				<?php foreach ($posts as $post): ?>
					<div class="news-post">
						<div class="alignleft">
							<a href="news-details-3.html">
									<span data-picture data-alt="image description">
										<span data-src="images/lawabode_news_img/n3.jpg" data-width="270" data-height="210"></span>
										<span data-src="images/lawabode_news_img/n3.jpg" data-width="270" data-height="210" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
										<!--[if (lt IE 9) & (!IEMobile)]>
										<span data-src=""images/lawabode_news_img/n7.jpg""></span>
										<![endif]-->
										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										<noscript><img src="<?php echo site_url('')?>/images/lawabode_news_img/n3.jpg"/> width="270" height="210" alt="image description" ></noscript>
									</span>
								<span class="date-box"><span class="month">October</span>14</span>
							</a>
						</div>
						<div class="txt-box">
							<span class="city">Dhaka, Bangladesh</span>
							<h3><a href="news-details-3.html"><?php echo $post['title']; ?></a></h3>
							<ul class="post-nav list-inline">
								<li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
								<li><a href="#"><i class="fa fa-tag"></i> News</a></li>
								<!--<li><a href="#"><i class="fa fa-comment"></i>2 Comments</a></li>-->
							</ul>
							<p>CEO attended a conference in International Arbitration by ICC and ICC International Court of Arbitration (ICA) in Hotel Grand Hayatt Regency, New Delhi, India [...] </p>
						</div>
					</div>
				<?php endforeach; ?>
			<?php else:?>
			<?php endif; ?>


		</div>
		<div class="col-sm-3 col-xs-12">
			<div class="success-col">
				<div class="video-block">
					<a href="#video-popup1" class="lightbox">
						<img class="height-257" src="images/t1.png" alt="iamge description">
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
