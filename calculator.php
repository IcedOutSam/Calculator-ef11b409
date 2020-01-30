<?php
echo ("Welke operatie wil je uitvoeren? (+, -)");
$operatie = readline();
echo ("Voer een cijfer in");
$cijfer1 = readline();
echo ("Voer nog een cijfer in");
$cijfer2 = readline();
$antwoord1 = ($cijfer1+$cijfer2);
$antwoord2 = ($cijfer1-$cijfer2);
if ($operatie === '+'){
  echo ($cijfer1 ." + " . $cijfer2 . " = ". $antwoord1);
}
elseif($operatie === '-'){
    echo ($cijfer1 ." - " . $cijfer2 . " = ". $antwoord2);
}

 ?>
