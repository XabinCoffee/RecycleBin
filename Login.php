<?php
session_start();
?>
 
<?php //$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
//mysql_select_db("u966022868_xabin",$con);

$con = mysql_connect("localhost","root","") or die($con);
mysql_select_db("quiz",$con); ?>

 
<?php
//if(isset($_SESSION["session_username"])){
//echo "Session is set"; // for testing purposes
//header("Location: insertQuestion.php");
//}
 
if(isset($_POST["login"])){
 
if(!empty($_POST['username']) && !empty($_POST['password'])){
	
 $username=$_POST['username'];
 $password=$_POST['password'];
 
$query =mysql_query("SELECT * FROM erabiltzaile WHERE Eposta='".$username."' AND Pasahitza='".$password."'");
 
$numrows=mysql_num_rows($query);
 if($numrows!=0){
	 
 while($row=mysql_fetch_assoc($query)){
	 
 $dbusername=$row['Eposta'];
 $dbpassword=$row['Pasahitza'];
 
 }
 
if($username == $dbusername && $password == $dbpassword){
	 
	$ordua = date('H:i');
	$sql1="INSERT INTO konexioak (eposta, ordua) VALUES ('$username','$ordua')";
	if (!mysql_query($sql1)){
		die("Errorea: ".mysql_error());
	}
	
 $_SESSION['session_username']=$username;
 
/* Redirekzionatzeko logina egin ondoren */



 header("Location: InsertQuestion.php");
 }
 } else {
	if (filter_var($username, FILTER_VALIDATE_EMAIL) === false){
		$message = "Eposta helbide okerra!";
	}
	else{
		$message = "Eposta / Pasahitz okerra!";
	}
 }
 
} else {
	$message = "Gelaxka guztiak bete!";
	
}
}
?>

<title>Hasi saioa</title>

 <link rel="stylesheet" type="text/css" href="login.css">
 <div class="container mlogin">
 <div id="login">
 <h1>Hasi saioa</h1>
<form name="loginform" id="loginform" action="" method="POST">
 <p>
 <label for="user_login">Eposta:<br />
 <input type="text" name="username" id="username" class="input" value="" size="20" /></label>
 </p>
 <p>
 <label for="user_pass">Pasahitza:<br />
 <input type="password" name="password" class="input" value="" size="20" /></label>
 </p>
 <p class="submit">
 <input type="submit" name="login" class="button" value="Hasi Saioa"  />
 </p>
 <p class="regtext">Konturik ez? <a href="Signup.html" >Erregistratu hemen!</a></p>
</form>
 
</div>
 
</div>

 
 <?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>