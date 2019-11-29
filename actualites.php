
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <?PHP
            include "../core/actualiteC.php";
            $actualite1C = new actualiteC();
            $listeActu = $actualite1C->afficherActualites();
        ?>

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
                <table border="1" class="center">
	 
                        <tr>
                            <td class="th">Id</td>
                            <td class="th" >Titre</td>
                            <td class="th" >Contenu</td>
                            <td class="th" >Image</td>
                        </tr>
                    
                        <?PHP
                        foreach ($listeActu as $row) {
                            ?>
                            
                            <tr>
                                <td class="ff"><?PHP echo $row['id']; ?></td>
                                <td class="ff"><?PHP echo $row['titre']; ?></td>
                                <td class="ff"><?PHP echo $row['contenu']; ?></td>
                                <td class="ff" ><?PHP echo $row['img']; ?></td>
                                <td class="center">
                                    <form  id="monform "method="POST" action="supprimerActualite.php">
                                        <input type="submit" class="monform" name="supprimer" value="">
                                        <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                    </form>
                                </td>
                                <td class="ff"><a href="modifierActualite.php?id=<?PHP echo $row['id']; ?>">
                                        Modifier</a></td>
                                        
                            </tr>
                        <?PHP
                        }
                        ?>
                    </table>
                    <a href="ajouterActualite.html"><input type="submit"  value="ajouter Actualité"> </a>
            </div>
        </div>
        
    </body>
</html>

