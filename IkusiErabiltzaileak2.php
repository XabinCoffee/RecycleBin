<?php

//Konexioa sortu datubasearekin
//$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
//mysql_select_db("u966022868_xabin",$con);

//Probak lokalki egiteko
$con = mysql_connect("localhost","root","") or die($con);
mysql_select_db("quiz",$con);

?>

<head>
 <title>Erabiltzaileen zerrenda</title>
 <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

<div id="header">
<h2>
<a href="reviewquizzes.php"> Galderak kudeatu </a><a href="ikusierabiltzaileak2.php"> Erabiltzaileak ikusi </a><a href="logout.php"> Irten </a>
</h2>

</div>

<div id="page">

<table class="taula"> 
 <tr>
 <th>Izen-Abizenak</th>
 <th>Eposta</th>
 <th>Telefonoa</th>
 <th>Espezialitatea</th>
 <th>Interesak</th>
 </tr>
 </thead>

<?php
//Erabiltzaile taulatik dena aukeratu
$query="SELECT * FROM erabiltzaile";
$erabguztiak=mysql_query($query);

$lerrokop=mysql_numrows($erabguztiak);mysql_close();

$i=0;


//Jasotako erabiltzaile bakoitza inprimitzeko
while ($i < $lerrokop){
	$izenabizen=mysql_result($erabguztiak,$i,"Izena");
	$email=mysql_result($erabguztiak,$i,"Eposta");
	$pasahitza=mysql_result($erabguztiak,$i,"Pasahitza");
	$tlf=mysql_result($erabguztiak,$i,"Telefonoa");
	$esp=mysql_result($erabguztiak,$i,"Espezialitatea");
	$interesak=mysql_result($erabguztiak,$i,"Interesak");

	echo "
	
	<tr>
 <td> ".$izenabizen."</td>
 <td> ".$email."</td>
  <td> ".$tlf."</td>
 <td> ".$esp."</td>
 <td> ".$interesak."</td>
 </tr>";
	$i++;
}

?>

</div>
</body>