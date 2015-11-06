<?php
session_start();
//$con = mysql_connect("mysql.hostinger.es","u966022868_xabin","xabino") or die($con);
//mysql_select_db("u966022868_xabin",$con);

$con = mysql_connect("localhost","root","") or die($con);
mysql_select_db("quiz",$con); 


$user = $_SESSION['session_username'];

$sql = "SELECT * FROM Galdera where posta='$user'";
if (!mysql_query($sql)){
	die("Errorea: ".mysql_error());
}
	
$niregalderak=mysql_query($sql);


 ?>


<title>Maneiating Galder's</title>

<script type="text/javascript">
function eguneratu(){
	
	var table = document.getElementById('taula');
		//1go errenkadatik aurrera irakurri (tituluak ez)
        for (var r = 1; r < table.rows[r].cells.length; r++) {
				var galdera = table.rows[r].cells[1].innerHTML;
				var zailtasuna = table.rows[r].cells[2].innerHTML;
				var erantzuna = table.rows[r].cells[3].innerHTML;
				alert(galdera);
				alert(zailtasuna);
				alert(erantzuna);
				//parametroak edukita, AJAX erabili eguneratzeko               
        }


	
	
}
</script>

 <link rel="stylesheet" type="text/css" href="styles.css">
 
 <div id="header">
<h2>
<a href="layout.html"> Aurkibidea </a><a href="InsertQuestion.php"> Galdera gehitu </a><a href="seexmlquestionserab.php"> Galderak ikusi </a><a href="CreditsErab.html"> Kredituak </a><a href="layout.html"> Irten </a>
</h2>

</div>
 
  <div id="page">
 <table id="taula" class="taula"> 
 
 <tr>
 <th>ID</th>
 <th>Galdera</th>
 <th>Zailtasuna</th>
 <th>Erantzuna</th>
 <th>pa delete?</th>
 </tr>
 </thead>
 
 <?php 
 while ($row = mysql_fetch_array($niregalderak)) {
    
		echo '<tr>';
		echo '<td>' . $row['ID'] . '</td>';
        echo '<td contenteditable=true>' . $row['galdera'] . '</td>';
		echo '<td contenteditable=true>' . $row['zailtasuna'] . '</td>';
		echo '<td contenteditable=true>' . $row['erantzuna'] . '</td>';
		echo '<td>  <input type=checkbox>  </td>';
    
}
 ?>
 
 </table>
 
    <div class="button-style">

 
<button type="button" onclick="eguneratu()">Aldaketak gorde</button>



</div>
</div>



 <?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>