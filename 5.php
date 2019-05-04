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

}
$alex = new Friends();

$alex -> hello();



$olga = new Friends();

$olga -> hello();



echo $alex -> age = 20;

echo "<br>";

echo $olga -> age = 18;
