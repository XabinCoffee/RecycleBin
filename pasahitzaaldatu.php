<?php
session_start();
$email = $_GET['email'];
$pasa = $_GET['pasa'];
$tlf = $_GET['tlf'];

$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
mysql_select_db("u966022868_xabin",$con);

//$con = mysql_connect("localhost","root","") or die($con);
//mysql_select_db("quiz",$con);



$telefonoa = "";

$result = mysql_query("SELECT * FROM erabiltzaile");
while ($row = mysql_fetch_object($result)) {
	if ($email == $row->Eposta){
    $telefonoa = $row->Telefonoa;
	}
}

$password = $_GET['pasa'];

$cost = 10;
$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
$salt = sprintf("$2a$%02d$", $cost) . $salt;

// Pasahitza hasheatu sortutako salt-arekin
$hash = crypt($password, $salt);

if ($telefonoa == $tlf){
	$sql = "UPDATE erabiltzaile SET Pasahitza='$hash' WHERE Eposta='$_GET[email]'";  

if (!mysql_query($sql)){
	die("Errorea: ".mysql_error());
	}

echo "Pasahitza eguneratu da.";
echo "<br>";
echo "<a href='login.php'>Itzuli</a>";
if (isset($_SESSION['saiakerak'])) $_SESSION['saiakerak']=0;
}
else{
	echo "Erabiltzaile-telefono konbinazio okerra!";
}


?>