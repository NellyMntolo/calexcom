<?php 
include '../Model/aboutDAO.php';
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
<title><?php echo $about_text1;?></title>
<meta name="keywords" content="<?php echo $about_text2;?>">
<meta name="description" content="<?php echo $about_text3;?>">
<meta name="author" content="Nelly-Calex">

<?php echo $favs; ?>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="animsition">

<?php echo $nav2; ?>
<!-- Header -->
<?php /*
<header id="header">
  <div class="intro" style="height: 100%; background: black;"> <!--  style="background: url(../img/intro-bg.jpg) no-repeat center bottom;" -->
    <div class="container" style="height: 100%;">
      <div class="row" style="height: 100%;">
        <iframe id="ytplayer" type="text/html" width="100%" height="100%" src="<?php echo $about_text4;?>?autoplay=1&showinfo=0&controls=0&rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</header>
*/
?>

<header id="header">
  <div class="intro" style="background: url(<?php echo $about_image1;?>) no-repeat center bottom;">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1><?php echo $about_text4; ?></h1>
          <p><?php echo $about_text5; ?></p>
      </div>
    </div>
  </div>
</header>


<!-- About Section -->
<div id="technology" class="about_page">
  <div class="container">
    <div class="section-title text-center center">
      <h2 style="/*color: #4e97de;*/"><?php echo $about_text6;?></h2>
      <hr>
    </div>

    <div class="row">    
      <div class="col-xs-12 col-md-6"> <img src="<?php echo $about_image2; ?>" class="img-responsive" alt="<?php echo $about_image2; ?>"> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <?php echo $about_text7;?>
          <!-- <a href="#contact" class="btn btn-default btn-lg page-scroll"><?php //echo $about_text7;?></a>  -->
        </div>
      </div>    
    </div>

    <div class="row">
      <div class="col-xs-12 col-md-12" style="margin-top: 60px;">
          <div class="about-text ck">
            <?php echo $about_text8;?>
          </div>
      </div>
    </div>


    

    

  </div>
  
</div>

<?php 
  echo $footer;
  echo $scripts;
?>
</body>
</html>