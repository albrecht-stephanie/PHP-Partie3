<?php
$page = 'Exercice 4';
include '../header.php';
$i = 1;
$result = " ";
while ($i<10)
{
    $result = 'Voici le nombre: ' .$i. '.';
 $i =$i + $i /2;
}
?>
<div class="card-header font-weight-bold bg-info col-sm-12">Incrémenter de la moitié de la valeur si variable inférieur à 10.</div>
<p><?= $result ?></p>
</div>
</div>
<?php include '../footer.php'; ?>