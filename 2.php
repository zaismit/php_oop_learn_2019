<?php
class Friends
{
	function add()
	{

	}

	function delete()
	{

	}
	
}

$the_methods = get_class_methods('Friends');

foreach ($the_methods as $method)
{
	echo $method."<br>";
}
?>
