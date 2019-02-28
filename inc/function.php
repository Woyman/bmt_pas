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
function getNameFoto($file){

		$nameArr = explode('.',$_FILES['foto']['name']);
		$file_ext = end($nameArr); 
		$filetmp = $_FILES['foto']['tmp_name'];
		$filename = uniqid().".".$file_ext;
		$file = array();
		$file['filename'] = $filename;
		$file['filetmp'] = $filetmp;

		return $file;
}

 ?>