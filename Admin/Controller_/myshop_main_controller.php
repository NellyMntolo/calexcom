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
  $entext7 = mysql_real_escape_string($_POST['content_entext4'],$conn);
  $entext8 = mysql_real_escape_string($_POST['content_entext5'],$conn);
  $entext9 = mysql_real_escape_string($_POST['content_entext6'],$conn);
  $entext10 = mysql_real_escape_string($_POST['content_entext7'],$conn);
  $entext11 = mysql_real_escape_string($_POST['content_entext8'],$conn);
  $entext12 = mysql_real_escape_string($_POST['content_entext9'],$conn);
  $entext13 = mysql_real_escape_string($_POST['content_entext10'],$conn);
  $entext14 = mysql_real_escape_string($_POST['content_entext11'],$conn);
  $entext15 = mysql_real_escape_string($_POST['content_entext12'],$conn);
  $entext16 = mysql_real_escape_string($_POST['content_entext13'],$conn);

  $image1 = $_FILES['index_image1']['name'];
  $image2 = $_FILES['index_image2']['name'];
  $image3 = $_FILES['index_image3']['name'];
  // $image4 = $_FILES['index_image4']['name'];
  // $image5 = $_FILES['index_image5']['name'];


 $sql="UPDATE myshop_index SET text1='".$entext1."', text2='".$entext2."', text3='".$entext3."', text4='".$entext4."', text5='".$entext5."', text6='".$entext6."', text7='".$entext7."', text8='".$entext8."', text9='".$entext9."', text10='".$entext10."', text11='".$entext11."', text12='".$entext12."', text13='".$entext13."', text14='".$entext14."', text15='".$entext15."', text16='".$entext16."' where code ='".$current_lang."' ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

    if($image1 != null) {
      $file_tmp1 =$_FILES['index_image1']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image1);
      $filename = "/uploads/".$image1;
      $sql1="UPDATE myshop_index SET image1='".$filename."' ";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

    if($image2 != null) {
      $file_tmp2 =$_FILES['index_image2']['tmp_name'];
      move_uploaded_file($file_tmp2, getcwd()."/../../../../../../uploads/".$image2);
      $filename = "/uploads/".$image2;
      $sql2="UPDATE myshop_index SET image2='".$filename."' ";
      $retval2 = mysql_query( $sql2, $conn );
                   if(! $retval2 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }


    if($image3 != null) {
      $file_tmp3 =$_FILES['index_image3']['tmp_name'];
      move_uploaded_file($file_tmp3, getcwd()."/../../../../../../uploads/".$image3);
      $filename = "/uploads/".$image3;
      $sql3="UPDATE myshop_index SET image3='".$filename."' ";
      $retval3 = mysql_query( $sql3, $conn );
                   if(! $retval3 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }


    // if($image4 != null) {
    //   $file_tmp4 =$_FILES['index_image4']['tmp_name'];
    //   move_uploaded_file($file_tmp4, getcwd()."/../../../../../../uploads/".$image4);
    //   $filename = "/uploads/".$image4;
    //   $sql4="UPDATE myshop_index SET image4='".$filename."' where code ='".$current_lang."' ";
    //   $retval4 = mysql_query( $sql4, $conn );
    //                if(! $retval4 )
    //                    {
    //                       die('Could not enter image: ' . mysql_error());
    //                    }
    // }


    // if($image5 != null) {
    //   $file_tmp5 =$_FILES['index_image5']['tmp_name'];
    //   move_uploaded_file($file_tmp5, getcwd()."/../../../../../../uploads/".$image5);
    //   $filename = "/uploads/".$image5;
    //   $sql5="UPDATE myshop_index SET image5='".$filename."' where code ='".$current_lang."' ";
    //   $retval5 = mysql_query( $sql5, $conn );
    //                if(! $retval5 )
    //                    {
    //                       die('Could not enter image: ' . mysql_error());
    //                    }
    // }


    header("Refresh:0; url=/Admin/myShop/Main");
    
}



if(isset($_POST['add_first_slider'])){


  $entext1 = mysql_real_escape_string($_POST['location_entext1'],$conn);
  //$entext2 = mysql_real_escape_string($_POST['location_entext2'],$conn);
  // $entext3 = mysql_real_escape_string($_POST['location_entext3'],$conn);
  // $entext4 = mysql_real_escape_string($_POST['location_entext4'],$conn);

  $image1 = $_FILES['location_image1']['name'];
  $uploaded_image1 = '';

  if($image1 != null) {
    $file_tmp =$_FILES['location_image1']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image1);
    $uploaded_image1 = "/uploads/".$image1;
  }

// "'.$entext2.'", text2,
  $sqla = 'INSERT INTO myshop_index_slider (text1, image1) VALUES ( "'.$entext1.'", "'.$uploaded_image1.'")';

  $retvala = mysql_query( $sqla, $conn );
    if(! $retvala ) {  
        die('Could not enter data: ' . mysql_error());
      }

      header("Refresh:0; url=/Admin/myShop/Main/");
  }

  if(isset($_POST['edit_first_slider'])){
  $locationid = mysql_real_escape_string($_POST['first_slider_id'],$conn);

  $entext1 = mysql_real_escape_string($_POST['location_entext1'],$conn);
  //$entext2 = mysql_real_escape_string($_POST['location_entext2'],$conn);
  // $entext3 = mysql_real_escape_string($_POST['location_entext3'],$conn);
  // $entext4 = mysql_real_escape_string($_POST['location_entext4'],$conn);
  $image1 = $_FILES['location_image1']['name'];
//, text2='".$entext2."'
 $sql="UPDATE myshop_index_slider SET text1='".$entext1."' WHERE idx = '".$locationid."' LIMIT 1 ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

  if($image1 != null) {
      $file_tmp1 =$_FILES['location_image1']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image1);
      $filename = "/uploads/".$image1;
      $sql1="UPDATE myshop_index_slider SET image1='".$filename."' WHERE idx ='".$locationid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }
                       header("Refresh:0; url=/Admin/myShop/Main/");
}


  if(isset($_POST['delete_first_slider'])){
  $locationid = mysql_real_escape_string($_POST['first_slider_id'],$conn);

        $sqlin = 'DELETE FROM myshop_index_slider WHERE idx ="'.$locationid.'" LIMIT 1';
                 $retvalin = mysql_query( $sqlin, $conn );
                   if(! $retvalin )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       


        $sqlreseten1 = "ALTER TABLE myshop_index_slider DROP idx; ";
        $sqlreseten2 = "ALTER TABLE myshop_index_slider AUTO_INCREMENT = 1; ";
        $sqlreseten3 = "ALTER TABLE myshop_index_slider ADD idx int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST; ";

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

                       header("Refresh:0; url=/Admin/myShop/Main/");

}

?>