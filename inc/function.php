<?php

function paragraf($paragraf)
{
	$description =  explode(PHP_EOL,$paragraf);

	return $description;
}

function paragrafCounted($var)
{
	
	$var = count(paragraf($var));

	return $var;
}
function batasiKalimat($text)
{
	$varText =  substr($text,0, 200)."......";

	return $varText;
}

function batasiKalimat100($text)
{
	$varText =  substr($text,0, 150)."......";

	return $varText;
}

function batasiKalimat75($text)
{
	$varText =  substr($text,0, 75)."......";

	return $varText;
}

 ?>