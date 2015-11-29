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
	alert(a);
}
function eguneratu(){
	
	/* if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    } */

	/*var table = document.getElementById('taula');
		//1go errenkadatik aurrera irakurri (tituluak ez)
        for (var r = 1; r < table.rows[r].cells.length; r++) {
				var galdera = table.rows[r].cells[1].innerHTML;
				var zailtasuna = table.rows[r].cells[2].innerHTML;
				var erantzuna = table.rows[r].cells[3].innerHTML;
				alert(galdera);
				alert(zailtasuna);
				alert(erantzuna);
				//parametroak edukita, AJAX erabili eguneratzeko               
        }
	*/
	
}
</script>

 <link rel="stylesheet" type="text/css" href="styles.css">
 
<div id="header">
<h2>
<a href="reviewquizzes.php"> Galderak kudeatu </a><a href="ikusierabiltzaileak2.php"> Erabiltzaileak ikusi </a><a href="logout.php"> Irten </a>
</h2>

</div>

 

	<div id="page">
	
	
 
 
    <div class="button-style">

    </div>
	
</div>
</form>



 <?php 
 //Konexioa sortu datubasearekin
//$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
//mysql_select_db("u966022868_xabin",$con);

//Probak lokalki egiteko
$con = mysql_connect("localhost","root","") or die($con);
mysql_select_db("quiz",$con);
 
$query="SELECT * FROM galdera";
$galderak=mysql_query($query);

$lerrokop=mysql_numrows($galderak);
mysql_close();

$i=0;

//Jasotako erabiltzaile bakoitza inprimitzeko
while ($i < $lerrokop){
	$ID=mysql_result($galderak,$i,"ID");
	$galdera=mysql_result($galderak,$i,"galdera");
	$erantzuna=mysql_result($galderak,$i,"erantzuna");
	$zailtasuna=mysql_result($galderak,$i,"zailtasuna");
	$posta=mysql_result($galderak,$i,"posta");
	

	echo "<div id=$ID>
	<p id=$ID . 'galdera'>$galdera</p>
	<p id=$ID . 'erantzuna'>$erantzuna</p>
	<p id=$ID . 'posta'>$posta</p>
	</div> <input type='button' onClick=editatu($ID) value='Editatu'> <- Botoi hauetan AJAX inplementatzia falta, coming soon (Valve time)
	
	</br>
	<hr>";
	
	$i++;
}


?>