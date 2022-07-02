<?php

require_once 'App/init.php';


$wisudawan1 = new Terbaik("Awaluddin Rajab", "17650048", "Informatika", 4.00, "S.T", "Cumlaude");
echo $wisudawan1->dataWisudawan();
echo '<br>';
$wisudawan2 = new pujian("Millov", "17650036", "Farmasi", 3.90, "S.Farm", "Pujian");
echo $wisudawan2->dataWisudawan();

echo '<hr>';

$wisudawan = new DaftarWisudawan;
$wisudawan->tambahWisudawan($wisudawan1);
$wisudawan->tambahWisudawan($wisudawan2);
echo $wisudawan->cetak();
