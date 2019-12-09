<?php
$page = 'Exercice 3';
include '../header.php';
$number = 30;
$showNumber = " ";
$result = " ";
$showNumber = 'Je suis le second nombre choisi : ' .$number. '.';
for ($i=100; $i>=10; $i--)
{
    $result = 'le résultat : ' .$i * $number. '.';
}
?>
<div class="card-header font-weight-bold bg-info col-sm-12">Multiplier les nombres choisis tant que le premier nombre n'est pas inférieur ou égal à 10.</div>
<p><?= $showNumber ?></p>
<p><?= $result ?></p>
</div>
</div>
<?php include '../footer.php'; ?>