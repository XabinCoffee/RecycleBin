<?php
$get = file_get_contents('galderak.xml');
$xml = simplexml_load_string($get);
$data = $xml->assessmentItem;

 ?>
 <head>
 
 <script type="text/javascript">

function konprobatu(a){
	
	erantzuna = document.getElementById(a).value;
	eskaera = new XMLHttpRequest();
	
	eskaera.open('GET','erantzunakonprobatu.php?zenb='+a+'&erantzuna='+erantzuna, true);
	eskaera.send()
	
	eskaera.onreadystatechange = function(){
			
					if((eskaera.readyState == 4) && (eskaera.status == 200)){
						document.getElementById('div'+a).innerHTML = eskaera.responseText;
					}
					
			}
							
	}
	

</script>
 
 
 </head>
 <body>
 
<title>Galderak ikusi</title>

 <link rel="stylesheet" type="text/css" href="styles.css">

<div id="header">
<h2>
<a href="layout.html"> Aurkibidea </a><a href="seexmlquestions.php"> Galderak ikusi </a><a href="login.php"> Saioa hasi </a><a href="signup.html"> Izen-ematea </a><a href="credits.html"> Kredituak </a>
</h2>

</div>
 
  <div id="page">
 
  
 <table class="taula"> 
 <tr>
 <th>Galdera</th>
 <th>Zailtasuna</th>
  <th>Gaia</th>
 <th>Erantzuna</th>
 </tr>
 </thead>
 <?php 
 $i = 0;
 foreach ($data as $row){
	$erantzuna = $row->correctResponse->value;
 ?>
 <tr>
 <td><?php echo $row->itemBody->p ?></td>
 <td><?php echo $row['konplexutasuna'] ?></td>
  <td><?php echo $row['subject'] ?></td>
 <td><?php echo "<div id='div".$i."'> <input type='text' id=". $i ."> <input type='button' value='Konprobatu' onClick=konprobatu(".$i.")> </div>" ?></td>
 </tr>

 <?php
 $i++;
 } 
 ?>
 
 </table>
 
 


</div>
</body>