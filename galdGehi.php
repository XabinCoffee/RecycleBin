<?php
session_start();

$get = file_get_contents('galderak.xml');
$xml = simplexml_load_string($get);
$data = $xml->assessmentItem;

echo ("
<div class='form-style'>

<h1>Zure galdera gehitu</h1>
<form name='questionform' id='questionform' method='POST'>

 <input type='text' name='question' id='question' class='input' value='' size='20' placeholder='Galdera' />

 <input type='text' name='answer' id='answer' class='input' value='' size='20' placeholder='Erantzuna' />
 
 <input type='text' name='gaia' id='gaia' class='input' value='' size='20' placeholder='Gaia' />

 <input type='text' name='difficulty' id='difficulty' class='input' value='' size='20' placeholder='Zailtasuna (1 eta 5 artean)' />

 
 <input type='submit' name='submit' class='button' value='Bidali' />

  
</form>


</div> ");


?>