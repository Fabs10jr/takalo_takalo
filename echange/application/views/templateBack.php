<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
   <link rel="shortcut icon" href="<?php echo img_loader('icon-48x48','png');?>" />
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<title>Admin</title>

	<link href="<?php echo css_loader('app');?>" rel="stylesheet">
	<script src="<?php echo js_loader('util');?>"></script>
<script src="<?php echo js_loader('Chart.bundle.min');?>"></script>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar" >
			<div class="sidebar-content js-simplebar"  style="background-color: #222222;">
				<a class="sidebar-brand" href="#">
          <span class="align-middle">Menu</span>
        </a>

				<ul class="sidebar-nav">
					

					<li class="sidebar-iteme" >
						<a class="sidebar-link" href="<?php echo site_url("Categorie/listeCategorie");?>" style="background-color: #222222;">
              <i class="align-middle" data-feather="home"></i> <span class="align-middle">Accueil</span>
            </a>

					

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?php echo site_url("Statistique/pageStat");?>"  style="background-color: #222222;">
              			<i class="align-middle" data-feather="users"></i> <span class="align-middle">Statistiques</span>
            			</a>
			
					</li>

					

			
					
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						


							<div class="">
								
							
								<a class="" href="<?php echo site_url() . 'Connexion/logout'; ?>">Log out</a>
							</div>
						
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
            <?php include($template); ?>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" target="_blank">Andriamihaja Fabien Etu 2105 & Rakotonindrina Sitraka Sarobidy Etu 2167</a>
								
							</p>
						</div>
                 
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="<?php echo js_loader('app');?>"></script>

</body>

</html>