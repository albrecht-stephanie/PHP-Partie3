<?php
$page = 'Exercice 8';
include '../header.php';
$result = " ";
for($i=200; $i>=0; $i -= 12)
{
    $result = 'Enfin!!!';
}
?>
<div class="card-header font-weight-bold bg-info col-sm-12">Décrémenter de 1 jusque 100 de 12 en 1 et afficher : Enfin!!!</div>
<p><?= $result ?></p>
</div>
</div>
<?php include '../footer.php'; ?>