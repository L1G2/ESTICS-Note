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
    Une fonciton ajotera un nouvelle enseignant au Bae donnée.
   */


