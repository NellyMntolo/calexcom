<?php 
include_once("../Model/allcasesDAO.php");
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
<title><?php echo $main_case_text1;?></title>
<meta name="keywords" content="<?php echo $main_case_text2;?>">
<meta name="description" content="<?php echo $main_case_text3;?>">
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
<!-- Navigation
    ==========================================-->


<?php echo $nav2; ?>
<?php echo $case_study_content;?>
<!-- Header -->
<header id="header">
  <div class="intro" style="background: url(<?php echo $main_case_image1;?>) no-repeat center bottom;">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1><?php echo $main_case_text4;?></h1>
          <p><?php echo $main_case_text5;?></p>
      </div>
    </div>
  </div>
</header>

<!-- About Section -->
<div id="case_study" style="padding: 120px 0!important;">
  <div class="container">
    <div class="section-title text-center center">
      <h2><?php echo $main_case_text6;?></h2>
      <hr>
    </div>

    <div class="row">
        <div class="grid">
          <?php echo $allcases; ?>
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