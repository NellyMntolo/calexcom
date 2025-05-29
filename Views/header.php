<?php
//ini_set('display_errors',1);

//error_reporting(E_ALL);

  $nav = '<nav id="menu" class="navbar navbar-default navbar-fixed-top on">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="/"><!--<i class="fa fa-play fa-rotate-270"></i> '.$menu_text1.' --> <img src="/themes/greentheme/views/site/Assets/img/calex-2.png" ></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#page-top" class="page-scroll">'.$menu_text2.'</a></li> -->
        <li><a href="#products" class="page-scroll">'.$menu_text3.'</a></li>
        <li><a href="#technology" class="page-scroll">'.$menu_text4.'</a></li>
        <li><a href="#case_study" class="page-scroll">'.$menu_text5.'</a></li>
        <li><a href="/Blog" class="page-scroll">'.$menu_text6.'</a></li>
        <li><a href="/About" class="page-scroll">'.$menu_text7.'</a></li>
        <li><a href="#contact" class="page-scroll">'.$menu_text8.'</a></li>


        <li class="language-selector">
                    <!-- <p>Language</p> -->
                    <!--<form action="?lang=en" method="GET"><button type="submit" name="lang" value="en" class="lang-nav">EN</button></form>
                    <form action="?lang=ch" method="GET"><button type="submit" value="ch" name="lang" class="">繁體中文</button></form>-->
                    
                <!-- Collect the nav links, forms, and other content for toggling -->
                  <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$lang_result.'<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        '.$active_language.'  
                        <!-- <li><form method="GET" action="?lang=zh"><button type="submit" class="lang-btn">ch test</button><input type="hidden" value="zh" name="lang"></form></li>
                        <li><a href="?lang=zh" class="lang-btn">lang test zh</a></li>
                        <li><a href="?lang=en" class="lang-btn">lang test en</a></li>
                        <li><form method="GET" action="?zh"><button type="submit" class="lang-btn">Chinese</button><input type="hidden" value="zh" name="lang"></form></li>
                        <li><form method="GET" action="?kr"><button type="submit" class="lang-btn">Korean</button><input type="hidden" value="kr" name="lang"></form></li>
                        <li><form method="GET" action="?jp"><button type="submit" class="lang-btn">Japanese</button><input type="hidden" value="jp" name="lang"></form></li>-->
                      </ul>
                    </li>
                  </ul>
        </li>
        
        <li class="searcher">
            <button class="lvn-search-trigger page-scroll"  data-toggle="modal" data-target="#myModal">
                <span><img src="/themes/greentheme/views/site/Assets/img/search.svg"/></span>
            </button>
        </li>

      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="close1" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-close fa-2x"></i>
        </div>
      </div>
      <div class="modal-body">
        <section>
            <div>
               <!-- <h1 class="text-center">Search Calexcom</h1> -->
            </div>
        </section>

        <section class="modal-para">
            <div class="text-center">
                <div>
                  <form method="POST" action="/Search">
                    <input type="search" class="searchinput" name="search" placeholder="search..."><input type="submit" class="searchbtn btn-default" value="Go">
                  </form>
                </div>
            </div>
        </section>
      </div>
    </div>
  </div>
</div>';


$nav2 = '<nav id="menu" class="navbar navbar-default navbar-fixed-top on">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="/"><!-- <i class="fa fa-play fa-rotate-270"></i> '.$menu_text1.' --> <img src="/themes/greentheme/views/site/Assets/img/calex-2.png" ></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <!-- <li '.theUrl('/').'><a href="/" class="page-scroll">'.$menu_text2.'</a></li> -->
        <li '.theUrl('/Products').'><a href="/Products" class="page-scroll">'.$menu_text3.'</a></li>
        <li '.theUrl('/Technology').'><a href="/Technology" class="page-scroll">'.$menu_text4.'</a></li>
        <li '.theUrl('/Case_Studies').'><a href="/Case_Studies" class="page-scroll">'.$menu_text5.'</a></li>
        <li '.theUrl('/Blog').'><a href="/Blog" class="page-scroll">'.$menu_text6.'</a></li>
        <li '.theUrl('/About').'><a href="/About" class="page-scroll">'.$menu_text7.'</a></li>
        <li><a id="our_contact_btn" href="#Contact" class="page-scroll">'.$menu_text8.'</a></li>


        <li class="language-selector">
                    <!-- <p>Language</p> -->
                    <!--<form action="?lang=en" method="GET"><button type="submit" name="lang" value="en" class="lang-nav">EN</button></form>
                    <form action="?lang=ch" method="GET"><button type="submit" value="ch" name="lang" class="">繁體中文</button></form>-->
                    
                <!-- Collect the nav links, forms, and other content for toggling -->
                  <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$lang_result.'<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        '.$active_language.'  
                        <!-- <li><form method="GET" action="?zh"><button type="submit" class="lang-btn">Chinese</button><input type="hidden" value="zh" name="lang"></form></li>
                        <li><form method="GET" action="?kr"><button type="submit" class="lang-btn">Korean</button><input type="hidden" value="kr" name="lang"></form></li>
                        <li><form method="GET" action="?jp"><button type="submit" class="lang-btn">Japanese</button><input type="hidden" value="jp" name="lang"></form></li>-->
                      </ul>
                    </li>
                  </ul>
        </li>


        <li class="searcher">
            <button class="lvn-search-trigger page-scroll"  data-toggle="modal" data-target="#myModal">
                <span><img src="/themes/greentheme/views/site/Assets/img/search.svg"/></span>
            </button>
        </li>


      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="close1" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-close fa-2x"></i>
        </div>
      </div>
      <div class="modal-body">
        <section>
            <div>
                <!-- <h1 class="text-center">Search Calexcom</h1> -->
            </div>
        </section>

        <section class="modal-para">
            <div class="text-center">
                <div>
                  <form method="POST" action="/Search">
                    <input type="search" class="searchinput" name="search" placeholder="search..."><input type="submit" class="searchbtn btn-default" value="Go">
                  </form>
                </div>
            </div>
        </section>
      </div>
    </div>
  </div>
</div>';

?>