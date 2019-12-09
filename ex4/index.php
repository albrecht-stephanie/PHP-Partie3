<?php
$page = 'Exercice 4';
include '../header.php';?>
<div class="card-header font-weight-bold bg-info col-sm-12">Incrémenter de la moitié de la valeur si variable inférieur à 10.</div>
<?php
$i = 1;
while($i<=10)
{?>
<p>Voici le nombre: <?= $i ?></p>
<?php $i += $i/2;}?>
</div>
</div>
<?php include '../footer.php'; ?>