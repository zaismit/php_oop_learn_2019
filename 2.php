<?php
class Friends
{
	function hi()
	{

	}

	function bye()
	{

	}
	
}

$the_methods = get_class_methods('Friends');

foreach ($the_methods as $method)
{
	echo $method."<br>";
}
?>
