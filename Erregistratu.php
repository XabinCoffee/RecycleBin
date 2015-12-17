<?php  
session_start();
//konexioa egin datubasearekin
//$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
//mysql_select_db("u966022868_xabin",$con);

$con = mysql_connect("localhost","root","") or die($con);
mysql_select_db("quiz",$con);
	
	
	

if($_FILES['image']['error']==0){
	$file = $_FILES['image']['tmp_name'];
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
}else{
	$image=null;
	$image_name="";
}

$password = $_POST['password'];

// Enkripzioaren kostua
$cost = 10;	

// salt random bat generatu
$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

// Prefix information about the hash so PHP knows how to verify it later.
// "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
$salt = sprintf("$2a$%02d$", $cost) . $salt;

// $salt-en balioa:
// $2a$10$eImiTXuWVxfM37uY4JANjQ==

// Pasahitza hasheatu sortutako salt-arekin
$hash = crypt($password, $salt);
	
//Erabiltzailea txertatu
$sql = "INSERT INTO erabiltzaile (Izena, Pasahitza, Eposta, Telefonoa, Espezialitatea, Interesak, Argazkia, ArgazkiMota) VALUES ('$_POST[name]', '$hash' ,'$_POST[email]','$_POST[phone]', '$_POST[Espezialitatea]', '$_POST[interests]','$image','$image_name')";





if (!mysql_query($sql)){
	die("Errorea: ".mysql_error());
	}

echo "1 line written";
$_SESSION['saiakerak']=0;
 
header('location: login.php');

// Konexioa ixteko
mysql_close ($con);

?>   
