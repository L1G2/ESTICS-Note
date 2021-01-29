<?php
    function dbConnect():
        // Les configurations de la base de donnée
        define('DB_HOST', '');
        define('DB_USER', '');
        define('DB_PASS', '');
        define('DB_NAME', '');
        
        try{
            $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Si connection non établie
        } catch(Exception $error){
            die("[ERREUR] Connexion à la BDD a échouée :" . $error->getMessage());
        }
