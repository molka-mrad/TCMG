
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
				include "../entities/formateur.php";
				include "../core/formateurC.php";
				if (isset($_GET['cin'])) {
					$formateurC = new formateurC();
                    $result = $formateurC->recupererFormateur($_GET['cin']);
					foreach ($result as $row) {
						$cin = $row['cin'];
						$nom = $row['nom'];
						$prenom = $row['prenom'];
						$tel = $row['tel'];
						$age = $row['age'];
						$inscription = $row['inscription'];
						$email = $row['email'];
						$img = $row['img'];
			?>
			
			<form method="POST">
				<table>
					<caption class='titre'>Modifier formateur</caption>
					<tr>
						<td class="ff">CIN</td>
						<td class="ff"><input type="number" name="cin"  class='gg'value="<?PHP echo $cin ?>"></td>
					</tr>
					<tr>
						<td class="ff">Nom</td>
						<td class="ff" ><input type="text" class='gg' name="nom" value="<?PHP echo $nom ?>"></td>
					</tr>
					<tr>
						<td class="ff">Prenom</td>
						<td class="ff"><input type="text" class='gg' name="prenom" value="<?PHP echo $prenom ?>"></td>
					</tr>
					<tr>
						<td class="ff">tel</td>
						<td class="ff"><input type="number" class='gg' name="tel" value="<?PHP echo $tel ?>"></td>
					</tr>
					<tr>
						<td class="ff">age</td>
						<td class="ff"><input type="number" class='gg' name="age" value="<?PHP echo $age ?>"></td>
					</tr>
					<tr>
						<td class="ff">inscription</td>
						<td class="ff"><input type="date" class='gg' name="inscription" value="<?PHP echo $inscription ?>"></td>
					</tr>
					<tr>
						<td class="ff">email</td>
						<td class="ff"><input class='gg' type="text" name="email" value="<?PHP echo $email ?>"></td>
					</tr>
					<tr>
						<td class="ff">img</td>
						<td class="ff"><input class='gg' type="text" name="img" value="<?PHP echo $img ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td class="ff"><input  type="submit" name="modifier" value="modifier"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin']; ?>"></td>
					</tr>
				</table>
			</form>
			<?PHP
				}
			}
			if (isset($_POST['modifier'])) {
				$formateur = new formateurs($_POST['cin'], $_POST['nom'], $_POST['prenom'], $_POST['tel'], $_POST['age'], $_POST['inscription'], $_POST['email'], $_POST['img']);
				$formateurC->modifierFormateur($formateur, $_POST['cin_ini']);
				echo $_POST['cin_ini'];
				header('Location: formateurs.php');
			}
			?>
            </div>
        </div>
        
    </body>
</html>