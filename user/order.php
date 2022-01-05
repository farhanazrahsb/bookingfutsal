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
<!-- //Custom Theme files -->  
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
									<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="gallery_junior.php" data-hover="Futsal Junior">Futsal Junior</a></li>
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
									<li><a href="#" class="active" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'] ?> <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="order.php" data-hover="Order" class="active">Order</a></li>
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
		<!-- about -->
<div class="about">
	<div class="container">
	<div class="wthree_head_section">
				<h3 class="w3l_header">Order</h3>
			</div>
		<div class="ab-agile">
		<div class="table-responsive">
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead><caption><center><b>Daftar Booking Futsal Junior & 4D</b></center></caption>
			<tr>
				<th>No</th>
				<th>Nama Pemesan</th>
				<th>Nama Lapangan</th>
				<th>Handphone</th>
				<th>Nomor Lapangan</th>
				<th>Harga</th>
				<th>Tanggal</th>
				<th>Jam Awal</th>
				<th>Jam Akhir</th>
				<th>Total Jam</th>
				<th>Total Bayar</th>
				<th>Rekening Admin</th>
				<th>Detail</th>
			</trinfo			</thead>
			<tbody>
			<?php
			include ('../koneksi/koneksi.php');

			$username=$_SESSION['username'];
			$query = mysql_query ("SELECT * FROM order_lap WHERE username='$username' order by tgl");
			$no=1;
			while ($var=mysql_fetch_array($query)) {
				$no_lap=mysql_fetch_array(mysql_query("SELECT no_lap FROM lap_junior WHERE id_lap='$var[id_lap]'"));
				$total= $var['harga'] * $var['total_jam'];
			?>
			<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $var ['nama']; ?></td>
			<td><?php echo $var ['nama_lap']; ?></td>
			<td><?php echo $var ['no_hp']; ?></td>
			<td><?php echo $no_lap ['no_lap']; ?></td>
			<td><?php echo $var ['harga']; ?></td>
			<td><?php echo $var ['tgl']; ?></td>
			<td><?php echo $var ['jam_awal']; ?></td>
			<td><?php echo $var ['jam_akhir']; ?></td>
			<td><?php echo $var ['total_jam']; ?></td>
			<td><b style="color: red;"><?php echo $total; ?></b></td>
			<td><?php echo $var ['rek_admin']; ?></td>
			<td><a href="cetak_detail.php?&no=<?php echo $var['no']; ?>"><button class="btn btn-info">Detail</button></a></td>
			</tr>
			<?php
			$no++;
			}
			?>
			</tbody>
			</table>
		</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //about -->
 	
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
    <script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(id_lap){  
    document.getElementById('harga').value = dtMhs[id_lap].no_lap;  
    };  
    </script> 
</body>
</html>