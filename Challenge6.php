<?php
    $booksSteven ["L'ile au trésor"] = '1883';
    $booksSteven ["Catriona"] = '1893';
    $booksSteven ["Enlevé"] = '1886'; 
   
    asort($booksSteven);

    foreach ($booksSteven as $key => $value){
        echo ($key. ' '. $value . '/n');
    }

    