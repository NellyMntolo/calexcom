<?php
error_reporting(0);
include('../Model/dbconfig.php');
include('Model/dbconfig.php');
mysql_set_charset("utf8");

session_start();

//session_start();
//header('Cache-control: private'); // IE 6 FIX
 
 $lang = '';

$sqlget_default = 'select * from lang where default_lang is not null limit 1';
$retvalget_default = mysql_query( $sqlget_default, $conn );                 
      if(! $retvalget_default )
      {
        die('Could not get data: ' . mysql_error());
      }

$rowget_default = mysql_fetch_array($retvalget_default, MYSQL_ASSOC);
$default_lang = $rowget_default['default_lang'];

if (!isset($_SESSION['lang']) ) {
        $_SESSION['lang'] = $default_lang;
        setcookie('lang', $default_lang, time() + (3600 * 24 * 30));
   }

if(isSet($_GET['lang'])) {
$lang = $_GET['lang'];               


// register the session and set the cookie
$_SESSION['lang'] = $lang;
 
setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = $default_lang;
}

$sqlget_lang = 'select * from lang where code = "'.$lang.'" limit 1';
$retvalget_lang = mysql_query( $sqlget_lang, $conn );                 
      if(! $retvalget_lang )
      {
        die('Could not get data: ' . mysql_error());
      }

$rowget_lang = mysql_fetch_array($retvalget_lang, MYSQL_ASSOC);
$lang_result = $rowget_lang['name']; 
$code_result = $rowget_lang['code']; 


/* 
switch ($lang) {
  case $lang_result:
  $lang_file = 'lang.en.php';
  break;
 
  case 'zh':
  $lang_file = 'lang.zh.php';
  break;
 
  default:
  $lang_file = 'lang.zh.php';
 
}
 
include_once ''.$lang_file;
*/

                        $active_languages = 'yes';
                        $active_language = '';
                        $sqlactive_language = 'select * from lang WHERE active_lang = "'.$active_languages.'" and code != "'.$code_result.'" ';
                            $retvalactive_language = mysql_query( $sqlactive_language, $conn );                 
                                 if(! $retvalactive_language )
                                 {
                                    die('Could not get data: ' . mysql_error());
                                 }

                            while($rowactive_language = mysql_fetch_array($retvalactive_language, MYSQL_ASSOC)){
                            $new_code = $rowactive_language['code']; 
                            $new_name = $rowactive_language['name'];  
                            //$active_language .= '<li><form method="GET" action="?'.$new_code.'"><button type="submit" class="lang-btn">'.$new_name.'</button><input type="hidden" value="'.$new_code.'" name="lang"></form></li>'; 
                            $active_language .= '<li><a href="?lang='.$new_code.'" class="lang-btn">'.$new_name.'</a></li>'; 

                               } 

                        $active_languages_footer = 'yes';
                        $active_language_footer = '';
                        $sqlactive_language_footer = 'select * from lang WHERE active_lang = "'.$active_languages_footer.'" ';
                            $retvalactive_language_footer = mysql_query( $sqlactive_language_footer, $conn );                 
                                 if(! $retvalactive_language_footer )
                                 {
                                    die('Could not get data: ' . mysql_error());
                                 }

                            while($rowactive_language_footer = mysql_fetch_array($retvalactive_language_footer, MYSQL_ASSOC)){
                            $new_code_footer = $rowactive_language_footer['code']; 
                            $new_name_footer = $rowactive_language_footer['name'];  
                            $active_language_footer .= '<option name="lang" value="'.$new_code_footer.'">'.$new_name_footer.'</option>'; 
                               } 


                        $active_language_solutions = 'yes';
                        $active_language_solution = '';
                        $sqlactive_language_solution = 'select * from lang WHERE active_lang = "'.$active_language_solutions.'" ';
                            $retvalactive_language_solution = mysql_query( $sqlactive_language_solution, $conn );                 
                                 if(! $retvalactive_language_solution )
                                 {
                                    die('Could not get data: ' . mysql_error());
                                 }

                            while($rowactive_language_solution = mysql_fetch_array($retvalactive_language_solution, MYSQL_ASSOC)){
                            $new_code = $rowactive_language_solution['code']; 
                            $new_name = $rowactive_language_solution['name'];  
                            $active_language_solution .= '<form action="/Solutions/Translate/" method="POST"><button type="submit" name="lang" value="'.$new_code.'" class="lang-nav lang-btn">'.$new_name.'</button><input type="hidden" name="the_id" class="the_id"></form>'; 
                               }

                        $active_language_products = 'yes';
                        $active_language_product = '';
                        $sqlactive_language_product = 'select * from lang WHERE active_lang = "'.$active_language_products.'" ';
                            $retvalactive_language_product = mysql_query( $sqlactive_language_product, $conn );                 
                                 if(! $retvalactive_language_product )
                                 {
                                    die('Could not get data: ' . mysql_error());
                                 }

                            while($rowactive_language_product = mysql_fetch_array($retvalactive_language_product, MYSQL_ASSOC)){
                            $new_code = $rowactive_language_product['code']; 
                            $new_name = $rowactive_language_product['name'];  
                            $active_language_product .= '<form action="/Products/Translate/" method="POST"><button type="submit" name="lang" value="'.$new_code.'" class="lang-nav lang-btn">'.$new_name.'</button><input type="hidden" name="the_id" class="the_id"></form>'; 
                               }


                        $active_language_casestudys = 'yes';
                        $active_language_casestudy = '';
                        $sqlactive_language_casestudy = 'select * from lang WHERE active_lang = "'.$active_language_casestudys.'" ';
                            $retvalactive_language_casestudy = mysql_query( $sqlactive_language_casestudy, $conn );                 
                                 if(! $retvalactive_language_casestudy )
                                 {
                                    die('Could not get data: ' . mysql_error());
                                 }

                            while($rowactive_language_casestudy = mysql_fetch_array($retvalactive_language_casestudy, MYSQL_ASSOC)){
                            $new_code = $rowactive_language_casestudy['code']; 
                            $new_name = $rowactive_language_casestudy['name'];  
                            $active_language_casestudy .= '<form action="/Case_Studies/Translate/" method="POST"><button type="submit" name="lang" value="'.$new_code.'" class="lang-nav lang-btn">'.$new_name.'</button><input type="hidden" name="the_id" class="the_id"></form>'; 
                               }

                        $active_language_newss = 'yes';
                        $active_language_news = '';
                        $sqlactive_language_news = 'select * from lang WHERE active_lang = "'.$active_language_newss.'" ';
                            $retvalactive_language_news = mysql_query( $sqlactive_language_news, $conn );                 
                                 if(! $retvalactive_language_news )
                                 {
                                    die('Could not get data: ' . mysql_error());
                                 }

                            while($rowactive_language_news = mysql_fetch_array($retvalactive_language_news, MYSQL_ASSOC)){
                            $new_code = $rowactive_language_news['code']; 
                            $new_name = $rowactive_language_news['name'];  
                            $active_language_news .= '<form action="/News/Translate/" method="POST"><button type="submit" name="lang" value="'.$new_code.'" class="lang-nav lang-btn">'.$new_name.'</button><input type="hidden" name="the_id" class="the_id"></form>'; 
                               }
                               
                            $sql_google_analytics = 'select * from google_stuff ';
                            $retval_google_analytics = mysql_query( $sql_google_analytics, $conn );                 
                                 if(! $retval_google_analytics )
                                 {
                                    die('Could not get data: ' . mysql_error());
                                 }

                            $row_google_analytics = mysql_fetch_array($retval_google_analytics, MYSQL_ASSOC);
                            $google_analytics = $row_google_analytics['google_analytics']; 

$favs = '
<!-- Favicons ================================================== -->
<link rel="apple-touch-icon" href="/themes/greentheme/views/site/Assets/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="/themes/greentheme/views/site/Assets/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="/themes/greentheme/views/site/Assets/img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="/themes/greentheme/views/site/Assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/themes/greentheme/views/site/Assets/fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="/themes/greentheme/views/site/Assets/css/swiper.css">
<link rel="stylesheet" type="text/css" href="/themes/greentheme/views/site/Assets/css/animsition.min.css">
<link rel="stylesheet" type="text/css" href="/themes/greentheme/views/site/Assets/css/animate.css">

<!-- Stylesheet ================================================== -->
<link rel="stylesheet" type="text/css"  href="/themes/greentheme/views/site/Assets/css/style.css">
<link rel="stylesheet" type="text/css" href="/themes/greentheme/views/site/Assets/css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="/themes/greentheme/views/site/Assets/css/nivo-lightbox/default.css">
<!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display:400,400i,700,700i" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">

<!-- Favicons ================================================== -->
<link rel="apple-touch-icon" sizes="57x57" href="/themes/greentheme/views/site/Assets/favs/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/themes/greentheme/views/site/Assets/favs/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/themes/greentheme/views/site/Assets/favs/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/themes/greentheme/views/site/Assets/favs/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/themes/greentheme/views/site/Assets/favs/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/themes/greentheme/views/site/Assets/favs/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/themes/greentheme/views/site/Assets/favs/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/themes/greentheme/views/site/Assets/favs/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/themes/greentheme/views/site/Assets/favs/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/themes/greentheme/views/site/Assets/favs/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/themes/greentheme/views/site/Assets/favs/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/themes/greentheme/views/site/Assets/favs/favicon-16x16.png">
<link rel="manifest" href="/themes/greentheme/views/site/Assets/favs/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/themes/greentheme/views/site/Assets/favs/ms-icon-144x144.png">
<!-- <meta name="theme-color" content="#ffffff"> -->

<!-- Open Search ================================================== -->
<link rel="search" type="application/opensearchdescription+xml" title="CalexCom" href="/opensearch.xml" />

<!-- Android Theme ======================================= -->
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#2465a5">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#2465a5">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#2465a5">
<!-- allow full screen apple devices -->
<meta name="apple-mobile-web-app-capable" content="yes">

'.$google_analytics.' ';

$scripts = '
<script type="text/javascript" src="/themes/greentheme/views/site/Assets/js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="/themes/greentheme/views/site/Assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/themes/greentheme/views/site/Assets/js/SmoothScroll.js"></script>
<script type="text/javascript" src="/themes/greentheme/views/site/Assets/js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="/themes/greentheme/views/site/Assets/js/jquery.isotope.js"></script> 
<script type="text/javascript" src="/themes/greentheme/views/site/Assets/js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="/themes/greentheme/views/site/Assets/js/contact_me.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3"></script> -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCipS5es07ow3kYtB8z4DahmPTMwAFsvD8"></script>
<script src="/themes/greentheme/views/site/Assets/js/snazzy-info-window.min.js"></script>
<script src="/themes/greentheme/views/site/Assets/js/maps.js"></script>
<script src="/themes/greentheme/views/site/Assets/js/swiper.min.js"></script>
<script src="/themes/greentheme/views/site/Assets/js/animsition.min.js"></script>
<script src="/themes/greentheme/views/site/Assets/js/parallax.js"></script>
<script src="/themes/greentheme/views/site/Assets/js/typed.js"></script>
<!--<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>-->
<script type="text/javascript" src="/themes/greentheme/views/site/Assets/js/main.js"></script>


<script type="text/javascript">
var mylang = "'.$lang.'";

    if( mylang != "en") {
        $("#menu.navbar-default .navbar-nav > li > a").css("font-size", "18px");
        //console.log("not english language");
    }



/*
function updateMetaThemeColor(theme) {
    var themeColor;
    if(theme == "theme-1") {
        themeColor = "#f4dcdc"
    } else if(theme == "theme-2") {
        themeColor = "#f0e8dd";
    } else if(theme == "theme-3") {
        themeColor = "#d5e7f0";
    } else if(theme == "theme-4") {
        themeColor = "#f6efb9";
    } else if(theme == "theme-5") {
        themeColor = "#eaeae8";
    } else if(theme == "theme-6") {
        themeColor = "#f8e3c7";
    } else if(theme == "theme-7") {
        themeColor = "#cde8e8";
    }

    //remove the current meta
    $("meta[name=theme-color]"").remove();
    //add the new one
    $("head").append(\'<meta name="theme-color" content="\'+themeColor+\'">\');
}
*/

</script>


';

?>