<?php
include '../Model/dbconfig.php';
mysql_set_charset("utf8");
session_start();

$user_id = $_SESSION['chat'];
if(isset($_POST['page_submit'])){


  $entext1 = mysql_real_escape_string($_POST['text1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['text2'],$conn);
  $entext3 = mysql_real_escape_string($_POST['text3'],$conn);
  $entext4 = mysql_real_escape_string($_POST['text4'],$conn);
  $entext5 = mysql_real_escape_string($_POST['text5'],$conn);
  $entext6 = mysql_real_escape_string($_POST['text6'],$conn);
  $site = mysql_real_escape_string($_POST['site'],$conn);

$image1 = $_FILES['profileimage']['name'];
$uploaded_image1 = '';
$image2 = $_FILES['login_image']['name'];

if($image1 != null) {
    $file_tmp =$_FILES['profileimage']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image1);
    $uploaded_image1 = "/uploads/".$image1;
      $sql1="UPDATE think_master SET image1='".$uploaded_image1."' WHERE idx ='".$user_id."' ";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql2="UPDATE message SET image='".$uploaded_image1."' WHERE header_id ='".$user_id."' ";
      $retval2 = mysql_query( $sql2, $conn );
                   if(! $retval2 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
  }

  if($image2 != null) {
    $file_tmp =$_FILES['login_image']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image2);
    $uploaded_image2 = "/uploads/".$image2;
      $sql1="UPDATE dashboard SET image1='".$uploaded_image2."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
  }


 $sql="UPDATE think_master SET firstname='".$entext1."', lastname='".$entext2."', jobtitle='".$entext3."', dob='".$entext4."', user_p='".$entext5."', smtp='".$entext6."' WHERE idx ='".$user_id."' ";

 $sql_site="UPDATE dashboard SET website='".$site."' ";              
                    $retval = mysql_query( $sql, $conn );
                    if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

                    $retval_site = mysql_query( $sql_site, $conn );
                    if(! $retval_site )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }


$google_analytics = mysql_real_escape_string($_POST['google_analytics'],$conn);
//$google_tags = mysql_real_escape_string($_POST['google_tags'],$conn);, google_tags='".$google_tags."'
$sql_google_stuff="UPDATE google_stuff SET google_analytics='".$google_analytics."' ";

                    $retval_google_stuff = mysql_query( $sql_google_stuff, $conn );
                    if(! $retval_google_stuff )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }


                        $new_language = mysql_real_escape_string($_POST['new_language'],$conn);

                        if ($new_language != null) {               

                        $sqlexisting_language = 'select code from hovvver_index where code="'.$new_language.'" ';
                        $retvalexisting_language = mysql_query( $sqlexisting_language, $conn );                 
                             if(! $retvalexisting_language )
                             {
                                die('Could not get data1: ' . mysql_error());
                             }                        


                        $rowexisting_language = mysql_fetch_array($retvalexisting_language, MYSQL_ASSOC);
                        $existing_code = $rowexisting_language['code'];                        
                        
                        if($existing_code != null) {
                          //echo "...";
                        } else {
                          $sqla = 'INSERT INTO hovvver_about(code) VALUES ("'.$new_language.'")';

                          $retvala = mysql_query( $sqla, $conn );
                            if(! $retvala ) {  
                                die('Could not enter data2: ' . mysql_error());
                              }
                          $sqlb = 'INSERT INTO hovvver_all_product(code) VALUES ("'.$new_language.'")';

                          $retvalb = mysql_query( $sqlb, $conn );
                            if(! $retvalb ) {  
                                die('Could not enter data3: ' . mysql_error());
                              }
                          $sqlc = 'INSERT INTO hovvver_all_solution(code) VALUES ("'.$new_language.'")';

                          $retvalc = mysql_query( $sqlc, $conn );
                            if(! $retvalc ) {  
                                die('Could not enter data4: ' . mysql_error());
                              }
                          $sqld = 'INSERT INTO hovvver_contact(code) VALUES ("'.$new_language.'")';

                          $retvald = mysql_query( $sqld, $conn );
                            if(! $retvald ) {  
                                die('Could not enter data5: ' . mysql_error());
                              }
                          $sqle = 'INSERT INTO hovvver_downloads_en(code) VALUES ("'.$new_language.'")';

                          $retvale = mysql_query( $sqle, $conn );
                            if(! $retvale ) {  
                                die('Could not enter data6: ' . mysql_error());
                              }
                          $sqlf = 'INSERT INTO hovvver_index(code) VALUES ("'.$new_language.'")';

                          $retvalf = mysql_query( $sqlf, $conn );
                            if(! $retvalf ) {  
                                die('Could not enter data7: ' . mysql_error());
                              }
                          $sqlg = 'INSERT INTO hovvver_menu(code) VALUES ("'.$new_language.'")';

                          $retvalg = mysql_query( $sqlg, $conn );
                            if(! $retvalg ) {  
                                die('Could not enter data8: ' . mysql_error());
                              }
                          $sqli = 'INSERT INTO hovvver_footer(code) VALUES ("'.$new_language.'")';

                          $retvali = mysql_query( $sqli, $conn );
                            if(! $retvali ) {  
                                die('Could not enter data10: ' . mysql_error());
                              }
                          $sqlj = 'INSERT INTO hovvver_solution(code) VALUES ("'.$new_language.'")';

                          $retvalj = mysql_query( $sqlj, $conn );
                            if(! $retvalj ) {  
                                die('Could not enter data11: ' . mysql_error());
                              }
                          $sqlk = 'INSERT INTO hovvver_blog(code) VALUES ("'.$new_language.'")';

                          $retvalk = mysql_query( $sqlk, $conn );
                            if(! $retvalk ) {  
                                die('Could not enter data12: ' . mysql_error());
                              }
                          $sqll = 'INSERT INTO hovvver_case(code) VALUES ("'.$new_language.'")';

                          $retvall = mysql_query( $sqll, $conn );
                            if(! $retvall ) {  
                                die('Could not enter data13: ' . mysql_error());
                              }
                          $sqln = 'INSERT INTO hovvver_project(code) VALUES ("'.$new_language.'")';

                          $retvaln = mysql_query( $sqln, $conn );
                            if(! $retvaln ) {  
                                die('Could not enter data15: ' . mysql_error());
                              }
                          $sqlo = 'INSERT INTO hovvver_categories(code) VALUES ("'.$new_language.'")';

                          $retvalo = mysql_query( $sqlo, $conn );
                            if(! $retvalo ) {  
                                die('Could not enter data16: ' . mysql_error());
                              }

                          
                        }
                          $update_lang = 'no';
                          $update_langa = 'yes';
                          $sqlupdate="UPDATE lang SET status='".$update_langa."', active_lang='".$update_langa."' WHERE code ='".$new_language."' ";              
                          $retvalupdate = mysql_query( $sqlupdate, $conn );
                          if(! $retvalupdate )
                             {
                                die('Could not enter data: ' . mysql_error());
                             }


                      }


                        $default_active = 'yes';
                        $default_language = mysql_real_escape_string($_POST['default_language'],$conn);

                        if($default_language != null){


                          $sqldef="UPDATE lang SET default_lang = NULL ";              
                          $retvaldef = mysql_query( $sqldef, $conn );
                          if(! $retvaldef )
                             {
                                die('Could not enter data: ' . mysql_error());
                             }

                          $sqldefault="UPDATE lang SET default_lang='".$default_language."', active_lang='".$default_active."' WHERE code ='".$default_language."' ";              
                          $retvaldefault = mysql_query( $sqldefault, $conn );
                          if(! $retvaldefault )
                             {
                                die('Could not enter data: ' . mysql_error());
                             }
                           }

                       header("Refresh:0; url=/Admin/Profile");
}



if(isset($_GET['remove_lang'])){
                          $remove_id = mysql_real_escape_string($_GET['remove_lang'],$conn);
                          $remove_language = 'no';
                          $sqlremove="UPDATE lang SET status='".$remove_language."' WHERE idx ='".$remove_id."' ";              
                          $retvalremove = mysql_query( $sqlremove, $conn );
                          if(! $retvalremove )
                             {
                                die('Could not enter data: ' . mysql_error());
                             }

                          header("Refresh:0; url=/Admin/Profile");
  }

if(isset($_GET['deactivate_lang'])){
                          $deactivate_id = mysql_real_escape_string($_GET['deactivate_lang'],$conn);
                          $deactivate_language = 'no';
                          $sql_deactivate="UPDATE lang SET active_lang='".$deactivate_language."' WHERE idx ='".$deactivate_id."' ";              
                          $retval_deactivate = mysql_query( $sql_deactivate, $conn );
                          if(! $retval_deactivate )
                             {
                                die('Could not enter data: ' . mysql_error());
                             }

                          header("Refresh:0; url=/Admin/Profile");
  }

  if(isset($_GET['activate_lang'])){
                          $activate_id = mysql_real_escape_string($_GET['activate_lang'],$conn);
                          $activate_language = 'yes';
                          $sql_activate="UPDATE lang SET active_lang='".$activate_language."' WHERE idx ='".$activate_id."' ";              
                          $retval_activate = mysql_query( $sql_activate, $conn );
                          if(! $retval_activate )
                             {
                                die('Could not enter data: ' . mysql_error());
                             }

                          header("Refresh:0; url=/Admin/Profile");
  }

?>