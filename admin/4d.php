<?php
include 'cekadmin.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Junior Futsal & 4D Futsal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="#">Junior Futsal & 4D Futsal</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-wrench"></i><?php echo $_SESSION['username'] ?> <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="logout.php"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="beranda.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
					<li><a href="junior.php"><i class="glyphicon glyphicon-th"></i> Junior Futsal</a></li>
					<li class="current"><a href="4d.php"><i class="glyphicon glyphicon-th"></i> 4D Futsal</a></li>
                    <li><a href="user.php"><i class="glyphicon glyphicon-user"></i> User</a></li>
                    <li><a href="admin.php"><i class="glyphicon glyphicon-eye-open"></i> Admin</a></li>
                    <li><a href="message.php"><i class="glyphicon glyphicon-comment"></i> Message</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	
		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">4D Futsal</div>
	  					<a href="input4d.php"><button class="btn btn-success"><i class="glyphicon glyphicon-plus">Add</i></button></a>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  		<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>No</th>
								<th>ID Lapangan</th>
								<th>Nama Lapangan</th>
								<th>Nomor Lapangan</th>
								<th>Harga</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
			            include ('../koneksi/koneksi.php');

			            $query = mysql_query ("SELECT * FROM lap_4d");
			            $no=1;
			            while ($var=mysql_fetch_array($query)) {
			            ?>
			            <tr>
			              <td><?php echo $no ?></td>
			              <td><?php echo $var ['id_lap']; ?></td>
			              <td><?php echo $var ['nama_lap']; ?></td>
			              <td><?php echo $var ['no_lap']; ?></td>
			              <td><?php echo $var ['harga']; ?></td>
			              <td align="center"><?php echo "<a class='glyphicon glyphicon-trash' title='Hapus' href='delete4d.php?no=$var[no]'></a>"; ?></td>
			            </tr>
			            <?php
			            $no++;
			          	}
			          	?>
						</tbody>
					</table>
  				</div>
					</div>
		  		</div>
		  	</div>
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               © <?php echo date("Y"); ?> Junior Futsal & 4D Futsal. All Rights Reserved
            </div>
            
         </div>
      </footer>

      <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>
  </body>
</html>