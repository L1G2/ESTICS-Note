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
                    if($login == false){
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
        elseif($action == "ajout_note"){
            echo "I'm here action";
            if (isset($_POST["raisons"]) && isset($_POST["semestres"]) && isset($_POST["coeffNote"]) && isset($_POST['dateNote'])){
                echo "I'm here";
                $raison = intval($_POST["raisons"]);
                $semestre = intval($_POST["semestres"]);
                $coeffNote  =intval($_POST["coeffNote"]);
                $dateNote = $_POST['dateNote'];
           
                $req = new REQUETE;
                $etudiant =$req-> getEtudiant();
           
                $idEtudiant=$etudiant[0];

                foreach($idEtudiant as $cle => $element)
                {
                    if (isset($_POST[$element])){
                       $idMatiere =$req-> getidMatiere($_SESSION["username"]);
                       $valeurNote=intval($_POST[$element]);
                       $req -> insertNote($raison, $coeffNote,$semestre, $element,$idMatiere,$dateNote, $valeurNote );
                       header("location:../Views/ajout.php?action=success");
           
                   }
                }
            }
            else{
                header("location:../Views/ajout.php?action=erreur_info");
            }
        }
    }
