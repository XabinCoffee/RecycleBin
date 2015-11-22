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

$xml = simplexml_load_file('galderak.xml');

 
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
	 
	 
	 
		if (!mysql_query($sql))
		{
			die("Errorea: ".mysql_error());
		}
	$id = 1;
	$ekintza = "Txertatu";	
	$ordua = date('H:i');
	$ip = $_SERVER['REMOTE_ADDR'];
	$sql = "INSERT INTO ekintzak (erabid, erabiltzailea, ekintzamota, ordua, ip) VALUES ('$id','$posta','$ekintza', '$ordua', '$ip')"; 

	 
		if (!mysql_query($sql))
		{
			die("Errorea: ".mysql_error());
		}
		else{
			$assessmentItem = $xml->addChild('assessmentItem');
			$assessmentItem->addAttribute('konplexutasuna',$zailtasuna);
			$assessmentItem->addAttribute('subject',$gaia);
			$itemBody=$assessmentItem->addChild('itemBody');
			$correctResponse=$assessmentItem->addChild('correctResponse');
			$itemBody->addChild('p',$galdera);
			$correctResponse->addChild('value', $erantzuna);
			$xml->asXML("galderak.xml");
			$message = "Galdera arazorik gabe gorde da.";
		}
		
		
		
	}
	}
	else{
		$sql = "INSERT INTO galdera (galdera, erantzuna, zailtasuna, posta) VALUES ('$galdera','$erantzuna', NULL,'$posta')"; 
		 if (!mysql_query($sql))
		{
			die("Errorea: ".mysql_error());
		}
		$id = 1;
		$ekintza = "Txertatu";
		$ordua = date('H:i');
		$ip = $_SERVER['REMOTE_ADDR'];
		$sql = "INSERT INTO ekintzak (erabid, erabiltzailea, ekintzamota, ordua, ip) VALUES ('$id','$posta','$ekintza', '$ordua', '$ip')"; 
		if (!mysql_query($sql))
		{
			die("Errorea: ".mysql_error());
		}
		else{
			$zailtasuna = 0;
			$assessmentItem = $xml->addChild('assessmentItem');
			$assessmentItem->addAttribute('konplexutasuna',$zailtasuna);
			$itemBody=$assessmentItem->addChild('itemBody');
			$correctResponse=$assessmentItem->addChild('correctResponse');
			$itemBody->addChild('p',$galdera);
			$correctResponse->addChild('value', $erantzuna);
			$xml->asXML("galderak.xml");
			
		}
		
		$message = "Galdera arazorik gabe gorde da.";
	}

 }
 

 ?>
 


<title>Galdera sortu</title>

 <link rel="stylesheet" type="text/css" href="styles.css">
 
 <div id="header">
<h2>
<a href="layoutErab.html"> Aurkibidea </a><a href="handlingquizzes.php"> Galderak kudeatu </a><a href="CreditsErab.html"> Kredituak </a><a href="logout.php"> Irten </a>
</h2>

</div>
 
 <div id="page">
<div class="form-style">

<h1>Zure galdera gehitu</h1>
<form name="questionform" id="questionform" method="POST">

 <input type="text" name="question" id="question" class="input" value="" size="20" placeholder="Galdera" />

 <input type="text" name="answer" id="answer" class="input" value="" size="20" placeholder="Erantzuna" />
 
 <input type="text" name="gaia" id="gaia" class="input" value="" size="20" placeholder="Gaia" />

 <input type="text" name="difficulty" id="difficulty" class="input" value="" size="20" placeholder="Zailtasuna (1 eta 5 artean)" />

 
 <input type="submit" name="submit" class="button" value="Bidali" />

  
</form>

<div id="button.style"> 
<a href="handlingquizzes.php">
<input type="submit" value="Galderak ikusi eta editatu" />
</div>
</div>
</div>


 <?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>