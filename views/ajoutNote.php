<?php
    session_start();
    require_once("../Models/requete.php");
    echo($_SESSION["username"]);
    $req= new REQUETE;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/ajoutNote.css">
</head>
<body>
    
<form action="test.php" method="get">
    <h3>  Raison =
        <select name="raisons" id="">
            <option value=" "> </option>
            <?php                 
                $raisons =$req-> getRaison();
                foreach ($raisons [0] as $cle => $element){
                    echo '<option value="' .  $element . '">'. $raisons[1][$cle] . '</option>' ;
                }    
                            
            ?>      
        </select>
    
      Semestre =
        <select name="semestres" id="">
            <option value=" "> </option>
            <?php                 
                $semestres =$req-> getSemestre();
                foreach ($semestres [0] as $cle => $element){
                    echo '<option value="' .  $element . '">'. $semestres[1][$cle] . '</option>' ;
                }    
                        
            ?>      
        </select>
   
    
        Coefficient = 
        <input type="text" name="coeffNote" id="" required>
    </h3>


<table>
        <tr>
            <th>Num</th>
            <th>Etudiant</th>
            <th>Note</th>
        </tr>


        <?php 
        
        $etudiant =$req-> getEtudiant();
        foreach ($etudiant [0] as $cle => $element){
            echo '<tr> <td>' .  $element . '</td><td>'. $etudiant[1][$cle] . '</td><td><input type="text" name="'.$element.'" id="" required> </td> </tr> </br>' ;
        }
        ?>


    </table>

    <button type="submit">Envoyer</button>

</form>

</body>
</html>