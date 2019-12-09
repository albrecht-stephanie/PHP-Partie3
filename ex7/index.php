<?php
$page = 'Exercice 7';
include '../header.php';?>
<div class="card-header font-weight-bold bg-info col-sm-12">Incrémenter de 1 jusque 100 de 15 en 15 et afficher : On tient le bon bout</div>
<?php
for($i=1; $i<=100; $i += 15)
{?>
    <p><?= $i ?>. On tient le bon bout</p>
<?php
}?>
</div>
</div>
<p><?php echo 'merde' ?></p>
<?php include '../footer.php'; ?>