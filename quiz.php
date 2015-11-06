<?php 
$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
mysql_select_db("u966022868_xabin",$con);

//$con = mysql_connect("localhost","root","") or die($con);
//mysql_select_db("quiz",$con);

$ekintza="Bistaratu";
$ordua = date('H:i');
$ip = $_SERVER['REMOTE_ADDR'];
$sql = "INSERT INTO ekintzak (ekintzamota, ordua, ip) VALUES ('$ekintza', '$ordua', '$ip')"; 
if (!mysql_query($sql)){
	die("Errorea: ".mysql_error());
	}

$query="SELECT * FROM galdera";
$galderak=mysql_query($query);

$numrows = mysql_numrows($galderak);;mysql_close();
	if($numrows > 0){
		echo "<table id = 'Taula'>
				<tr>
				<th id='zut1'>Galderak</th>
				<th id='zut2'>Zailtasuna</th>
				</tr>";
				
				while ($row = mysql_fetch_array($galderak)){
			
					echo "
					<tr>
						<td id='k1'>".$row['galdera']."</td>
						<td id='k2'>".$row['zailtasuna']."</td>
					</tr>";
					
				}
				echo "</table>";
			}else{
				echo "
				<center><p>Ez dira galderarik aurkitu.</p></center>";
			}
		?>
		
		<link rel="stylesheet" type="text/css" href="styles.css">
		<title>Quiz</title>