<?php
class Friends
{
	var $quantity;
	var $age;
  
	function hi()
	{

	}
  
	function bye()
	{
  
	}

	function hello()
	{
		echo "hello my friend <br>";
	}

	function age()
	{
		return "this friend has: ".$this->age;
	}

}
$alex = new Friends();

$alex -> hello();



$olga = new Friends();

$olga -> hello();



echo $alex -> age = 20;

echo "<br>";

echo $olga -> age = 18;

echo "<br>";



echo $alex->age();

echo "<br>";

echo $olga->age();

?>
