<?php
    require_once("../Models/requete.php");

    if(!empty($_GET["action"])){
        if($action == "login"){
            if(isset($_POST["login"])){
                $email = $_POST["email"];
                $password = $_POST["password"];
                if(preg_match("#^[a-z0-9._-]+@esti.mg+$#",$mail)){
                    $query = new Query_bdd;
                    $login = $query->authentification($email, $password);
                    if($login === false){
                        echo "Erreur inscription";
                    }
                }else{
					header("location:../index.php?action=erreur_mail");
				}   
            }
        }
    }