<?php
    session_start();
    require_once("../Models/requete.php");
 if (isset($_GET["raisons"])&&isset($_GET["semestres"])&&isset($_GET["coeffNote"])){
     $raison=$_GET["raisons"];
     $semestre=$_GET["semestres"];
     $coeffNote=$_GET["coeffNote"];


     $req= new REQUETE;
     $etudiant =$req-> getEtudiant();

     $idEtudiant=$etudiant[0];
     foreach($idEtudiant as $cle => $element)
     {
         if (isset($_GET[$element])){
            
        }
     }




 }

?>