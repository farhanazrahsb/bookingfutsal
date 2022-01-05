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
									<li><a href="#" class="active" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pesan <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="order_junior.php" data-hover="Futsal Junior" class="active">Futsal Junior</a></li>
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
		<!-- about -->
<div class="about">
	<div class="container">
	<div class="wthree_head_section">
				<h3 class="w3l_header">Junior Order</h3>
			</div>
		<div class="ab-agile">
			<div class="col-md-6 aboutleft">
			<form action="order_proses.php" method="post">
			<input type="hidden" class="form-control" name="username" aria-describedby="basic-addon1" value="<?php echo $_SESSION['username'] ?>" readonly="readonly">
			<label>Nama Lapangan</label>
			<input type="text" class="form-control" name="nama_lap" aria-describedby="basic-addon1" value="Junior Futsal" readonly="readonly"><br>
			<label>Nama Pemesan</label>
			<input type="text" class="form-control" name="nama" placeholder="Place Here....." aria-describedby="basic-addon1"><br>
			<label>Handphone</label>
			<input type="text" class="form-control" name="no_hp" placeholder="Place Here....." aria-describedby="basic-addon1"><br>
			<label>Nomor Lapangan</label>
			<select name="id_lap" class="selectpicker form-control" data-live-search="true" id="id_lap" onchange="changeValue(this.value)">
	            	<option value="" selected>-- Lapangan --</option>
	            	<?php 
	                include "../koneksi/koneksi.php";
	                 
	                $result = mysql_query("select * from lap_junior");    
	                $jsArray = "var dtMhs = new Array();\n";        
	                while ($row = mysql_fetch_array($result)) {    
	                echo '<option value="' . $row['id_lap'] . '">' . $row['no_lap'] . '</option>';    
	                $jsArray .= "dtMhs['" . $row['id_lap'] . "'] = {no_lap:'" . addslashes($row['harga']) . "'};\n";    
	                }      
	                ?>    
	        </select><br>
	        <label>Harga</label>
	        <input type="text" class="form-control" name="harga" aria-describedby="basic-addon1" readonly="readonly" id="harga"><br>
	        <label>Tanggal</label>
	        <input type="date" class="form-control" name="tgl" aria-describedby="basic-addon1"><br>
	        <label>Jam Awal</label>
	        <select name="jam_awal" class="selectpicker form-control" data-live-search="true">
	            	<option value="" selected>-- Jam Awal --</option>
	                <option value="08:00-09:00">08:00-09:00</option>
				    <option value="09:00-10:00">09:00-10:00</option>
				    <option value="10:00-11:00">10:00-11:00</option>
				    <option value="11:00-12:00">11:00-12:00</option>
				    <option value="12:00-13:00">12:00-13:00</option>
				    <option value="13:00-14:00">13:00-14:00</option>
				    <option value="14:00-15:00">14:00-15:00</option>
				    <option value="15:00-16:00">15:00-16:00</option>
				    <option value="16:00-17:00">16:00-17:00</option>
				    <option value="17:00-18:00">17:00-18:00</option>
				    <option value="18:00-19:00">18:00-19:00</option>
				    <option value="19:00-20:00">19:00-20:00</option>
				    <option value="20:00-21:00">20:00-21:00</option>
				    <option value="21:00-22:00">21:00-22:00</option>
	        </select><br>
          	<label>Jam Akhir</label>
            <select name="jam_akhir" class="selectpicker form-control" data-live-search="true">
	            	<option value="" selected>-- Jam Akhir --</option>
	                <option value="08:00-09:00">08:00-09:00</option>
				    <option value="09:00-10:00">09:00-10:00</option>
				    <option value="10:00-11:00">10:00-11:00</option>
				    <option value="11:00-12:00">11:00-12:00</option>
				    <option value="12:00-13:00">12:00-13:00</option>
				    <option value="13:00-14:00">13:00-14:00</option>
				    <option value="14:00-15:00">14:00-15:00</option>
				    <option value="15:00-16:00">15:00-16:00</option>
				    <option value="16:00-17:00">16:00-17:00</option>
				    <option value="17:00-18:00">17:00-18:00</option>
				    <option value="18:00-19:00">18:00-19:00</option>
				    <option value="19:00-20:00">19:00-20:00</option>
				    <option value="20:00-21:00">20:00-21:00</option>
				    <option value="21:00-22:00">21:00-22:00</option>
	        </select><br>
          	<label>Jumlah Jam</label>
            <select name="total_jam" class="selectpicker form-control" data-live-search="true">
	            	<option value="" selected>-- Jumlah Jam --</option>
	                <option value="1">1</option>
				    <option value="2">2</option>
				    <option value="3">3</option>
				    <option value="4">4</option>
				    <option value="5">5</option>
				    <option value="6">6</option>
				    <option value="7">7</option>
				    <option value="8">8</option>
				    <option value="9">9</option>
				    <option value="10">10</option>
				    <option value="11">11</option>
				    <option value="12">12</option>
				    <option value="13">13</option>
				    <option value="14">14</option>
	        </select><br>
            <label>Rekening Admin</label>
            <select name="rek_admin" class="selectpicker form-control" data-live-search="true">
	            	<option value="" selected>-- Rekening Admin --</option>
	                <?php 
	                include "../koneksi/koneksi.php";
	                
	                $query=mysql_query("select * from admin order by no asc");
	                
	                while($row=mysql_fetch_array($query))
	                {
	                ?>
	                <option value="<?php  echo $row['nama_atm']; ?> - <?php  echo $row['nama_rek']; ?> - <?php  echo $row['no_rek']; ?>"><?php  echo $row['nama_atm']; ?> - <?php  echo $row['nama_rek']; ?> - <?php  echo $row['no_rek']; ?></option>
	                <?php 
	                }
	                ?>
	        </select><br>
                <input type="submit" class="btn btn-success" value="Save">
                <input type="reset" class="btn btn-warning" value="Reset">
			</form>	
			</div>

			<div class="col-md-6 aboutright">
			<div class="table-responsive">
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead><caption><center><b>Daftar Booking Futsal Junior & 4D</b></center></caption>
							<tr>
								<th>No</th>
								<th>Nama Pemesan</th>
								<th>Nama Lapangan</th>
								<th>Nomor Lapangan</th>
								<th>Tanggal</th>
								<th>Jam Awal</th>
								<th>Jam Akhir</th>
							</tr>
						</thead>
						<tbody>
						<?php
			            include ('../koneksi/koneksi.php');

			            $query = mysql_query ("SELECT * FROM order_lap order by tgl");
			            $no=1;
			            while ($var=mysql_fetch_array($query)) {
			            	$no_lap=mysql_fetch_array(mysql_query("SELECT no_lap FROM lap_junior WHERE id_lap='$var[id_lap]'"));
			            ?>
			            <tr>
			              <td><?php echo $no ?></td>
			              <td><?php echo $var ['nama']; ?></td>
			              <td><?php echo $var ['nama_lap']; ?></td>
			              <td><?php echo $no_lap ['no_lap']; ?></td>
			              <td><?php echo $var ['tgl']; ?></td>
			              <td><?php echo $var ['jam_awal']; ?></td>
			              <td><?php echo $var ['jam_akhir']; ?></td>
			            </tr>
			            <?php
			            $no++;
			          	}
			          	?>
						</tbody>
					</table>
					</div>
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