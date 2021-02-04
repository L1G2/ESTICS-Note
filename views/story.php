<?php
    session_start();
    require_once("../Models/requete.php");
    $req= new REQUETE;
?>
<?php $title = 'ESTI Note | Ajout'; ?>

<?php ob_start(); ?>
    <div class="col-lg-9">
        <div class="central-meta">       
            <h4 class="title-content">Liste des ajouts que vous avez effectués :</h4>
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <div class="table100-head">
                            <table>
                                <thead>
                                    <tr class="row100 head">
                                        <th class="cell100 column1 str1">Ajouter le</th>
                                        <th class="cell100 column2 str2">Contrôle du</th>
                                        <th class="cell100 column3 str3">Type de controle</th>
                                        <th class="cell100 column4 str4">Moyenne de Classe</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="table100-body">
                            <table>
                                <tbody>
                                    <?php
                                        $req= new REQUETE ;

                                        $story = $req-> getStory();
                                        foreach($story[0] as $idx => $element){			
                                                echo ('    
                                                <tr class="row100 body">
                                                    <td class="cell100 column1 str1">'.$element.'</td>
                                                    <td class="cell100 column2 str2">'.$story[1][$idx].'</td>
                                                    <td class="cell100 column3 str3">'.$story[2][$idx] .'</td>
                                                    <td class="cell100 column4 str4">'.$story[3][$idx] .' </td>
                                                </tr>' );
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