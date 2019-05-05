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

echo $VW -> wheels_count;
echo $VW -> doors_count;
echo $VW -> seat_count;

class trucks extends cars
{

}

echo"<br>";

$tacoma = new trucks();

echo $tacoma -> wheels_count = 40;

?>
4
Fatal error: Uncaught Error: Cannot access private property cars::$doors_count in 
/Users/zaismit/www/ZAISMIT/php_oop_27042019/1/2_class_methods.php:22 Stack trace: #0 {main} thrown in 
/Users/zaismit/www/ZAISMIT/php_oop_27042019/1/2_class_methods.php on line 22
