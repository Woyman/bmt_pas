<?php

function paragraf($paragraf)
{
	$description =  explode(PHP_EOL,$paragraf);

	return $description;
}
function buatrp($angka){
	$jadi ="Rp. " .number_format($angka,2,',','.');
	return $jadi;
}

// fungsi di simulasi efektif jgn dihapus

function to_rupiah($value)
{
        if($value < 0)
        {
            return '( Rp '.number_format(abs($value), 0, '', '.').' )';
        }
        else
        {
            return 'Rp '.number_format($value, 0, '', '.').'  ';
        }
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

function changeIDRtoInt($price)
{
	return str_replace('.', '', $price);
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
// hitung kredit anuitas *jangan dihapus*
function hitung_kredit($besar_pinjaman, $jangka, $bunga) 
{ 
	$bunga_bulan = ($_SESSION['simulasi']['bunga']/12)/100; 
	$pembagi = 1-(1/pow(1+$bunga_bulan, $_SESSION['simulasi']['jangka'])); 
	$hasil = $_SESSION['simulasi']['besar_pinjaman']/($pembagi/$bunga_bulan); 
	return $hasil; 
} 

function rupiah($angka) 
{ 
	$jadi = "Rp ".number_format($angka,2,',','.'); 
	return $jadi; 
} 

 ?>