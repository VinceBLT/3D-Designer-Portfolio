<?php 
session_start();
$errorName = $_SESSION["errorName"];
$errorEmail = $_SESSION["errorEmail"];
$errorMobile = $_SESSION["errorMobile"];
$errorDtype = $_SESSION["errorDtype"];
$errorMessage = $_SESSION["errorMessage"];
session_unset();
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap"
      rel="stylesheet"
    />
    <meta charset="utf-8" />
    <title>Elisabeth Kauv - Designer - Créatrice CAO</title>
    <meta
      name="description"
      content="Elisabeth Kauv, Designer, Créatrice CAO, bijoux, luxe"
    />
    <meta
      name="keywords"
      content="Elisabeth Kauv, Designer, Créatrice CAO, bijoux, luxe"
    />
    <meta name="author" content="vincent-bezault" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#fff" />
    <!--website-favicon-->
    <link href="images/favicon.png" rel="icon" />
    <!--plugin-css-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/plugin.min.css" rel="stylesheet" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <!-- template-style-->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
  </head>
  <body>
    <!--Start Preloader -->
    <div class="onloadpage" id="page_loader">
      <div class="pre-content">
        <div class="logo-pre">
          <img src="images/logo.png" alt="Logo" class="img-fluid" />
        </div>
        <div class="pre-text-">
          <span>Chargement...</span>
        </div>
      </div>
    </div>
    <!--End Preloader -->
    <!--Start Header -->
    <header class="nav-bg-w main-header navfix fixed-top menu-white">
      <div class="container-fluid m-pad">
        <div class="menu-header">
          <div class="dsk-logo">
            <a class="nav-brand" href=""> </a>
          </div>
          <div class="custom-nav" role="navigation">
            <ul class="nav-list">
              <li class="sbmenu">
                <a href="index.html" class="menu-links"> Accueil</a>
              </li>
              <li class="sbmenu">
                <a href="apropos.html" class="menu-links">A propos</a>
              </li>
              <li class="sbmenu">
                <a href="creations.html" class="menu-links">Créations</a>
              </li>
              <li class="sbmenu">
                <a href="prestations.html" class="menu-links">Prestations</a>
              </li>
              <li class="sbmenu">
                <a href="portfolio.html" class="menu-links">Portfolio</a>
              </li>
              <li>
                <a href="#" class="menu-links right-bddr">&nbsp;</a>
                <!--menu right border-->
              </li>

              <li>
                <a href="contact.php" class="btn-br bg-btn3 btshad-b2 lnk"
                  >Contact <span class="circle"></span
                ></a>
              </li>
            </ul>
          </div>
          <div class="mobile-menu2">
            <ul class="mob-nav2">
              <li class="navm-">
                <a class="toggle" href="#"><span></span></a>
              </li>
            </ul>
          </div>
        </div>
        <!--Mobile Menu-->
        <nav id="main-nav">
          <ul class="first-nav">
            <li>
              <a href="index.html">Accueil</a>
            </li>
            <li>
              <a href="apropos.html">A propos</a>
            </li>
            <li>
              <a href="creations.html">Créations</a>
            </li>
            <li>
              <a href="prestations.html">Prestations</a>
            </li>
            <li>
              <a href="portfolio.html">Portfolio</a>
            </li>
            <li>
              <a href="contact.php">Contact</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <!--End Header -->

    <!--Start Enquire Form-->
    <section class="contact-page pad-tb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 v-center">
            <div class="common-heading text-l">
              <div
                  class="mb30 dzname wow fadeIn"
                  id="manuscript"
                  data-wow-delay=".2s"
                >
                  <strong>Contactez-moi</strong>
                </div>
              <h2 class="mt0 mb0">Une question ? Ecrivez un message</h2>
              <p class="mb60 mt20">Je vous répondrais au plus tôt</p>
            </div>
            <div class="form-block">
              <form action="/php/form-process.php" method="POST" id="contactForm" data-toggle="validator" class="shake">
                <div class="row">
                  <div class="form-group col-sm-6">
										<select name="Dtype" id="Dtype"    >
											<option value="">Vous êtes..</option>
											<option value="pro">Un professionnel</option>
											<option value="par">Un particulier</option>
										</select>
										<div class="help-block with-errors"> <?php echo $errorDtype ?></div>
									</div>
                  <div class="form-group col-sm-6">
                    <input
                      type="text"
                      id="name"
                      name="name"
                      placeholder="Nom"
                      
                      data-error="Please fill Out"
                    />
                    <div class="help-block with-errors"><?php echo $errorName ?></div>
                  </div>
                  <div class="form-group col-sm-6">
                    <input
                      type="email"
                      id="email"
                      name="email"
                      placeholder="Email"
                     
                    />
                    <div class="help-block with-errors"><?php echo $errorEmail ?></div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <input
                      type="text"
                      id="mobile"
                      name="mobile"
                      placeholder="Téléphone"
                     
                      data-error="Please fill Out"
                    />
                    <div class="help-block with-errors"><?php echo $errorMobile ?></div>
                    
                  </div>
                 
                </div>
                <div class="form-group">
                  <textarea
                    id="message"
                    name="message"
                    rows="5"
                    placeholder="Votre message"
                 
                  ></textarea>
                  <div class="help-block with-errors"><?php echo $errorMessage ?></div>
                </div>
                <button
                  type="submit"
                  id="form-submit"
                  class="btn-br bg-btn3 btshad-b2 lnk"
                >
                  <span class="circle"></span>Envoyer
                </button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
          <div class="col-lg-5 v-center">
            <div class="contact-details">
              <div class="contact-card wow fadeIn" data-wow-delay=".2s">
                <div class="info-card v-center">
                  <span><i class="fas fa-phone-alt"></i> Téléphone</span>
                  <div class="info-body">
                    <p></p>
                    <a href="tel:+33607254274">(+33)6 07 25 42 74</a>
                  </div>
                </div>
              </div>
              <div class="email-card mt30 wow fadeIn" data-wow-delay=".5s">
                <div class="info-card v-center">
                  <span><i class="fas fa-envelope"></i> Email:</span>
                  <div class="info-body">
                    <p></p>
                    <a href="mailto:EKDesign99@gmail.com">EKDesign99@gmail.com</a>
                  </div>
                </div>
              </div>
             
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Enquire Form-->

    <!--Start Footer-->
    <footer>
      <div class="footer-row2 pb50">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12 col-sm-12 text-center">
              <a class="navbar-brand img-ctr" href="#">
                <img src="images/LOGO1.png" alt="Logo" width="100"
              /></a>
              <ul class="footer-link-v2 link-hover mt30">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="#">Créations</a></li>
                <li><a href="#">Prestations</a></li>
                <li><a href="#">Tarifs</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <hr class="hline" />
      <div class="footer-row3">
        <div class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="footer-social-media-icons">
                  <a href="javascript:void(0)" target="blank"
                    ><i class="fab fa-facebook"></i
                  ></a>
                  <a href="javascript:void(0)" target="blank"
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
                <div class="footer-">
                  <p>
                    Copyright &copy; 2021 EK Design. All rights reserved.
                    Developed by Vincent Bezault
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--End Footer-->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/plugin.min.js"></script>
    <script src="js/preloader.js"></script>
    <!--common script file-->
    <script src="js/main.js"></script>

    <script>
      //Owl-Carousel - Home hero card
      var owl = $(".post-newsltr");
      owl.owlCarousel({
        stagePadding: 50,
        items: 3,
        loop: true,
        autoplay: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
          0: {
            items: 1,
            stagePadding: 30,
          },
          520: {
            items: 1,
          },
          768: {
            items: 2,
          },
          1200: {
            items: 2,
          },
          1400: {
            items: 3,
          },
          1600: {
            items: 3,
          },
        },
      });
    </script>
  </body>
</html>