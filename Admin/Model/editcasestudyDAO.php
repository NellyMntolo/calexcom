<?php
include 'dbconfig.php';
mysql_set_charset("utf8");
$current_lang = $_SESSION['lang'];
$publish = '';
$send_to_index = '';
$caseid = mysql_real_escape_string($_GET['case_id'],$conn);

                        $sqlcaseen = 'select * from hovvver_project WHERE idx="'.$caseid.'" and code ="'.$current_lang.'" LIMIT 1';
                        $retvalcaseen = mysql_query( $sqlcaseen, $conn );                 
                             if(! $retvalcaseen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowcaseen = mysql_fetch_array($retvalcaseen, MYSQL_ASSOC);
                            $idx = $rowcaseen['idx']; 
                            $entext1 = $rowcaseen['text1'];
                            $entext2 = $rowcaseen['text2'];
                            $entext3 = $rowcaseen['text3'];
                            $entext4 = $rowcaseen['text4'];
                            $entext5 = $rowcaseen['text5'];
                            $entext6 = $rowcaseen['text6'];
                            $entext7 = $rowcaseen['text7'];
                            $entext8 = $rowcaseen['text8'];
                            $entext9 = $rowcaseen['text9'];
                            $entext10 = $rowcaseen['text10'];
                            $entext11 = $rowcaseen['text11'];
                            $entext12 = $rowcaseen['text12'];
                            $entext13 = $rowcaseen['text13'];
                            $entext14 = $rowcaseen['text14'];
                            $entext15 = $rowcaseen['text15'];
                            $entext16 = $rowcaseen['text16'];
                            $entext17 = $rowcaseen['text17'];
                            $entext18 = $rowcaseen['text18'];
                            $enimage1 = $rowcaseen['image1'];
                            $enimage2 = $rowcaseen['image2'];
                            $enimage3 = $rowcaseen['image3'];
                            $case_publish = $rowcaseen['publish'];
                            $case_send_to_index = $rowcaseen['send_to_index'];
                            $a = $rowcaseen['misc_id']; 


                            if($case_publish == "yes"){
                              $publish = "<input type=\"checkbox\" id=\"checker\" type=\"checkbox\" value=\"yes\" name=\"publish\" class=\"form-content\" checked=\"true\">";
                             } elseif ($case_publish == "no" || empty($case_publish)) {
                               $publish = "<input type=\"checkbox\" id=\"checker\" type=\"checkbox\" value=\"yes\" name=\"publish\" class=\"form-content\">";
                             }


                            if($case_send_to_index == "yes"){
                              $send_to_index = "<input type=\"checkbox\" id=\"checker\" type=\"checkbox\" value=\"yes\" name=\"send_to_index\" class=\"form-content\" checked=\"true\">";
                             } elseif ($case_send_to_index == "no" || empty($case_send_to_index)) {
                               $send_to_index = "<input type=\"checkbox\" id=\"checker\" type=\"checkbox\" value=\"yes\" name=\"send_to_index\" class=\"form-content\">";
                             }


        $current_categories = '';

      $sql_all_categories = 'SELECT * FROM hovvver_category_list WHERE text1 = "'.$caseid.'" and code ="'.$current_lang.'" ';    
      $retval_all_categories = mysql_query( $sql_all_categories, $conn );     
      if(! $retval_all_categories )
      {
        die('Could not get data: ' . mysql_error());
      }

      //$all_categories = '';
      while($row_all_categories = mysql_fetch_array($retval_all_categories, MYSQL_ASSOC)){
      $all_categories = $row_all_categories['text2'];
    


      $sql_all_categories_names = 'SELECT * FROM hovvver_categories WHERE text2 = "'.$all_categories.'" and code ="'.$current_lang.'" ';    
      $retval_all_categories_names = mysql_query( $sql_all_categories_names, $conn );     
      if(! $retval_all_categories_names )
      {
        die('Could not get data: ' . mysql_error());
      }

      $row_all_categories_names = mysql_fetch_array($retval_all_categories_names, MYSQL_ASSOC);
      $text1 = $row_all_categories_names['text1'];
      $text2 = $row_all_categories_names['text2'];

        if ($text1 != null) {
          $current_categories .= $text1.'<br>';
        }
}

?>