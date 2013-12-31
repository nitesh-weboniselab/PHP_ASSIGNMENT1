<?php

$name = $_POST['userName'];
$side= $_POST['webSide'];

if(!isset($_COOKIE["CookiesTest"])){
setcookie("CookiesTest", $name);
echo $_COOKIE["CookiesTest"];	
}
else {
  $strname= $_COOKIE["CookiesTest"];
   if($strname === $name){
      echo "$name you already loged ..!";
    }
    else {
      echo "Welcome $name";
    }
}

if(!isset($_COOKIE["CookiesTestOne"])){
setcookie("CookiesTestOne", $side);
echo $_COOKIE["CookiesTestOne"];	
}
else {
  $strname= $_COOKIE["CookiesTestOne"];
   if($strname === $side){
      echo "$side  already visited ..!";
    }
    else {
      echo " New $side";
    }
}
?>