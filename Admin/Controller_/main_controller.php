<?php
include '../Model/dbconfig.php';
mysql_set_charset("utf8");
session_start();
$current_lang = $_SESSION['lang'];

if(isset($_POST['page_submit'])){

	$entext1 = mysql_real_escape_string($_POST['general_entext1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['general_entext2'],$conn);
  $entext3 = mysql_real_escape_string($_POST['general_entext3'],$conn);

  $entext4 = mysql_real_escape_string($_POST['content_entext1'],$conn);
  $entext5 = mysql_real_escape_string($_POST['content_entext2'],$conn);
  $entext6 = mysql_real_escape_string($_POST['content_entext3'],$conn);
  // $entext7 = mysql_real_escape_string($_POST['content_entext9'],$conn);
  // $entext8 = mysql_real_escape_string($_POST['content_entext10'],$conn);
  // $entext9 = mysql_real_escape_string($_POST['content_entext11'],$conn);
  // $entext10 = mysql_real_escape_string($_POST['content_entext12'],$conn);
  // $entext11 = mysql_real_escape_string($_POST['content_entext13'],$conn);
  // $entext12 = mysql_real_escape_string($_POST['content_entext14'],$conn);
  // $entext13 = mysql_real_escape_string($_POST['content_entext15'],$conn);
  // $entext14 = mysql_real_escape_string($_POST['content_entext16'],$conn);


 $sql="UPDATE hovvver_index SET text1='".$entext1."', text2='".$entext2."', text3='".$entext3."', text4='".$entext4."', text5='".$entext5."', text6='".$entext6."' where code ='".$current_lang."' ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }


    header("Refresh:0; url=/Admin/Main");
    
}



if(isset($_POST['add_first_slider'])){


  $entext1 = mysql_real_escape_string($_POST['location_entext1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['location_entext2'],$conn);
  // $entext3 = mysql_real_escape_string($_POST['location_entext3'],$conn);
  // $entext4 = mysql_real_escape_string($_POST['location_entext4'],$conn);

  $image1 = $_FILES['location_image1']['name'];
  $uploaded_image1 = '';

  if($image1 != null) {
    $file_tmp =$_FILES['location_image1']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image1);
    $uploaded_image1 = "/uploads/".$image1;
  }


  $sqla = 'INSERT INTO index_first_slider (text1, text2, image1) VALUES ( "'.$entext1.'", "'.$entext2.'", "'.$uploaded_image1.'")';

  $retvala = mysql_query( $sqla, $conn );
    if(! $retvala ) {  
        die('Could not enter data: ' . mysql_error());
      }

      header("Refresh:0; url=/Admin/Main/");
  }

  if(isset($_POST['edit_first_slider'])){
  $locationid = mysql_real_escape_string($_POST['first_slider_id'],$conn);

  $entext1 = mysql_real_escape_string($_POST['location_entext1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['location_entext2'],$conn);
  // $entext3 = mysql_real_escape_string($_POST['location_entext3'],$conn);
  // $entext4 = mysql_real_escape_string($_POST['location_entext4'],$conn);
  $image1 = $_FILES['location_image1']['name'];

 $sql="UPDATE index_first_slider SET text1='".$entext1."', text2='".$entext2."' WHERE idx = '".$locationid."' LIMIT 1 ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

  if($image1 != null) {
      $file_tmp1 =$_FILES['location_image1']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image1);
      $filename = "/uploads/".$image1;
      $sql1="UPDATE index_first_slider SET image1='".$filename."' WHERE idx ='".$locationid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }
                       header("Refresh:0; url=/Admin/Main/");
}


  if(isset($_POST['delete_first_slider'])){
  $locationid = mysql_real_escape_string($_POST['first_slider_id'],$conn);

        $sqlin = 'DELETE FROM index_first_slider WHERE idx ="'.$locationid.'" LIMIT 1';
                 $retvalin = mysql_query( $sqlin, $conn );
                   if(! $retvalin )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       


        $sqlreseten1 = "ALTER TABLE index_first_slider DROP idx; ";
        $sqlreseten2 = "ALTER TABLE index_first_slider AUTO_INCREMENT = 1; ";
        $sqlreseten3 = "ALTER TABLE index_first_slider ADD idx int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST; ";

        $retvalreseten1 = mysql_query( $sqlreseten1, $conn );
        $retvalreseten2 = mysql_query( $sqlreseten2, $conn );
        $retvalreseten3 = mysql_query( $sqlreseten3, $conn );
                  if(! $retvalreseten1 )
                       {
                          die('Could not alter english data: ' . mysql_error());
                       }

                       if(! $retvalreseten2 )
                       {
                          die('Could not alter english data: ' . mysql_error());
                       }

                       if(! $retvalreseten3 )
                       {
                          die('Could not alter english data: ' . mysql_error());
                       }

                       header("Refresh:0; url=/Admin/Main/");

}

?>