<! DOCTYPE html>
<html>
<body>

<link
	href = "style.css"
	rel = "stylesheet"
>



<form
	action = "dataUpdate.php"
	method = "post"
>


	<!-- Bloc d'entrée du nom -->
	
	<input
		name = "lastnameEntry"
		type = "text"
	>

	<label
		for = "lastnameEntry"
	>
		Nom
	</label>
	
	<br>
	<br>
	
	
	<!-- Bloc d'entrée du prénom -->

	<input
		name = "firstnameEntry"
		type = "text"
	>

	<label
		for = "firstnameEntry"
	>
		Prénom
	</label>
	
	<br>
	<br>


	<!-- Bloc d'entrée de l'e-mail -->

	<input
		name = "mailEntry"
		type = "text"
	>

	<label
		for = "mailEntry"
	>
		E-mail
	</label>
	
	<br>
	<br>


	<!-- Bloc d'entrée de la ville -->

	<input
		name = "cityEntry"
		type = "text"
	>

	<label
		for = "cityEntry"
	>
		Ville
	</label>
	
	<br>
	<br>


	<input
		type = "submit"
		value = "Inscription"
	>


</form>

<br>
<br>



<!-- Affichage de la base de données -->

<table>


	<thead>

		<tr>
			<th>
				ID
			</th>
			<th>
				Nom
			</th>
			<th>
				Prénom
			</th>
			<th>
				E-mail
			</th>
			<th>
				Ville
			</th>
		</tr>

	</thead>


	<tbody>
		<?php
			include "dataDisplay.php";
		?>
	</tbody>
	

</table>

<br>



</body>
</html>
