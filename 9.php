<?php
class cars
{
	public $wheels_count = 4;

	private $doors_count = 5;

	protected $seat_count = 4;

	function car_detail()
	{
		echo $this->wheels_count;
		echo $this->doors_count;
		echo $this->seat_count;
	}

}

$VW = new cars();

//echo $VW -> wheels_count;
//echo $VW -> doors_count;
//echo $VW -> seat_count;


echo $VW -> car_detail();


class trucks extends cars
{

}

echo"<br>";

$tacoma = new trucks();

echo $tacoma -> wheels_count = 40;

?>

454
40
