<?php 
include_once("Model/mainDAO.php");
include_once("Views/header.php");
include_once("Views/footer.php");
include_once("Views/search.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php  echo $index_text1;?></title>
<meta name="keywords" content="<?php  echo $index_text2;?>">
<meta name="description" content="<?php  echo $index_text3;?>">
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


<?php echo $nav; ?>
<!-- Header -->
<header id="header">
  <div id="home-slider">
      <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php echo $sliders;?>
          </div>
          <!-- Add Pagination -->
          <!-- <div class="swiper-pagination"></div> -->
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
      </div>
  </div>
</header>
 <?php if($count_products >= 1 ) { ?>
<!-- Products Section -->
<div id="products">
  <div class="container">
    <div class="section-title text-center center">
      <h2><?php  echo $index_text4; ?></h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active filter_all">All</a></li>
            <?php //echo $first_category; //for if there's not an "all" button?>
            <?php echo $category;?>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">

        <?php //echo $client_icons_first_categories;?>
        <?php echo $client_icons_one;?>
        <?php //echo $client_icons;?>
      </div>
    </div>
  </div>
</div>

<?php } ?>

<?php if($count_solutions >= 1 ) { ?>

<?php /*
<!-- Technology Section -->
<div id="solutions">
  <div class="over_cover">
    <!-- <div id="particles-js""></div> style="/*background:#263238; -->
  </div>  

  <div class="container">
    <div class="section-title text-center center" style="padding: 20px 0 40px 0;">
      <h2 style="z-index: 2!important"><?php  echo $index_text5;?></h2>
      <hr>
    </div>
    <div class="row all-solutions">
    <ul class="grid">
      <?php echo $main_index_all_solutions;?>
      </ul>
    </div>
  </div>  
</div>


*/ ?>


<div id="technology">
  <div class="container">
    <div class="section-title text-center center">
      <h2><?php  echo $index_text5; ?></h2>
      <hr>
    </div>
    <div class="categories">
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="">
        <?php echo $main_index_all_solutions;?>
      </div>
    </div>
  </div>
</div>


<?php } ?>

<?php if($count_cases >= 1 ) { ?>
<!-- Case Study Section -->
<div id="case_study" ><!-- class="parallax-window" data-parallax="scroll" data-image-src="/themes/greentheme/views/site/Assets/img/intro-bg.jpg" -->
  <div class="container">
    <div class="section-title text-center center">
      <h2 style="/*color: #4e97de;*/"><?php  echo $index_text6;?></h2>
      <hr>
    </div>

    <div class="row">
      <div class="grid">
        <?php echo $main_index_case_studies;?>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<?php 
  echo $footer;
  echo $scripts;
?>

<script type="text/javascript">
	<?php //echo $multiple_categories_script; ?>

	<?php //echo $recap_first_categories_script;?>
//$('.index_products').hide();
//$('.index_products').css('height', '0');
		var category_names_one = $('.filter_first').attr("data-filter");
		var category_classes_one = category_names_one.substring(1, category_names_one.length);
		var category_names_all = $('.filter_categories').attr("data-filter");
		var category_classes_all = category_names_all.substring(1, category_names_all.length);
		//alert(category_classes_one);
    //alert(category_classes_all);

//alert(category_names_all);

// if($('.index_products').hasClass('color-6')){
//   $('.color-6').hide();
// }

// if($('.index_products').hasClass(category_classes_one)){
//   $('.'+category_classes_one).hide();
//   $('.'+category_classes_one).css('height', '0');
//   $('.'+category_classes_one).css('width', '0');
// }

		// 	$('.index_products').show();

		// if ($('.index_products').hasClass(category_classes_one) ) {
		// 	$('.index_products .'+category_classes_one).css('display', 'block');
		// 	$('.index_products .'+category_classes_one).css('height', 'auto');
  //     //alert('.'+category_classes_one+' .index_products');
  //     //alert(this.length);
  //     alert($('.index_products .'+category_classes_one));


		// 	//$(this).show();
		// 	//alert(category_classes_one);
		// 	//alert(category_classes_all);
		// 	//category_classes_one.show();
		// 	//category_classes_all.hide();
		// 	//var first_again = $('.index_products').hasClass(category_classes_one);
		// 	//alert(first_again.length);
		// 	//alert(category_classes_one.length);
		// }


$('.filter_categories').click (function(event) {
	if ($('.filter_categories').hasClass('active') ) {
		//console.log($(this).text());
		//alert($(this).text());
		var category_names = $(this).attr("data-filter");
		var category_classes = category_names.substring(1, category_names.length);
		if ($('.index_products').hasClass(category_classes)) {
			$('.index_products').show();
		}
	}
});
  
</script>
</body>
</html>