<?php

$id = $_GET['id'];

$get = file_get_contents('galderak.xml');
$xml = simplexml_load_string($get);
$data = $xml->assessmentItem;

$i=0;

foreach ($data as $row){
	
	echo" <div class='form-style'>

<h1>Galdera editatu</h1>

<input type='text' name='galdera' value='. $data->itemBody->p .' />

<input type='text' name='erantzuna' value='. $data->correctResponse->value .' />

<input type='button' name='eguneratu' value='Ez diat ezerre iten jeje' />";

	
}

?>