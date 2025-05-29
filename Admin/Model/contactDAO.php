<?php
include 'dbconfig.php';
mysql_set_charset("utf8");
$current_lang = $_SESSION['lang'];
                        $sqlcontacten = 'select * from hovvver_contact where code ="'.$current_lang.'"';
                        $retvalcontacten = mysql_query( $sqlcontacten, $conn );                 
                             if(! $retvalcontacten )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowcontacten = mysql_fetch_array($retvalcontacten, MYSQL_ASSOC);
                            $entext1 = $rowcontacten['text1'];
                            $entext2 = $rowcontacten['text2'];
                            $entext3 = $rowcontacten['text3'];
                            $entext4 = $rowcontacten['text4'];
                            $entext5 = $rowcontacten['text5'];
                            $entext6 = $rowcontacten['text6'];
                            $entext7 = $rowcontacten['text7'];
                            $entext8 = $rowcontacten['text8'];
                            $entext9 = $rowcontacten['text9'];
                            $entext10 = $rowcontacten['text10'];
                            $enimage1 = $rowcontacten['image1'];


?>