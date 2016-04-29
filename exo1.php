<?php

class Jeu
{
    private $joueur1 = "";
    private $joueur2 = "";
    private $turnj1 = 1;     # compteur tour
    private $turnj2 = 1;


    public function __construct($joueur1, $joueur2)
    {
        $this->joueur1 = $joueur1;
        $this->joueur2 = $joueur2;
    }

    public function getNewTab($tab)
    {
        $newTab = $tab;
        return $newTab;
    }

    public function getTurnJ1()
    {
        return $this->turnj1;
    }

    public function getTurnJ2()
    {
        return $this->turnj2;
    }

    public function j1Turn($joueurTour1)
    {
        return $joueurTour1 + 1;

    }

    public function j2Turn($joueurTour2)
    {
        return $joueurTour2 + 1;
    }

    public function takeAllumette($tab, $turn1, $turn2)
    {
        if (!isset($_POST['choix']) || empty($_POST['choix'])) {
            echo "Veuillez selectionner entre 1 et 3 allumettes pour jouer svp";
        } else {
            foreach ($_POST as $i) {
                $choixAllumettes = $i;
            }

            $tempTab = [];
            array_push($tempTab, $choixAllumettes);  # tableau des choix des allumettes

            foreach ($tempTab as $i) {
                $allumettes = $i;
            }

            if (count($allumettes) == 1) {
                $index1 = $allumettes[0] - 1;
                unset($tab[$index1]);
            } elseif (count($allumettes) == 2) {
                $index1 = $allumettes[0] - 1;
                $index2 = $allumettes[0];
                unset($tab[$index1]);
                unset($tab[$index2]);
            } elseif (count($allumettes) == 3) {
                $index1 = $allumettes[0] - 1;
                $index2 = $allumettes[0];
                $index3 = $allumettes[1];
                unset($tab[$index1]);
                unset($tab[$index2]);
                unset($tab[$index3]);

            } elseif (count($allumettes) >= 4) {
                echo "vous ne pouvez pas choisir plus de 3 allumettes par tour !";
            }
            return $tab;
        }
    }

}

$game = new Jeu("Sylvain", "Ordinateur");
$allumettes = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];

$tourjoueur1 = $game->getTurnJ1();
$tourjoueur2 = $game->getTurnJ2();

$startTab = $game->takeAllumette($allumettes, $tourjoueur1, $tourjoueur2); // TAB DEPART

//manque enregistrement de l'état de la partie en cours + système de contage de tour pour l'user et l'IA




?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1</title>
</head>
<body>
<form method="POST" action="exo1.php">
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
    echo $row . "<br>";
} ?>
</body>
</html>