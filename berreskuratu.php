<!DOCTYPE html>
<head>
<title>Izen-ematea</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="shortcut icon" href="https://31.media.tumblr.com/avatar_ee818b5d7be1_128.png">
<script type="text/javascript">

function eguneratu(){
	
	a = document.getElementById('email').value;
	b = document.getElementById('password').value;
	c = document.getElementById('tlf').value;
	
	
	eskaera = new XMLHttpRequest();
	
	eskaera.open('GET','pasahitzaaldatu.php?email='+a+'&pasa='+b+'&tlf='+c, true);
	eskaera.send()
	
	eskaera.onreadystatechange = function(){
			
					if((eskaera.readyState == 4) && (eskaera.status == 200)){
						document.getElementById('mezua').innerHTML = eskaera.responseText;
					}
					
			}
							
	}
	

</script>
</head>

<body>



<div id="page">

<div class="form-style">

<h1>Pasahitza eguneratu</h1>
<form id="erregistro" name="erregistro">

<input type="text" id='email' name="email" placeholder="Eposta"/>

<input type="password" id='password' name="password" placeholder="Pasahitza"/>

<input type="text" id='tlf' name="tlf" placeholder="Tlf zenbakia"/>

<input type="button" name="Bidali" class="inputButton" id="Bidali" value=" Bidali " onClick="eguneratu()"/> 

</form>

<div id="mezua"></div><br><br>


</div>
</div>
</body>