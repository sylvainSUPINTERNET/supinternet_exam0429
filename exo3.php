<?php
require_once ("exo3/exo3model.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php foreach($result as $row){?>
   <ul>
       <li><?php echo $row['nom_magazine'] ?></li>
       <li><?php echo $row['type'] ?></li>
       <li><?php echo $row['date'] ?></li>
       <li><?php echo $row['parution'] ?></li>
   </ul>
<?php }?>
Géo :
<?php foreach($result1 as $row){?>
    <ul>
        <li><?php echo $row['nom']?>   </li>
    </ul>
    <?php $a++ ?>
<?php }?>
Géo a <?php echo $a ?> abonnées<br><br>

Ca m'interesse :
<?php foreach($result2 as $row){?>
    <ul>
        <li><?php echo $row['nom']?>   </li>
    </ul>
    <?php $b++ ?>
<?php }?>
Ca m'intersse a <?php echo $b ?> abonnee<br><br>

Télé Loisir :
<?php foreach($result3 as $row){?>
    <ul>
        <li><?php echo $row['nom']?>   </li>
    </ul>
    <?php $c++ ?>
<?php }?>
Télé loisir <?php echo $c ?> abonnées<br><br>

Néon :
<?php foreach($result4 as $row){?>
    <ul>
        <li><?php echo $row['nom']?>   </li>
    </ul>
    <?php $d++ ?>
<?php }?>
Néon <?php echo $d ?> abonnées<br><br>

Gala :
<?php foreach($result5 as $row){?>
    <ul>
        <li><?php echo $row['nom']?>   </li>
    </ul>
    <?php $e++ ?>
<?php }?>
Gala <?php echo $e ?> abonnées<br><br>
</body>
</html>

