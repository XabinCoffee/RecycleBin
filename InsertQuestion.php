<?php
session_start();
//$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
//mysql_select_db("u966022868_xabin",$con);

$xml = simplexml_load_file('galderak.xml');

$con = mysql_connect("localhost","root","") or die($con);
mysql_select_db("quiz",$con); 

 
if(!empty($_POST['question']) && !empty($_POST['answer'])){
	
 $posta = $_SESSION['session_username'];
 $galdera = $_POST['question'];
 $erantzuna = $_POST['answer'];
 
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
			$itemBody=$assessmentItem->addChild('itemBody');
			$correctResponse=$assessmentItem->addChild('correctResponse');
			$itemBody->addChild('p',$galdera);
			$correctResponse->addChild('value', $erantzuna);
			$xml->asXML("galderak.xml");
			
		}
		$message = "Galdera arazorik gabe gorde da.";
		
		
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

 <link rel="stylesheet" type="text/css" href="login.css">
 <div class="container mlogin">
 <div id="login">
 <h1>Galdera bat sortu</h1>
<form name="questionform" id="questionform" method="POST">
 <p>
 <label for="user_question">Galdera:<br />
 <input type="text" name="question" id="question" class="input" value="" size="20" /></label>
 </p>
 <p>
 <label for="user_answer">Erantzuna:<br />
 <input type="text" name="answer" id="answer" class="input" value="" size="20" /></label>
 </p>
  <p>
 <label for="user_answer">Zailtasuna (1-5):<br />
 <input type="text" name="difficulty" id="difficulty" class="input" value="" size="20" /></label>
 </p>

 <p class="submit">
 <input type="submit" name="submit" class="button" value="Bidali" />
 </p>
  
</form>
 
</div>
 
</div>


 <?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>