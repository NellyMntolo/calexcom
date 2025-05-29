<?php
include '../Model/dbconfig.php';
mysql_set_charset("utf8");
session_start();

$current_lang = $_SESSION['lang'];
if(isset($_POST['page_submit'])){

  $entext1 = mysql_real_escape_string($_POST['content_entext1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['content_entext2'],$conn);
  $entext3 = mysql_real_escape_string($_POST['content_entext3'],$conn);
  $entext4 = mysql_real_escape_string($_POST['content_entext4'],$conn);
  $entext5 = mysql_real_escape_string($_POST['content_entext5'],$conn);
  $entext6 = mysql_real_escape_string($_POST['content_entext6'],$conn);
  $entext7 = mysql_real_escape_string($_POST['content_entext7'],$conn);
  $entext8 = mysql_real_escape_string($_POST['content_entext8'],$conn);
  // $entext9 = mysql_real_escape_string($_POST['content_entext9'],$conn);
  // $entext10 = mysql_real_escape_string($_POST['content_entext10'],$conn);
  // $entext11 = mysql_real_escape_string($_POST['content_entext11'],$conn);
  // $entext12 = mysql_real_escape_string($_POST['content_entext12'],$conn);
  // $entext13 = mysql_real_escape_string($_POST['content_entext13'],$conn);
  // $entext14 = mysql_real_escape_string($_POST['content_entext14'],$conn);
  // $entext15 = mysql_real_escape_string($_POST['content_entext15'],$conn);
  // $entext16 = mysql_real_escape_string($_POST['content_entext16'],$conn);
  // $entext17 = mysql_real_escape_string($_POST['content_entext17'],$conn);
  // $entext18 = mysql_real_escape_string($_POST['content_entext18'],$conn);
  // $entext19 = mysql_real_escape_string($_POST['content_entext19'],$conn);
  // $entext20 = mysql_real_escape_string($_POST['content_entext20'],$conn);
  // $entext21 = mysql_real_escape_string($_POST['content_entext21'],$conn);
  // $entext22 = mysql_real_escape_string($_POST['content_entext22'],$conn);
  // $entext23 = mysql_real_escape_string($_POST['content_entext23'],$conn);

// , text6='".$entext6."', text7='".$entext7."', text8='".$entext8."', text9='".$entext9."', text10='".$entext10."', text11='".$entext11."', text12='".$entext12."', text13='".$entext13."', text14='".$entext14."', text15='".$entext15."', text16='".$entext16."', text17='".$entext17."', text18='".$entext18."', text19='".$entext19."', text20='".$entext20."', text21='".$entext21."', text22='".$entext22."', text23='".$entext23."'

 $sql="UPDATE hovvver_menu SET text1='".$entext1."', text2='".$entext2."', text3='".$entext3."', text4='".$entext4."', text5='".$entext5."', text6='".$entext6."', text7='".$entext7."', text8='".$entext8."' where code ='".$current_lang."'";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

                       header("Refresh:0; url=/Admin/Menu");
                       //header('Location: ' . $_SERVER['HTTP_REFERER']);
}


?>