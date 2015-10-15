<?php  
//konexioa egin datubasearekin
$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
mysql_select_db("u966022868_xabin",$con);

//$con = mysql_connect("localhost","root","") or die($con);
//mysql_select_db("quiz",$con);
	
//Erabiltzailea bilatu
	
	$sql = "SELECT * FROM erabiltzaile WHERE Eposta = '$_POST[email]' and Pasahitza = '$_POST[password]'";
        $rec = mysql_query($sql); 
        $count = 0; 
        while($row = mysql_fetch_object($rec)) 
        { 
            $count++; 
            $result = $row; 
        } 
        if($count == 1) 
        { 
            echo "Login OK"; 
        } 
        else 
        { 
            echo "Erabiltzaile/Pasahitz konbinazio okerra"; 
        } 
	
		
	
	if (!mysql_query($sql)){
	die("Errorea: ".mysql_error());
	}

// Konexioa ixteko
mysql_close ($con);

?>   
