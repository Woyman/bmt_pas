<?php

function replace($str)
{
	$a = str_replace("-", "", $str);
	$tring = str_replace("'", "", $a);	
	return $tring;
}

function makeLinkberita($judul)
{
	$judul_berita = strtolower($judul);	

	$judul_berita = preg_replace('/[^a-zA-Z0-9_ -]/', '',$judul_berita);

	$link_berita =  str_replace(" ", "-", $judul_berita);

	$link_berita = rtrim($link_berita, "-");

	return $link_berita;
}

function string_linkMark($title)
{
	$string = explode(" ", $title);
	return urlencode(implode("-", $string)); 
}

function linkMark_string($title)
{
	$string = explode("-", $title);
	return urldecode(implode(" ", $string)); 
}

function limitWords300($text)
{
	$varText =  substr($text,0, 255);
	return $varText;
}

function limitWords500($text)
{
	$varText =  substr($text,0, 500);

	return $varText;
}

function getFirstPara($string){
    $string = substr($string,0, strpos($string, "</p>")+4);
    return $string;
}

function dateID($tanggal){

	$tgl = date_create($tanggal);



	$hari = dayID(date_format($tgl, 'N'));

	$bulan = monthID(date_format($tgl, 'n'));

	return $hari.', '.date_format($tgl, 'd').' '.$bulan." ".date_format($tgl, 'Y');

}
function monthID($bulan){

	switch ($bulan) {
		case '1':
			$nmHari = 'Januari';
			break;
		case '2': 
			$nmHari = 'Februari';
			break;
		case '3': 
			$nmHari = 'Maret';
			break;
		case '4': 
			$nmHari = 'April';
			break;
		case '5': 
			$nmHari = 'Mei';
			break;
		case '6': 
			$nmHari = 'Juni';
			break;
		case '7': 
			$nmHari = 'Juli';
			break;
		case '8': 
			$nmHari = 'Agustus';
			break;
		case '9': 
			$nmHari = 'September';
			break;
		case '10': 
			$nmHari = 'Oktober';
			break;
		case '11': 
			$nmHari = 'November';
			break;
		case '12': 
			$nmHari = 'Desember';
			break;
		default:
			$nmHari = '';
			break;
	}

	return $nmHari;

}

function dayID($hari){

	switch ($hari) {
		case '1':
			$nmHari = 'Senin';
			break;
		case '2': 
			$nmHari = 'Selasa';
			break;
		case '3': 
			$nmHari = 'Rabu';
			break;
		case '4': 
			$nmHari = 'Kamis';
			break;
		case '5': 
			$nmHari = 'Jumat';
			break;
		case '6': 
			$nmHari = 'Sabtu';
			break;
		case '7': 
			$nmHari = 'Minggu';
			break;
		default:
			$nmHari = '';
			break;
	}

	return $nmHari;

}

function makeSummaryBerita($isiBerita)
{

	$summary = limitWords300($isiBerita);
	$summary  = html_entity_decode(strip_tags($summary));

	return $summary;

}

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
		
		$fileInfo = pathinfo($_FILES['foto']['name']);		
		$file_ext = $fileInfo['extension'];

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