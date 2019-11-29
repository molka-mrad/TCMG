
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
				include "../entities/actualite.php";
				include "../core/actualiteC.php";
				if (isset($_GET['id'])) {
					$actualiteC = new actualiteC();
					$result = $actualiteC->recupererActualite($_GET['id']);
					foreach ($result as $row) {
						$id = $row['id'];
						$titre = $row['titre'];
						$contenu = $row['contenu'];
						$img = $row['img'];
			?>
			
			<form method="POST">
				<table>
					<caption class='titre'>Modifier membre</caption>
					<tr>
						<td class="ff">Id</td>
						<td class="ff"><input type="number" name="id"  class='gg'value="<?PHP echo $id ?>"></td>
					</tr>
					<tr>
						<td class="ff">Titre</td>
						<td class="ff" ><input type="text" class='gg' name="titre" value="<?PHP echo $titre ?>"></td>
					</tr>
					<tr>
						<td class="ff">Contenu</td>
						<td class="ff"><input type="text" class='gg' name="contenu" value="<?PHP echo $contenu ?>"></td>
					</tr>

					<tr>
						<td class="ff">Image</td>
						<td class="ff"><input type="text" class='gg' name="img" value="<?PHP echo $img ?>"></td>
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
				$actualite = new actualites($_POST['id'], $_POST['titre'], $_POST['contenu'], $_POST['img']);
				$actualiteC->modifierActualite($actualite, $_POST['id_ini']);
				echo $_POST['id_ini'];
				header('Location: actualites.php');
			}
			?>
            </div>
        </div>
        
    </body>
</html>