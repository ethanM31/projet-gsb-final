<?php
session_start();
include("db.php");

if(isset($_SESSION['id'])){
	$sql = "SELECT * FROM visiteur WHERE id='".$_SESSION['id']."'";
    	$request = $connexion->query($sql);
	$user_data = $request->fetchAll()[0];
}

?>

<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<!-- Mirrored from www.indonez.com/html-demo/Profit/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 May 2021 08:43:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#e9e8f0" />
    <!-- Site Properties -->
    <title>Contacte</title>
    <!-- Critical preload -->
    <link rel="preload" href="../JS/uikit.min.js" as="script">
    <link rel="preload" href="../CSS/uikit.min.css" as="style">
    <link rel="preload" href="../CSS/style.css" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="../fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="../fonts/lato-v16-latin-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/lato-v16-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/montserrat-v14-latin-600.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="../Images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="../Images/apple-touch-icon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../CSS/uikit.min.css">
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <header>
        <!-- header content begin -->
    
        <div class="uk-section uk-padding-remove-vertical">
            <!-- module navigation begin -->
            <nav class="uk-navbar-container uk-navbar-transparent" data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade;"></nav>
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left uk-width-auto">
                        <div class="uk-navbar-item">
                            <!-- module logo begin -->
                            <div class="logo">
                                <img src="../Images/logo.jpg" alt="logo"></img>
                            </div>
                            <!-- module logo begin -->
                        </div>
                    </div>
                    <div class="uk-navbar-right uk-width-expand uk-flex uk-flex-right">
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">entreprise<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="about.php">A propos de GSB</a></li>
                                        <li><a href="contact.php">Contacte</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <?php if(isset($_SESSION['id'])){
                            echo '<div class="uk-navbar-item uk-visible@m in-optional-nav">
                                        <a href="#" class="uk-button uk-button-text">'.$user_data['nom'].' '.$user_data['prenom'].'</a>
                                    </div>';
                        } else {
                            echo'<div class="uk-navbar-item uk-visible@m in-optional-nav">
                                        <a href="login.php" class="uk-button uk-button-text">Login</a>
                                    </div>';
                        } ?>
                    </div>
                </div>
            </nav>
            <!-- module navigation end -->
        </div>
        <!-- header content end -->
    </header>
    <!-- breadcrumb content begin -->
    <div class="uk-section uk-padding-remove-vertical">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 in-breadcrumb">
                    <ul class="uk-breadcrumb uk-float-right">
                        <li><a href="index.php">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb content end -->
    <main>
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center in-contact-6">
                    <div class="uk-width-1-1">
                        <iframe class="uk-width-1-1 uk-height-large uk-border-rounded"src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=lyc%C3%A9e%20ozenne%20toulouse+()&amp;t=p&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        </iframe>
                    </div>
                    <div class="uk-width-3-5@m">
                        <div class="uk-grid uk-child-width-1-3@m uk-margin-medium-top uk-text-center" data-uk-grid>
                            <div>
                                <h5 class="uk-margin-remove-bottom">Addresse</h5>
                                <p class="uk-margin-small-top">9 Rue Jean-Baptiste Merly, 31000 Toulouse</p>
                            </div>
                            <div>
                                <h5 class="uk-margin-remove-bottom">Email</h5>
                                <p class="uk-margin-small-top uk-margin-remove-bottom">GSB-contact@gmail.com</p>
                                <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">pour les contacte</p>
                            </div>
                            <div>
                                <h5 class="uk-margin-remove-bottom">Numéro de téléphone</h5>
                                <p class="uk-margin-small-top uk-margin-remove-bottom">06-11-86-39-71</p>
                                <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">Lundi - Vendredi de 9h a 19h</p>
                            </div>
                        </div>
                        <hr class="uk-margin-medium">
                        <h4 class="uk-margin-remove-bottom uk-text-muted uk-text-center">Vous avez une question?</h4>
                        <h1 class="uk-margin-small-top uk-text-center">Entront <span class="in-highlight">En contacte</span></h1>
                        <form id="contact-form" class="uk-form uk-grid-small uk-margin-medium-top" data-uk-grid>
                            <div class="uk-width-1-2@s uk-inline">
                                <span class="uk-form-icon fas fa-user fa-sm"></span>
                                <input class="uk-input uk-border-rounded" id="name" name="name" type="text" placeholder="Prenom et Nom">
                            </div>
                            <div class="uk-width-1-2@s uk-inline">
                                <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                                <input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="Addresse Email">
                            </div>
                            <div class="uk-width-1-1 uk-inline">
                                <span class="uk-form-icon fas fa-pen fa-sm"></span>
                                <input class="uk-input uk-border-rounded" id="subject" name="subject" type="text" placeholder="Objet">
                            </div>
                            <div class="uk-width-1-1">
                                <textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="Message"></textarea>
                            </div>
                            <div class="uk-width-1-1">
                                <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" id="sendemail" type="submit" name="submit">Envoyer Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
    <footer>
        <!-- footer content begin -->
        <div class="uk-section uk-section-primary uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top">
            <div class="uk-container">
                <div class="uk-child-width-1-2@s uk-child-width-1-5@m uk-flex" data-uk-grid>
                    <div class="uk-flex-first uk-flex-last@m">
                        <ul class="uk-list uk-link-text">
                            <li><img class="uk-margin-small-bottom" src="img/in-lazy.svg" data-src="img/in-logo-2.svg" alt="logo" width="130" height="36" data-uk-img></li>
                            <li><a href="#"><i class="fas fa-envelope uk-margin-small-right"></i>GSB-contact@gmail.com</a></li>
                            <li><a href="#"><i class="fas fa-map-marker-alt uk-margin-small-right"></i>Toulouse, France</a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-grid uk-flex uk-flex-center uk-margin-large-top" data-uk-grid>
                    <div class="uk-width-5-6@m uk-margin-bottom">
                        <div class="in-footer-warning in-margin-top-20@s">
                            <h5 class="uk-text-small uk-text-uppercase"><span>Risques Warning</span></h5>
                            <p class="uk-text-small">Voler des sites c'est pas super sympa /Stealing sites is not very nice </p>
                        </div>
                    </div>
                    <div class="uk-width-1-2@m in-copyright-text">
                        <p>© GSB Inc 2021. All rights reserved.</p>
                    </div>
                    <div class="uk-width-1-2@m uk-text-right@m in-footer-socials">
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer content end -->
        <!-- module totop begin -->
        <div class="uk-visible@m">
            <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
        </div>
        <!-- module totop begin -->
    </footer>
    <!-- Javascript -->
    <script src="../JS/uikit.min.js"></script>
    <script src="../JS/indonez.min.js"></script>
</body>


<!-- Mirrored from www.indonez.com/html-demo/Profit/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 May 2021 08:43:40 GMT -->
</html>