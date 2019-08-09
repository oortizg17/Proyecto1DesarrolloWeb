<?php
Class DrugStore {
 private $name;
 private $last_name;
 private $age;
 private $gender;
 private $high;
 private $ps;
 private $condition;
 private $al;
 private $ra;
 private $gs;


 function __construct( $name, $last_name,$age,$gender,$high,$condition,$al,$ra,$gs,$ps) {

     $this->name = $name;
     $this->last_name=$last_name;
     $this->age=$age;
     $this->gender=$gender;
     $this->high=$high;
     $this->condition=$condition;
     $this->al=$al;
     $this->ra=$ra;
     $this->gs=$gs;
     $this->ps=$ps;

 }


    function getPs() {
         return $this->ps;     
    }

    function getName() {
         return $this->name;
    }

    function getLName() {
        return $this->last_name;
    }

    function getAge() {
        return $this->age;
    }

    function getGender() {
        return $this->gender;
    }

    function getHigh() {
        return $this->high;
    }



    function getCondition() {
        return $this->condition;
    }

    function getAl() {
        return $this->al;
    }
   
    function getRa() {
        return $this->ra;
    }



    function getGs() {
        return $this->gs;
    }
}
?>