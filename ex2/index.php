<?php
$page = 'Exercice 2';
include '../header.php';
$number = 50;
$showNumber = " ";
$result = " ";
$showNumber = 'Je suis le second nombre choisi : ' .$number. '.';
for ($i=0; $i<=20; $i++)
{
  $result = 'Voilà le résultat : ' .$i * $number. '.';
}
?>
<div class="card-header font-weight-bold bg-info col-sm-12">Multiplier les nombres choisis si le premier est inférieur à 20</div>
<p><?= $showNumber ?></p>
<p><?= $result ?></p>
</div>
</div>
<?php include '../footer.php'; ?>