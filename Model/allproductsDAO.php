<?php
include '../lang/lang.php';
mysql_set_charset("utf8");

include 'menuDAO.php';
include 'footerDAO.php';

$current_lang = $_SESSION['lang'];
 $client_icons = '';
 $product_content = '';


                        $sqlallproductsen = 'select * from hovvver_blog where code ="'.$current_lang.'" ORDER BY sortable_order ASC';
                        $retval_allproducts_en = mysql_query( $sqlallproductsen, $conn );                 
                             if(! $retval_allproducts_en )
                             {
                                die('Could not get data: ' . mysql_error());
                             }  

                        $allproducts = '';
                        while($row_allproducts_en = mysql_fetch_array($retval_allproducts_en, MYSQL_ASSOC)){
                            $idx = $row_allproducts_en['idx'];
                            $text4 = $row_allproducts_en['text4'];
                            $text5 = $row_allproducts_en['text5'];
                            $image = $row_allproducts_en['image1']; 
                            $text6 = $row_allproducts_en['text6']; 
                            $url = $row_allproducts_en['url'];

                                           $allproducts .= '<div class="col-md-4">
                                                              <div class="service left-icon probootstrap-animate">

                                                                <div class="icon">
                                                                  <i class="'.$icon.'"></i>
                                                                </div>
                                                                <div class="text">
                                                                  <h3 class="heading">'.$text4.'</h3>
                                                                  <p>'.$text5.'</p>
                                                                  <p><a href="'.$text6.'">Learn more</a></p>
                                                                </div>

                                                              </div>
                                                            </div>';                  

                                          
                        }
                        //$lang['allproducts'] = $allproducts;

                        $sqlen_all_product = 'select * from hovvver_all_product where code ="'.$current_lang.'"';
                        $retvalen_all_product = mysql_query( $sqlen_all_product, $conn );
                             if(! $retvalen_all_product )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $rowen_all_product = mysql_fetch_array($retvalen_all_product, MYSQL_ASSOC);
                            $main_product_text1 = $rowen_all_product['text1'];
                            $main_product_text2 = $rowen_all_product['text2'];
                            $main_product_text3 = $rowen_all_product['text3'];
                            $main_product_text4 = $rowen_all_product['text4'];
                            $main_product_text5 = $rowen_all_product['text5'];
                            $main_product_text6 = $rowen_all_product['text6'];
                            $main_product_image1 = $rowen_all_product['image1'];





                        $sqlen_client_icons = 'select * from hovvver_blog where code ="'.$current_lang.'" order by sortable_order asc';
                        $retvalen_client_icons = mysql_query( $sqlen_client_icons, $conn );
                             if(! $retvalen_client_icons )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        while($rowen_client_icons = mysql_fetch_array($retvalen_client_icons, MYSQL_ASSOC)){
                            $client_idx = $rowen_client_icons['idx'];
                            $client_icons_images1 = $rowen_client_icons['image1'];
                            $client_icons_images2 = $rowen_client_icons['image2'];
                            $client_icons_images3 = $rowen_client_icons['image3'];
                            $client_text4 = $rowen_client_icons['text4'];
                            $client_text5 = $rowen_client_icons['text5'];
                            $client_entext6 = $rowen_client_icons['text6'];
                            $client_text7 = $rowen_client_icons['text7'];
                            $client_text8 = $rowen_client_icons['text8'];

                            $client_textparagraph6 = trim($client_entext6);
                            $client_trimmedtext6 = nl2br($client_textparagraph6); 
                            $client_text6 = $client_trimmedtext6;

                                $sqlcategory_list = 'select * from hovvver_category_list where text1="'.$client_idx.'" and code="'.$current_lang.'" order by idx desc';
                                $retvalcategory_list = mysql_query( $sqlcategory_list, $conn );                 
                                     if(! $retvalcategory_list )
                                     {
                                        die('Could not get data: ' . mysql_error());
                                     }

                                //while($rowcategory_list = mysql_fetch_array($retvalcategory_list, MYSQL_ASSOC)){
                                $rowcategory_list = mysql_fetch_array($retvalcategory_list, MYSQL_ASSOC);
                                $cat_product_id = $rowcategory_list['text1']; 
                                $cat_product_id2 = $rowcategory_list['text2']; 

                                $client_icons .= '<div class="col-sm-6 col-md-3 col-lg-3 color-'.$cat_product_id2.'" >
                                                    <div class="portfolio-item animated">
                                                      <div class="hover-bg"> 
                                                          <a href="#" data-toggle="modal" data-target="#myModal-'.$client_idx.'"> <!-- data-lightbox-gallery="gallery1" -->
                                                            <div class="hover-text">
                                                              <h4>'.$client_text4.'</h4>
                                                            </div>
                                                            <img src="'.$client_icons_images1.'" class="img-responsive" alt="'.$client_text4.'"> 
                                                          </a> 
                                                        </div>
                                                    </div>
                                                  </div>';



$product_content .= '<div id="myModal-'.$client_idx.'" class="modal fade" data-easein="bounceIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                        <h4 class="modal-title">
                            <!-- '.$client_text4.' --> <img src="'.$client_icons_images2.'" alt="logo">
                        </h4>
                    </div>
                    <div class="modal-body" style="background: url('.$client_icons_images3.') no-repeat center bottom; background-size:cover; background-position:100%; ">
                    <h5>'.$client_text5.'</h5>
                        <p>
                            '.$client_text6.'
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="'.$client_text8.'" target="_blank" class="btn btn-default">
                           Learn More... <!-- '.$client_text7.' -->
                        </a>

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

                                //$category .= '<li class="filter" data-filter=".color-'.$category_text2.'"><a href="#0" data-type="color-'.$category_text2.'">'.$category_text1.'</a></li>';
                                $category .= '<li><a href="#" data-filter=".color-'.$category_text2.'">'.$category_text1.'</a></li>';
                            }
?>