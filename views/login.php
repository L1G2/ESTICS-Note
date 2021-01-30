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
						<form role="form" action="Controller/controller.php?action=login" method="post">
							<div class="form-group">	
							  <input type="email" id="input"  name="email" required/>
							  <label class="control-label" for="email"> Email professionel</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password"  name="password" required/>
							  <label class="control-label" for="input"> Mot de passe</label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Se souvenir de moi
							  </label>
							</div>
							<a href="#" title="" class="forgot-pwd">Mot de passe oublié</a>
							<span class="help-block" style="color:red">
								<?php
									if(!empty($_GET["action"])){
										$action = htmlspecialchars($_GET["action"]);
										if($action == "erreur_mail"){
											echo("<br><span>Veuillez utilisé le mail de l'ESTI</span>");
										}elseif($action == "erreur_identification"){
											echo("<br><span>Vérifier votre email ou votre mot de passe</span>");
										}elseif($action == "login_success"){
											echo("<br><span>Inscription avec succée</span>");
										}
									}
								?>
							</span>
							<div class="submit-btns">
								<input class="mtr-btn signin" type="submit" value ="Se connecter"/>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>	
</html>
