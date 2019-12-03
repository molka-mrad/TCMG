
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <?PHP
            include "../core/evenementC.php";
            $evenement1C = new evenementC();
            $listeEvent = $evenement1C->afficherEvenements();
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
                            <td class="th" >Libelle</td>
                            <td class="th" >Description</td>
                            <td class="th" >Date début</td>
                            <td class="th" >Date fin</td>
                            <td class="th" >Nombre participants</td>
                        </tr>
                    
                        <?PHP
                        foreach ($listeEvent as $row) {
                            ?>
                            
                            <tr>
                                <td class="ff"><?PHP echo $row['id']; ?></td>
                                <td class="ff"><?PHP echo $row['libelle']; ?></td>
                                <td class="ff"><?PHP echo $row['descrip']; ?></td>
                                <td class="ff" ><?PHP echo $row['dateDeb']; ?></td>
                                <td class="ff" ><?PHP echo $row['dateFin']; ?></td>
                                <td class="ff" ><?PHP echo $row['nbParticip']; ?></td>
                                <td class="center">
                                    <form  id="monform "method="POST" action="supprimerEvenement.php">
                                        <input type="submit" class="monform" name="supprimer" value="">
                                        <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                    </form>
                                </td>
                                <td class="ff"><a href="modifierEvenement.php?id=<?PHP echo $row['id']; ?>">
                                        Modifier</a></td>
                                        
                            </tr>
                        <?PHP
                        }
                        ?>
                    </table>
                    <a href="ajouterEvenement.html"><input type="submit"  value="ajouter Evenement"> </a>
            </div>
        </div>
        
    </body>
</html>

