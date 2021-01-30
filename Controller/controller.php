<?php
    require_once("../Models/requete.php");

    if(!empty($_GET["action"])){
        if($action == "login"){
            if(isset($_POST["login"])){
                $email = $_POST["email"];
                $password = $_POST["password"];
                if(preg_match("#^[a-z0-9._-]+@esti.mg+$#",$mail)){
                    $query = new CONNECT_BDD;
                    $login = $query->login($email, $password);
                    if($login === false){
                        header("location:../index.php?action=erreur_identification");
                    }
                    else{
                        $_SESSION["username"] = $login
                        header("location:../index.php?action=login_success")
                    }
                }else{
					header("location:../index.php?action=erreur_mail");
				}   
            }
        }
    }