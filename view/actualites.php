
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <?PHP
            include "../config.php";
            
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
                            <td class="th"><a href="actualites.php?tri=id">ID</a></td>
                            <td class="th" ><a href="actualites.php?tri=titre">Titre</a></td>
                            <td class="th" ><a href="actualites.php?tri=contenu">Contenu</a></td>
                            <td class="th" ><a href="actualites.php?tri=img">Image</a></td>
                        </tr>

                        <?php  
                        $sql = 'SELECT * FROM actualites';
                        if(isset($_GET['tri']) && !empty($_GET['tri'])){
                        $sql .= ' ORDER BY ' . $_GET['tri'];
                        }

                        $bdd = config::getConnexion();
                        $actus = $bdd->query($sql);

                        while($actu = $actus->fetch())    // charge les films 1 par 1 (boucle while)
                            {  ?>
                            <tr>
                            
                                <td class="ff"> <?php echo $actu['id'] ?></td>
                                <td class="ff"> <?php echo $actu['titre'] ?></td>
                                <td class="ff"> <?php echo $actu['contenu']  ?> </td>
                                <td class="ff"> <?php echo '<img src="'.$actu['img'].'" alt="img">'   ?> </td> 
                                <td class="center">
                                    <form  id="monform "method="POST" action="supprimerActualite.php">
                                        <input type="submit" class="monform" name="supprimer" value="Supprimer">
                                        <input type="hidden" value="<?PHP echo $actu['id']; ?>" name="id">
                                    </form>
                                </td>
                                <td class="ff">
                                    <a href="modifierActualite.php?id=<?PHP echo $actu['id']; ?>">Modifier</a>
                                </td>
                                        
                            </tr> 
                            <?php } ?>
                        </table>
                    
                    <a href="ajouterActualite.html"><input type="submit"  value="ajouter Actualité"> </a>

                <?php
                if(isset($_POST['search']))
                    {
                        $valueToSearch = $_POST['valueToSearch'];
                        // search in all table columns
                        // using concat mysql function
                        $query = "SELECT * FROM `actualites` WHERE CONCAT(id,titre,contenu,img) LIKE '%".$valueToSearch."%'";
                        $search_result = filterTable($query);

                    }
                    else {
                        $query = "SELECT * FROM `actualites` where id = '*' ";
                        $search_result = filterTable($query);
                    }

                    // function to connect and execute the query
                    function filterTable($query)
                    {  $connect = mysqli_connect("localhost", "root", "", "tcmg");
                        $filter_Result = mysqli_query($connect, $query);
                        return $filter_Result;
                    }

                    ?>

                   
                    <form action="actualites.php" method="POST" >

                        <div>
                            <br>
                            <input type="text" name="valueToSearch" placeholder="valeur a rechercher"><br>
                            <button type="submit" name="search" class="btn">Rechercher</button>
                        </div>

                        <table border="1" class="center">

                            <tr>
                                <th>Id</th>
                                <th>Titre</th>
                                <th>Contenu</th>
                                <th>Image</th>
                            </tr>

                            <?php while($row = mysqli_fetch_array($search_result)):?>
                            <tr>
                                <td class="ff"><?php echo $row['id'];?></td>
                                <td class="ff"><?php echo $row['titre'];?></td>
                                <td class="ff"><?php echo $row['contenu'];?></td>
                                <td class="ff"> <?php echo '<img src="'.$row['img'].'" alt="img">'   ?> </td> 
                              
                                <td class="center">
                                    <form  id="monform "method="POST" action="supprimerActualite.php">
                                        <input type="submit" class="monformm" name="supprimer" value="">
                                        <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                    </form>
                                </td>

                                <td class="ff">
                                    <a href="modifierActualite.php?id=<?PHP echo $row['id']; ?>">Modifier</a>
                                </td>
                            </tr>

                            <?php endwhile;?>

                        </table>
                    </form>
            </div>
        </div>
        
    </body>
</html>

