<?php
$page = 'Exercice 6';
include '../header.php';?>
<div class="card-header font-weight-bold bg-info col-sm-12">Décrémenter de 20 jusque 0 et afficher : C'est presque bon</div>
<?php
for ($i=20; $i>=0; $i--)
{?>
<p><?= $i ?>.C'est presque bon</p>
<?php
}
?>
</div>
</div>
<?php include '../footer.php'; ?>