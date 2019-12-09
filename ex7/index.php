<?php
$page = 'Exercice 7';
include '../header.php';
$result = " ";
for($i=1; $i<=100; $i += 15)
{
    $result = 'On tient le bon bout';
}
?>
<div class="card-header font-weight-bold bg-info col-sm-12">Incrémenter de 1 jusque 100 de 15 en 15 et afficher : On tient le bon bout</div>
<P><?= $result ?></P>
</div>
</div>
<?php include '../footer.php'; ?>