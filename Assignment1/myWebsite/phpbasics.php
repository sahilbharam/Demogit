<html>
<head> <title> PHP Basics </title> </head>
<body>

<?php
$num = 10;
$num1 = 30;

function sumofnum()
{
	$GLOBALS['result'] = $GLOBALS['num'] + $GLOBALS['num1'];
}


sumofnum();
echo $result ." <Br/>";
echo $_SERVER['PHP_SELF'] . "<BR/>";
echo $_SERVER['SERVER_NAME'] . "<BR/>";
echo $_SERVER['HTTP_HOST'] . "<BR/>";
echo $_SERVER['HTTP_REFERER'] . "<BR/>";
echo $_SERVER['HTTP_USER_AGENT'] . "<BR/>";
echo $_SERVER['SCRIPT_NAME'] . "<BR/>";
echo $_SERVER['SERVER_PORT'] . "<BR/>";

/*define("message","Good Evening");
print "<h2>  PHP Syntax </h2>";

$str =  message. " Hello to PHP World !!";



//echo $str . " lets learn it quickly";
echo $str . "<br/>";
echo strlen($str)."<br/>";
echo str_word_count($str)."<br/>";
echo strrev($str)."<br/>";
echo strpos($str,"World")."<br/>";
echo str_replace("World","Universe",$str)."<br/>";
echo strtoupper($str)."<br/>";
echo strtolower($str)."<br/>";
echo substr($str,0,6)."<br/>";
echo strcmp("Hello1 1" , "Hello")."<br/>";
//trim,rtrim,ltrim*/

/*
echo "Today's date is ". date('Y.m.d h:i:sa') . "<br/>";
echo "Today's date is ". date('l') . "<br/>";
*/






/* PHP Arrays */

$cars = array("VOLVO","BMW","RENAULT","TOYOTA");

$cars[4] = "MERCEDEZ";

//echo count($cars);

/*for($i = 0;$i<count($cars);$i++)
{
	echo $cars[$i] . "<br/>";
}*/

rsort($cars);
foreach($cars as $car)
{
	echo $car . "<br/>";
}

$employee = array("Manas"=>104,"Smriti"=>105);
$employee["Parag"] = 100;
$employee["Divyank"] = 101;
$employee["Prachi"] = 102;
$employee["Akash"] = 103;


//echo "Employee id for Smriti  is ". $employee["Smriti"];
//asort($employee);
ksort($employee);
foreach ($employee as $empkey => $empid)
{
	echo $empkey . " has employee id = " . $empid,"<br/>";
}

















?>















</body>

</html>