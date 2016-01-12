<?php

function welcom($name)
{
	echo'tere'.$name;
	//miskit uut ja huvitavat
	
	
}
echo welcom('Viljar');

$sentens ="tere tere mina tere";

$parts = explode('t' , $sentens);

print_r($parts);



?>