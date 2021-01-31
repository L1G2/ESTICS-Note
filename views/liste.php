<?php 
require_once("../Models/requete.php");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    
    <tr>
        <th>Numéro</th>
        <th>Nom et Prenom</th>
        <th> Contrôle continue</th>
        <th>Examen </th>    
        <th>Moyenne</th>
    </tr>


    <?php
        $req= new REQUETE ;

        $ctrlContinue=$req-> getNoteCtrl();
        $examenFinal =$req->getNoteExam();
        
        foreach($ctrlContinue[0] as $cle => $element){

            $found = array_search($element, $examenFinal[0]);
            

            if ($found !== false) {
                echo ('    
                <tr>
                    <td>'.$element.'</td>
                    <td>'.$ctrlContinue[1][$cle].'</td>
                    <td>'.$ctrlContinue[2][$cle] .'</td>
                    <td>'.$examenFinal[2][$cle] .' </td>
                    <td> '.($ctrlContinue[2][$cle]+$examenFinal[2][$cle]/2) .'</td>
                </tr>' );
            }
            else {
                echo ('    
                <tr>
                    <td>'.$element.'</td>
                    <td>'.$ctrlContinue[1][$cle].'</td>
                    <td>'.$ctrlContinue[2][$cle] .'</td>
                    <td> </td>
                    <td>'.$ctrlContinue[2][$cle] .'</td>
                </tr>' );

            }

        }


    ?>
    
    </table>
</body>
</html>