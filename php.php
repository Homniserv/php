<?php
include("personne.php");
//include("animal.php");/**vs require*/

/**TODO av virgule sauf fin
Traits http://php.net/manual/fr/language.oop5.final.php
 *   return "{$prefix}ConcreteClass1"; http://php.net/manual/fr/language.oop5.abstract.php
 * interface */

$tab = [1, 10, 20];
$chnTab = ['f', 'o', 'o', 'bar','is whole'];

$string = '';
foreach ($chnTab as $value) {
    //$string += $value;
    $string = $string . $value;
}
echo $string;



/* * ********************************************virgules */
echo '<br>********************************************virgules';
  $string = "";
//for ($cpt = 0; $cpt < $chnTab . length - 1;) {
for ($cpt = 0; $cpt < count($chnTab) - 1;$cpt++) {
    echo "cpt=" . $cpt."<br>";
    //$string += $value;
    $value=$chnTab[$cpt];
    $string = $string . $value . ",";
}

//$string += $chnTab[$chnTab . length - 1];
//$string += $chnTab[count($chnTab) - 1];
$string = $string . $chnTab[count($chnTab) - 1];

echo $string;




/* * Abstract Constructor  Inheritance */
$personne = new Personne();
$personne->setName("MOUEZA");
 $name2 = $personne->getName2();
 $name = $personne->getNamee();
//echo "".$name;

