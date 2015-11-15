<?php 
	require_once('lib/nusoap.php');
	require_once('lib/class.wsdlcache.php');
	$soapclient= new nusoap_client('http://xabirus.esy.es/pasahitzaKonprobatu.php?wsdl',false);
	if(isset($_GET['password'])){
		$result=$soapclient->call('pasahitzaKonprobatu',array('x'=>$_GET['password']));
		if($result=="BALIOZKOA"){
			echo"Pasahitza baliozkoa da";
		}else if($result=="BALIOGABEA"){
			echo"Sartu duzun pasahitza arruntegia da";
		}
	}
	
?>