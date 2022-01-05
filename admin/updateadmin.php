<?php
include 'cekadmin.php';
include "../koneksi/koneksi.php";
if(isset($_GET['no']))
{
 $sql_query="SELECT * FROM admin WHERE no=".$_GET['no'];
 $result_set=mysql_query($sql_query);
 $row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
$nama           = $_POST['nama'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$email          = $_POST['email'];
$nama_atm       = $_POST['nama_atm'];
$nama_rek       = $_POST['nama_rek'];
$no_rek         = $_POST['no_rek'];
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE admin SET nama='$nama', username='$username', password='$password', email='$email', nama_atm='$nama_atm', nama_rek='$nama_rek', no_rek='$no_rek' WHERE no=".$_GET['no'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Berhasil Diupdate');
  window.location.href='admin.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Data Gagal Diupdate');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Junior Futsal & 4D Futsal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">

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
					<li><a href="4d.php"><i class="glyphicon glyphicon-th"></i> 4D Futsal</a></li>
                    <li><a href="user.php"><i class="glyphicon glyphicon-user"></i> User</a></li>
                    <li class="current"><a href="admin.php"><i class="glyphicon glyphicon-eye-open"></i> Admin</a></li>
                    <li><a href="message.php"><i class="glyphicon glyphicon-comment"></i> Message</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Update Admin</div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form" method="post">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="nama" id="inputEmail3" placeholder="Nama" value="<?php echo $row['nama']; ?>">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="username" id="inputEmail3" placeholder="Username" value="<?php echo $row['username']; ?>">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
								    <div class="col-sm-10">
								      <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" value="<?php echo $row['password']; ?>">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
								    <div class="col-sm-10">
								      <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" value="<?php echo $row['email']; ?>">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Nama ATM</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="nama_atm" id="inputEmail3" placeholder="Nama ATM" value="<?php echo $row['nama_atm']; ?>">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Nama Rekening</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="nama_rek" id="inputEmail3" placeholder="Nama Rekening" value="<?php echo $row['nama_rek']; ?>">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Nomor Rekening</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="no_rek" id="inputEmail3" placeholder="Nomor Rekening" value="<?php echo $row['no_rek']; ?>">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								    <input type="submit" class="btn btn-primary" name="btn-update" value="Update">
                					<input type="submit" class="btn btn-default" name="btn-cancel" value="Cancel">
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>
	  			</div>
	  		<!--  Page content -->
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
  </body>
</html>