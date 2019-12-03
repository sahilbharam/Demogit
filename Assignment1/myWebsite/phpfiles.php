<?php
/*$f = fopen("sample.txt","w") or die("Unable to open file");
$str = "Introduction to PHP PHP is one of the most widely used server side scripting language for web development. Popular websites like Facebook, Yahoo,";
//echo fread($f,filesize("phpintro.txt"));
fwrite($f,$str);
fclose($f);
echo readfile("sample.txt");
*/


$f = fopen("phpintro.txt","r") or die("Unable to open file");

//echo fgets($f);
while(!feof($f))
{
	echo fgets($f)."<br/>";
}
fclose($f);
?>