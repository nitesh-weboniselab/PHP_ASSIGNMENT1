<?php
//  $name and $Emp_Id are global
//there are two ways to use global 1. use global inside function before variable 2. use $GLOBALS['var_name']

$name = "Nitesh Wadekar";
$Emp_Id = "WL162";

class Employee {

	   function Month_Attendance($attend) {
	   	  global $name,$Emp_Id;  // here we used first way
	   	   echo  "NAME = " . $name ."<br>" ."Emp_Id = " . $Emp_Id ."<br>" ."Attendance = " .$attend. "% <br>"  ;

	   }

	   function Month_Salary($salary) {
	   	                         // here we use second way        
	   	  echo "Name = " . $GLOBALS['name'] . "<br>" ."Emp_Id = ". $GLOBALS['Emp_Id'] ."<br>" . "Salary = " .$salary;

	   }
}

$emp = new Employee;
$emp->Month_Attendance("90");
$emp->Month_Salary(" RS. 21000")

?>
