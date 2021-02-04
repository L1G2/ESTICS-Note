<?php
    session_start();
    require_once("../Models/requete.php");
    $req= new REQUETE;
?>
<?php $title = 'ESTI Note | Ajout'; ?>

<?php ob_start(); ?>
<div class="col-lg-9">
    <div class="central-meta">       
        <form action="../Controller/controller.php?action=ajout_note" method="post">
            <h4 class="title-content">Information générale sur la note</h4>
            <div class="form-row">
                <div class="col">
                    <label for="inputRaison">Raison </label>
                        <select class="form-control" name="raisons" id="inputRaison">
                            <?php                 
                                $raisons =$req-> getRaison();
                                foreach ($raisons [0] as $cle => $element){
                                    echo '<option value="' .  $element . '">'. $raisons[1][$cle] . '</option>' ;
                                }                   
                            ?>      
                        </select>
                </div>
                <div class="col">
                    <label for="inputSemestre">Semestre </label>
                        <select class="form-control" name="semestres" id="inputSemestre">
                                <option value="1">Semestre 1</option>
                                <option value="2">Semestre 2</option>
                        </select>
                </div>
                <div class="col">
                    <label for="inputCoeff">Coefficient</label>
                    <input class="form-control " type="text" name="coeffNote" id="inputCoeff" required/>
                </div>
                <div class="col">
                    <label for="inputDate">Date</label>
                    <input class="form-control " value type="date" value="" name="dateNote" id="inputDate" required/>
                </div>
            </div>
            <h4 class="title-content">Note de chaque étudiant</h4>
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <div class="table100-head">
                            <table>
                                <thead>
                                    <tr class="row100 head">
                                        <th class="cell100 column1">N ͦ </th>
                                        <th class="cell100 column2">Nom et Prénom</th>
                                        <th class="cell100 column3">Notes</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="table100-body">
                            <table>
                                <tbody>
                                    <?php                
                                    $etudiant = $req-> getEtudiant();
                                    foreach ($etudiant [0] as $cle => $element){
                                        echo '
                                            <tr class="row100 body">
                                                <td class="cell100 column1">'. $element . '</td>
                                                <td class="cell100 column2">'. $etudiant[1][$cle] . '</td>
                                                <td class="cell100 column3 cell-table">
                                                    <div class="form-group">    
                                                        <input type="text" class="" name="'.$element.'" placeholder="insérer note" required/>
                                                        <i class="mtrl-select"></i>
                                                    </div>
                                                </td> 
                                            </tr>
                                            ' ;
                                    }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <span class="help-block" style="color:red">
                <?php
                    if(!empty($_GET["action"])){
                        $action = htmlspecialchars($_GET["action"]);
                        if($action == "erreur_info"){
                            echo("<br><span>Veuillez à bien remplir toute les informations ci-dessus</span>");
                        }
                    }
                ?>
            </span>
            <div style="padding-left: 80% !important;">
                <button onClick="submit()" class="mtr-btn "><span> Enregistrer</span></button>
            </div>
        </form>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>