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


// Suppression de la base de données

$sql =
	"DROP DATABASE
	IF EXISTS "
	. $dbName
;

if ($connection -> query ($sql) === TRUE)
{
	echo "La base de données a été supprimée.<br>";
}
else
{
	echo
		"Suppression de la base de données échouée : "
		. $connection -> error
		. "<br>"
	;
}


$connection -> close ();



echo "<br><br>";

?>

</html>
