<?php
session_start();
?>

<?php //$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
//mysql_select_db("u966022868_xabin",$con);

$con = mysql_connect("localhost","root","") or die($con);
mysql_select_db("quiz",$con); 

if(isset($_POST))
{
    foreach($_POST as $inputName => $inputValue)
    {
		//Taulako elementuak aukeratu?
    }
}






?>

