<?php 
	require_once('lib/nusoap.php');
	require_once('lib/class.wsdlcache.php');
	$soapclient= new nusoap_client('http://xabirus.esy.es/pasahitzaKonprobatu.php?wsdl',false);
	if(isset($_GET['password']) && isset($_GET['password2'])){
		$result=$soapclient->call('pasahitzaKonprobatu',array('x'=>$_GET['password'],'y'=>$_GET['password2']));	
		if($result=="BALIOZKOA"){
			echo"Pasahitza baliozkoa da";
		}else if($result=="BALIOGABEA"){
			echo"Sartu duzun pasahitza arruntegia da";
		}else if ($result=="EZBERDIN"){
			echo "Pasahitzak ezberdinak dira";
		}
	}
	
?>