<?php
include '../lang/lang.php';
mysql_set_charset("utf8");

include 'menuDAO.php';
include 'footerDAO.php';

$current_lang = $_SESSION['lang'];
//error_reporting(E_ALL);
$case_study_content = '';
                        $sqlallcasesen = 'select * from hovvver_project where code ="'.$current_lang.'" ORDER BY sortable_order ASC';
                        $retval_allcases_en = mysql_query( $sqlallcasesen, $conn );                 
                             if(! $retval_allcases_en )
                             {
                                die('Could not get data: ' . mysql_error());
                             } 

                        $allcases = '';
                        while($row_allcases_en = mysql_fetch_array($retval_allcases_en, MYSQL_ASSOC)){
                            $caseidx = $row_allcases_en['idx'];
                            $text4 = $row_allcases_en['text4'];
                            $text5 = $row_allcases_en['text5'];
                            $text6 = $row_allcases_en['text6'];
                            $image1 = $row_allcases_en['image1']; 
                            $image2 = $row_allcases_en['image2']; 
                            $image3 = $row_allcases_en['image3']; 
                            $misc_id = $row_allcases_en['misc_id'];
                            $url = $row_allcases_en['url'];

                            $case_textparagraph6 = trim($text6);
                            $case_trimmedtext6 = nl2br($case_textparagraph6); 
                            $case_text6 = $case_trimmedtext6;


                        $sqlcat_list = 'select * from hovvver_category_list WHERE text1="'.$caseidx.'" and code="'.$current_lang.'" ';
                        $retvalcat_list = mysql_query( $sqlcat_list, $conn );                 
                             if(! $retvalcat_list )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                              $rowcat_list = mysql_fetch_array($retvalcat_list, MYSQL_ASSOC);
                              $cat_list_text2 = $rowcat_list['text2'];


                        $sqlcat_name = 'select * from hovvver_categories WHERE text2="'.$cat_list_text2.'" and code="'.$current_lang.'" ';
                        $retvalcat_name = mysql_query( $sqlcat_name, $conn );                 
                             if(! $retvalcat_name )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                              $rowcat_name = mysql_fetch_array($retvalcat_name, MYSQL_ASSOC);
                              $cat_name_text1 = $rowcat_name['text1'];
 


                                                      // <div class="col-md-4 probootstrap-animate">
                                                      //   <div class="probootstrap-card with-hover">
                                                      //     <div class="probootstrap-card-media">
                                                      //       <a href="/Case_Studies/projects/'.$url.'"><img src="'.$image.'" class="img-responsive img-border" alt="'.$image.'"></a>
                                                      //     </div>
                                                      //     <div class="probootstrap-card-text">
                                                      //       <h2 class="probootstrap-card-heading mb0">'.$text4.'</h2>
                                                      //       <p class="category">'.$cat_name_text1.'</p>
                                                      //       <p><a href="/Case_Studies/projects/'.$url.'">View details</a></p>
                                                      //     </div>
                                                      //   </div>
                                                      // </div>

                              
                                         $allcases .= '<figure class="effect-romeo">
                                                        <img src="'.$image1.'" alt="'.$image1.'"/>
                                                        <figcaption>
                                                          <h2>'.$text4.'</h2>
                                                          <!-- <p>'.$text5.'</p> -->
                                                          <a href="#" data-toggle="modal" data-target="#myModal-'.$caseidx.'">View more</a>
                                                        </figcaption>     
                                                      </figure>';



$case_study_content .= '<div id="myModal-'.$caseidx.'" class="modal fade" data-easein="bounceIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                        <h4 class="modal-title">
                             <!-- '.$text4.' --> <img src="'.$image2.'" alt="logo">
                        </h4>
                    </div>
                    <div class="modal-body" style="background: url('.$image3.') no-repeat center bottom; background-size:cover; background-position:100%; ">
                    <h5>'.$text5.'</h5>
                        <p>
                            '.$case_text6.'
                        </p>
                    </div>
                    <div class="modal-footer">
                        <!-- <a href="" class="btn btn-default">
                           Learn More... 
                        </a> -->

                        <!-- <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                            close
                        </button> -->
                        <!--<button class="btn btn-primary">
                            Learn more...
                        </button>-->
                    </div>
                </div>
            </div>
        </div>';
                                   
                                          
                        } 




                        $sqlmain_projecten = 'select * from hovvver_case where code ="'.$current_lang.'"';
                        $retvalmain_projecten = mysql_query( $sqlmain_projecten, $conn );                 
                             if(! $retvalmain_projecten )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowmain_projecten = mysql_fetch_array($retvalmain_projecten, MYSQL_ASSOC);
                            $main_case_text1 = $rowmain_projecten['text1'];
                            $main_case_text2 = $rowmain_projecten['text2'];
                            $main_case_text3 = $rowmain_projecten['text3'];
                            $main_case_text4 = $rowmain_projecten['text4'];
                            $en_main_case_text5 = $rowmain_projecten['text5'];
                            $main_case_text6 = $rowmain_projecten['text6'];
                            $main_case_image1 = $rowmain_projecten['image1'];

                            $main_case_textparagraph5 = trim($en_main_case_text5);
                            $main_case_trimmedtext5 = nl2br($main_case_textparagraph5); 
                            $main_case_text5 = $main_case_trimmedtext5;  

                        $sqlcategory = 'select * from hovvver_categories WHERE code="'.$current_lang.'" ORDER BY sortable_order ASC';
                        $retvalcategory = mysql_query( $sqlcategory, $conn );                 
                             if(! $retvalcategory )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $category = '';
                        while($rowcategory = mysql_fetch_array($retvalcategory, MYSQL_ASSOC)){
                                $category_idx = $rowcategory['idx'];
                                $category_text1 = $rowcategory['text1'];
                                $category_text2 = $rowcategory['text2'];
                                //$category .= '<li><option name="category_name" value="'.$idx.'" class="names">'.$category_text1.'</option></li>';  <li class="categories casestudy_filter" data-filter="'.$category_text2.'">'.$category_text1.'</li>
                                $category .= '<li class="categories"><input class="casestudy_filter" type="button" value="'.$category_text2.'">'.$category_text1.'</li>';
                                                }

                        // $all_categories = '<form id="categ-form-en" accept-charset="UTF-8">
                        //   <select class="selectpicker" name="selected_category" id="form-select">
                        //         <li data-tokens="/Case_Studies" ><option><a href="/Case_Studies" class="">'.$main_case_text6.'</a></option></li>
                        //         '.$category.'
                        //   </select>
                        // </form>';

?>