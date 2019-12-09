<!DOCTYPE html>
<html lang="fr">
  <head>
        <title>Tennis Club de Mégrine TCMG</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="stylefront.css">
        <script src="css/jquery.slim.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        
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
              echo '<br><br>Bienvenue '.$_SESSION['l'].'<br>';
              echo '<a href="./logout.php">Se déconnecter</a>';
            }
          else { ?>
            <form id="formconnex" name="formconnex" method="POST" action="connexion.php">
                <div class="form-group">
                  <br><br>
                  Login :
                  <input type="text" name="login" id="login" placeholder="Nom" />
                  Password : 
                  <input type="password" name="pwd" id="pwd" placeholder="Password" />
                </div>
                <div class="form-check">
                  <button class="btn btn-info" type="button" name="showpassword" id="showpassword" value="Show Password">Afficher Mot de Passe</button> 
                  <input type="submit" class="btn btn-info" name="button" id="button" ></input>
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

        <script>
          $(document).ready(function(){
            let scroll_link = $('.scroll');

              //smooth scrolling -----------------------
              scroll_link.click(function(e){
                  e.preventDefault();
                  let url = $('body').find($(this).attr('href')).offset().top;
                  $('html, body').animate({
                    scrollTop : url
                  },700);
                  $(this).parent().addClass('active');
                  $(this).parent().siblings().removeClass('active');
                  return false;	
              });
            });
        </script>

        <div class="container-fluid">
            <ul class="nav fixed-top">
              <li class="nav-item active">
                <a class="nav-link scroll" href="#one">A propos de TCMG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link scroll" href="#two">Notre Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link scroll" href="#three">Gallerie Photos</a>
              </li>
          </ul>
          <div class="jumbotron-fluid text-center one" id="one">
            <span class="display-3">A propos de TCMG</span>
            <p class="parag">Surplombant un site panoramique, Le Tennis Club de Mégrine est l’une des principales associations sportives de la Ville 
              de Mégrine. Doté de 6 courts, d'un Club House, et d’une salle de Fitness le club compte aujourd’hui plus de 300 membres. 
              Le Club a été fondé en 1983 . <br> Le club de tunis public affilié à la Fédération Tunisienne de Tunis et assujetti au règlement 
              des associations sportives tunisiennes . <br> Le président actuel ( Saisons 2018-2019 & 2019-2020) du club est Mr Mourad HAFHOUF</p>
                      
          </div>

          <div class="jumbotron-fluid text-center two" id="two">
            <span class="display-3">Notre Team</span>

            <?php include "../config.php" ?>

              <?PHP
                $sql = "SELECT * From formateurs";
                $db = config::getConnexion();
                  $listeForm = $db->query($sql);
              ?>
                <?php
                  foreach ($listeForm as $row) {
                ?>

                  <!-- Team Member 1 -->
                  
                  <div class="box">
                    <div class="card border-0 shadow">
                      <?PHP $img=$row['img']; ?>
                      <img src=<?PHP echo $row['img']; ?> class="img" alt="...">
                      <div class="blaka">
                        <h5 class="card-title mb-0"><?PHP echo $row['nom']; echo' '; echo $row['prenom']; echo ' ('; echo $row['age']; echo ' ans)'; ?></h5>
                        <div class="card-text text-black-50"><?PHP  echo'Telephone : '; echo $row['tel']; echo'<br> E-mail : '; echo $row['email'];?></div>
                      </div>
                    </div>
                  </div>
                  <?PHP
                  }
                  ?>

          </div>

          
          <link rel="stylesheet" href="font-awesome.min.css">
          <link href="lightgallery.min.css" rel="stylesheet">
          <script src="javaS-light-gallery.js"></script>

          <div class="jumbotron-fluid text-center three" id="three">
            <span class="display-3">Gallerie Photos</span>


            <div class="container" style="margin-top:40px;">
              <div class="demo-gallery">
                  <ul id="lightgallery" class="list-unstyled row">
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/1.jpg" data-src="images/1.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/1.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/2.jpg" data-src="images/2.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/2.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/3.jpg" data-src="images/3.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/3.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/1.jpg" data-src="images/1.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/1.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/2.jpg" data-src="images/2.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/2.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/3.jpg" data-src="images/3.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/3.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/1.jpg" data-src="images/1.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/1.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/2.jpg" data-src="images/2.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/2.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/3.jpg" data-src="images/3.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/3.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/1.jpg" data-src="images/1.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/1.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/2.jpg" data-src="images/2.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/2.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/3.jpg" data-src="images/3.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/3.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/1.jpg" data-src="images/1.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/1.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/2.jpg" data-src="images/2.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/2.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/3.jpg" data-src="images/3.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/3.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/1.jpg" data-src="images/1.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/1.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/2.jpg" data-src="images/2.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/2.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/3.jpg" data-src="images/3.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/3.jpg">
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/1.jpg" data-src="images/1.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/1.jpg"> 
                          </a>
                      </li>
                      <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="images/2.jpg" data-src="images/2.jpg" data-sub-html="<h4>Tennis Club Megrine</h4><p>Venez decouvrir le monde du tennis.</p>">
                          <a href="">
                              <img class="img-responsive" src="images/2.jpg">
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
          <script>
              $(document).ready(function(){
                  $('#lightgallery').lightGallery(); 
              });
          </script>


          </div>

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
                      <i class="fas fa-phone" style="color:#000"></i> <a href="tel:+"> +216 71 000 000 </a><br>
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