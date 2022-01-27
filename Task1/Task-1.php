<?php

   $personsData = file_get_contents("Task1.json");
   $decoding = json_decode($personsData, true);
   
   foreach ($decoding as $person) {
      $dataArr = $person;
   }

   echo "<pre>";
   var_dump($dataArr);
   echo "</pre>";
  return $dataArr;