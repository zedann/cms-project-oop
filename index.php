<?php
    require "lib/category.php";
    require "lib/content.php";
    require "lib/validation.php";
    require "lib/helper.php";
    $allContent = new content;
    $allContent =  $allContent->getAllContents();
?>
<!DOCTYPE html>
<html>
<head>
	<title>BLOG</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="design/front/css/all.css">
	<link rel="stylesheet" type="text/css" href="design/front/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="design/front/css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="design/front/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="design/front/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="design/front/css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="design/front/css/jquery.rateyo.css"/>
	<link rel="stylesheet" type="text/css" href="design/front/css/jquery.mmenu.all.css" />
	<link rel="stylesheet" type="text/css" href="design/front/inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="design/front/style.css">
</head>
<body>
	<div id="page" class="site">
		<header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
							<a href="mailto:info@educationpro.com"><i class="fas fa-envelope"></i> info@educationpro.com</a>
						</div>
						<div class="top-header-block">
							<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977 9813639131</a>
						</div>
					</div>
					<div class="top-header-right">
						<div class="social-block">
							<ul class="social-list">
								<li><a href=""><i class="fab fa-viber"></i></a></li>
								<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-messenger"></i></a></li>
								<li><a href=""><i class="fab fa-twitter"></i></a></li>
								<li><a href=""><i class="fab fa-skype"></i></a></li>
							</ul>
						</div>
						<div class="login-block">
							<a href="">Login /</a>
							<a href="">Register</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Top header Close -->
			<div class="main-header">
				<div class="container">
					<div class="logo-wrap">
						<img src="design/front/images/site-logo.jpg" alt="Logo Image">
					</div>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">
								<li><a href="#">Home</a></li>
								<li class="menu-parent">Courses
									<ul class="sub-menu">
										<li><a href="#">Child</a></li>
										<li><a href="#">Child</a></li>
										<li class="menu-parent">Child
											<ul class="sub-menu">
												<li><a href="">Grand-child</a></li>
												<li><a href="">Grand-child</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-parent">News
									<ul class="sub-menu">
										<li><a href="#">Child</a></li>
										<li><a href="#">Child</a></li>
									</ul>
								</li>
								<li><a href="">About</a></li>
								<li><a href="">Gallery</a></li>
								<li><a href="">Contact</a></li>
							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Close -->
		<div class="banner">
			<div class="owl-four owl-carousel">
				<img src="design/front/images/page-banner.jpg" alt="Image of Bannner">
				<img src="design/front/images/page-banner2.jpg" alt="Image of Bannner">
				<img src="design/front/images/page-banner3.jpg" alt="Image of Bannner">
			</div>
			<div class="container">
				<h1>welcome to education pro</h1>
				<h3>With our advance search feature you can now find the trips for you...</h3>
			</div>
			 <div id="owl-four-nav" class="owl-nav"></div>
		</div>
		<!-- <div class="banner">
			<div class="owl-five owl-carousel owl-theme">
	            <div class="item-video">
            		<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            		</iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
            		<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            		</iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
          </div>
		</div> -->
		<!-- Banner Close -->
		<section class="course-listing-page">
			<div class="container">
				<div id="filters" class="button-group">
					<button class="button" data-filter="*">all</button>
  					<button class="button" data-filter=".business">business</button>
  					<button class="button" data-filter=".design">design</button>
  					<button class="button" data-filter=".development">development</button>
  					<button class="button" data-filter=".seo">seo</button>
  					<button class="button" data-filter=".marketing">marketing</button>
				</div>

				<div class="grid" id="cGrid">
					
					<?php foreach($allContent as $content):?>	
					<div class="grid-item development" data-category="development">
						<div class="img-wrap">
							<img src="<?=$content['cover'] ?>" style="width: 100%;height:300px" alt="courses picture">
						</div>
						<a href="singleblog.php?id=<?=$content['id']?>" class="learn-desining-banner-course"><?=$content['name'] ?></a>
						<div class="box-body">
							<p><?= $content['short_desc']?></p>	
						</div>
					</div>
					<?php endforeach;?>	


					
				</div>
			</div>
		</section>

		<section class="query-section">
			<div class="container">
				<p>Any Queries? Ask us a question at<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977 9813639131</a></p>
			</div>
		</section>
		<!-- End of Query Section -->
		<footer class="page-footer">
			<div class="footer-first-section">
				<div class="container">
					<div class="box-wrap">
						<header>
							<h1>about</h1>
						</header>
						<p>Edugate is a great start for and education. Personnel or oganization to start the online business with 1 click</p>

						<h4><a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977 9813639131</a></h4>
						<h4><a href="mailto:info@educationpro.com"><i class="fas fa-envelope"></i> info@educationpro.com</a></h4>
						<h4><i class="fas fa-map-marker-alt"></i>Gongabu, Kathmandu, Nepal</h4>
					</div>

					<div class="box-wrap">
						<header>
							<h1>links</h1>
						</header>
						<ul>
							<li><a href="#">Teacher</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="#">Courses</a></li>
						</ul>
					</div>

					<div class="box-wrap">
						<header>
							<h1>recent courses</h1>
						</header>
						<div class="recent-course-wrap">
							<img src="images/ui-ux.jpg" alt="Ui/Ux Designing">
							<a href=""><div class="course-name">
								<h3>UI/UX Designer courses</h3>
								<p><span>$50</span> $40</p>
							</div></a>
						</div>
						<div class="recent-course-wrap">
							<img src="images/ui-ux.jpg" alt="Ui/Ux Designing">
							<a href=""><div class="course-name">
								<h3>UI/UX Designer courses</h3>
								<p><span>$50</span> $40</p>
							</div></a>
						</div>
					</div>

					<div class="box-wrap">
						<header>
							<h1>quick contact</h1>
						</header>
						<section class="quick-contact">
							<input type="email" name="email" placeholder="Your Email*">
							<textarea placeholder="Type your message*"></textarea>
							<button>send message</button>
						</section>
					</div>

				</div>
			</div>
			<!-- End of box-Wrap -->
			<div class="footer-second-section">
				<div class="container">
					<hr class="footer-line">
					<ul class="social-list">
						<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-skype"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
					</ul>
					<hr class="footer-line">
				</div>
			</div>
			<div class="footer-last-section">
				<div class="container">
					<p>Copyright 2018 &copy; educationpro.com <span> | </span> Theme designed and developed by <a href="https://labtheme.com">Lab Theme</a></p>
				</div>
			</div>
		</footer>
	</div>
	<script type="text/javascript" src="design/front/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="design/front/js/lightbox.js"></script>
	<script type="text/javascript" src="design/front/js/all.js"></script>
	<script type="text/javascript" src="design/front/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="design/front/js/owl.carousel.js"></script>
	<script type="text/javascript" src="design/front/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="design/front/js/jquery.rateyo.js"></script>
	<script type="text/javascript" src="design/front/js/jquery.mmenu.all.js"></script>
	<script type="text/javascript" src="design/front/js/custom.js"></script>
</body>
</html>