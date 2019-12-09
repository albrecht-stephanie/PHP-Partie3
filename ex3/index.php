<?php
$page = 'Exercice 3';
include '../header.php';
$number = 30;
$i = 100;
$showNumber = 'Je suis le second nombre choisi : ' .$number. '.';?>
<div class="card-header font-weight-bold bg-info col-sm-12">Multiplier les nombres choisis tant que le premier nombre n'est pas inférieur ou égal à 10.</div>
<p><?= $showNumber ?></p>
<?php
while($i>=10)
{?>
<p>Le résultat : <?= $i * $number ?></p>
<?php
$i--;
}?>
</div>
</div>
<?php include '../footer.php'; ?>