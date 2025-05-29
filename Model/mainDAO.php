<?php
include 'lang/lang.php';
mysql_set_charset("utf8");

include 'menuDAO.php';
include 'footerDAO.php';

$current_lang = $_SESSION['lang'];

$client_icons_first_categories = '';
$multiple_categories_script = '';
$recap_first_categories_script = '';
                        //CONTENT
                        $sqlen_index = 'select * from hovvver_index where code ="'.$current_lang.'"';
                        $retvalen_index = mysql_query( $sqlen_index, $conn );
                             if(! $retvalen_index )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $rowen_index = mysql_fetch_array($retvalen_index, MYSQL_ASSOC);
                            $index_entext1 = $rowen_index['text1'];
                            $index_entext2 = $rowen_index['text2'];
                            $index_entext3 = $rowen_index['text3'];
                            $index_entext4 = $rowen_index['text4'];
                            $index_entext5 = $rowen_index['text5'];
                            $index_entext6 = $rowen_index['text6'];


                            $index_text1 = $index_entext1;
                            $index_text2 = $index_entext2;
                            $index_text3 = $index_entext3;
                            $index_textparagraph4 = trim($index_entext4);
                            $index_trimmedtext4 = nl2br($index_textparagraph4); 
                            $index_text4 = $index_trimmedtext4; 
                            $index_textparagraph5 = trim($index_entext5);
                            $index_trimmedtext5 = nl2br($index_textparagraph5); 
                            $index_text5 = $index_trimmedtext5; 
                            $index_textparagraph6 = trim($index_entext6);
                            $index_trimmedtext6 = nl2br($index_textparagraph6); 
                            $index_text6 = $index_trimmedtext6;



                        $sql_first_slider = 'select * from index_first_slider ORDER BY idx DESC';
                        $retval_first_slider = mysql_query( $sql_first_slider, $conn );                 
                             if(! $retval_first_slider )
                             {
                                die('Could not get data: ' . mysql_error());
                             }    


                        $sliders = '';
                        while($first_slider = mysql_fetch_array($retval_first_slider, MYSQL_ASSOC)){
                            $text1 = $first_slider['text1'];
                            $text2 = $first_slider['text2'];
                            $text3 = $first_slider['text3'];
                            $image1 = $first_slider['image1'];

                                      $sliders .= '<div class="swiper-slide">
                                      <div class="slide-inner" style="background-image:url('.$image1.')"></div>
                                                          <!-- <div class="home-slide-back" style="background:#779EEB;"></div> -->
                                                            <div class="info">
                                                                <h1>'.$text1.'</h1>
                                                                <!--<a href="#" class="btn btn-default">Learn More</a>-->
                                                                <h3 class="">'.$text2.'</h3>
                                                            </div>
                                                            <!--<div class="background">
                                                                <img src="'.$image1.'" alt="'.$image1.'">
                                                            </div>-->
                                                        </div>';                                                     
                        }



                        //Index All Solutions
                        $sql_mainprojecten = 'select * from hovvver_solution where code ="'.$current_lang.'" ORDER BY sortable_order ASC Limit 4';
                        $retval_index_all_solutions = mysql_query( $sql_mainprojecten, $conn );                 
                             if(! $retval_index_all_solutions )
                             {
                                die('Could not get data: ' . mysql_error());
                             } 

                        //Index Case Studies first
                        $sql_maincaseen = 'select * from hovvver_project where code ="'.$current_lang.'" ORDER BY sortable_order ASC Limit 4';
                        $retval_index_cases = mysql_query( $sql_maincaseen, $conn );                 
                             if(! $retval_index_cases )
                             {
                                die('Could not get data: ' . mysql_error());
                             }


                    $count_solutions=mysql_num_rows($retval_index_all_solutions);
                    $index_all_solutions = $main_solutions;
                    while($row_index_all_solutions_en = mysql_fetch_array($retval_index_all_solutions, MYSQL_ASSOC)){
                        $idx = $row_index_all_solutions_en['idx'];
                        $text4 = $row_index_all_solutions_en['text4'];
                        $entext5 = $row_index_all_solutions_en['text5'];
                        $image = $row_index_all_solutions_en['image1']; 
                        $url = $row_index_all_solutions_en['url'];
                        $sortable_order = $row_index_all_solutions_en['sortable_order'];

                        $index_solutions_textparagraph5 = trim($entext5);
                        $index_solutions_trimmedtext5 = nl2br($index_solutions_textparagraph5); 
                        $text5 = $index_solutions_trimmedtext5;

                                    // $main_index_all_solutions .= '<li class="grid-solution animation-element fade-in">
                                    //                                 <div class="grid-solution-in">
                                    //                                   <img src="'.$image.'"/>
                                    //                                   <a href="/Technology" class="detail">
                                    //                                     <div class="in">
                                    //                                       <h3>'.$text4.'</h3>
                                    //                                       <p class="yes">'.$text5.'</p>                
                                    //                                     </div>
                                    //                                   </a>
                                    //                                 </div>
                                    //                               </li>';



                                           $main_index_all_solutions .= '<div class="col-sm-6 col-md-3 col-lg-3">
                                                    <div class="portfolio-item animated">
                                                      <div class="hover-bg"> <a href="/Technology">
                                                        <div class="hover-text">
                                                          <h4>'.$text4.'</h4>
                                                        </div>
                                                        <img src="'.$image.'" class="img-responsive" alt="'.$image.'"> </a> </div>
                                                    </div>
                                                  </div>';                       

                                      
                    }
                    $index_all_solutions = $main_index_all_solutions;

                    $count_cases=mysql_num_rows($retval_index_cases);
                    $index_case_studies = $main_case_studies;
                    $main_index_case_studies = '';
                    while($row_index_case_studies_en = mysql_fetch_array($retval_index_cases, MYSQL_ASSOC)){
                        $caseidx = $row_index_case_studies_en['idx'];
                        $text4 = $row_index_case_studies_en['text4'];
                        $text5 = $row_index_case_studies_en['text5'];
                        $image = $row_index_case_studies_en['image1']; 
                        $url = $row_index_case_studies_en['url'];

                        $main_index_case_studies .= '<figure class="effect-romeo hover-bg">
                                                        <img src="'.$image.'" alt="img17"/>
                                                        <figcaption>
                                                          <h2>'.$text4.'</h2>
                                                          <!-- <p>'.$text5.'</p>-->
                                                          <a href="/Case_Studies">View more</a>
                                                        </figcaption>     
                                                      </figure>';
                                }





                        $sqlen_client_icons_one_one = 'select * from hovvver_blog where code ="'.$current_lang.'" order by sortable_order asc';
                        $retvalen_client_icons_one = mysql_query( $sqlen_client_icons_one_one, $conn );
                             if(! $retvalen_client_icons_one )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                             $count_products_one=mysql_num_rows($retvalen_client_icons_one);

                        $sqlanother_first_category = 'select * from hovvver_categories WHERE code="'.$current_lang.'" ORDER BY sortable_order ASC limit 1';
                        $retvalanother_first_category = mysql_query( $sqlanother_first_category, $conn );                 
                             if(! $retvalanother_first_category )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $another_first_category = '';
                        $rowanother_first_category = mysql_fetch_array($retvalanother_first_category, MYSQL_ASSOC);
                                $another_first_category_text2 = $rowanother_first_category['text2'];
    
      
                        $client_icons_one = '';
                        while($rowen_client_icons_one = mysql_fetch_array($retvalen_client_icons_one, MYSQL_ASSOC)){
                            $client_idx_one = $rowen_client_icons_one['idx'];
                            $client_icons_images_one = $rowen_client_icons_one['image1'];
                            $client_text4_one = $rowen_client_icons_one['text4'];
                                //  and text2="'.$another_first_category_text2.'" 
                                $sqlcategory_list_one = 'select * from hovvver_category_list where text1="'.$client_idx_one.'" and code="'.$current_lang.'" order by idx desc';
                                $retvalcategory_list_one = mysql_query( $sqlcategory_list_one, $conn );                 
                                     if(! $retvalcategory_list_one )
                                     {
                                        die('Could not get data: ' . mysql_error());
                                     }

                               
                                $rowcategory_list_one = mysql_fetch_array($retvalcategory_list_one, MYSQL_ASSOC);
                                $cat_product_id_one = $rowcategory_list_one['text1'];
                                $cat_product_id2_one = $rowcategory_list_one['text2'];

                                $client_icons_one .= '<div class="col-sm-6 col-md-3 col-lg-3 index_products color-'.$cat_product_id2_one.' ">
                                                    <div class="portfolio-item animated">
                                                      <div class="hover-bg"> <a href="/Products" data-lightbox-gallery="gallery1">
                                                        <div class="hover-text">
                                                          <h4>'.$client_text4_one.'</h4>
                                                        </div>
                                                        <img src="'.$client_icons_images_one.'" class="img-responsive" alt="'.$client_text4_one.'"> </a> </div>
                                                    </div>
                                                  </div>';
                        }





                        // might probably be duplicate to another DAO
                        // SHOW ALL ITEMS
                        $sqlen_client_icons = 'select * from hovvver_blog where code ="'.$current_lang.'" order by sortable_order asc';
                        $retvalen_client_icons = mysql_query( $sqlen_client_icons, $conn );
                             if(! $retvalen_client_icons )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                             $count_products=mysql_num_rows($retvalen_client_icons);
    
      
                        $client_icons = '';
                        while($rowen_client_icons = mysql_fetch_array($retvalen_client_icons, MYSQL_ASSOC)){
                            $client_idx = $rowen_client_icons['idx'];
                            $client_icons_images = $rowen_client_icons['image1'];
                            $client_text4 = $rowen_client_icons['text4'];

                                $sqlcategory_list = 'select * from hovvver_category_list where text1="'.$client_idx.'" and code="'.$current_lang.'" order by idx desc';
                                $retvalcategory_list = mysql_query( $sqlcategory_list, $conn );                 
                                     if(! $retvalcategory_list )
                                     {
                                        die('Could not get data: ' . mysql_error());
                                     }

                                
                                // Test Filter while loop
                                //$rowcategory_list = mysql_fetch_array($retvalcategory_list, MYSQL_ASSOC);
                                while($rowcategory_list = mysql_fetch_array($retvalcategory_list, MYSQL_ASSOC)){
                                $cat_product_id = $rowcategory_list['text1'];
                                $cat_product_id2 = $rowcategory_list['text2'];

                                $client_icons .= '<div class="col-sm-6 col-md-3 col-lg-3 index_products color-'.$cat_product_id2.'">
                                                    <div class="portfolio-item animated">
                                                      <div class="hover-bg">
                                                        <a href="/Products" title="'.$client_text4.'" data-lightbox-gallery="gallery1">
                                                          <div class="hover-text">
                                                            <h4>'.$client_text4.'</h4>
                                                          </div>
                                                          <img src="'.$client_icons_images.'" class="img-responsive" alt="'.$client_text4.'">
                                                        </a>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  ';


                                  }// Test Filter while loop
                        } 


                        $sqlfirst_category = 'select * from hovvver_categories WHERE code="'.$current_lang.'" ORDER BY sortable_order ASC limit 1';
                        $retvalfirst_category = mysql_query( $sqlfirst_category, $conn );                 
                             if(! $retvalfirst_category )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $first_category = '';
                        while($rowfirst_category = mysql_fetch_array($retvalfirst_category, MYSQL_ASSOC)){
                                $first_category_idx = $rowfirst_category['idx'];
                                $first_category_text1 = $rowfirst_category['text1'];
                                $first_category_text2 = $rowfirst_category['text2'];
                                $first_category .= '<li><a href="#" data-filter=".color-'.$first_category_text2.'" class="active filter_first">'.$first_category_text1.'</a></li>';

                        // $sqlen_client_icons_first_categories = 'select * from hovvver_blog where code ="'.$current_lang.'" order by sortable_order asc';
                        // $retvalen_client_icons_first_categories = mysql_query( $sqlen_client_icons_first_categories, $conn );
                        //      if(! $retvalen_client_icons_first_categories )
                        //      {
                        //         die('Could not get data: ' . mysql_error());
                        //      }
                             //$count_products=mysql_num_rows($retvalen_client_icons_first_categories);


                             $sqlcategory_list = 'select * from hovvver_category_list where text2="'.$first_category_text2.'" and code="'.$current_lang.'" order by idx desc';
                                $retvalcategory_list = mysql_query( $sqlcategory_list, $conn );                 
                                     if(! $retvalcategory_list )
                                     {
                                        die('Could not get data: ' . mysql_error());
                                     }
    
      
                        
                        while($rowen_client_icons_first_categories = mysql_fetch_array($retvalcategory_list, MYSQL_ASSOC)){
                            $client_idx_first_categories = $rowen_client_icons_first_categories['text1'];

                        $sqlen_client_icons_first_categories = 'select * from hovvver_blog where idx="'.$client_idx_first_categories.'" and code ="'.$current_lang.'" order by sortable_order asc';
                        $retvalen_client_icons_first_categories = mysql_query( $sqlen_client_icons_first_categories, $conn );
                             if(! $retvalen_client_icons_first_categories )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                                
                                while($rowcategory_list = mysql_fetch_array($retvalen_client_icons_first_categories, MYSQL_ASSOC)){

                                $client_text4_first_categories = $rowcategory_list['text4'];
                                $client_icons_first_categories_images = $rowcategory_list['image1'];

                                $client_icons_first_categories .= '<div class="col-sm-6 col-md-3 col-lg-3 index_products color-'.$client_idx_first_categories.' "><div class="portfolio-item animated"><div class="hover-bg"> <a href="/Products"><div class="hover-text"><h4>'.$client_text4_first_categories.'</h4></div><img src="'.$client_icons_first_categories_images.'" class="img-responsive" alt="'.$client_text4_first_categories.'"> </a> </div></div></div>';


                                  }
                        } 
                    }




                        //$sqlcategory = 'select * from hovvver_categories WHERE code="'.$current_lang.'" ORDER BY sortable_order ASC limit 100 offset 1';
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
                                $category .= '<li><a href="#" data-filter=".color-'.$category_text2.'" class="filter_categories">'.$category_text1.'</a></li>';
                            }

$multiple_categories_script = "
$('.filter_categories').click (function(event) {
    $('.portfolio-items').html('".$client_icons."');
  });
  ";

$recap_first_categories_script = "
$('.filter_first').click (function(event) {
    $('.portfolio-items').html('".$client_icons_first_categories."');
  });
  ";







?>