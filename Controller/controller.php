<?php
session_start();
    require_once("../Models/requete.php");
    
    if(!empty($_GET["action"])){
        $action = $_GET["action"];
        if($action == "login"){
            if(isset($_POST["email"]) && isset($_POST['password'])){
                $email = $_POST["email"];
                $password = $_POST["password"];
                if(preg_match("#^[a-z0-9._-]+@esti.mg#",$email)){
                    $query = new REQUETE;
                    $login = $query->signIn($email, $password);
                    if($login === false){
                        header("location:../index.php?action=erreur_identification");
                    }
                    else{
                        $_SESSION["username"] = $login;
                        // header("location:../Views/ajoutNote.php");
                        require_once('../Views/welcome.php');
                    }
                }else{
                    header("location:../index.php?action=erreur_mail");
                }
            }
        }
        }
    