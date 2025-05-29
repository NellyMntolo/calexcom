<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

$current_lang = $_SESSION['lang'];

                        $sqlindexen = 'select * from hovvver_index where code ="'.$current_lang.'"';
                        $retvalindexen = mysql_query( $sqlindexen, $conn );                 
                             if(! $retvalindexen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowindexen = mysql_fetch_array($retvalindexen, MYSQL_ASSOC);
                            $entext1 = $rowindexen['text1'];
                            $entext2 = $rowindexen['text2'];
                            $entext3 = $rowindexen['text3'];
                            $entext4 = $rowindexen['text4'];
                            $entext5 = $rowindexen['text5'];
                            $entext6 = $rowindexen['text6'];
                            $entext7 = $rowindexen['text7'];
                            $entext8 = $rowindexen['text8'];
                            $entext9 = $rowindexen['text9'];
                            $entext10 = $rowindexen['text10'];
                            $entext11 = $rowindexen['text11'];
                            $entext12 = $rowindexen['text12'];
                            $entext13 = $rowindexen['text13'];
                            $entext14 = $rowindexen['text14'];
                            $entext15 = $rowindexen['text15'];
                            $entext16 = $rowindexen['text16'];
                            $entext17 = $rowindexen['text17'];
                            $entext18 = $rowindexen['text18'];
                            $entext19 = $rowindexen['text19'];
                            $entext20 = $rowindexen['text20'];
                            $entext21 = $rowindexen['text21'];
                            $entext22 = $rowindexen['text22'];
                            $entext23 = $rowindexen['text23'];
                            $enimage1 = $rowindexen['image1'];
                            $enimage2 = $rowindexen['image2'];
                            $enimage3 = $rowindexen['image3'];
                            $enimage4 = $rowindexen['image4'];
                            $enimage5 = $rowindexen['image5'];
                            $enimage6 = $rowindexen['image6'];
                            $enimage7 = $rowindexen['image7'];
                            $enimage8 = $rowindexen['image8'];
                            $enimage9 = $rowindexen['image9'];
                            $enimage10 = $rowindexen['image10'];

                            $sqlfirst = 'select * from index_first_slider ORDER BY idx DESC';
                            $retvalfirst = mysql_query( $sqlfirst, $conn );                 
                                 if(! $retvalfirst )
                                 {
                                    die('Could not get data: ' . mysql_error());
                                 }


?>