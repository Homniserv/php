<?php
include("personne.php");

$tab = [1, 10, 20];
$chnTab = ['f', 'o', 'o', 'bar'];

$string = '';
foreach ($chnTab as $value) {
    //$string += $value;
    $string = $string . $value;
}
echo $string;


/* * ********************************************virgules */
//for ($cpt = 0; $cpt < $chnTab . length - 1;) {
for ($cpt = 0; $cpt < count($chnTab) - 1;$cpt++) {
    echo "cpt=" . $cpt;
    //$string += $value;
    $string = $string . $value . ",";
}

//$string += $chnTab[$chnTab . length - 1];
$string += $chnTab[count($chnTab) - 1];

echo $string;

//TODO av virgule sauf fin




/* * Abstract Constructor  Inheritance */
$personne = new Personne();
$personne.setName("MOUEZA");
