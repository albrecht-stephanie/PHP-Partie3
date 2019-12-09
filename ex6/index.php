<?php
$page = 'Exercice 6';
include '../header.php';
$result = " ";
for($i=20; $i>=0; $i -= 1)
{
    $result = 'C\'est presque bon.';
}?>
<div class="card-header font-weight-bold bg-info col-sm-12">Décrémenter de 20 jusque 0 et afficher : C'est presque bon</div>
<p><?= $result ?></p>
</div>
</div>
<?php include '../footer.php'; ?>