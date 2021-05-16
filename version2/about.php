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


<!-- Mirrored from www.indonez.com/html-demo/Profit/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 May 2021 08:43:35 GMT -->
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
    <title>A propos de GSB</title>
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
                            <li><a href="#">Entreprise<i class="fas fa-chevron-down"></i></a>
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
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-flex uk-flex-center">
                        <div class="uk-width-3-5@m uk-text-center">
                            <h1 class="uk-margin-small-bottom">A votre sevices<br /><span class="in-highlight">depuis 2012</span></h1>
                            <p class="uk-text-lead uk-text-muted uk-margin-remove-top"></p>
                        </div>
                    </div>
                    <div class="uk-grid uk-grid-large uk-child-width-1-3@m uk-margin-medium-top" data-uk-grid>
                        <div class="uk-flex uk-flex-left">
                            <div class="uk-margin-right">
                                <i class="fas fa-leaf fa-lg in-icon-wrap circle primary-color"></i>
                            </div>
                            <div>
                                <h3>Philosophie</h3>
                                <p>Des medicaments pour tous, des solutions pour chacun.</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-left">
                            <div class="uk-margin-right">
                                <i class="fas fa-hourglass-end fa-lg in-icon-wrap circle primary-color"></i>
                            </div>
                            <div>
                                <h3>Histoire</h3>
                                <p>une Entreprise crée en 2012 née de la fusion de deux entreprises.</p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-left">
                            <div class="uk-margin-right">
                                <i class="fas fa-flag fa-lg in-icon-wrap circle primary-color"></i>
                            </div>
                            <div>
                                <h3>Culture</h3>
                                <p>Une entreprise au service de ses clients et de ces collaborateurs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-offset-top-40 in-offset-bottom-20">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-card uk-card-default uk-border-rounded uk-background-center uk-background-contain uk-background-image@m" style="background-image: url(../Images/in-team-background-1.png);" data-uk-parallax="bgy: -100">
                            <div class="uk-card-body">
                                <div class="uk-grid uk-flex uk-flex-center">
                                    <div class="uk-width-3-4@m uk-text-center">
                                        <h2>Trust the Professionals</h2>
                                        <p>We are a group of passionate, independent thinkers who never stop exploring new ways to improve trading for the self-directed investor.</p>
                                    </div>
                                </div>
                                <div class="uk-grid uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid>
                                    <div class="uk-flex uk-flex-left">
                                        <div class="uk-margin-right">
                                            <img class="uk-align-center " src="../Images/in-team-1.png" alt="image-team" width="300">
                                        </div>
                                        <div>
                                            <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Chief Executive Officer</p>
                                            <h4 class="uk-margin-small-top">Cynthia Dixon</h4>
                                            <p>Nostrum exercitationem ullam corporis suscipit labor samnisi ute aliquid fugiat.</p>
                                            <div>
                                                <a class="uk-link-muted" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i></a>
                                                <a class="uk-link-muted" href="#"><i class="fab fa-twitter uk-margin-small-right"></i></a>
                                                <a class="uk-link-muted" href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-flex uk-flex-left">
                                        <div class="uk-margin-right">
                                            <img class="uk-align-center " src="../Images/in-team-2.png" alt="image-team" width="300">
                                        </div>
                                        <div>
                                            <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Executive Assistant</p>
                                            <h4 class="uk-margin-small-top">Arthur Parker</h4>
                                            <p>Nostrum exercitationem ullam corporis suscipit labor samnisi ute aliquid fugiat.</p>
                                            <div>
                                                <a class="uk-link-muted" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i></a>
                                                <a class="uk-link-muted" href="#"><i class="fab fa-twitter uk-margin-small-right"></i></a>
                                                <a class="uk-link-muted" href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-flex uk-flex-left">
                                        <div class="uk-margin-right">
                                            <img class="uk-align-center " src="../Images/in-team-3.png" alt="image-team" width="300">
                                        </div>
                                        <div>
                                            <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Marketing Specialist</p>
                                            <h4 class="uk-margin-small-top">Evelyn Mason</h4>
                                            <p>Nostrum exercitationem ullam corporis suscipit labor samnisi ute aliquid fugiat.</p>
                                            <div>
                                                <a class="uk-link-muted" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i></a>
                                                <a class="uk-link-muted" href="#"><i class="fab fa-twitter uk-margin-small-right"></i></a>
                                                <a class="uk-link-muted" href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-flex uk-flex-left">
                                        <div class="uk-margin-right">
                                            <img class="uk-align-center " src="../Images/in-team-4.png" alt="image-team" width="300">
                                        </div>
                                        <div>
                                            <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-bottom">Human Resources</p>
                                            <h4 class="uk-margin-small-top">Bryan Greene</h4>
                                            <p>Nostrum exercitationem ullam corporis suscipit labor samnisi ute aliquid fugiat.</p>
                                            <div>
                                                <a class="uk-link-muted" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i></a>
                                                <a class="uk-link-muted" href="#"><i class="fab fa-twitter uk-margin-small-right"></i></a>
                                                <a class="uk-link-muted" href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script src="../JS/config-theme.js"></script>
</body>


<!-- Mirrored from www.indonez.com/html-demo/Profit/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 May 2021 08:43:37 GMT -->
</html>