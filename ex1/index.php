<?php
$page = 'Exercice 1';
include '../header.php';?>
<div class="card-header font-weight-bold bg-info col-sm-12">Affiche tous les nombres si celui choisi est inférieur à 10.</div>
<?php
$i = 0;
while ($i<=10){?>
<p>Nombre = <?= $i ?></p>
<?php $i++; }?>
</div>
</div>
<?php include '../footer.php'; ?>

