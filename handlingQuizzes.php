<?php
session_start();
//$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
//mysql_select_db("u966022868_xabin",$con);

$con = mysql_connect("localhost","root","") or die($con);
mysql_select_db("quiz",$con); 


if(empty($_SESSION['session_username']))
{
    header('Location: login.php');
    exit;
}


$user = $_SESSION['session_username'];

$sql = "SELECT * FROM galdera where posta='$user'";
if (!mysql_query($sql)){
	die("Errorea: ".mysql_error());
}
	
$niregalderak=mysql_query($sql);


 ?>


<title>Galderak kudeatuz</title>



<script type="text/javascript" language="javascript">

function galdIkus(){
	xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","galdIkus.php",true);
    xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("galdIkus").innerHTML = xmlhttp.responseText;
            }
        }
		
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send();
    }
	
</script>




<script type="text/javascript" language="javascript">

function galdGehi(){
	xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","galdGehi.php",true);
    xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("galdGehi").innerHTML = xmlhttp.responseText;
            }
        }
		
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send();
    }
	
</script>



 <link rel="stylesheet" type="text/css" href="styles.css">
 
 <div id="header">
<h2>
<a href="layoutErab.html"> Aurkibidea </a><a href="InsertQuestion.php"> Galdera gehitu </a><a href="seexmlquestionserab.php"> Galderak ikusi </a><a href="CreditsErab.html"> Kredituak </a><a href="layout.html"> Irten </a>
</h2>

</div>
 
 
  <div id="page">
 
 
 <div class="form-style">
 <div id="button.style"> 
<a href="handlingquizzes.php">
<input type="submit" value="Galderak ikusi" onClick="galdIkus()" />
<br />
<br />
<a href="handlingquizzes.php">
<input type="submit" value="Galdera berria gehitu" onClick="galdGehi()" />
</div>
</div>
 
 <div id="galdGehi">
 
 </div>
 
 
  <div id="galdIkus">
 
 </div>
 


 <?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>