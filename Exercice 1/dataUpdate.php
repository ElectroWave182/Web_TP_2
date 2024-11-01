<! DOCTYPE html>
<html>

<h2>
	Console -
</h2>


<?php



// Connexion à la base de données

$servername = "localhost";
$username = "root";
$password = "root";
$dbName = "dbPeople";


$connection = new mysqli
(
	$servername,
	$username,
	$password
);

if ($connection -> connect_error)
{
	die
	(
		"Connexion échouée : "
		. $connection -> connect_error
		. "<br>"
	);
}

$sql =
	"CREATE DATABASE
	IF NOT EXISTS "
	. $dbName
;

if ($connection -> query ($sql) === TRUE)
{
	echo "La base de données a été créée.<br>";
}
else
{
	echo
		"Création de la base de données échouée : "
		. $connection -> error
		. "<br>"
	;
}

$connection -> close ();


$connection = new mysqli
(
	$servername,
	$username,
	$password,
	$dbName
);

if ($connection -> connect_error)
{
	die
	(
		'Connection à la base de données "'
		. $dbName
		. '" échouée : '
		. $connection -> connect_error
		. "<br>"
	);
}



// Création des tables

$tableName = "people";

$sql =
	"CREATE TABLE
	IF NOT EXISTS "
	. $tableName
	. " (
		id INT AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(42) NOT NULL,
		lastname VARCHAR(42) NOT NULL,
		mail VARCHAR(42),
		city VARCHAR(42)
	)"
;

if ($connection -> query ($sql) === TRUE)
{
	echo 'La table "people" a été créée.<br>';
}
else
{
	echo
		'Création de la table "'
		. $tableName
		. '" échouée : '
		. $connection -> error
		. "<br>"
	;
}



// Ajout du nouvel individu

$lastname = htmlspecialchars ($_POST['lastnameEntry']);
$firstname = htmlspecialchars ($_POST['firstnameEntry']);
$mail = htmlspecialchars ($_POST['mailEntry']);
$city = htmlspecialchars ($_POST['cityEntry']);

echo
	"Bonjour "
	. $firstname
	. " "
	. $lastname
	. ", vos informations ont été récupérées par le serveur.<br>"
;


$sql =
	"INSERT INTO
	
	people
	(
		lastname,
		firstname,
		mail,
		city
	)
	
	VALUES
	('"
		. $lastname
		. "', '"
		. $firstname
		. "', '"
		. $mail
		. "', '"
		. $city
	. "')"
;

if ($connection -> query ($sql) === TRUE)
{
	echo "Vos informations ont été ajoutées à la base de données.<br>";
}
else
{
	echo
		"Ajout des informations échoué : "
		. $sql
		. "<br>"
		. $connection -> error
		."<br>"
	;
}


$connection -> close ();



echo "<br><br>";
include "main.php";

?>

</html>
