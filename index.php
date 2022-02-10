<?php
    $weapons = ['fists', 'whip', 'gun'];
    $opponentWeapon = $weapons[rand(0,2)];

    if($opponentWeapon == 'fists') {
        $weaponSteve = 'gun';
        echo $weaponSteve;
    }
    elseif($opponentWeapon == 'gun') {
        $weaponSteve = 'whip';
        echo $weaponSteve;
    }
    else{
        $weaponSteve = 'fist';
        echo $weaponSteve;
    }