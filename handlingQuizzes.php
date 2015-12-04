<?php
session_start();
$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
mysql_select_db("u966022868_xabin",$con);

//$con = mysql_connect("localhost","root","") or die($con);
//mysql_select_db("quiz",$con); 


if(empty($_SESSION['session_username'] ))
{
    header('Location: login.php');
    exit;
}
else if ($_SESSION['session_username'] == "web000@ehu.es"){
	header('Location: reviewquizzes.php');
	exit;
}


$user = $_SESSION['session_username'];

$sql = "SELECT * FROM galdera where posta='$user'";
if (!mysql_query($sql)){
	die("Errorea: ".mysql_error());
}
	
$niregalderak=mysql_query($sql);


$get = file_get_contents('galderak.xml');
$xml = simplexml_load_string($get);
$data = $xml->assessmentItem;


?>


<script type="text/javascript" language="javascript">

function galdIkus(){
	
	xmlhttp = new XMLHttpRequest();
	
	xmlhttp.open("GET","galdikus.php",true);
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
	xmlhttp.open("GET","galdgehi.php",true);
	xmlhttp.send(null);
    xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("galdGehi").innerHTML = xmlhttp.responseText;
            }
        }
		
		//xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        
    }
	
</script>

<?php







if(!empty($_POST['question']) && !empty($_POST['answer']) && !empty($_POST['gaia'])){
	
 $posta = $_SESSION['session_username'];
 $galdera = $_POST['question'];
 $erantzuna = $_POST['answer'];
 $gaia = $_POST['gaia'];
 
 if (!empty($_POST['difficulty'])){
	 $zailtasuna = $_POST['difficulty'];
	 if ($zailtasuna>=5 && $zailtasuna<=1){
		 $message = "Zailtasun okerra";
	 }
	 
	 else{
		 $zailtasuna = $_POST['difficulty'];
		 $sql = "INSERT INTO galdera (galdera, erantzuna, zailtasuna, posta) VALUES ('$galdera','$erantzuna','$zailtasuna', '$posta'	)"; 
		 mysql_query($sql);
	 }
	 
	 $assessmentItem = $xml->addChild('assessmentItem');
			$assessmentItem->addAttribute('konplexutasuna',$zailtasuna);
			$assessmentItem->addAttribute('subject',$gaia);
			$itemBody=$assessmentItem->addChild('itemBody');
			$correctResponse=$assessmentItem->addChild('correctResponse');
			$itemBody->addChild('p',$galdera);
			$correctResponse->addChild('value', $erantzuna);
			$xml->asXML("galderak.xml");
			$message = "Galdera arazorik gabe gorde da.";
		echo '<script type="text/javascript">galdIkus();</script>';
 }
			
else{
	$sql = "INSERT INTO galdera (galdera, erantzuna, zailtasuna, posta) VALUES ('$galdera','$erantzuna', NULL,'$posta')"; 
	mysql_query($sql);
		$id = 1;
		$ekintza = "Txertatu";
		$ordua = date('H:i');
		$ip = $_SERVER['REMOTE_ADDR'];
		$sql = "INSERT INTO ekintzak (erabid, erabiltzailea, ekintzamota, ordua, ip) VALUES ('$id','$posta','$ekintza', '$ordua', '$ip')"; 
		mysql_query($sql);
			$zailtasuna = 0;
			$assessmentItem = $xml->addChild('assessmentItem');
			$assessmentItem->addAttribute('konplexutasuna',$zailtasuna);
			$itemBody=$assessmentItem->addChild('itemBody');
			$correctResponse=$assessmentItem->addChild('correctResponse');
			$itemBody->addChild('p',$galdera);
			$correctResponse->addChild('value', $erantzuna);
			$xml->asXML("galderak.xml");
		
		$message = "Galdera arazorik gabe gorde da.";
		
		echo '<script type="text/javascript">galdIkus();</script>';
}
	 
 }

 ?>






 <link rel="stylesheet" type="text/css" href="styles.css">
 
 <div id="header">
<h2>
<a href="layouterab.html"> Aurkibidea </a><a href="handlingquizzes.php"> Galderak kudeatu </a><a href="creditserab.html"> Kredituak </a><a href="logout.php"> Irten </a>
</h2>

</div>
 
 
  <div id="page">
 
 
 <div class="form-style">
 <div id="button.style"> 

<input type="submit" value="Galderak ikusi" onClick="galdIkus()" />
<br />
<br />

<input type="submit" value="Galdera berria gehitu" onClick="galdGehi()" />
</div>
</div>
   <div id="galdGehi">
 
 </div>
 
  <div id="galdIkus">
 
 </div>
 


 <?php if (!empty($message)) {echo " <div id='mezua'> <p class=\"error\">" . "MESSAGE: ". $message . "</p> </div>";} ?>