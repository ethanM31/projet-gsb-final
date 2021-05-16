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
<html lang="fr">

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#e9e8f0" />
    <!-- Site Properties -->
    <title>Home</title>
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
        <div class="uk-section uk-padding-remove-vertical">
            <!-- module navigation begin -->
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
                            <li><a href="#">Entreprise<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="about.php">A propos de GSB</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
			            <?php if(isset($_SESSION['id'])){
				            echo '<div class="uk-navbar-item uk-visible@m in-optional-nav">
                                <li><a href="#" class="uk-button uk-button-text">'.$user_data['nom'].' '.$user_data['prenom'].'</a></li>
                            </div>
                            <li><a href="deco.php" class="uk-button uk-button-text">Déconnexion</a></li>
                                <ul class="uk-navbar-nav uk-visible@m">
                                    <li><a href="#">Fiche<i class="fas fa-chevron-down"></i></a>
                                        <div class="uk-navbar-dropdown">
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a href="Saisie-fiche-de-frais.php">fiche de frais</a></li>
                                                <li><a href="Consultation-des-frais.php">Consultation des frais</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            ';
			            } else {
				            echo'<div class="uk-navbar-item uk-visible@m in-optional-nav">
                                        <a href="Login.php" class="uk-button uk-button-text">Connexion</a>
                                    </div>';
			            } ?>
                    </div>
                </div>
            </nav>
            <!-- module navigation end -->
        </div>
        <!-- header content end -->
    </header>
    <main>
        <!-- slideshow content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="in-slideshow uk-visible-toggle" data-uk-slideshow>
                <ul class="uk-slideshow-items">
                    <li>
                        <div class="uk-container">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-1-2@m">
                                    <div class="uk-overlay in-padding-horizontal@s">
                                        <h1>GSB <span class="in-highlight">Appli-Frais.</span></h1>
                                        <p class="uk-text-lead uk-visible@m">Maintenant accéder à vos fiche de frais depuis internet</p>
                                        <img src="../Images/medicament.jpg" alt="image"></img>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
        <!-- slideshow content end -->
        <!-- section content begin -->
        <div class="uk-section uk-section-muted in-padding-large-vertical@s in-profit-1">
            <div class="uk-container">
                <div class="uk-grid-divider" data-uk-grid>
                    <div class="uk-width-expand@m in-margin-top-20@s">
                        <h2>Un site crée pour nos visiteurs et pour nos comptables</h2>
                        <p>Il suffit de vous connecter et vous accéderez a vos fiches de frais.</p>
                    </div>
                    <div class="uk-width-2-3@m">
                        <div class="uk-child-width-1-2@s uk-child-width-1-2@m" data-uk-grid>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-right">
                                    <img src="img/in-lazy.svg" data-src="img/in-profit-icon-1.svg" alt="profit-icon"
                                        width="72" height="72" data-uk-img>
                                </div>
                                <div>
                                    <p class="uk-text-bold">Pour les visiteurs</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-right">
                                    <img src="img/in-lazy.svg" data-src="img/in-profit-icon-2.svg" alt="profit-icon"
                                        width="72" height="72" data-uk-img>
                                </div>
                                <div>
                                    <p class="uk-text-bold">pour les comptables</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-right">
                                    <img src="img/in-lazy.svg" data-src="img/in-profit-icon-3.svg" alt="profit-icon"
                                        width="72" height="72" data-uk-img>
                                </div>
                                <div>
                                    <p class="uk-text-bold">Inscriver vos fiches de frais et ayez la posibilité de les modifiers</p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-right">
                                    <img src="img/in-lazy.svg" data-src="img/in-profit-icon-4.svg" alt="profit-icon"
                                        width="72" height="72" data-uk-img>
                                </div>
                                <div>
                                    <p class="uk-text-bold">Validez et faite le suivie des differentes fiches de frais </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- footer content begin -->
        <div class="uk-section uk-section-primary uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center uk-margin-large-top" data-uk-grid>
                    <div class="uk-width-5-6@m uk-margin-bottom">
                        <div class="in-footer-warning in-margin-top-20@s">
                            <h5 class="uk-text-small uk-text-uppercase"><span>Risk Warning</span></h5>
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
    <script src="../../../widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" defer></script>
    <script src="../JS/config-theme.js"></script>
</body>
</html>
