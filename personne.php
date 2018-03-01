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

   public  function getNamee() {
        return $this->name;
    }

    function getName2() {
        return $this->name;
    }
}
