<?php

require_once("connectDB.php");


/**
 * On met la dedans toutes les méthodes qui concernes les requêtes sur la base de donées.
 */

class REQUETE extends CONNECT_BDD
{
    /*

      Cette fonction retourne l'user_name de l'enseignant si a bien été authentifié et false sinon.

    */
   public function signIn( $email, $mdp){

        $bdd =$this -> dbConnect();
        $sql = $bdd -> prepare ("SELECT prenomEnseignant FROM enseignant WHERE prenomEnseignant = ? AND mdpEnseignant = ?");
        $sql -> execute(array($email,$mdp));
        $info =$sql->fetch()[0];

        if (isset($info)){
            return $info;
        }
        else{
            return false;
        }
    
   }

   /*

   La fonction qui va getter la matière de l'utilisateur.

   */

   public function getMatiere($prenomEnseignant){

    $bdd =$this -> dbConnect();
    $sql = $bdd -> prepare ("SELECT codeMatiere FROM matiere INNER JOIN enseignant ON enseignant.idMatiere=matiere.idMatiere WHERE enseignant.prenomEnseignant=?");
    $sql -> execute(array($prenomEnseignant));
    $info =$sql->fetch()[0];

    return $info;


   }
   /*

        Une fonciton ajoutera un nouvelle enseignant au Base donnée.Il retourne trois tableaux 
        1:Le numéros de tout les etudiants,    2: leur nom etprenom. Ces deux
        tableaux sont regouper dans un seul array

   */
   public function getEtudiant(){
       $numEtudiants=array();
       $nom_prenomEtudiants= array();

       $bdd=$this->dbConnect();
       $getEtudiant = $bdd->query("SELECT idEtudiant,CONCAT(nomEtudiant,' ' , prenomEtudiant) as nom_prenomEtudiant  FROM etudiant");


       while ($raison=$getEtudiant->fetch()){
            array_push($numEtudiants,$raison["idEtudiant"]);  
            array_push($nom_prenomEtudiants,$raison["nom_prenomEtudiant"]);  
        } 

       return [$numEtudiants, $nom_prenomEtudiants] ;
   }


   /*

        Une fonction qui récupère tout le  le raison de la note. Il reoturne dans un tableau 
        tout les raisons de note qui se trouve dans la base de données.

   */

   public function getRaison (){

       $raisons=array();
       $idRaisons=array();
       $bdd = $this->dbConnect();
       $getRaison= $bdd -> query ("SELECT * FROM raison");

       while ($raison=$getRaison->fetch()){
                array_push($raisons,$raison["nomRaison"]); 
                array_push ($idRaisons,$raison["idRaison"]);      
       } 

       return  [$idRaisons,$raisons];

   }

   /*
    Une fonction qui va getter le semestre
   */

   public function getSemestre (){

        $value=array();
        $text=array();
        $bdd = $this->dbConnect();
        $getSemestre= $bdd -> query ("SELECT DISTINCT semestreNote as value ,CONCAT('Semestre ', semestreNote) as text FROM note order by semestreNote");

        while ($raison=$getSemestre->fetch()){
                array_push($value,$raison["value"]); 
                array_push ($text,$raison["text"]);      
        } 

        return [$value,$text];

}

   public function InsertNote( $idRaison, $coeffNote,$semestreNote, $idEtudiant, $valeurNote ){
       return 1;
   }


}

$req = new REQUETE ;
$test= $req -> getSemestre();
print_r($test);