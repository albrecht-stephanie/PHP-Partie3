<?php
$page = 'Exercice 5';
include '../header.php';
$result = " ";
for($i=1; $i<=15; $i += 1)
{?>
<p><?= $i ?>.On y arrive presque</p>
<?php
}
?>
<div class="card-header font-weight-bold bg-info col-sm-12">Incrémenter de 1 jusque 15 et afficher : On y est presque</div>
<p><?= $result ?></p>
</div>
</div>
<?php include '../footer.php'; ?>