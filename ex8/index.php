<?php
$page = 'Exercice 8';
include '../header.php';?>
<div class="card-header font-weight-bold bg-info col-sm-12">Décrémenter de 1 jusque 100 de 12 en 1 et afficher : Enfin!!!</div>
<?php
for($i=200; $i>=0; $i -= 12)
{?>
    <p><?= $i ?>. Enfin!!!</p>
<?php
}?>
</div>
</div>
<?php include '../footer.php'; ?>