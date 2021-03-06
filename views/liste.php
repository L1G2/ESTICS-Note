<?php
    session_start();
    require_once("../Models/requete.php");
    $req= new REQUETE;
?>
<?php $title = 'ESTI Note | Ajout'; ?>

<?php ob_start(); ?>
    <div class="col-lg-9">
        <div class="central-meta">       
            <h4 class="title-content">Note générale des étudiants</h4>
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <div class="table100-head">
                            <table>
                                <thead>
                                    <tr class="row100 head">
                                        <th class="cell100 column1">N ͦ </th>
                                        <th class="cell100 column2">Nom et Prénom</th>
                                        <th class="cell100 column3">Controle continue</th>
                                        <th class="cell100 column4">Examen semestriel</th>
                                        <th class="cell100 column5">Moyenne</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="table100-body">
                            <table>
                                <tbody>
                                    <?php
                                        $req= new REQUETE ;

                                        $ctrlContinue=$req-> getNoteCtrl();
                                        $examenFinal =$req->getNoteExam();
                                        foreach($ctrlContinue[0] as $cle => $element){
                                            $found = array_search($element, $examenFinal[0]);			
                                            if ($found !== false) {
                                                echo ('    
                                                <tr class="row100 body">
                                                    <td class="cell100 column1">'.$element.'</td>
                                                    <td class="cell100 column2">'.$ctrlContinue[1][$cle].'</td>
                                                    <td class="cell100 column3">'.$ctrlContinue[2][$cle] .'</td>
                                                    <td class="cell100 column4">'.$examenFinal[2][$cle] .' </td>
                                                    <td class="cell100 column5"> '.($ctrlContinue[2][$cle]+$examenFinal[2][$cle]/2) .'</td>
                                                </tr>' );
                                            }
                                            else {
                                                echo ('    
                                                <tr class="row100 body">
                                                    <td class="cell100 column1">'.$element.'</td>
                                                    <td class="cell100 column2">'.$ctrlContinue[1][$cle].'</td>
                                                    <td class="cell100 column3">'.$ctrlContinue[2][$cle] .'</td>
                                                    <td class="cell100 column4"> </td>
                                                    <td class="cell100 column5">'.$ctrlContinue[2][$cle] .'</td>
                                                </tr>' );
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>