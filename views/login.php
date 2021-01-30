<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>ESTI | Note</title>
    <link rel="icon" href="../assets/images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="Views/assets/css/main.min.css">
    <link rel="stylesheet" href="Views/assets/css/style.css">
    <link rel="stylesheet" href="Views/assets/css/responsive.css">
</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea">
					<div class="land-meta">
						<div>
							<span><img src="Views/assets/images/logo.png" alt="" width="500"></span>
						</div>
						<a href="#" title="" class="folow-me">En savoir plus</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign">
						<h2 class="log-title">Se connecter</h2>
						<form role="form" action="Controlleur/controller.php?action=login" method="post">
							<div class="form-group">	
							  <input type="email" id="input" value="<?php echo ""; ?>" name="email" required/>
							  <label class="control-label" for="email"> Email professionel</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" value="<?php echo ""; ?>" name="password" required/>
							  <label class="control-label" for="input"> Mot de passe</label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Se souvenir de moi
							  </label>
							</div>
							<a href="#" title="" class="forgot-pwd">Mot de passe oublié</a>
							<div class="submit-btns">
								<button class="mtr-btn signin" type="button"><span>Se connecter</span></button>
							</div>
							<span class="help-block">
								<?php
									if(!empty($_GET["action"])){
										$email = $_POST["email"];
										$action = htmlspecialchars($_GET["action"]);
										if($action == "erreur_mail"){
											?>
												<br><span>Veuillez utilisé le mail de l'ESTI</span>
											<?php
										}elseif($action == "mdp_short"){
											?>
												<br><span>Mot de passe trop court</span>
											<?php
										}elseif($action == "erreur_identification"){
											?>
												<br><span>Vérifier votre email ou votre mot de passe</span>
											<?php
										}elseif($action == "login_success"){
											?>
												<br><span>Inscription avec succée</span>
											<?php
										}
									}
								?>
							</span>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>	
</html>
