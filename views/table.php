<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- <link rel="stylesheet" type="text/css" href="../Assets/css/bootstrap.min.css"> -->
<link rel="stylesheet" type="text/css" href="../Assets/css/table.css">

</head>
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
                            $etudiant =$req-> getEtudiant();
                            foreach ($etudiant [0] as $cle => $element){
                                echo '
                                	<tr class="row100 body">
                                		<td class="cell100 column1">'. $element . '</td>
                                		<td class="cell100 column2">'. $etudiant[1][$cle] . '</td>
                                		<td class="cell100 column3"><input type="text" name="'.$element.'" id="" required>
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
</html>