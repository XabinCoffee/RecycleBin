<?php 
	require_once('lib/nusoap.php');
	require_once('lib/class.wsdlcache.php');
	$soapclient= new nusoap_client('http://sw14.hol.es/ServiciosWeb/comprobarmatricula.php?wsdl',false);
	if(isset($_GET['email'])){
		$result=$soapclient->call('comprobar',array('x'=>$_GET['email']));
		if($result=="NO"){
			echo"Ez zaude WS ikasgaian matrikulatuta";
		}else{
			echo"Emaila baliozkoa da";
		}
	}
	
?>