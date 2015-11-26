<?php
$get = file_get_contents('galderak.xml');
$xml = simplexml_load_string($get);
$data = $xml->assessmentItem;
$i=0;
$zenb = $_GET['zenb'];
$erantzuna = $_GET['erantzuna'];
$asmatu=0;

foreach ($data as $row){
	if ($i == $zenb){
		if ($erantzuna == $row->correctResponse->value){
			echo "Zuzena!";
			$asmatu=1;
			
		}
	}
	$i++;	
}

if ($asmatu==0)
{
	echo "Okerra!";
}

?>