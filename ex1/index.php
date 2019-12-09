<?php
$page = 'Exercice 1';
include '../header.php';
$result = " ";
for ($i=0; $i<=10; $i++)
{
    $result = '<p>le nombre est : ' .$i. '.</p>';
}?>
<div class="card-header font-weight-bold bg-info col-sm-12">Affiche tous les nombres si celui choisi est inférieur à 10.</div>
<p><?= $result ?></p>
</div>
</div>
<?php include '../footer.php'; ?>

