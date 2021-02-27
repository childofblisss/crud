<?php 

include 'conn.php';

$id = $_GET['id']; //display.php ma hamile id pass gareko chau so defining that id

$q = " DELETE FROM `crudtable` WHERE  id = $id "; //query fire gareko

mysqli_query($con,$q); //yesma jaile two parameters pass huncha

header('location:display.php'); //so that delete click garda pheri pani tei page display hoss


?>