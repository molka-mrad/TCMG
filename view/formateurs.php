
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <?PHP
            include "../core/formateurC.php";
            $formateur1C = new formateurC();
            $listeForm = $formateur1C->afficherFormateurs();
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
                            <td class="th">Cin</td>
                            <td class="th" >Nom</td>
                            <td class="th" >Prenom</td>
                            <td class="th" >Telephone</td>
                            <td class="th" >Age</td>
                            <td class="th" >Date inscription</td>
                            <td class="th" >E-mail</td>
                            <td class="th" >Image</td>
                        </tr>
                    
                        <?PHP
                        foreach ($listeForm as $row) {
                            ?>
                            
                            <tr>
                                <td class="ff"><?PHP echo $row['cin']; ?></td>
                                <td class="ff"><?PHP echo $row['nom']; ?></td>
                                <td class="ff"><?PHP echo $row['prenom']; ?></td>
                                <td class="ff" ><?PHP echo $row['tel']; ?></td>
                                <td class="ff" ><?PHP echo $row['age']; ?></td>
                                <td class="ff" ><?PHP echo $row['inscription']; ?></td>
                                <td class="ff" ><?PHP echo $row['email']; ?></td>
                                <td class="ff" ><?PHP echo $row['img']; ?></td>
                                <td class="center">
                                    <form  id="monform "method="POST" action="supprimerFormateur.php">
                                        <input type="submit" class="monform" name="supprimer" value="">
                                        <input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
                                    </form>
                                </td>
                                <td class="ff"><a href="modifierFormateur.php?id=<?PHP echo $row['cin']; ?>">
                                        Modifier</a></td>
                                        
                            </tr>
                        <?PHP
                        }
                        ?>
                    </table>
                    <a href="ajouterFormateur.html"><input type="submit"  value="ajouter Formateur"> </a>
            </div>
        </div>
        
    </body>
</html>

