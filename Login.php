<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
 //$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
//mysql_select_db("u966022868_xabin",$con);

$con = mysql_connect("localhost","root","") or die($con);
mysql_select_db("quiz",$con);

//if(isset($_SESSION["session_username"])){
//echo "Session is set"; // for testing purposes
//header("Location: insertQuestion.php");
//}

 if(!isset($_SESSION['saiakerak'])){
   $_SESSION['saiakerak'] = 0;
 }
 if($_SESSION['saiakerak']>=2){
      header("Location: berreskuratu.php");
    }
 
if(isset($_POST["login"])){
				 
				  if(!empty($_POST['username']) && !empty($_POST['password'])){
					  
					$username=$_POST['username'];
					$password=$_POST['password'];
					 
					$query =mysql_query("SELECT * FROM erabiltzaile WHERE Eposta='".$username."'");
					 
					$numrows=mysql_num_rows($query);
					$dbusername="";
					$dbpassword="";
					
					   if($numrows!=0){
						 
					   while($row=mysql_fetch_assoc($query)){
						 
					   $dbusername=$row['Eposta'];
					   $dbpassword=$row['Pasahitza'];
					   
					   }
					 
					if($username == $dbusername && ($dbpassword == crypt($password, $dbpassword))) {
				   
					  $ordua = date('H:i');
					  $sql1="INSERT INTO konexioak (eposta, ordua) VALUES ('$username','$ordua')";
					  if (!mysql_query($sql1)){
						die("Errorea: ".mysql_error());
					  }
					  
					 $_SESSION['session_username']=$username;
					 
					/* Redirekzionatzeko logina egin ondoren */


					if ($_SESSION['session_username']=="web000@ehu.es"){
					 header("Location: reviewquizzes.php");
					 } else if (isset($_SESSION['session_username'])) {
						header("Location: handlingquizzes.php");
					} 

					 }else if (!isset($_SESSION['session_username'])){
						$message = "Eposta / Pasahitz okerra!";
						$_SESSION['saiakerak']++;
						
						}
					  
				   }
				  }
				   else {
					$message = "Gelaxka guztiak bete!!";					
				  }

}

?>

<title>Hasi saioa</title>

<link rel="stylesheet" type="text/css" href="styles.css">
 
 
 <div id="header">
<h2>
<a href="layout.html"> Aurkibidea </a><a href="seexmlquestions.php"> Galderak ikusi </a><a href="login.php"> Saioa hasi </a><a href="signup.html"> Izen-ematea </a><a href="credits.html"> Kredituak </a>
</h2>

</div>
 
 
 <div id="page">
 <div class="form-style">
 <h1>Hasi saioa</h1>
<form name="loginform" id="loginform" action="" method="POST">

 <input type="text" name="username" id="username" class="input" value="" size="20" placeholder="Eposta" />
 
 <input type="password" name="password" class="input" value="" size="20" placeholder="Pasahitza"/>

 <p class="submit">
 <input type="submit" name="login" class="button" value="Hasi Saioa"  />
 </p>
 <p class="regtext">Konturik ez? <a href="signup.html" >Erregistratu hemen!</a></p>
  <p class="regtext"><a href="berreskuratu.php" >Pasahitza ahaztu al zaizu?</a></p>
</form>
 
</div>
 
</div>

 
 <?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>