<?php
   require "drugstore.php";

   $drugstore = new DrugStore($_POST['name'],$_POST['lastname'],$_POST['age'],$_POST['gender'],$_POST['high'],$_POST['condition'],$_POST['al'],$_POST['ra'],$_POST['gs'],
    $_POST['weight']);
   
   
   echo "Hello, " . $drugstore->getName() . "! your last name is: " . $drugstore->getLName();
   echo "<br>";
   echo "Edad " . $drugstore->getAge();
   echo "<br>";
   echo "Genero: " . $drugstore->getGender();
   echo "<br>";
   echo "Altura: " . $drugstore->getHigh();
   echo "<br>";
   echo "Peso: " . $drugstore->getPs();
   echo "<br>";
   echo "Condicion Medica: " . $drugstore->getCondition();
   echo "<br>";
   echo "Alergia: " . $drugstore->getAl();
   echo "<br>";
   echo "Reacciones: " . $drugstore->getRa();
   echo "<br>";
   echo "Grupo Sanguineo: " . $drugstore->getGs();


?>