<!DOCTYPE html>
<head>
<title>Izen-ematea</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="shortcut icon" href="https://31.media.tumblr.com/avatar_ee818b5d7be1_128.png">
<script type="text/javascript">

function konprobatu(){
				konprobatuEmaila();
		
				konprobatuPass();
			}
			
function konprobatuEmaila(){
	
	eskaera = new XMLHttpRequest();
		
		var email = document.getElementById('email').value; 
		
		eskaera.open("GET","soapBezEgiaztatuMatrikulaAJAX.php?email="+email,true); 
		eskaera.send(null);	
		
		eskaera.onreadystatechange = function(){
			
					if((eskaera.readyState == 4) && (eskaera.status == 200)){
						document.getElementById('emailErantzun').innerHTML = eskaera.responseText;
					}
					
				}
							
			}
			
			function konprobatuPass(){				
					eskaera1 = new XMLHttpRequest();
					var pass = document.getElementById('password').value;
					
					eskaera1.open("GET","soapBezEgiaztatuPasahitzaAJAX.php?password="+pass,true); 
					eskaera1.send(null);
					
					eskaera1.onreadystatechange = function(){
						if((eskaera1.readyState == 4) && (eskaera1.status == 200)){
							document.getElementById('passErantzun').innerHTML = eskaera1.responseText;
						}
				
					}
					
			}


</script>
</head>

<body>

<!--<div id="header">
<h2>
<a href="hasiera.html"> Aurkibidea </a><a href="seexmlquestions.php"> Galderak ikusi </a><a href="login.php"> Saioa hasi </a><a href="Signup.html"> Izen-ematea </a><a href="Credits.html"> Kredituak </a>
</h2>

</div>-->

<div id="page">

<div class="form-style">

<h1>Ikasleen izen-ematea</h1>
<form id="erregistro" name="erregistro" onsubmit="return konprobazioa()" method="POST">

<input type="text" id='email' name="email" placeholder="Eposta"/>

<input type="password" id='password' name="password" placeholder="Pasahitza"/>

<input type="button" name="Bidali" class="inputButton" id="Bidali" value=" Bidali " onClick="konprobatu()"/> 

</form>

<div id="emailErantzun"></div><br><br>
<div id="passErantzun"></div>

</div>
</div>
</body>