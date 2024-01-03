<?php
require_once 'Character.php';
require_once 'Hero.php';
require_once 'Orc.php';
$hero = new Hero(1000, 0, 'Link', 'Master Sword', 400, 'Bouclier Hylien', 450);
$orc = new Orc(2000, 0, 'Eau');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Stats</title>
</head>

<body>

    <p><u>Héros</u> :</p>

    <?php

    $hero->getInfos();
    ?>


    <p><u>Orc</u> :</p>
    <?php

    $orc->getInfosOrc();
    ?>
    <p><u>Attaque</u> :</p>
    <?php
    echo 'Un Orc est apparu ! <br> <br>';
    while ($hero->getHealth() > 0 && $orc->getHealth() > 0) {

        // Attaque du Hero
    
        echo $hero->getName() . ' attaque l\'Orc. <br>';
        $hero->getWeaponDamage();
        echo $hero->getName() . ' inflige ' . $hero->getWeaponDamage() . ' points de dégats à l\'Orc! <br>';
        $orc->setHealth($orc->getHealth() - $hero->getWeaponDamage());
        echo 'Il reste à l\'Orc' . ' ' . max(0, $orc->getHealth()) . ' points de vie ! <br>';
        if ($orc->getHealth() <= 0) {
            echo 'L\'Orc est mort ! <br> ';
            break;
        }
        echo '<br><br> ';

        // Attaque de l'Orc
    
        echo 'L\'Orc attaque ' . $hero->getName() . ' avec une massue. <br>';
        $orc->attack();
        echo $hero->getName() . ' subit ' . $orc->getDamage() . ' points de dégats ! <br>';
        $hero->beAttacked($orc->getDamage());
        echo 'Il reste à ' . $hero->getName() . ' ' . max(0, $hero->getHealth()) . ' points de vie ! <br>';
        if ($hero->getHealth() <= 0) {
            echo $hero->getName() . ' est mort ! <br> ';
            break;
        }
        echo '<br><br>';
    }
    ?>
</body>

</html>