
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="entete">
            <p>Tennis Club de Mégrine</p>
            <img class="logo" src="logo.png" width="80"></br>
        </div>
        <div class="page">
            
            <div class="menu">
                <h2>Menu</h2>
                <ul>
					<li><a href="actualites.php">Actualités</a></li>
                    <li><a href="evenements.php">Evenements</a></li>
                    <li><a href="membres.php">Membres</a></li>
                    <li><a href="formateurs.php">Formateurs</a></li>
                    <li><a href="produits.php">Produits</a></li>
                </ul>
            </div>
            <div class="content">

			<?PHP
				include "../entities/evenement.php";
				include "../core/evenementC.php";
				if (isset($_GET['id'])) {
					$evenementC = new evenementC();
					$result = $evenementC->recupererEvenement($_GET['id']);
					foreach ($result as $row) {
						$id = $row['id'];
						$libelle = $row['libelle'];
						$descrip = $row['descrip'];
						$dateDeb = $row['dateDeb'];
						$dateFin = $row['dateFin'];
						$nbParticip = $row['nbParticip'];
			?>
			
			<form method="POST">
				<table>
					<caption class='titre'>Modifier membre</caption>
					<tr>
						<td class="ff">Id</td>
						<td class="ff"><input type="number" name="id"  class='gg'value="<?PHP echo $id ?>"></td>
					</tr>
					<tr>
						<td class="ff">Libelle</td>
						<td class="ff" ><input type="text" class='gg' name="libelle" value="<?PHP echo $libelle ?>"></td>
					</tr>
					<tr>
						<td class="ff">Description</td>
						<td class="ff"><input type="text" class='gg' name="descrip" value="<?PHP echo $descrip ?>"></td>
					</tr>

					<tr>
						<td class="ff">Date début</td>
						<td class="ff"><input type="text" class='gg' name="dateDeb" value="<?PHP echo $dateDeb ?>"></td>
                    </tr>
                    <tr>
						<td class="ff">Date fin</td>
						<td class="ff"><input type="text" class='gg' name="dateFin" value="<?PHP echo $dateFin ?>"></td>
                    </tr>
                    <tr>
						<td class="ff">Nombre participants</td>
						<td class="ff"><input type="text" class='gg' name="nbParticip" value="<?PHP echo $nbParticip ?>"></td>
					</tr>

					<tr>
						<td></td>
						<td class="ff"><input  type="submit" name="modifier" value="modifier"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id']; ?>"></td>
					</tr>
				</table>
			</form>
			<?PHP
				}
			}
			if (isset($_POST['modifier'])) {
				$evenement = new evenements($_POST['id'], $_POST['libelle'], $_POST['descrip'], $_POST['dateDeb'], $_POST['dateFin'], $_POST['nbParticip']);
				$evenementC->modifierEvenement($evenement, $_POST['id_ini']);
				echo $_POST['id_ini'];
				header('Location: evenements.php');
			}
			?>
            </div>
        </div>
        
    </body>
</html>