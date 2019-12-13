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
            <section id="main-content">
          <section class="wrapper">            

              <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Gestion de Produit</h3>
                                            
                    </ol>
                </div>
            </div>
              <!-- houni -->











<?PHP
include "../core/produitC.php";
$prod1C=new produitC();
$listeProds=$prod1C->AfficherProd() ;
var_dump($listeProds);
?>
<center> 
<table border="1">
<tr>
<th> Id Produit </th>
<th> Nom Produit </th>
<th> Image Produit </th>
<th> Description </th>
<th>Supprimer</th>
<th>Modifier</th>
</tr>

<?PHP
foreach($listeProds as $row)
{
	?>
	
	<tr>
	<td><?PHP echo $row['reference']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><a><img class="" src="<?php echo $row['photo'];?>" style="width: 100px; height:100px;"></a></td>
    <td><?PHP echo $row['description']; ?></td>
    <td><?PHP echo $row['type']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>

	<td><form method="POST" action="supprimerProd.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idP']; ?>" name="idP">
	</form>
	</td>
	<td><a href="modifierProd.php?idP=<?PHP echo $row['idP']; ?>">
	Modifier</a></td>
	</tr>

	<?PHP
}
?>
</table>
</center>

 </body>
</html>