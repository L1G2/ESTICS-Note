<?php $title = 'ESTI Note | Bienvenu'; ?>

<?php ob_start(); ?>
    <div class="col-lg-5 ">
        <div class="central-meta">
            <div>
                <h1>Bienvenu Mr Nirina</h1>
                <p>Il est temps de gérer les notes de vos élèves</p>
            </div>
        </div>

        <div class="central-meta">
            <h2>Info</h2>
            <ul>
                <li>Meuilleur élèves : Abdoul Ismael</li>
                <li>Moyenne de clase : 12.5/20</li>
                <li>Semestre : 2</li>
                <li>Heure de cours fini: 10 h</li>
                <li>Heure de cours restant: 7 h</li>
            </ul>
        </div>
    </div>

    <!-- Troisieme collone --> 
    <div class="col-lg-4">
        <aside class="central-meta">
            <?php include('chart.php')?>
        </aside>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>