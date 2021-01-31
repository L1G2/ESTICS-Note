<?php
    session_start();
    require_once("../Models/requete.php");
 if (isset($_GET["raisons"])&&isset($_GET["semestres"])&&isset($_GET["coeffNote"])){
     $raison=intval($_GET["raisons"]);
     $semestre=intval($_GET["semestres"]);
     $coeffNote=intval($_GET["coeffNote"]);


     $req= new REQUETE;
     $etudiant =$req-> getEtudiant();

     $idEtudiant=$etudiant[0];
     foreach($idEtudiant as $cle => $element)
     {
         if (isset($_GET[$element])){
            $idMatiere =$req-> getidMatiere($_SESSION["username"]);
            $valeurNote=intval($_GET[$element]);
            $req -> insertNote($raison, $coeffNote,$semestre, $element,$idMatiere, $valeurNote );
        }
     }




 }

?>