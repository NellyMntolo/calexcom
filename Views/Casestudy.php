<?php 
include_once("../Model/casestudyDAO.php");
//include_once("../Controller/cart_controller.php");
include_once("header.php");
include_once("footer.php");
include_once("search.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $case_text1;?></title>
    <meta name="description" content="<?php echo $case_text3;?>">
    <meta name="keywords" content="<?php echo $case_text2;?>">
    <meta name="author" content="Nelly Mntolo">

    <?php echo $favs;?>
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet"> -->
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
      <li style="background-image: url(<?php echo $case_image1;?>);" class="overlay2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2><?php echo $case_text4;?></h2>
                <p><?php echo $case_text5;?></p>
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
        <div class="col-md-9 mb50">
          <p><img src="<?php echo $case_image2;?>" alt="<?php echo $case_image2;?>" class="img-responsive img-border"></p>
          <h2><?php echo $case_text13;?></h2>

          <p><?php echo $case_text14;?></p>

          <h3><?php echo $case_text15;?></h3>

          <p><?php echo $case_text16;?></p>

          <p><a href="<?php echo $case_text17;?>" target="_blank" role="button" class="btn btn-primary btn-sm"><?php echo $case_text18;?></a></p>
        </div>
        <div class="col-md-3 probootstrap-sidebar">
          <h3 class="mt0 mb30"><?php echo $case_text6;?></h3>
          <p><?php echo $case_text7;?></p>
          <ul class="stack-link">
            <li><?php echo $case_text8;?></li>
            <li><?php echo $case_text9;?></li>
            <li><?php echo $case_text10;?></li>
            <li><?php echo $case_text11;?></li>
            <li><?php echo $case_text12;?></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  

  <?php echo $footer;?>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  

  <script src="/themes/greentheme/views/site/Assets/js/scripts.min.js"></script>
  <script src="/themes/greentheme/views/site/Assets/js/main.min.js"></script>
  <script src="/themes/greentheme/views/site/Assets/js/custom.js"></script>
  </body>
</html>