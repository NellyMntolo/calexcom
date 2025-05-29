<?php
include 'dbconfig.php';
mysql_set_charset("utf8");
$current_lang = $_SESSION['lang'];

$locationid = mysql_real_escape_string($_GET['first_slider_id'],$conn);

                        $sqlfirst = 'select * from myshop_index_slider WHERE idx="'.$locationid.'" LIMIT 1';
                        $retvalfirst = mysql_query( $sqlfirst, $conn );                 
                             if(! $retvalfirst )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowfirst = mysql_fetch_array($retvalfirst, MYSQL_ASSOC);
                            $idx = $rowfirst['idx']; 
                            $entext1 = $rowfirst['text1'];
                            $entext2 = $rowfirst['text2'];
                            $entext3 = $rowfirst['text3'];
                            $entext4 = $rowfirst['text4'];
                            $enimage1 = $rowfirst['image1'];
?>