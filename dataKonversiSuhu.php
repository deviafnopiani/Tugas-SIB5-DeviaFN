<?php
require 'konversiSuhu.php';

$konversiSuhu1 = new KonversiSuhu ('Celcius', 50 , 'Farenheit');
$konversiSuhu2 = new KonversiSuhu ('Farenheit', 70 , 'Celcius');
$konversiSuhu3 = new KonversiSuhu ('Rheamur', 50 , 'Celcius');


$konversiSuhu1->cetak();
$konversiSuhu2->cetak();
$konversiSuhu3->cetak();

?>