<?php
include 'dbconfig.php';
mysql_set_charset("utf8");
$current_lang = $_SESSION['lang'];
                        $sqlcart = 'select * from hovvver_cart_module where code ="'.$current_lang.'"';
                        $retvalcart = mysql_query( $sqlcart, $conn );                 
                             if(! $retvalcart )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowcart = mysql_fetch_array($retvalcart, MYSQL_ASSOC);
                            $idx = $rowcart['idx']; 
                            $entext1 = $rowcart['text1'];
                            $entext2 = $rowcart['text2'];
                            $entext3 = $rowcart['text3'];
                            $entext4 = $rowcart['text4'];
                            $entext5 = $rowcart['text5'];
                            $entext6 = $rowcart['text6'];
                            $entext7 = $rowcart['text7'];
                            $entext8 = $rowcart['text8'];

?>