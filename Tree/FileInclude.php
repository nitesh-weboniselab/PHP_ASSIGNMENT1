<?php
  include 'Addition.php';
  include 'Subtraction.php';
  include 'Multiplication';
  include 'Division';

  $add = new Addition;
  $sub = new Subtraction;
  $mul = new Multiplication;
  $div = new Division;
  $numOne = $_GET["OperandOne"];
  $numTwo = $_GET["OperandTwo"]; 
  if(isset($_GET["add"])) {
  	 $result = $add->addition($numOne,$numTwo);
  print " Addition = $result";
  }
  if(isset($_GET['sub'])) {
  	  $result=$sub->subtraction($numOne,$numTwo);
  print " Subtraction  = $result";
  }
  if(isset($_GET['mul'])) {
  	  $result = $mul->multiplication($numOne,$numTwo);
  	   print "Multiplication = $result";
  }
  if(isset($_GET['div'])) {
  	  $result = $div->division($numOne,$numTwo);
  	   print "Division = $result";
  }
  
 ?>

 