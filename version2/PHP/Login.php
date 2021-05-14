<?php
session_start();
include("./includes/db.php");

if(isset($_POST['username']) && isset($_POST['password'])){
    $sql = "SELECT * FROM visiteur WHERE login='".htmlspecialchars($_POST['username'])."' AND mdp='".htmlspecialchars($_POST['password'])."'";
    	$user_data = $connexion->query($sql);
	if($user_data->rowcount()==1){	
		$data = $user_data->fetchAll();
		$_SESSION['id'] = $data[0]["id"];
		header('Location: index.php');
	} else {
		$erreur = "Identifiants incorect";	
	}


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
    <title>Sign in - Profit HTML5 Template</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="CSS/StyleLogin.css">
    <link rel="stylesheet" href="CSS/StyleMain.css">
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <main>
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid" data-uk-height-viewport="expand: true">
                    <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge"
                        style="background-image: url(./pic/banniere.jpg);">
                    </div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-3-5@m">
                                <div class="in-padding-horizontal@s">
                                    <!-- module logo begin -->
                                    <a class="uk-logo" href="index-2.html">
                                        <img class="in-offset-top-10" src="./pic/logo.svg" data-src="./pic/logo.svg"
                                            alt="logo" width="130" height="36" data-uk-img>
                                    </a>
                                    <!-- module logo begin -->
                                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">
					<?php
					if(isset($erreur)){
						echo $erreur;
					} else {
						echo "Se connecter";
					}

					?>
					</p>
                                    <!-- login form begin -->
                                    <form class="uk-grid uk-form" method="POST" action="">
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" name="username" id="username" value="" type="text"
                                                placeholder="Nom D'utilisateur" autocomplete="off">
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" name="password" id="password" value=""
                                                type="password" placeholder="Mot De Passe">
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1">
                                            <button
                                                class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left"
                                                type="submit" name="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
    <!-- Javascript -->
    <script src="js/vendors/uikit.min.js"></script>
    <script src="js/vendors/indonez.min.js"></script>
</body>


<!-- Mirrored from www.indonez.com/html-demo/Profit/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 May 2021 08:43:43 GMT -->

</html>
