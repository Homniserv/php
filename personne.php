<?php

class Personne {

    var $birthYear, $name;

    function __construct() {
        print "In BaseClass constructor\n";
    }

    function setBirthYear($birthYear) {
        $birthYear = $birthYear;
    }

    function setName($namee) {
        $name = $namee;
    }

    function getName() {
        return $name;
    }

}
