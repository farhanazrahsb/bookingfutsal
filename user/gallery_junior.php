<?php
include 'cekuser.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Junior Futsal & 4D Futsal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Football Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="css/lightbox.css"><!-- For-gallery-CSS -->
<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body> 
	<!-- banner -->
	<div class="w3ls-banner">
		<div class="w3lsbanner-info">
			<!-- header -->
			<div class="header">
				<div class="container">  
					<div class="header-mdl agileits-logo"><!-- header-two --> 
						<h1><a href="beranda.php">Junior Futsal & 4D Futsal</a></h1> 
					</div>
					<div class="header-nav"><!-- header-three --> 	
						<nav class="navbar navbar-default">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button> 
							</div>
							<!-- top-nav -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav cl-effect-16">
									<li><a href="beranda.php" data-hover="Home">Home</a></li>
									<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="about_junior.php" data-hover="Futsal Junior">Futsal Junior</a></li>
											<li><a href="about_4d.php" data-hover="4D Futsal">4D Futsal</a></li>
										</ul>
									</li> 
									<li><a href="#" class="active" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="gallery_junior.php" data-hover="Futsal Junior" class="active">Futsal Junior</a></li>
											<li><a href="gallery_4d.php" data-hover="4D Futsal">4D Futsal</a></li>
										</ul>
									</li>
									<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pesan <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="order_junior.php" data-hover="Futsal Junior">Futsal Junior</a></li>
											<li><a href="order_4d.php" data-hover="4D Futsal">4D Futsal</a></li>
										</ul>
									</li>
									<li><a href="contact.php" data-hover="Contact">Contact</a></li>
									<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'] ?> <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="order.php" data-hover="Order">Order</a></li>
											<li><a href="logout.php" data-hover="Logout">Logout</a></li>
										</ul>
									</li>
								</ul>  
								<div class="clearfix"> </div>	
							</div>
						</nav>    
					</div>	
				</div>	
			</div>	
			<!-- //header --> 
			
		</div>	
	</div>	
	<!-- //banner -->
		<!--gallery-->
	<div class="gallery">
		<div class="container">	
		<div class="wthree_head_section">
			<div class="wthree_head_section">
				<h3 class="w3l_header">Junior Gallery</h3>
			</div>
			<div class="gallery-info">
				<div class="col-md-3 gallery-grids">
					<a href="../images/junior/1.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="../images/junior/1.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="../images/junior/2.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="../images/junior/2.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="../images/junior/3.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="../images/junior/3.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="../images/junior/4.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="../images/junior/4.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="../images/junior/5.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="../images/junior/5.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<script src="js/lightbox-plus-jquery.min.js"></script>
		</div>
</div>
</div>
<!--//gallery-->
    	
		<!-- footer -->
	<div class="footer">
	<p class="copyright">© <?php echo date("Y"); ?> Junior Futsal & 4D Futsal. All Rights Reserved</p>
	</div>
	<!-- //footer -->
  
	<!-- js --> 
	<script src="js/jquery-2.2.3.min.js"></script> 
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //js -->  
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
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
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>