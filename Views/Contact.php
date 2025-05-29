<?php 
include_once("../Model/contactDAO.php");
include_once("header.php");
include_once("footer.php");
include_once("search.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $contact_text1;?></title>
    <meta name="description" content="<?php echo $contact_text3;?>">
    <meta name="keywords" content="<?php echo $contact_text2;?>">
    <meta name="author" content="Nelly Mntolo">

    <?php echo $favs;?>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="/themes/greentheme/views/site/Assets/css/styles-merged.css">
    <link rel="stylesheet" href="/themes/greentheme/views/site/Assets/css/style.css">
    <link rel="stylesheet" href="/themes/greentheme/views/site/Assets/css/custom.css">

    <!--[if lt IE 9]>
      <script src="/themes/greentheme/views/site/Assets/js/vendor/html5shiv.min.js"></script>
      <script src="/themes/greentheme/views/site/Assets/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- START: header -->
  
  <div class="probootstrap-loader"></div>

  <?php echo $header;?>
  <!-- END: header -->
  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url(<?php echo $contact_image1;?>);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2><?php echo $contact_text4;?></h2>
                <p><?php echo $contact_text5;?></h2></p>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!-- END: slider  -->
  <?php echo $search;?>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 probootstrap-animate overlap">
          <form action="/ContactMe" method="post" class="probootstrap-form probootstrap-form-box mb60">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="first_name"><?php echo $contact_text6;?></h2></label>
                  <input type="text" class="form-control" id="first_name" name="first_name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="last_name"><?php echo $contact_text7;?></h2></label>
                  <input type="text" class="form-control" id="last_name" name="last_name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email"><?php echo $contact_text8;?></h2></label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="message"><?php echo $contact_text9;?></h2></label>
              <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" id="submit" name="submit" value="<?php echo $contact_text10;?>">
            </div>
          </form>
        </div>
        <!-- <div class="col-md-3 col-md-push-1 probootstrap-animate">
          <h4>Contact Details</h4>
          <ul class="with-icon colored">
            <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
            <li><i class="icon-mail"></i><span>info@domain.com</span></li>
            <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
          </ul>

          <h4>Feedback</h4>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <p><a href="#">Learn More</a></p>
        </div> -->
      </div>
    </div>
  </section>  
  <!-- END section -->
  <!-- <div class="container mb50 probootstrap-animate">
    <div id="map"></div>
  </div> -->
 

  <?php echo $footer;?>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  

  <script src="/themes/greentheme/views/site/Assets/js/scripts.min.js"></script>
  <script src="/themes/greentheme/views/site/Assets/js/main.min.js"></script>

  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/themes/greentheme/views/site/Assets/js/google-map.js"></script>

  <script src="/themes/greentheme/views/site/Assets/js/custom.js"></script>

  </body>
</html>