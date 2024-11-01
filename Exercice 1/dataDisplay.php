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
	$password,
	$dbName
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



$tableName = "people";


// Récupération de la table "people"

$sql =
	"select *
	from "
	. $tableName
;

if ($data = $connection -> query ($sql))
{	
	echo
		'Les informations de la table "'
		. $tableName
		. '" ont été récupérées.<br>'
	;
}
else
{
	echo
		'Récupération des informations de la table "'
		. $tableName
		. '" échouée : '
		. $connection -> error
		. "<br>"
	;
}


// Affichage de la table "people"

while ($ligne = mysqli_fetch_assoc ($data))
{
	echo "<tr>";
	
	foreach ($ligne as $tile)
	{
		echo
			"<td>"
			. $tile
			. "</td>"
		;
	}
	
	echo "</tr>";
}


$connection -> close ();



echo "<br><br>";

?>

</html>
