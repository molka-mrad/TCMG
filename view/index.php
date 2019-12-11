<!DOCTYPE html>
<html lang="fr">
  <head>
        <title>Tennis Club de Mégrine TCMG</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="stylefront.css">
        <script src="css/jquery.slim.min.js"></script>
        <link rel="stylesheet" href="css/owl.carousel.min.css">
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
            <section class="vid">
              <div class="overlay"></div>
              <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                  <source src="images/tcmg2.mp4" type="video/mp4">
              </video>
              <div class="container h-100">
                  <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 class="display-3"></h1>
                        <p class="lead mb-0"></p>
                    </div>
                  </div>
              </div>
            </section>
        
        <!--
        <section class="azer">
            <div class="welcome" style="background-image:url(images/bg_1.jpg);">
                <div class="container">
                    <h1 class="titre">Bienvenue à Tennis Club de Mégrine</h1>
                </div>
            </div> 
        </section>
        -->

    </br>
    
    <div id="parallax-world-of-ugg">
                
        <?php include "../config.php" ?>
        <section>
            <div class="parallax-one">
              <h2>Actualités</h2>
            </div>
        </section>

        <section>
          <div class="block">
                  <section class="aze">
                    <div class="e1">

                    <h1 class="titre">Actualités</h1> <br>
                      
                      <?PHP
                        $sql = "SELECT * From actualites";
                        $db = config::getConnexion();
                          $listeActu = $db->query($sql);
                      ?>

                      <table class="table-actu" border='0' width="100%">
                          
                          <?php
                            foreach ($listeActu as $row) {
                          ?>

                          <tr>
                            <td>
                              <h3><?PHP echo $row['titre']; ?></h3></br>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <?PHP echo $row['contenu']; ?></br>
                            </td>
                            <td>
                              <?PHP $img=$row['img']; ?>
                              <img class="img-actu" src=<?PHP echo $row['img']; ?> alt=""></br>
                              
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p class="line-break margin-top-10"></p></br>
                            </td>
                          </tr>

                          <?PHP
                          }
                          ?>
                      </table>  
                    </div>
                </section>
          </div>
        </section>

        <section>
          <div class="parallax-two">
              <h2>Evenements</h2>
          </div>
        </section>

        <section>
          <div class="block">
          <section class="aze">
            <div class="bech enadhamhom">
                    <h1 class="titre">Evenements</h1> <br>

                    <?PHP
                      $sql = "SELECT * From evenements";
                        $listeEvent = $db->query($sql);
                      
                    ?>
                    
                    <table class="table-actu" border='0' width="100%">

                        <?php
                          foreach ($listeEvent as $row) {
                        ?>

                        <tr>
                          <td>
                            <h3><?PHP echo $row['libelle']; ?></h3></br>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            Date début: <?PHP echo $row['dateDeb']; ?></br>
                            Date fin: <?PHP echo $row['dateFin']; ?></br>
                            Lieux: <?PHP echo $row['lieux']; ?></br>
                            <?PHP echo $row['descrip']; ?></br>
                          </td>
                          <td>
                            <?PHP $img=$row['img']; ?>
                            <img class="img-actu" src=<?PHP echo $row['img']; ?> alt=""></br>
                          </td>
                        </tr>

                        
                        <tr>
                          <td colspan="2">
                            <?php
                              if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
                              { 
                                ?>
                                  <form method="POST" action="reservation.php">
                                        <button type="submit" name="reserver" >reserver une place</button>
                                        <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                    </form>
                              <?php
                              }
                              else{
                                
                                echo '<br>Connectez vous pour reserver une place';
                              }
                            ?>
                            </br>
                          </td>
                        </tr>

                        <tr>
                            <td>
                              <p class="line-break margin-top-10"></p></br>
                            </td>
                        </tr>
                            
                        <?PHP
                        }
                        ?>
                    </table>  
            </div>
        </section>
          </div>
        </section>

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