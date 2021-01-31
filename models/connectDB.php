<?php

    class CONNECT_BDD{
        public function dbConnect(){
            // Les configurations de la base de donnée

            if (!isset($DB_HOST)) {
                $DB_HOST = 'localhost';
                $DB_USER = 'root';
                $DB_PASS = '';
                $DB_NAME = 'note_bdd';
            } 
            try{
                $pdo = new PDO("mysql:host=" . $DB_HOST . ";dbname=" . $DB_NAME, $DB_USER, $DB_PASS);
                // Si connection non établie
                return $pdo ;
            } catch(Exception $error){
                die("[ERREUR] Connexion à la BDD a échouée :" . $error->getMessage());
            }
        }
    }

?>
