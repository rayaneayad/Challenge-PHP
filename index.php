<?php
$books_title = "voyage avec un âne dans les Cévennes";
$readed = false; 
$date = "21/06/2017";
$price = "6€";

echo $books_title;
echo('<br>');
if ($readed == true) {
    echo "Lu";
}

if ($readed == false) {
    echo "Non lu";
}
echo('<br>');
echo $date;
echo('<br>');
echo $price;
