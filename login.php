<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="&copy; <?php echo date("Y"); ?> - RUSSTER.ID">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Aplikasi Sistem Penunjang Keputusan</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>

    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
		<?php ob_start(); session_start(); include 'koneksi.php';
			if(!empty($_POST)){
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			$sql = "select * from admin where username='".$username."' and password='".$password."'";
			#echo $sql."<br />";
			$query = mysql_query($sql) or die (mysql_error());
			// pengecekan query valid atau tidak
			if($query){
				$row = mysql_num_rows($query);
				$rows = mysql_fetch_array($query);
				// jika $row > 0 atau username dan password ditemukan
				if($row > 0){
					$_SESSION['isLoggedIn']=1;
					$_SESSION['username']=$username;
					$_SESSION['id_admin']= $rows['id_admin'];
					$_SESSION['nama']= $rows['nama'];
					header('Location: index.php');
				}else{
					echo 
					"<div class='alert alert-danger'>
					<button class='close' data-dismiss='alert'></button>
					<h4 align='center'>Username atau Password anda <strong>SALAH !</strong> silahkan ulangi kembali</h4>
					</div>";
				}
			}
		}
		?>
        <div class="wrapper-page">
            <div class="text-center">
				<img src="assets/images/Logo-Unpam-Universitas-Pamulang-Original-PNG.png" width="100" height="100" alt=""/><br><a href="index.php" class="logo"><span>Sistem Penunjang Keputusan</span></a>
            </div> 
        	<div class="m-t-40 card-box">
                <div class="text-center">
                </div>
                <div class="p-20">
                    <form class="form-horizontal m-t-20" method="post" action="">

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="username" required="" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" required="" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
            <!-- end card-box-->

        </div>
        <!-- end wrapper page -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
	
	</body>
</html>