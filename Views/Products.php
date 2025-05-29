<?php 
include '../Model/allproductsDAO.php';
include_once("header.php");
include_once("footer.php");
include_once("search.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $main_product_text1;?></title>
<meta name="keywords" content="?php echo $main_product_text2;?>">
<meta name="description" content="?php echo $main_product_text3;?>">
<meta name="author" content="Nelly-Calex">

<?php echo $favs; ?>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="/themes/greentheme/views/site/Assets/js/modernizr.js"></script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="animsition body-prod">

<?php echo $nav2; ?>
<?php echo $product_content;?>

<!-- Header -->
<header id="header">
  <div class="intro" style="background: url(<?php echo $main_product_image1; ?>) no-repeat center bottom;">
    <div class="container">
      <div class="row">
        <div class="intro-text animated"  data-appear="bounceInDown" style=" animation-duration: 1s; animation-iteration-count: infinite;">
          <h1><?php echo $main_product_text4;?></h1>
          <p><?php echo $main_product_text5;?></p>
          <!-- <a href="#about" class="btn btn-custom btn-lg page-scroll"><?php echo $main_product_text6;?></a> </div> -->
      </div>
    </div>
  </div>
</header>

<!-- content -->

<!-- testing animations -->

<!-- Portfolio Section -->  
<div id="products" class="scroll-animations">
  <div class="container">
    <div class="section-title text-center center">
      <h2><?php echo $main_product_text6;?></h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <!-- <li><a href="#" data-filter="*" class="active">All</a></li> -->
            <?php echo $category;?>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <?php echo $client_icons; ?>





      </div>






    </div>
  </div>
</div>

<?php 
  echo $footer;
  echo $scripts;
?>

<script type="text/javascript">
  // Scroll function courtesy of Scott Dowding; http://stackoverflow.com/questions/487073/check-if-element-is-visible-after-scrolling
/*
$(document).ready(function() {
  // Check if element is scrolled into view
  function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  }
  // If element is scrolled into view, fade it in
  $(window).scroll(function() {
    $('..scroll-animations ..animated').each(function() {
      if (isScrolledIntoView(this) === true) {
        $(this).addClass('fadeInLeft');
      }
    });
  });
});

*/
</script>


</body>
</html>