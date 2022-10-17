<?php
require "lib/category.php";
require "lib/content.php";
require "lib/validation.php";
require "lib/review.php";
require "lib/helper.php";
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$singleContent = new content;
	$singleContent =  $singleContent->getSingleContent($id);
	$reviews = new review;
	$allReviews = $reviews->getAllReviews();

}else {
	header("LOCATION: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$singleContent['name']?></title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="design/front/css/all.css">
	<link rel="stylesheet" type="text/css" href="design/front/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="design/front/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="design/front/css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="design/front/css/jquery.mmenu.all.css" />
	<link rel="stylesheet" type="text/css" href="design/front/inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="design/front/style.css">
</head>
<body>
<!-- <body class="full-width"> -->
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
						<img src="images/site-logo.jpg" alt="Logo Image">
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
				<img src="images/page-banner.jpg" alt="Image of Bannner">
				<img src="images/page-banner2.jpg" alt="Image of Bannner">
				<img src="images/page-banner3.jpg" alt="Image of Bannner">
			</div>
			
			 <div id="owl-four-nav" class="owl-nav"></div>
		</div>

		<div class="page-content" itemscope itemtype=" http://schema.org/Blog">
			<div class="container">
				<article class="page-article" itemprop="blogPost">
					<h1 itemprop="about"><?=$singleContent['name']?></h1>
					<span><a href="#" itemprop="author">By <?=$singleContent['user_name']?></a><a href="#">In <?=$singleContent['category_name']?></a></span>
					<img itemprop="image" src="<?=$singleContent['cover']?>" alt="Image">
					<p style="font-size: 25px;"><?=$singleContent['main_content']?></p>
					
				</article>
				
				
				<section class="comment-section">
					<div id="comments" class="comments-area comment" itemprop="comment">
								<ol class="comment-list" id="comment-container">
									<?php foreach($allReviews as $review): ?>
									<li class="comment even thread-even depth-1 parent">
										<article class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img class="avatar photo" src="images/comment-img1.jpg" alt="">
													<b class="fn" ><a  href="#"><?=$review['name']?></a></b>
												</div>
												<div class="comment-metadata">
													<a href="#"><time datetime="2013-10-02">October 09, 2015</time></a>
												</div><br>
											</footer>
											<div class="comment-content">
												<p "><?=$review['comment']?></p>
											</div>
											
										</article>
										
									</li>
									<?php endforeach;?>
									
								</ol>
					</div>
					<div class="comment-form">
						<h2>leave a comment</h2>
						
							<input type="text" name="name" id="name" placeholder="Username*">
							<input type="email" name="email" id="email" placeholder="Email*">
							<input type="hidden" value="<?=$singleContent['id'] ?>" name="content_id" id="content_id">
							<textarea id="review" name="review" placeholder="Write a comment.....">
							</textarea>
							<input type="submit" onclick="sendReview()" value="Submit">
						
						<p>Note: Your email address will not be published</p>
					</div>
				</section>
			</div>
		</div>
		<!-- Page-content closed -->
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
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		function sendReview(){
			let name = $("#name").val();
			let email = $("#email").val();
			let review = $("#review").val();
			let contentId = $("#content_id").val();
			let commentContainer = $('#comment-container');
			$.ajax({
				type:"POST",
				url:'sendreview.php',
				data:{
					name:name,
					email:email,
					review:review,
					contentId:contentId
				},
				success:function(){
					$comment = `
					<li class="comment even thread-even depth-1 parent">
										<article class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img class="avatar photo" src="images/comment-img1.jpg" alt="">
													<b class="fn" ><a  href="#">${name}</a></b>
												</div>
												<div class="comment-metadata">
													<a href="#"><time datetime="2013-10-02">October 09, 2015</time></a>
												</div><br>
											</footer>
											<div class="comment-content">
												<p>${review}</p>
											</div>
											
										</article>
										
									</li>
					`;
					commentContainer.append($comment);
				}
			});
			
		}
	</script>
</body>
</html>
