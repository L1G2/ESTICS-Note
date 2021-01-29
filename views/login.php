<?php $title = 'ESTICS | Login'; ?>
 
<?php ob_start(); ?>
<div class="wrapper">
        <h2>Login</h2>
        <form action="Controlleur/controller.php?action=login" method="post">
            <span class="help-block">
                <?php
                    if(!empty($_GET["action"])){
                        $action = htmlspecialchars($_GET["action"]);
                        if($action == "erreur_mail"){
                            ?>
                                <br><span>Veuillez utilisé le mail de l'ESTI</span>
                            <?php
                        }elseif($action == "erreur_mdp"){
                            ?>
                                <br><span>Mot de passe trop court</span>
                            <?php
                        }elseif($action == "inscription_succee" && !empty($_GET["numero"])){
                            $numero = htmlspecialchars($_GET["numero"]);
                            ?>
                                <br><span>Inscription avec succée <?=$numero?></span>
                            <?php
                        }elseif($action == "erreur_identification"){
                            ?>
                                <br><span>Erreur de l'identification</span>
                            <?php
                        }
                    }
                ?>
            </span>
            <div class="form-group">
                <label for="name">Email Professionnel</label>
                <input type="text" name="username" class="form-control" value="<?php echo "email"; ?>" required>

            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo "password"; ?>" required>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Se connecter" name="login">
            </div>
        </form>
    </div>    
<?php $content = ob_get_clean();?>
<?php require('template.php');?>    