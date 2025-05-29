<?php
include '../lang/lang.php';
mysql_set_charset("utf8");

include 'menuDAO.php';
include 'footerDAO.php';

$current_lang = $_SESSION['lang'];

$solution_content = '';
 


                        $sqlallsolutionsen = 'select * from hovvver_solution where code ="'.$current_lang.'" ORDER BY sortable_order ASC';
                        $retval_allsolutions_en = mysql_query( $sqlallsolutionsen, $conn );                 
                             if(! $retval_allsolutions_en )
                             {
                                die('Could not get data: ' . mysql_error());
                             }  

                        $allsolutions = '';
                        while($row_allsolutions_en = mysql_fetch_array($retval_allsolutions_en, MYSQL_ASSOC)){
                            $solutionidx = $row_allsolutions_en['idx'];
                            $text4 = $row_allsolutions_en['text4'];
                            $text5 = $row_allsolutions_en['text5'];
                            $solution_entext6 = $row_allsolutions_en['text6']; 
                            $image1 = $row_allsolutions_en['image1'];
                            $image2 = $row_allsolutions_en['image2'];
                            $image3 = $row_allsolutions_en['image3'];

                            $solution_textparagraph6 = trim($solution_entext6);
                            $solution_trimmedtext6 = nl2br($solution_textparagraph6); 
                            $solution_text6 = $solution_trimmedtext6;
                            
                            $url = $row_allsolutions_en['url'];


                                                            // <div class="col-md-4">
                                                            //   <div class="service left-icon probootstrap-animate">

                                                            //     <div class="icon">
                                                            //       <i class="'.$icon.'"></i>
                                                            //     </div>
                                                            //     <div class="text">
                                                            //       <h3 class="heading">'.$text4.'</h3>
                                                            //       <p>'.$text5.'</p>
                                                            //       <!--<p><a href="/Capabilities/Capability/'.$url.'">Learn more</a></p>-->
                                                            //     </div>

                                                            //   </div>
                                                            // </div>


                                             // $allsolutions .= '<li class="grid-solution animation-element fade-in">
                                             //                  <div class="grid-solution-in">
                                             //                    <img src="'.$image.'"/>
                                             //                    <a href="'.$text6.'" target="_blank" class="detail">
                                             //                      <div class="in">
                                             //                        <h3>'.$text4.'</h3>
                                             //                        <p class="yes">'.$text5.'</p>                
                                             //                      </div>
                                             //                    </a>
                                             //                  </div>
                                             //                </li>'; 


                                                     $allsolutions .= '<div class="col-sm-6 col-md-3 col-lg-3">
                                                    <div class="portfolio-item animated">
                                                      <div class="hover-bg"> <a href="#" data-toggle="modal" data-target="#myModal-'.$solutionidx.'">
                                                        <div class="hover-text">
                                                          <h4>'.$text4.'</h4>
                                                          <!--<p>'.$text5.'</p>-->
                                                        </div>
                                                        <img src="'.$image1.'" class="img-responsive" alt="'.$image1.'"> </a> </div>
                                                    </div>
                                                  </div>'; 


$solution_content .= '<div id="myModal-'.$solutionidx.'" class="modal fade" data-easein="bounceIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
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
                            '.$solution_text6.'
                        </p>
                    </div>
                    <div class="modal-footer">
                        <!--<a href="" class="btn btn-default">
                           Learn More... 
                        </a>-->

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
                        //$lang['allsolutions'] = $allsolutions;

                        $sqlen_all_solution = 'select * from hovvver_all_solution where code ="'.$current_lang.'"';
                        $retvalen_all_solution = mysql_query( $sqlen_all_solution, $conn );
                             if(! $retvalen_all_solution )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $rowen_all_solution = mysql_fetch_array($retvalen_all_solution, MYSQL_ASSOC);
                            $main_solution_text1 = $rowen_all_solution['text1'];
                            $main_solution_text2 = $rowen_all_solution['text2'];
                            $main_solution_text3 = $rowen_all_solution['text3'];
                            $main_solution_text4 = $rowen_all_solution['text4'];
                            $main_solution_text5 = $rowen_all_solution['text5'];
                            $main_solution_text6 = $rowen_all_solution['text6'];
                            $main_solution_image1 = $rowen_all_solution['image1'];
?>