<?php

$id = $_GET['id'];
$galdera = $_GET['galdera'];
$erantzuna = $_GET['erantzuna'];
$konplexutasuna = $_GET['konplexutasuna'];
$gaia = $_GET['gaia'];

$get = file_get_contents('galderak.xml');
$xml = simplexml_load_string($get);
$data = $xml->assessmentItem;

$i=0;

foreach ($data as $row) {
	
	if($i==$id){
			$row->addAttribute('konplexutasuna',$zailtasuna);
			$row->addAttribute('subject',$gaia);
			$itemBody=$row->addChild('itemBody');
			$correctResponse=$row->addChild('correctResponse');
			$itemBody->addChild('p',$galdera);
			$correctResponse->addChild('value', $erantzuna);
			$xml->asXML("galderak.xml");
	}

	echo "GRAE";
	
}


?>