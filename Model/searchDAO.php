<?php
include '../lang/lang.php';
mysql_set_charset("utf8");

include 'menuDAO.php';
include 'footerDAO.php';

$current_lang = $_SESSION['lang'];
$result = '';
$search_modals = '';

if(isset($_POST['search'])){
  $keyword = mysql_real_escape_string($_POST['search']);

//faq,products,packages,news,case studies, technology
  $sql_search = "(SELECT idx, text4, text5, text6, url, search_type, image1 FROM hovvver_blog WHERE (text4 LIKE '%".$keyword."%' OR text5 LIKE '%".$keyword."%') AND code='".$current_lang."')
                      UNION
                      (SELECT idx, text4, text5, text6, url, search_type, image1 FROM hovvver_project WHERE (text4 LIKE '%".$keyword."%' OR text5 LIKE '%".$keyword."%') AND code='".$current_lang."')
                      UNION
                      (SELECT idx, text4, text5, text6, url, search_type, image1 FROM hovvver_solution WHERE (text4 LIKE '%".$keyword."%' OR text5 LIKE '%".$keyword."%') AND code='".$current_lang."')";  
     $retval_search = mysql_query( $sql_search, $conn );     
     if(! $retval_search )
     {
        die('Could not get data: ' . mysql_error());
     }

     while($row_search = mysql_fetch_array($retval_search, MYSQL_ASSOC)){
            $blogidx = $row_search['idx'];
            $titles = $row_search['text4'];
            $descriptions = $row_search['text5'];
            $link = $row_search['text6'];
            $url = $row_search['url'];
            $search_type = $row_search['search_type'];
            $image1 = $row_search['image1'];

            if($search_type == "blog"){
                         // $result .= '<li class="grid-solution animation-element fade-in">
                         //                <div class="grid-solution-in">
                         //                  <img src="'.$image1.'"/>
                         //                  <a href="'.$link.'" target="_blank" class="detail">
                         //                    <div class="in">
                         //                      <h3>'.$titles.'</h3>
                         //                      <p class="yes">'.$descriptions.'</p>                
                         //                    </div>
                         //                  </a>
                         //                </div>
                         //              </li>';


                    $result .= '<div class="col-sm-6 col-md-3 col-lg-3" >
                                                    <div class="portfolio-item animated">
                                                      <div class="hover-bg"> 
                                                          <a href="#" data-toggle="modal" data-target="#myModal-'.$blogidx.'"> <!-- data-lightbox-gallery="gallery1" -->
                                                            <div class="hover-text">
                                                              <h4>'.$titles.'</h4>
                                                            </div>
                                                            <img src="'.$image1.'" class="img-responsive" alt="'.$image1.'"> 
                                                          </a> 
                                                        </div>
                                                    </div>
                                                  </div>';


              $search_modals .= '<div id="myModal-'.$blogidx.'" class="modal fade" data-easein="bounceIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                        <h4 class="modal-title">
                            '.$titles.' <img src="/themes/greentheme/views/site/Assets/img/calex-2.png" alt="logo">
                        </h4>
                    </div>
                    <div class="modal-body" style="background: url(/uploads/03-small.jpg) no-repeat center bottom;">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="" class="btn btn-default">
                           Learn More... 
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

            if($search_type == "project"){
                         $result .= '<li class="grid-solution animation-element fade-in">
                                        <div class="grid-solution-in">
                                          <img src="'.$image1.'"/>
                                          <a href="'.$link.'" target="_blank" class="detail">
                                            <div class="in">
                                              <h3>'.$titles.'</h3>
                                              <p class="yes">'.$descriptions.'</p>                
                                            </div>
                                          </a>
                                        </div>
                                      </li>';
            }

            if($search_type == "solution"){
                         $result .= '<li class="grid-solution animation-element fade-in">
                                        <div class="grid-solution-in">
                                          <img src="'.$image1.'"/>
                                          <a href="'.$link.'" target="_blank" class="detail">
                                            <div class="in">
                                              <h3>'.$titles.'</h3>
                                              <p class="yes">'.$descriptions.'</p>                
                                            </div>
                                          </a>
                                        </div>
                                      </li>';
            }
        }
     
}

?>