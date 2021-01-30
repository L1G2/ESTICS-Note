<?php $title = 'ESTICS | Login'; ?>
 
<?php ob_start(); ?>
<div class="wrapper">
        <h2>Login</h2>
        <form action="Controlleur/controller.php?action=login" method="post">
            <span class="help-block">
                <?php
                    $email = $_POST["email"];
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
                                <br><span>Inscription avec succée <?=$numero?></span>
                            <?php
                        }
                    }
                ?>
            </span>
            <div class="form-group">
                <label for="name">Email Professionnel</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" required>

            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Se connecter" name="login">
            </div>
        </form>
    </div>    
<?php $content = ob_get_clean();?>
<?php require('template.php');?>    