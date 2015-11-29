<?php
session_start(); 

if($_SESSION['session_username'] != "web000@ehu.es")
{
    header("Location: logout.php");
    exit;
}

 ?>


<title>Galderak kudeatuz</title>

<script type="text/javascript">

function editatu(a){

	eskaera = new XMLHttpRequest();
	
	eskaera.open('GET','galderaeditatu.php?id='+a,true);
	eskaera.send(null);
	
	 xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("page").innerHTML = xmlhttp.responseText;
				
            }
        }
	
}

</script>

 <link rel="stylesheet" type="text/css" href="styles.css">
 
<div id="header">
<h2>
<a href="reviewquizzes.php"> Galderak kudeatu </a><a href="ikusierabiltzaileak2.php"> Erabiltzaileak ikusi </a><a href="logout.php"> Irten </a>
</h2>

</div>

 

	<div id="page">
	
	<div>Egin klik galdera batean hau aldatu ahal izateko.</div>
	
	
 
 
    <div class="button-style">

    </div>
	
</div>
</form>



 <?php 
 $get = file_get_contents('galderak.xml');
$xml = simplexml_load_string($get);
$data = $xml->assessmentItem;

$i=0;

foreach ($data as $row){
 
	$ID=$i;
	$galdera=$row->itemBody->p;
	$erantzuna=$row->correctResponse->value;
	$zailtasuna=$row['konplexutasuna'];
	$gaia=$row['subject'];


	echo 
	"
	<table class='taula' id = $ID onClick='editatu($ID)'> 
	<tr>
	<th>Galdera</th>
	<th>Erantzuna</th>
	<th>Konplexutasuna</th>
	<th>Gaia</th>
	</tr>
	</thead>
	
	<tr>
 <td> ".$galdera."</td>
 <td> ".$erantzuna."</td>
  <td> ".$zailtasuna."</td>
 <td> ".$gaia."</td>
 </tr>
 
 <br>";
	$i++;
	
	
	

}


?>