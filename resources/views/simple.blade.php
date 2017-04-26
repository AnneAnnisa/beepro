
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Bee-Pro</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Beautyou  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/web-font-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600,600italic,800' rel='stylesheet' type='text/css'>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>
<body>
<!--start-home-->
		<div class="banner two" id="home">
			<div class="container">
			  <div class="head-top">
			   <!--logo-->
			       <div class="logo">
                      <a href="index.html"><h1>Bee-Pro</h1></a>
				   </div>
				    <div class="phone">
				      <a href='login.html'><h5>Login</h5></a>
					</div>
	               <div class="clearfix"></div>
					<!--//logo-->
              </div>
			   <div class="banner-inner second">
			      <h2 class="sec-head">About</h2>
		      </div>
		</div>
	 </div>
	      <div class="header-bottom">
			  <div class="fixed-header">
			   <div class="menu">Menu</div>
					<span class="menu"> </span>
					<div class="top-menu">
					<nav>
						<ul class="cl-effect-16">
						<li><a href="index.html" data-hover="HOME">Home</a></li> 
						<li><a href="about.html" data-hover="About">About</a></li>
						<li><a href="typography.html" data-hover="SERVICES">SERVICES</a></li>
						<li><a href="gallery.html" data-hover="Gallery">Gallery</a></li>
						<li><a class="active" href="blog.html" data-hover="BLOG">BLOG</a></li>
						<li><a href="contact.html" data-hover="CONTACT">Contact Us</a></li>
					</ul>

					</nav>		
					</div>
							<div class="clearfix"></div>
				<!-- script for menu -->
						<script>
						$( "span.menu" ).click(function() {
						  $( ".top-menu" ).slideToggle( "slow", function() {
							// Animation complete.
						  });
						});
					</script>
					<!-- script for menu -->
					<script>
				$(document).ready(function() {
					 var navoffeset=$(".header-bottom").offset().top;
					 $(window).scroll(function(){
						var scrollpos=$(window).scrollTop(); 
						if(scrollpos >=navoffeset){
							$(".header-bottom").addClass("fixed");
						}else{
							$(".header-bottom").removeClass("fixed");
						}
					 });
					 
				});
				</script>
			 </div>
		</div>
<!--blog-section-->
      <div class="blog-section">
		<div class="container">
		   <div class="blog-top">
			   <div class="blog-single">
					<div class="single-img">
					 <a href="#">
					  <img src="images/single.jpg" alt="">
					</a>
                       <a class="blog-text" href="single.html">Professional Hair Care</a>
					   <p class="post">Posted on Aug 29, 2015 by <a href="#">Admin</a></p>
					   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation consequat.</p>				                     
				</div>
				
		   </div>
		   <div class="single">
						<div class="leave">
							<h4>Leave a comment</h4>
						</div>
						<form id="commentform">
							 <p class="comment-form-author-name"><label for="author">Name</label>
								<input id="author" name="author" type="text" value="" size="30" aria-required="true">
							 </p>
							 <p class="comment-form-email">
								<label class="email">Email</label>
								<input id="email" name="email" type="text" value="" size="30" aria-required="true">
							 </p>
							 <p class="comment-form-comment">
								<label class="comment">Comment</label>
								<textarea></textarea>
							 </p>
							 <div class="clearfix"></div>
							<p class="form-submit">
							   <input name="submit" type="submit" id="submit" value="Send">
							</p>
							<div class="clearfix"></div>
						   </form>
				 <div class="single_grid2">
					   <h4 class="tz-title-4 tzcolor-blue">
							Comments
						</h4>
						<ul class="list">
						<li>
			            <div class="col-md-2 preview"><a href="#"><img src="images/co.png" class="img-responsive" alt=""></a></div>
			            <div class="col-md-10 data">
			                <div class="title"><a href="#">Customer</a><br><span class="m_14">Aug 30, 2015</span></div>
			                <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature</p>
							<h5 class="m_26"> <a href="#">reply</a></h5>
			            </div>
			           <div class="clearfix"></div>
			        </li>
			     	  <li>
			            <div class="col-md-2 preview"><a href="#"><img src="images/co.png" class="img-responsive" alt=""></a></div>
			            <div class="col-md-10 data">
			                <div class="title"><a href="#">Customer</a><br><span class="m_14">Sep 2, 2015</span></div>
			                <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature</p>
							<h5 class="m_26"> <a href="#">reply</a></h5>
			            </div>
			           <div class="clearfix"></div>
			        </li>
			        <li>
			            <div class="col-md-2 preview"><a href="#"><img src="images/co.png" class="img-responsive" alt=""></a></div>
			            <div class="col-md-10 data">
			                <div class="title"><a href="#">Customer</a><br><span class="m_14">Nov 2, 2015</span></div>
			                <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature</p>
							<h5 class="m_26"> <a href="#">reply</a></h5>
			            </div>
			           <div class="clearfix"></div>
			        </li>
			     </ul>
				</div>
			 </div>

		</div>
	  </div>
	</div>

<!--footer-->

<!-- //footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Surabaya, <span>Indonesia.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:beepro@indo.com">beepro@indo.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">About Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.html">Contact Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="faq.html">FAQ's</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.html">Login</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.html">Create Account</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
			
		<!--footer-->
		
		<div class="footer-copy">
			
			<div class="container">
				<p>© 2017 Bee-Pro. All rights reserved</p>
			</div>
		</div>
		
	</div>	
	<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>

<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
</body>
</html>
</html>