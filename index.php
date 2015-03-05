<?php 

// $info = array('age' => 22,"name" => "ahmed salim" , "address"  => "Mansoura");

// // $info = array('ahmed',22,'Mansoura','010329329');
// echo "My name is  {$info['name']} <br>";
// echo "My age is {$info['age']} <br>";
// echo "im from{$info['address']} <br>";
// echo "My No is {$info['age']}";


// $name = "ahmed";

// // $name = "ali";
// // echo $name;



// if($name == "ahmed") {
// echo "ahmed";
// }
// elseif($name = "ali") {
// echo "ali";
// }
// elseif($name = "nehd")  {
// echo "nehd";
// }
// else {
// 	echo "no";
// }

// $age = '22';
// if($age > 18) {
// echo "welcome ahmed u can drive :)"; }
// else {
// echo "Sorry ahmed u cant drive :("; }


$num1 = 4;
$num2 = 5;
$eshra = "*";
// $eshara2="-";

// if($eshra == "+") {
// 	echo $num2 + $num1;
// }
// elseif($eshra=="-") {
// 	echo $num1 - $num2;
// }

// elseif($eshra=="/") {
// 	echo $num1 / $num2;
// }

// elseif($eshra=="*") {
// 	echo $num1 * $num2;
// }

switch ($eshra) {
	case '+':
	echo $num2 + $num1;
	break;

	case '*':
	echo $num1 * $num2;
	break;

	case '-':
	echo $num1 - $num2;
	break;

	case '/':
	echo $num1 / $num2;
	break;
	
	default:
		echo "sorry i don't know what to do";
	break;
}


?>