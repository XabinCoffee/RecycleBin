<?php 
require_once('lib/nusoap.php');
require_once('lib/class.wsdlcache.php');
$server= new soap_server;
$ns="http://xabirus.esy.es/";
$server->configureWSDL('pasahitzaKonprobatu',$ns);
$server->wsdl->schemaTargetNamespace=$ns;
$server->register('pasahitzaKonprobatu',array('x'=>'xsd:string','y'=>'xsd:string'),array('z'=>'xsd:string'),$ns);
function pasahitzaKonprobatu($x,$y){
	if ($x==$y){
		$file= fopen("top500.txt","r");
		$pass=trim(utf8_encode($x));
		if($file){
			while(($buffer= fgets($file))!=false){
					$ir=trim(utf8_encode($buffer));
				if($pass==$ir)
					return "BALIOGABEA";
			}
			if(!feof($file)){
				echo"Errorea: fgets() errorea eman du\n";			
			}else{
				return"BALIOZKOA";
			}
				$fclose($file);
		}else{
			echo"Ezin izan da fitxategia iriki";
		}
	}	
else{
	return "EZBERDIN";
}	
	
}
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>