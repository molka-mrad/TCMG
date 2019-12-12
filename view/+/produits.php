
<?php 
require 'db.class.php';
//require 'filter.php';
$DB = new DB();
?>
<head>
    <link rel="stylesheet" href="../stylefront.css">
    <script src="css/jquery.slim.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>

    <nav class="navig">

    <div class="log">
        <script>
            jQuery(document).ready(function(){

            // Show password Button
            $("#showpassword").on('click', function(){
            
            var pass = $("#pwd");
            var fieldtype = pass.attr('type');
            if (fieldtype == 'password') {
                pass.attr('type', 'text');
                $(this).text("Masquer Mot de Passe");
            }else{
                pass.attr('type', 'password');
                $(this).text("Afficher Mot de Passe");
            }
            });
            });
        </script>
        <?php 
        session_start ();  
        if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
        { 
        
            echo 'Bienvenue '.$_SESSION['l'].'<br>';
            echo '<a href="./logout.php">Se déconnecter</a>';
        }
        else { ?>
        <form id="formconnex" name="formconnex" method="POST" action="connexion.php">
            <div class="form-group">
                Login :
                <input type="text" name="login" id="login" placeholder="Nom" />
                Password : 
                <input type="password" name="pwd" id="pwd" placeholder="Password" />
            </div>
            <div class="form-check">
                <button class="btn btn-info" type="button" name="showpassword" id="showpassword" value="Show Password">Afficher Mot de Passe</button> 
                <input type="submit" class="btn btn-info" name="button" id="button" ></input>
                <a href="recumdp.php"><input type="button"  value="MDP oublié?" class="btn btn-info"> </a>
            </div>
        </form>
        <?php
        }  
        ?>
    
    </div>

    <div class="entete">
        <a class="navbar-title" href="index.html">Tennis Club de Mégrine</a></br>
        <img class="logo" src="../images/logo.png" width="80"></br>
    </div>

    <div class="menu">
        <table class="menu-tab" border="0" width="80%" align="center">
            <tr>
                <td class="nav-item"><a href="../index.php" class="nav-link">Accueil</a></td>
                <td class="nav-item"><a href="../MonClub.php" class="nav-link">Notre Club</a></td>
                <td class="nav-item"><a href="../Inscription.php" class="nav-link">Inscription</a></td>
                <td class="nav-item"><a href="produits.php" class="nav-link">Notre Boutique</a></td>
                <td class="nav-item"><a href="../espacepriv.php" class="nav-link">Mon Espace</a></td>
            </tr>
        </table>
    </div>
    </nav>


<!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- /Preloader -->

    <!-- Header Area Start -->
    
  
    
    <!-- Header Area End -->
   
<!-- 
<?php  
// 

?> -->

<!--Product Start-->
<br><br><br><br><br>





<center><h1>Nos Produits</h1></center>
<!--LE RESTE DES PRODUIT-->
<?php

 
// Nous devons valider notre document avant de nous référer à l'ID
// $sql='SELECT * FROM produitensolde ORDER BY reference ASC  ';
// $sql='SELECT * FROM produit ';
$set="";
$sql="select * from produit where nom like '%$set%' ";

    // if (isset($_POST['min']) and isset($_POST['max'])) {
    //   $sql='SELECT * FROM produit WHERE prix >= '.$_POST["min"].' AND prix <= '.$_POST["max"].'   ';  

    // }
    // echo "$sql";
    // if (isset($_POST['rech'])) {
    //     $sql=' SELECT * FROM produit WHERE nom='.$_POST["rech"].' ';
    //     echo "$sql";
    // }

    // if (isset($_POST['max'])) {
    //  $sql.'AND (prix <= '.$_POST["max"].' ';
    // }
   //  else
   // {$sql='SELECT * FROM produit ORDER BY reference ASC  ';}

 $products2 = $DB->query($sql);?>
 <!-- <?php var_dump($products2);?> -->

<?php foreach ( $products2 as $product) : ?>

<div class="produits" >
  
    <img src="<?= $product->photo;?>" height="250px" width="250px" class="pic" >

    <a href="single.php?reference=<?= $product->reference ?>"><h3 class="title"> <?= $product->nom ?>   </h3></a>
    <h4 class="ref"> Reference : <?= $product->reference ?></h4>

    <h4 class="price"><?= $product->prix ?> DT</h4>
    <a href="#"><p class="type"><?php if($product->type==0) {
        echo "Vetement";
    } elseif ($product->type==1) {
        echo "Materiel";
    }
   
    ?></p></a>
    <div class="descrip"><div class="tip">Description :</div> 
    <p > <?= $product->description ?> </p></div>
    <!-- <button class="panier"><img src="chart.png" class="addchart" width="10px" height="10px"></button> -->
    <!-- <a href="addpanier.php?reference=<?=$product->reference ?>"><button ><img src="add1.jpg" width="30px" height="30px"></button></a> -->

    <a href="views/addtocart.php?reference=<?=$product->reference?>&x=1"><button>Ajouter au panier</button></a>
    

<!-- TBALBIZ STARTS HERE ! -->
<!-- <form method="get" action="addtocart.php">
    <input  name="name" hidden="hidden" value="<?= $product->nom ?>">
    <input  name="name" hidden="hidden" value="<?= $product->nom ?>">
    <input  name="name" hidden="hidden" value="<?= $product->nom ?>">
    <input  name="name" hidden="hidden" value="<?= $product->nom ?>">
    <input type="submit" name="submit">
</form> -->
</div>
 <br>

<?php endforeach ?>











<!-- <button>Ajouter au panier</button> -->
    <!-- <div class="ajouterpanier">
        <p class="textpanier">Ajouter au panier</p>
        <img src="chart.png" class="addchart" width="10px" height="10px">

    </div> -->

<!--Product End-->


 <!-- Footer Area Start -->
    
   <!-- All JS Files -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/akame.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>
