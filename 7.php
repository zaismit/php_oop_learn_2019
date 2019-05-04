<?php
class cars
{
	var $wheelscount = 4;

	function gretting()
	{
		echo "hello";
	}

}

$VW = new cars();

echo $VW -> wheelscount;

class trucks extends cars
{

}

echo"<br>";

$tacoma = new trucks();

echo $tacoma -> wheelscount = 40;

?>
