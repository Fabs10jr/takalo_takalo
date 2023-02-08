<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Takalo-takalo</title>
    <link href="<?php echo css_loader("bootstrap.min") ?>" rel="stylesheet">
    

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?php echo css_loader("core-style") ?>">
    <link rel="stylesheet" href="<?php echo css_loader("style") ?>">

</head>

<body>

	<!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

		
		<!-- Content Wrapper -->
	<div class="main-content-wrapper d-flex clearfix">
			<!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

			<!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href=""><img src="<?php echo img_loader("logo.png") ?>" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="active"><a href="<?php echo site_url() . 'Accueil/index'; ?>">Accueil</a></li>
                    <li><a href="<?php echo site_url() . 'Objet/listeObjetUser'; ?>">Gestion objets</a></li>
                    <li><a href="<?php echo site_url() . 'Proposition/listeMesDemandes'; ?>">Mes demandes</a></li>
                    <li><a href="<?php echo site_url() . 'Proposition/listeProposition'; ?>">Propositions</a></li>
                    <li><a href="<?php echo site_url() . 'Objet/pageRecherche'; ?>">Recherche</a></li>
                    <li><a href="<?php echo site_url() . 'Objet/listeAllObjet'; ?>">Historique</a></li>
                    <li><a href="<?php echo site_url() . 'Connexion/logout'; ?>">Déconnexion</a></li>
                </ul>
            </nav>
            
           
        </header>
        <!-- Header Area End -->

			<!-- Main Content -->
			
				
		

            	<?php include($template); ?>

           

		</div>
		<!-- End of Content Wrapper -->

	

	
	
	


</body>

<footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.html"><img src="<?php echo img_loader("logo2.png") ?>" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <p>Andriamihaja Fabien Etu 2105 & Rakotonindrina Sitraka Sarobidy Etu 2167</p>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Logout Modal-->
	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo js_loader("jquery.min") ?>"></script>

 <script src="<?php echo jquery_loader("jquery-2.2.4.min") ?>"></script>
    <!-- Popper js -->
    <script src="<?php echo js_loader("popper.min") ?>"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo js_loader("bootstrap.min") ?>"></script>
    <!-- Plugins js -->
    <script src="<?php echo js_loader("plugins") ?>"></script>
    <!-- Active js -->
    <script src="<?php echo js_loader("active") ?>"></script>



</html>

