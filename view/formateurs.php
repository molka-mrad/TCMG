
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
                <a href="formateurs.php?tri=cin">Trier par Cin</a>
                <a href="formateurs.php?tri=nom">Trier par Nom</a>
                <a href="formateurs.php?tri=prenom">Trier par Prenom</a>


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
                    
                        <?php  
                        $sql = 'SELECT * FROM formateurs';
                        if(isset($_GET['tri']) && !empty($_GET['tri'])){
                        $sql .= ' ORDER BY ' . $_GET['tri'];
                        }

                        $bdd = config::getConnexion();
                        $fors = $bdd->query($sql);

                        while($for = $fors->fetch())
                        {  ?>
                            
                            <tr>
                                <td class="ff"><?PHP echo $for['cin']; ?></td>
                                <td class="ff"><?PHP echo $for['nom']; ?></td>
                                <td class="ff"><?PHP echo $for['prenom']; ?></td>
                                <td class="ff" ><?PHP echo $for['tel']; ?></td>
                                <td class="ff" ><?PHP echo $for['age']; ?></td>
                                <td class="ff" ><?PHP echo $for['inscription']; ?></td>
                                <td class="ff" ><?PHP echo $for['email']; ?></td>
                                <td class="ff" ><?PHP echo $for['img']; ?></td>
                                <td class="center">
                                    <form  id="monform "method="POST" action="supprimerFormateur.php">
                                        <input type="submit" class="monform" name="supprimer" value="">
                                        <input type="hidden" value="<?PHP echo $for['cin']; ?>" name="cin">
                                    </form>
                                </td>
                                <td class="ff"><a href="modifierFormateur.php?cin=<?PHP echo $for['cin']; ?>">
                                        Modifier</a></td>
                                        
                            </tr>
                        <?PHP
                        }
                        ?>
                    </table>
                    <a href="ajouterFormateur.html"><input type="submit"  value="ajouter Formateur"> </a>

                    
                <?php
                if(isset($_POST['search']))
                    {
                        $valueToSearch = $_POST['valueToSearch'];
                        // search in all table columns
                        // using concat mysql function
                        $query = "SELECT * FROM `formateurs` WHERE CONCAT(cin,nom,prenom,tel,age,inscription,email,img) LIKE '%".$valueToSearch."%'";
                        $search_result = filterTable($query);

                    }
                    else {
                        $query = "SELECT * FROM `formateurs` where cin = '*' ";
                        $search_result = filterTable($query);
                    }

                    // function to connect and execute the query
                    function filterTable($query)
                    {  $connect = mysqli_connect("localhost", "root", "", "tcmg");
                        $filter_Result = mysqli_query($connect, $query);
                        return $filter_Result;
                    }

                    ?>

                   
                    <form action="formateurs.php" method="POST" >

                        <div>
                            <br>
                            <input type="text" name="valueToSearch" placeholder="valeur a rechercher"><br>
                            <button type="submit" name="search" class="btn">Rechercher</button>
                        </div>

                        <table border="1" class="center">

                            <tr>
                                <th>Cin</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Telephone</th>
                                <th>Age</th>
                                <th>Inscription</th>
                                <th>Email</th>
                                <th>Image</th>
                            </tr>

                            <?php while($row = mysqli_fetch_array($search_result)):?>
                            <tr>
                                <td class="ff"><?php echo $row['cin'];?></td>
                                <td class="ff"><?php echo $row['nom'];?></td>
                                <td class="ff"><?php echo $row['prenom'];?></td>
                                <td class="ff"><?php echo $row['tel'];?></td>
                                <td class="ff"><?php echo $row['age'];?></td>
                                <td class="ff"><?php echo $row['inscription'];?></td>
                                <td class="ff"><?php echo $row['email'];?></td>
                                <td class="ff"><?php echo $row['img'];?></td>

                                <td class="ff"> <?php echo '<img src="'.$row['img'].'" alt="img">'   ?> </td> 
                              
                                <td class="center">
                                    <form  id="monform "method="POST" action="supprimerFormateur.php">
                                        <input type="submit" class="monformm" name="supprimer" value="">
                                        <input type="hidden" value="<?PHP echo $row['cin']; ?>" name="id">
                                    </form>
                                </td>

                                <td class="ff">
                                    <a href="modifierFormateur.php?id=<?PHP echo $row['cin']; ?>">Modifier</a>
                                </td>
                            </tr>

                            <?php endwhile;?>

                        </table>
                    </form>
            </div>
        </div>
        
    </body>
</html>

