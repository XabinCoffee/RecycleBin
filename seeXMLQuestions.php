<?php
$get = file_get_contents('galderak.xml');
$xml = simplexml_load_string($get);
$data = $xml->assessmentItem;

 ?>
 
<title>Galderak ikusi</title>

 <link rel="stylesheet" type="text/css" href="styles.css">

<div id="header">
<h2>
<a href="layout.html"> Aurkibidea </a><a href="seexmlquestions.php"> Galderak ikusi </a><a href="login.php"> Saioa hasi </a><a href="Signup.html"> Izen-ematea </a><a href="Credits.html"> Kredituak </a>
</h2>

</div>
 
  <div id="page">
  


  
  
  
 <table class="taula"> 
 <tr>
 <th>Galdera</th>
 <th>Zailtasuna</th>
 <th>Erantzuna</th>
 </tr>
 </thead>
 <?php 
 foreach ($data as $row){
 ?>
 <tr>
 <td><?php echo $row->itemBody->p ?></td>
 <td><?php echo $row['konplexutasuna'] ?></td>
 <td><?php echo $row->correctResponse->value ?></td>
 </tr>

 <?php
 } 
 ?>
 
 </table>
 
 
   <div class="button-style">

<form name="questionform" id="questionform" method="POST">

 
 <input type="submit" name="submit" class="button" value="Editatu" />

  
</form>

</div>

</div>