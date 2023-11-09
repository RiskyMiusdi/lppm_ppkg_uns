<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title><?= $title ?></title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/tampilan/style.css" />

	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<!-- Header -->
	<header id="header" class="transparent-nav">
		<div class="container">

			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<div class="navbar-brand">
						<a class="logo" href="<?php echo base_url() ?>index.php/c_home/index"> <img width="200px" src="<?php echo base_url() ?>assets/img/Logo-PPKG-LPPM-UNS-Text-Putih.png" alt="logo">
						</a>
					</div>
				</div>
				<!-- /Logo -->

				<!-- Mobile toggle -->
				<button class="navbar-toggle">
					<span></span>
				</button>
				<!-- /Mobile toggle -->
			</div>

			<!-- Navigation -->
			<nav id="nav">
				<ul class="main-menu nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url() ?>index.php/c_home/index">Home</a></li>
					<li><a href="<?php echo base_url() ?>index.php/c_profil/index">Profil</a></li>
					<li><a href="<?php echo base_url() ?>index.php/c_pendidikan/index">Pendidikan</a></li>
					<li><a href="<?php echo base_url() ?>index.php/c_pengabdian/index">Pengabdian</a></li>
					<li><a href="<?php echo base_url() ?>index.php/c_penelitian/index">Penelitian</a></li>
					<li><a href="<?php echo base_url() ?>index.php/c_seminar/index">Seminar</a></li>
					<li><a href="<?php echo base_url() ?>index.php/c_kerjasama/index">Kerja sama</a></li>
					<li><a href="<?php echo base_url() ?>index.php/c_kontak/index">Kontak</a></li>

					<?php if (!$this->session->userdata('username')) { ?>
						<li><a href="<?php echo base_url() ?>index.php/c_login/index">Login</a></li>
						<li><a href="<?php echo base_url() ?>index.php/c_register/index">Register</a></li>
					<?php
					} else { ?>
						<li><a href="<?php echo base_url() ?>index.php/c_login/logout">Logout</a></li>
						<?php $user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
						if ($user['role'] == 'Admin') { ?>
							<li><a href="<?php echo base_url() ?>index.php/admin/c_dashboard_admin">Dashboard</a></li>
						<?php }
						if ($user['role'] == 'PPKG') { ?>
							<li><a href="<?php echo base_url() ?>index.php/ppkg/c_dashboard_ppkg">Dashboard</a></li>
						<?php }
						if ($user['role'] == 'Non-PPKG') { ?>
							<li><a href="<?php echo base_url() ?>index.php/non_ppkg/c_dashboard_non_ppkg">Dashboard</a></li>
						<?php } ?>
					<?php
					}
					?>

				</ul>
			</nav>
			<!-- /Navigation -->

		</div>
	</header>
	<!-- /Header -->