

<html>
<head>
<meta charset="utf-8"/>
<title>Login</title>
</head>

<body>




<?php 
$nom=$_GET['nom'];
$type=$_GET['type'];
$email=$_GET['email'];
$group=$_GET['group'];
$cout=$_GET['cout'];
$note=$_GET['note'];



mysql_connect('localhost',"root","");
mysql_select_db('gestion_projet');
mysql_query ("INSERT INTO ressource VALUES('$nom','$type','$email','$group','$cout','$note')");


?>


<p>le produit est ajouté avec succée </p>
</body>

</html>