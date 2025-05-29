<?php
include 'dbconfig.php';
mysql_set_charset("utf8");
$current_lang = $_SESSION['lang'];
                        $sqlweareen = 'select * from myshop_reg_login where code ="'.$current_lang.'"';
                        $retvalweareen = mysql_query( $sqlweareen, $conn );                 
                             if(! $retvalweareen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowweareen = mysql_fetch_array($retvalweareen, MYSQL_ASSOC);
                            $idx = $rowweareen['idx']; 
                            $entext1 = $rowweareen['text1'];
                            $entext2 = $rowweareen['text2'];
                            $entext3 = $rowweareen['text3'];
                            $entext4 = $rowweareen['text4'];
                            $entext5 = $rowweareen['text5'];                            
                            $entext6 = $rowweareen['text6'];
                            $entext7 = $rowweareen['text7'];
                            $entext8 = $rowweareen['text8'];
                            $entext9 = $rowweareen['text9'];
                            $entext10 = $rowweareen['text10'];
                            $entext11 = $rowweareen['text11'];
                            $entext12 = $rowweareen['text12'];
                            $entext13 = $rowweareen['text13'];
                            $entext14 = $rowweareen['text14'];
                            $entext15 = $rowweareen['text15'];
                            $reg_entext16 = $rowweareen['text16'];
                            $entext17 = $rowweareen['text17'];
                            $entext18 = $rowweareen['text18'];
                            $entext19 = $rowweareen['text19'];
                            $entext20 = $rowweareen['text20'];
                            $entext21 = $rowweareen['text21'];
                            $entext22 = $rowweareen['text22'];
                            $enimage1 = $rowweareen['image1'];
                            $enimage2 = $rowweareen['image2'];

                            $textparagraph16 = trim($reg_entext16);
                            $trimmedtext16 = nl2br($textparagraph16); 
                            $entext16 = $trimmedtext16;

?>