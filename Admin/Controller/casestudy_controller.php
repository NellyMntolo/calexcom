<?php
include '../Model/dbconfig.php';
mysql_set_charset("utf8");
session_start();
$current_lang = $_SESSION['lang'];


// Categories
if(isset($_POST['category_test'])){
    $project_id = mysql_real_escape_string($_POST['project_id'],$conn);
    $selected_option = mysql_real_escape_string($_POST['selected_option'],$conn);
    $selected_category = mysql_real_escape_string($_POST['selected_category'],$conn); 


    $sqlcatzh = 'SELECT * FROM hovvver_categories WHERE text1 = "'.$selected_category.'" ';
     
     $retvalcatzh = mysql_query( $sqlcatzh, $conn );     
     if(! $retvalcatzh )
     {
        die('Could not get data: ' . mysql_error());
     }
     $rowcatzh = mysql_fetch_array($retvalcatzh, MYSQL_ASSOC);
     $zhcategory =$rowcatzh['text2'];


    $sqlb = 'SELECT * FROM hovvver_project WHERE idx = "'.$project_id.'" ';
     
     $retvalb = mysql_query( $sqlb, $conn );     
     if(! $retvalb )
     {
        die('Could not get data: ' . mysql_error());
     }
      //temporary fix
      $row1 = mysql_fetch_array($retvalb, MYSQL_ASSOC);
      $themisc =$row1['idx'];
    
if ($selected_option == "0") {

    $sql_check_existing="SELECT * FROM hovvver_category_list WHERE text1='".$themisc."' and text2='".$selected_category."' and code='".$current_lang."' ";     
      $result_check_existing=mysql_query($sql_check_existing, $conn);
      
      $count_check_existing=mysql_num_rows($result_check_existing);

            $sqlb_in = 'INSERT INTO hovvver_category_list (code,text1, text2) VALUES ( "'.$current_lang.'", "'.$themisc.'", "'.$selected_category.'")';

            $retvalb_in = mysql_query( $sqlb_in, $conn );
              if(! $retvalb_in ) {  
                  die('Could not enter data: ' . mysql_error());
                }

                header('Location: ' . $_SERVER['HTTP_REFERER']);
    
}

   else {

    $sqlin = 'DELETE FROM hovvver_category_list WHERE text1 ="'.$themisc.'" and text2 ="'.$selected_category.'" AND code="'.$current_lang.'" LIMIT 1';
                 $retvalin = mysql_query( $sqlin, $conn );
                   if(! $retvalin )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }


        $sqlreseten1 = "ALTER TABLE hovvver_category_list DROP idx; ";
        $sqlreseten2 = "ALTER TABLE hovvver_category_list AUTO_INCREMENT = 1; ";
        $sqlreseten3 = "ALTER TABLE hovvver_category_list ADD idx int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST; ";

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

                       header('Location: ' . $_SERVER['HTTP_REFERER']);

}

}
// Categories




if(isset($_POST['delete_image1'])){
  $caseid = mysql_real_escape_string($_POST['case_id'],$conn);

  $sql="UPDATE hovvver_project SET image1= Null WHERE idx='".$caseid."' LIMIT 1 ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
  $sqlzh="UPDATE green_project_zh SET image1= NULL WHERE idx='".$caseid."' LIMIT 1 ";              
                   $retvalzh = mysql_query( $sqlzh, $conn );
                   if(! $retvalzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
  }

  

if(isset($_POST['create_project_submit'])){
  $miscid = mysql_real_escape_string($_POST['misc_id'],$conn);

  $max = 'SELECT sortable_order FROM hovvver_project WHERE code="'.$current_lang.'" ORDER BY sortable_order DESC';
  $retvalmaxen = mysql_query( $max, $conn );                 
                             if(! $retvalmaxen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
  $rowmaxen = mysql_fetch_array($retvalmaxen, MYSQL_ASSOC);
  $large = $rowmaxen['sortable_order'];
  //echo $large;

  $max_misc = 'SELECT misc_id FROM hovvver_project WHERE code="'.$current_lang.'" ORDER BY misc_id DESC';
  $retvalmax_miscen = mysql_query( $max_misc, $conn );                 
                             if(! $retvalmax_miscen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
  $rowmax_miscen = mysql_fetch_array($retvalmax_miscen, MYSQL_ASSOC);
  $large_misc = $rowmax_miscen['misc_id'];


  $themisc = '';
  if($miscid != null){
      $themisc = $miscid;
  } else {
    $themisc = $large_misc+1;
  }

  $entext1 = mysql_real_escape_string($_POST['general_entext1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['general_entext2'],$conn);
  $entext3 = mysql_real_escape_string($_POST['general_entext3'],$conn);

  $entext4 = mysql_real_escape_string($_POST['content_entext1'],$conn);
  $entext5 = mysql_real_escape_string($_POST['content_entext2'],$conn);
  $entext6 = mysql_real_escape_string($_POST['content_entext3'],$conn);
  // $entext7 = mysql_real_escape_string($_POST['content_entext4'],$conn);
  // $entext8 = mysql_real_escape_string($_POST['content_entext5'],$conn);
  // $entext9 = mysql_real_escape_string($_POST['content_entext6'],$conn);
  // $entext10 = mysql_real_escape_string($_POST['content_entext7'],$conn);
  // $entext11 = mysql_real_escape_string($_POST['content_entext8'],$conn);
  // $entext12 = mysql_real_escape_string($_POST['content_entext9'],$conn);
  // $entext13 = mysql_real_escape_string($_POST['content_entext10'],$conn);
  // $entext14 = mysql_real_escape_string($_POST['content_entext11'],$conn);
  // $entext15 = mysql_real_escape_string($_POST['content_entext12'],$conn);
  // $entext16 = mysql_real_escape_string($_POST['content_entext13'],$conn);
  // $entext17 = mysql_real_escape_string($_POST['content_entext14'],$conn);
  // $entext18 = mysql_real_escape_string($_POST['content_entext15'],$conn);

  $image1 = $_FILES['case_image1']['name'];
  $image2 = $_FILES['case_image2']['name'];
  $image3 = $_FILES['case_image3']['name'];
  $uploaded_image1 = '';
  $uploaded_image2 = '';
  $uploaded_image3 = '';

  if($image1 != null) {
    $file_tmp =$_FILES['case_image1']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image1);
    $uploaded_image1 = "/uploads/".$image1;
  }

  if($image2 != null) {
    $file_tmp =$_FILES['case_image2']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image2);
    $uploaded_image2 = "/uploads/".$image2;
  }

  if($image3 != null) {
    $file_tmp =$_FILES['case_image3']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image3);
    $uploaded_image3 = "/uploads/".$image3;
  }

$vowels = array(" ", "&", "?", "/");
$enurl = str_replace($vowels, '_', $entext4);
  $sqla = 'INSERT INTO hovvver_project (code,text1, text2, text3, text4, text5, text6, image1, image2, image3, sortable_order, url, misc_id) VALUES ( "'.$current_lang.'", "'.$entext1.'", "'.$entext2.'", "'.$entext3.'", "'.$entext4.'", "'.$entext5.'", "'.$entext6.'", "'.$uploaded_image1.'", "'.$uploaded_image2.'", "'.$uploaded_image3.'", "'.$large.'"+1, "'.$enurl.'", "'.$themisc.'")';

  $retvala = mysql_query( $sqla, $conn );
    if(! $retvala ) {  
        die('Could not enter data: ' . mysql_error());
      }
      
      header("Refresh:0; url=/Admin/ViewAllCaseStudies");

}


if(isset($_POST['edit_project_submit'])){

  $caseid = mysql_real_escape_string($_POST['case_id'],$conn);
  $a = mysql_real_escape_string($_POST['a'],$conn);

	$entext1 = mysql_real_escape_string($_POST['general_entext1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['general_entext2'],$conn);
  $entext3 = mysql_real_escape_string($_POST['general_entext3'],$conn);

  $entext4 = mysql_real_escape_string($_POST['content_entext1'],$conn);
  $entext5 = mysql_real_escape_string($_POST['content_entext2'],$conn);
  $entext6 = mysql_real_escape_string($_POST['content_entext3'],$conn);
  // $entext7 = mysql_real_escape_string($_POST['content_entext4'],$conn);
  // $entext8 = mysql_real_escape_string($_POST['content_entext5'],$conn);
  // $entext9 = mysql_real_escape_string($_POST['content_entext6'],$conn);
  // $entext10 = mysql_real_escape_string($_POST['content_entext7'],$conn);
  // $entext11 = mysql_real_escape_string($_POST['content_entext8'],$conn);
  // $entext12 = mysql_real_escape_string($_POST['content_entext9'],$conn);
  // $entext13 = mysql_real_escape_string($_POST['content_entext10'],$conn);
  // $entext14 = mysql_real_escape_string($_POST['content_entext11'],$conn);
  // $entext15 = mysql_real_escape_string($_POST['content_entext12'],$conn);
  // $entext16 = mysql_real_escape_string($_POST['content_entext13'],$conn);
  // $entext17 = mysql_real_escape_string($_POST['content_entext14'],$conn);
  // $entext18 = mysql_real_escape_string($_POST['content_entext15'],$conn);

	$image1 = $_FILES['case_image1']['name'];
  $image2 = $_FILES['case_image2']['name'];
  $image3 = $_FILES['case_image3']['name'];

$vowels = array(" ", "&", "?", "/");
$enurl = str_replace($vowels, '_', $entext4);

 $sql="UPDATE hovvver_project SET text1='".$entext1."', text2='".$entext2."', text3='".$entext3."', text4='".$entext4."', text5='".$entext5."', text6='".$entext6."', url='".$enurl."'  WHERE idx='".$caseid."' AND code='".$current_lang."' AND misc_id='".$a."' LIMIT 1 ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

    if($image1 != null) {
      $file_tmp1 =$_FILES['case_image1']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image1);
      $filename = "/uploads/".$image1;
      $sql1="UPDATE hovvver_project SET image1='".$filename."' WHERE idx ='".$caseid."'"; //WHERE idx ='".$caseid."'
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

    if($image2 != null) {
      $file_tmp2 =$_FILES['case_image2']['tmp_name'];
      move_uploaded_file($file_tmp2, getcwd()."/../../../../../../uploads/".$image2);
      $filename = "/uploads/".$image2;
      $sql2="UPDATE hovvver_project SET image2='".$filename."' WHERE idx ='".$caseid."' ";
      $retval2 = mysql_query( $sql2, $conn );
                   if(! $retval2 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

    if($image3 != null) {
      $file_tmp3 =$_FILES['case_image3']['tmp_name'];
      move_uploaded_file($file_tmp3, getcwd()."/../../../../../../uploads/".$image3);
      $filename = "/uploads/".$image3;
      $sql3="UPDATE hovvver_project SET image3='".$filename."' WHERE idx ='".$caseid."' ";
      $retval3 = mysql_query( $sql3, $conn );
                   if(! $retval3 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }


              header("Refresh:0; url=/Admin/ViewAllCaseStudies");
}


if(isset($_POST['delete_project_submit'])){
  $caseid = mysql_real_escape_string($_POST['case_id'],$conn);

  $strap = 'SELECT sortable_order FROM hovvver_project WHERE idx = "'.$caseid.'" AND code="'.$current_lang.'" LIMIT 1';
  $retvalstrapen = mysql_query( $strap, $conn );                 
                             if(! $retvalstrapen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
  $rowstrapen = mysql_fetch_array($retvalstrapen, MYSQL_ASSOC);
  $returnstrap = $rowstrapen['sortable_order'];

  $strap_misc = 'SELECT misc_id FROM hovvver_project WHERE idx = "'.$caseid.'" AND code="'.$current_lang.'" LIMIT 1';
  $retvalstrapen_misc = mysql_query( $strap_misc, $conn );                 
                             if(! $retvalstrapen_misc )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
  $rowstrapen_misc = mysql_fetch_array($retvalstrapen_misc, MYSQL_ASSOC);
  $returnstrap_misc = $rowstrapen_misc['misc_id'];



        $sqlin = 'DELETE FROM hovvver_project WHERE idx ="'.$caseid.'" AND code="'.$current_lang.'" LIMIT 1';
                 $retvalin = mysql_query( $sqlin, $conn );
                   if(! $retvalin )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }                       


        $sqlreseten1 = "ALTER TABLE hovvver_project DROP idx; ";
        $sqlreseten2 = "ALTER TABLE hovvver_project AUTO_INCREMENT = 1; ";
        $sqlreseten3 = "ALTER TABLE hovvver_project ADD idx int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST; ";

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


                    $sqlen="UPDATE hovvver_project SET sortable_order= sortable_order-1  WHERE sortable_order >'".$returnstrap."' AND code='".$current_lang."' ";              
		                   $retvalen = mysql_query( $sqlen, $conn );
		                   if(! $retvalen )
		                       {
		                          die('Could not enter data: ' . mysql_error());
		                       }
                    $sqlen_misc="UPDATE hovvver_project SET misc_id= misc_id-1  WHERE misc_id >'".$returnstrap_misc."' AND code='".$current_lang."' ";              
                       $retvalen_misc = mysql_query( $sqlen_misc, $conn );
                       if(! $retvalen_misc )
                           {
                              die('Could not enter data: ' . mysql_error());
                           }
                       header("Refresh:0; url=/Admin/ViewAllCaseStudies");

}


if(isset($_POST['page_submit'])){

  $entext1 = mysql_real_escape_string($_POST['general_entext1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['general_entext2'],$conn);
  $entext3 = mysql_real_escape_string($_POST['general_entext3'],$conn);
  $entext4 = mysql_real_escape_string($_POST['general_entext4'],$conn);

  $entext5 = mysql_real_escape_string($_POST['content_entext1'],$conn);
  $entext6 = mysql_real_escape_string($_POST['content_entext2'],$conn);

  $image1 = $_FILES['main_project_image1']['name'];


 $sql="UPDATE hovvver_case SET text1='".$entext1."', text2='".$entext2."', text3='".$entext3."', text4='".$entext4."', text5='".$entext5."', text6='".$entext6."' where code ='".$current_lang."' ";
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
    
if($image1 != null) {
      $file_tmp1 =$_FILES['main_project_image1']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image1);
      $filename = "/uploads/".$image1;
      $sql1="UPDATE hovvver_case SET image1='".$filename."' ";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

                       header("Refresh:0; url=/Admin/Case_Studies/");
}


if(isset($_POST['delete_images'])){

  $idx= mysql_real_escape_string($_POST['case_id'],$conn);
  $check_image1 = mysql_real_escape_string($_POST['check_image1'],$conn);
 

if($check_image1 == 'yes'){

 $sql="UPDATE hovvver_project SET image1 = NULL WHERE idx = '".$idx."' ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
      echo '<h1 style="width: 100%; height: auto; position: relative; margin: o auto; margin-top: 20%; display: inline-block; font-style: italic; color: #71af4a;">no image selected</h1>';
      header('Refresh:3;' . $_SERVER['HTTP_REFERER']);
    }


                       //header("Refresh:0; url=/Admin/ViewAllCaseStudies/");
    //
}
?>