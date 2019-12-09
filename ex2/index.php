<?php
$page = 'Exercice 2';
include '../header.php';
$i = 0;
$number = 50;
$showNumber = 'Je suis le second nombre choisi : ' .$number. '.';?>
<div class="card-header font-weight-bold bg-info col-sm-12">Multiplier les nombres choisis si le premier est inférieur à 20</div>
<p><?= $showNumber ?></p>
<?php 
while ($i<20)
{?>
  <p>Voilà le résultat : <?= $i * $number ?></p>
<?php
$i++;
}?>
</div>
</div>
<?php include '../footer.php'; ?>