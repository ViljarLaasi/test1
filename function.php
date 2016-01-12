<?php

function welcom($name)
{
	echo'tere'.$name;
	
	
	
}
echo welcom('Viljar');

$sentens ="tere tere mina tere";

$parts = explode('t' , $sentens);

print_r($parts);



?>