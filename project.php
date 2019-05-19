<?php include "sesi.php";
include "koneksi.php"; ?>
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
		<link href="assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                </div>

                

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">

                        <!-- Page title -->
                        <ul class="nav navbar-nav list-inline navbar-left">
                            <li class="list-inline-item">
                                <button class="button-menu-mobile open-left">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="page-title">List Project</h4>
                            </li>
                        </ul>
                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/Logo-Unpam-Universitas-Pamulang-Original-PNG.png" alt="user-img" title="" class="rounded-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="mdi mdi-adjust"></i></div>
                        </div>
                        <h5><a href="#">Russter Vera Jesmy</a> </h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" >
                                    <i class="mdi mdi-settings"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="logout.php" class="text-custom">
                                    <i class="mdi mdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Navigation</li>

                            <li>
                                <a href="index.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>

                            <li>
                                <a href="typography.html" class="waves-effect"><i class="mdi mdi-format-font"></i> <span> Typography </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> User Interface </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-draggable-cards.html">Draggable Cards</a></li>
                                    <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="ui-material-icons.html">Material Design Icons</a></li>
                                    <li><a href="ui-font-awesome-icons.html">Font Awesome</a></li>
                                    <li><a href="ui-dripicons.html">Dripicons</a></li>
                                    <li><a href="ui-themify-icons.html">Themify Icons</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-notification.html">Notification</a></li>
                                    <li><a href="ui-range-slider.html">Range Slider</a></li>
                                    <li><a href="ui-components.html">Components</a>
                                    <li><a href="ui-sweetalert.html">Sweet Alert</a>
                                    <li><a href="ui-treeview.html">Tree view</a>
                                    <li><a href="ui-widgets.html">Widgets</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span class="badge badge-warning pull-right">7</span><span> Forms </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">General Elements</a></li>
                                    <li><a href="form-advanced.html">Advanced Form</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-fileupload.html">Form Uploads</a></li>
                                    <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                    <li><a href="form-xeditable.html">X-editable</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-view-list"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                    <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-donut-variant"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                    <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                    <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="chart-other.html">Other Chart</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar"></i><span> Calendar </span></a>
                            </li>

                            <li>
                                <a href="inbox.html" class="waves-effect"><i class="mdi mdi-email"></i><span class="badge badge-purple pull-right">New</span><span> Mail </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="page-starter.html">Starter Page</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-recoverpw.html">Recover Password</a></li>
                                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                    <li><a href="page-404.html">Error 404</a></li>
                                    <li><a href="page-500.html">Error 500</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>Extra Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="extras-projects.html">Projects</a></li>
                                    <li><a href="extras-tour.html">Tour</a></li>
                                    <li><a href="extras-taskboard.html">Taskboard</a></li>
                                    <li><a href="extras-taskdetail.html">Task Detail</a></li>
                                    <li><a href="extras-profile.html">Profile</a></li>
                                    <li><a href="extras-maps.html">Maps</a></li>
                                    <li><a href="extras-contact.html">Contact list</a></li>
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-faq.html">FAQ</a></li>
                                    <li><a href="extras-gallery.html">Gallery</a></li>
                                    <li><a href="extras-email-template.html">Email template</a></li>
                                    <li><a href="extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="extras-comingsoon.html">Coming soon</a></li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
						<div class="row">
							<div class="col-sm-12">
										<div class="text-left">
											<div class="time-show first">
												<a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-b-10" data-animation="contentscale" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a">+ ADD NEW PROJECT</a>
											</div>
											<?php 
											if(!empty($_POST)){
												$project 	= $_POST['project'];
												$user		= $_SESSION["id_admin"];

												$input  		= "insert into project (nama, waktu, id_admin) values ('$project',NOW(),'$user')";
												$query_input 	= mysql_query($input);
												$input2  		= "insert into logs (event, deskripsi, waktu, id_admin) values ('menambah project','$project',NOW(),'$user')";
												$query_input2 	= mysql_query($input2);
												if($query_input) {
												$sukses = "<div class='alert alert-success' role='alert'><strong>Well done! </strong>Project <strong>$project</strong>  berhasil tersimpan di database.</div>";
												} else $gagal = "<div class='alert alert-danger' role='alert'><strong>Oh snap! </strong>Tambah Project GAGAL ! Mohon periksa kembali</div>".mysql_error();
											}
											
											if(!empty($_GET)){
												$id_project  	= $_GET['id_project'];
												$nama	 		= $_GET['nama'];
												$user			= $_SESSION["id_admin"];
												$input  		= "delete from project where id_project ='$id_project'";
												$query_input 	= mysql_query($input);
												$input2  		= "insert into logs (event, deskripsi, waktu, id_admin) values ('menghapus project','$nama',NOW(),'$user')";
												$query_input2 	= mysql_query($input2);
												if($query_input) {
												$sukses = "<div class='alert alert-success' role='alert'><strong>Well done! </strong>Project <strong>$nama</strong> berhasil dihapus dari database</div>";
												} else $gagal = "<div class='alert alert-danger' role='alert'><strong>Oh snap! </strong>Hapus Project Gagal ! Mohon ulangi kembali</div>";
											}
											?>
											<?php if(isset($sukses)) { echo $sukses; } ?>
											<?php if(isset($gagal)) { echo $gagal; } ?>
											<div id="custom-modal" class="modal-demo">
											<button type="button" class="close" onclick="Custombox.close();">
												<span>&times;</span><span class="sr-only">Close</span>
											</button>
											<h4 class="custom-modal-title">Add Project</h4>
											<div class="custom-modal-text">
												<form class="form-horizontal" role="form" method="post" action="">
                                                    <div class="form-group row">
                                                        <label class="col-3 col-form-label">Nama Project</label>
                                                        <div class="col-9">
                                                            <input type="text" class="form-control" placeholder="Isi Nama Project ..." name="project">
                                                        </div>
                                                    </div>
                                        			<button type="submit" class="btn btn-primary">Tambah</button>
                                                </form>
											</div>
										</div>
									</div>
								</div>	
							</div><br>

                        <div class="row">
							<?php 
								$query = mysql_query("select * from project");
								while ($row = mysql_fetch_array($query)) {
					  		?>
                            <div class="col-xl-6 col-md-6">
                                <div class="card-box">

                                    <h4 class="header-title mt-0 m-b-30"><?php echo $row['nama']; ?></h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2">
                                            <span class="badge badge-success badge-pill pull-left m-t-20"><?php echo date('d M Y', strtotime($row['waktu'])) ?> <i class="mdi mdi-calendar"></i> </span>
                                            <h2 class="mb-0"> 8451 </h2>
                                            <p class="text-muted m-b-25">Data project terinput</p>
                                        </div>
                                        <div class="progress progress-bar-success-alt progress-sm mb-0">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                                <span class="sr-only">77% Complete</span>
                                            </div>
                                        </div><br><p align="right"><a href="kriteria.php?id_project=<?php echo $row['id_project']; ?>" type="button" class="btn btn-success btn-rounded waves-effect w-md waves-light m-b-5">Kriteria</a> - <a href="data.php?id_project=<?php echo $row['id_project']; ?>" type="button" class="btn btn-purple btn-rounded waves-effect w-md waves-light m-b-5">Data</a> - <a href="#custom-modal<?php echo $row['id_project']; ?>" type="button" class="btn btn-danger btn-rounded w-md waves-effect waves-light m-b-5" data-animation="contentscale" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a">Hapus</a> - <button type="button" class="btn btn-info btn-rounded w-md waves-effect waves-light m-b-5" id="sa-warning">Proses SPK</button></p>
                                    </div>
										<div id="custom-modal<?php echo $row['id_project']; ?>" class="modal-demo">
											<button type="button" class="close" onclick="Custombox.close();">
												<span>&times;</span><span class="sr-only">Close</span>
											</button>
											<h4 class="custom-modal-title">Hapus Project</h4>
											<div class="custom-modal-text">
												<form class="form-horizontal" role="form" method="get" action="">
													<input type="hidden" name="id_project" value="<?php echo $row['id_project']; ?>" />
									  				<input type="hidden" name="nama" value="<?php echo $row['nama']; ?>" />
                                                    <h4 class="swal2-title" id="swal2-title">Yakin akan menghapus project <strong><?php echo $row['nama']; ?></strong> ?</h2><br><button type="submit" class="btn btn-danger btn-rounded w-md waves-effect waves-light m-b-5" id="sa-warning">Hapus</button> - <button type="button" class="btn btn-info btn-rounded w-md waves-effect waves-light m-b-5" onclick="Custombox.close();">Batal</button>
                                                </form>
											</div>
										</div>
                                </div>
                            </div>
							<?php } ?>
                        </div>
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    &copy; <?php echo date("Y"); ?> - RUSSTER.ID
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            

        </div>
        <!-- END wrapper -->


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

        <!-- Counter Up  -->
        <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
		<script src="assets/plugins/custombox/dist/custombox.min.js"></script>
        <script src="assets/plugins/custombox/dist/legacy.min.js"></script>
        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>