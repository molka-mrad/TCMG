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
                    echo 'Bienvenue '.$_SESSION['l'].'<br>';
                    echo '<a href="./logout.php">Se déconnecter</a>';
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

            <section id="footer">
          <div class="container2" align="center">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
              <div class="col-xs-12 col-sm-4 col-md-4">
                <br><br>
                <h5>Liens rapides</h5>
                <ul class="list-unstyled quick-links">
                  <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Accueil</a></li>
                  <li><a href="MonClub.php"><i class="fa fa-angle-double-right"></i>Mon Club</a></li>
                  <li><a href="boutique.php"><i class="fa fa-angle-double-right"></i>Notre Boutique</a></li>
                </ul>
              </div>
              
              <div >
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

              <div class="container2">
              <h1 class="text-center">Nos Contacts</h1>
              <hr>
                <div class="row">
                  <div class="col-sm-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.992324923593!2d10.23685191528903!3d36.77075157995459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd35e03fcf73db%3A0x99b096774fb8bc33!2sTennis%20Club%20Megrine%20Coteaux%20TCM!5e0!3m2!1sfr!2stn!4v1575674968178!5m2!1sfr!2stn" width="400" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                  </div>

                  <div class="col-sm-4" id="contact2">
                      <h3>Adresses et Contacts</h3>
                      <hr align="left" width="50%">
                      <h4 class="pt-2">Site Web</h4>
                      <i class="fas fa-globe" style="color:#000"></i> www.TCMG.tn<br>
                      <h4 class="pt-2">Telephone</h4>
                      <i class="fas fa-phone" style="color:#000"></i> <a href="tel:+"> +216 71 432 350 </a><br>
                      <h4 class="pt-2">Email</h4>
                      <i class="fa fa-envelope" style="color:#000"></i> <a href="">tcmg@gmail.com</a><br>
                    </div>
                </div>
              </div>
              <br><br>
              </div>
            </div>
            
              </hr>
            </div>	
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p class="h6">&copy All right Reversed.</p>
              </div>
              </hr>
            </div>	
          </div>
        </section>

        </body>
    </html>


<?php
}

else { 
      
      echo '<body onLoad="alert(\'Veuillez vous connecter\')">'; 
      echo '<meta http-equiv="refresh" content="0;URL=index.php">'; 

}  

?>