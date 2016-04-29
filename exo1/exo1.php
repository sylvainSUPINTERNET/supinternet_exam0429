<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1</title>
</head>
<body>
<form method="POST" action="../exo1.php">
    <p>Allumettes </p>
    <input type="checkbox" name="choix[]" value="1">
    <input type="checkbox" name="choix[]" value="2">
    <input type="checkbox" name="choix[]" value="3">
    <input type="checkbox" name="choix[]" value="4">
    <input type="checkbox" name="choix[]" value="5">
    <input type="checkbox" name="choix[]" value="6">
    <input type="checkbox" name="choix[]" value="7">
    <input type="checkbox" name="choix[]" value="8">
    <input type="checkbox" name="choix[]" value="9">
    <input type="checkbox" name="choix[]" value="10">
    <input type="checkbox" name="choix[]" value="11">
    <input type="checkbox" name="choix[]" value="12">

    <input type="submit" value="Tirer">
</form>
<?php foreach ($startTab as $row) {
        echo $row;
} ?>
</body>
</html>