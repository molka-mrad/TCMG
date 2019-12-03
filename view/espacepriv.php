<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 
?>

    <!DOCTYPE html>
    <html lang="fr">
      <head>
            <title>Tennis Club de Mégrine TCMG</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="stylefront.css">
            <script src="css/jquery.slim.min.js"></script>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/owl.carousel.min.css">
            
      </head>
      <body>
            <nav class="navig">
                    <div class="log">
                        <?php 
                         if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
                         { 
                        
                            echo 'Bienvenue '.$_SESSION['l'];
                            echo '<a href="./logout.php">Se déconnecter</a>';
                         }
                        else { ?>
                          <form id="formconnex" name="formconnex" method="POST" action="connexion.php">
                              Login :
                              <input type="text" name="login" id="login" />
                              Password : 
                              <input type="password" name="pwd" id="pwd" />
                              <input type="submit" name="button" id="button" value="Valider" />
                          </form>
                        <?php
                        }  
                        ?>
                      
                    </div>
                    <div class="entete">
                        <a class="navbar-title" href="index.html">Tennis Club de Mégrine</a></br>
                        <img class="logo" src="images/logo.png" width="80"></br>
                    </div>
                    <div class="menu">
                        <table class="menu-tab" border="0" width="80%" align="center">
                            <tr>
                                <td class="nav-item"><a href="index.php" class="nav-link">Accueil</a></td>
                                <td class="nav-item"><a href="MonClub.php" class="nav-link">Notre Club</a></td>
                                <td class="nav-item"><a href="Inscription.php" class="nav-link">Inscription</a></td>
                                <td class="nav-item"><a href="boutique.php" class="nav-link">Notre Boutique</a></td>
                                <td class="nav-item"><a href="espacepriv.php" class="nav-link">Mon Espace</a></td>
                                <td class="nav-item"><a href="Contact.php" class="nav-link">Contact</a></td>
                            </tr>
                        </table>
                    </div>
            </nav>
            
            <div class="content">
                <table align="center">
                    <tr>
                        <td>
                            les infooooooooooos
                        </td>
                    </tr>
                </table>
                
            </div>

        </body>
    </html>


<?php
}

else { 
      
      echo '<body onLoad="alert(\'Veuillez vous connecter\')">'; 
      echo '<meta http-equiv="refresh" content="0;URL=index.php">'; 

}  

?>