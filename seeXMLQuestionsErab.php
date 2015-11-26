<?php
$get = file_get_contents('galderak.xml');
$xml = simplexml_load_string($get);
$data = $xml->assessmentItem;

 ?>
 
<title>Galderak ikusi</title>

 <link rel="stylesheet" type="text/css" href="styles.css">

<div id="header">
<h2>
<a href="layouterab.html"> Aurkibidea </a><a href="handlingquizzes.php"> Galderak kudeatu </a><a href="creditserab.html"> Kredituak </a><a href="logout.php"> Irten </a>
</h2>

</div>
 
  <div id="page">
 <table class="taula"> 
 <tr>
 <th>Galdera</th>
 <th>Zailtasuna</th>
 <th>Gaia</th>
 <th>Erantzuna</th>
 </tr>
 </thead>
 <?php 
 foreach ($data as $row){
 ?>
 <tr>
 <td><?php echo $row->itemBody->p ?></td>
 <td><?php echo $row['konplexutasuna'] ?></td>
  <td><?php echo $row['subject'] ?></td>
 <td><?php echo $row->correctResponse->value ?></td>
 </tr>

 <?php
 } 
 ?>
 
 </table>

<div class="form-style">
<div id="button.style"> 
<a href="handlingquizzes.php">
<input type="submit" value="Galderak editatu" />
</a>
</div>
</div>

</div>