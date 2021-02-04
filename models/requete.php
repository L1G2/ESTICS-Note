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
        $sql = $bdd -> prepare ("SELECT prenomEnseignant FROM enseignant WHERE emailEnseignant = ? AND mdpEnseignant = ?");
        $sql -> execute(array($email,$mdp));
        $info = $sql -> fetch()[0];

        if ($sql -> rowCount() == 1){
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
    $sql = $bdd -> prepare ("SELECT codeMatiere FROM matiere INNER JOIN enseignant ON enseignant.idMatiere=matiere.id WHERE enseignant.prenomEnseignant=?");
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
       $getEtudiant = $bdd->query("SELECT id,CONCAT(nomEtudiant,' ' , prenomEtudiant) as nom_prenomEtudiant  FROM etudiant");


       while ($raison=$getEtudiant->fetch()){
            array_push($numEtudiants,$raison["id"]);  
            array_push($nom_prenomEtudiants,$raison["nom_prenomEtudiant"]);  
        } 

       return [$numEtudiants, $nom_prenomEtudiants]; 
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
                array_push ($idRaisons,$raison["id"]);      
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

   public function insertNote( $idRaison, $coeffNote,$semestreNote, $idEtudiant,$idMatiere,$dateNote, $valeurNote ){


    $bdd = $this->dbConnect();
    $insertNote= $bdd -> prepare ("INSERT INTO note (idRaison, coeffNote, semestreNote,idEtudiant , idMatiere,dateNote,valeurNote) VALUE (?,?,?,?,?,?,?)");
    $insertNote -> execute(array($idRaison,$coeffNote, $semestreNote, $idEtudiant, $idMatiere,$dateNote,$valeurNote));
    print_r ($insertNote);
    
   }

   public function getidMatiere($prenomEnseignant){

    $bdd =$this -> dbConnect();
    $sql = $bdd -> prepare ("SELECT idMatiere from  enseignant WHERE prenomEnseignant=?");
    $sql -> execute(array($prenomEnseignant));
    $info = $sql -> fetch()[0];


    return $info;

   }

   public function getNoteCtrl(){
        $num=array();
        $nom_prenom=array();
        $valeurNote=array();
        $bdd = $this->dbConnect();
        $getNoteCtrl= $bdd -> query ("
        SELECT etudiant.id as Num ,CONCAT(prenomEtudiant,' ',nomEtudiant )as 'Nom et prenom' , AVG(note.valeurNote) AS valeurNote 
        FROM etudiant 
        INNER JOIN note 
        ON note.idEtudiant=etudiant.id 
        INNER JOIN raison 
        on raison.id = note.idRaison 
        WHERE note.idRaison = 1
        GROUP BY etudiant.id
        ORDER BY etudiant.id");

        while ($Ctrl=$getNoteCtrl->fetch()){
                array_push($num,$Ctrl["Num"]); 
                array_push ($nom_prenom,$Ctrl["Nom et prenom"]);  
                array_push ($valeurNote,$Ctrl["valeurNote"]);      
        }
        return  [$num,$nom_prenom,$valeurNote];
    }
    public function getNoteExam (){
        $num=array();
        $nom_prenom=array();
        $valeurNote=array();
        $bdd = $this->dbConnect();
        $getNoteExam= $bdd -> query ("
        SELECT etudiant.id as Num ,CONCAT(prenomEtudiant,' ',nomEtudiant )as 'Nom et prenom' ,raison.nomRaison, AVG(note.valeurNote) AS valeurNote 
        from etudiant 
        inner JOIN note 
        on note.idEtudiant=etudiant.id 
        inner JOIN raison 
        on raison.id= note.idRaison 
        WHERE note.idRaison = 2
        GROUP BY etudiant.id
        ORDER BY etudiant.id");

        while ($Exam=$getNoteExam->fetch()){
                array_push($num,$Exam["Num"]); 
                array_push ($nom_prenom,$Exam["Nom et prenom"]);  
                array_push ($valeurNote,$Exam["valeurNote"]);      
        }
        return  [$num,$nom_prenom,$valeurNote];

  }

  public function getStory (){

        $date_ajout = array();
        $date_controle = array();
        $type = array();
        $moyenne_classe = array();

        $bdd = $this->dbConnect();
        $getStory = $bdd -> query ("
        SELECT note.dt_hr_ajout as 'Date_ajout', note.dateNote as 'Date_controle', raison.nomRaison as 'Type', 
        AVG(note.valeurNote) AS 'Moyenne' 
        FROM note INNER JOIN raison ON note.idRaison = raison.id 
        GROUP BY note.dt_hr_ajout ORDER BY note.dt_hr_ajout");

        while ($story=$getStory->fetch()){
                array_push($date_ajout, $story["Date_ajout"]); 
                array_push($date_controle, $story["Date_controle"]);
                array_push($type, $story["Type"]) ;
                array_push ($moyenne_classe, $story["Moyenne"]);      
        }
        return  [$date_ajout,$date_controle,$type,$moyenne_classe];
  }
}
