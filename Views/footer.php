<?php
//error_reporting(E_ALL);
  $footer = '<!-- Contact Section -->
<div id="contact" name="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>'.$footer_text4.'</h2>
      <hr>
    </div>
    <div class="col-md-7"> <!-- <div class="col-md-6"> -->
      <div class="map-canvas"></div>
    </div>
    <div class="col-md-5"> <!-- <div class="col-md-6"> -->
      
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" name="name" class="form-control" placeholder="'.$footer_text5.'" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" name="email" class="form-control" placeholder="'.$footer_text6.'" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="company" name="copmany" class="form-control" placeholder="'.$footer_text7.'" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="subject" name="subject" class="form-control" placeholder="'.$footer_text8.'" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="'.$footer_text9.'" required></textarea>
          <p class="help-block text-danger"></p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <img src="/themes/greentheme/views/site/custom-captcha.php" class="form-control" style="width: auto!important;" />
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="code" name="code" class="form-control" placeholder="'.$footer_text10.'" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>


        <div id="success"></div>
        <button type="submit" class="btn btn-default btn-lg" name="contact_calex">'.$footer_text11.'</button>
      </form>

      <!--<div class="social">
        <ul>
          '.$social.'
        </ul>
      </div>-->
    </div>

    <div class="col-md-12">
      <div class="social">
        <ul>
          '.$social.'
        </ul>
      </div>
    </div>


  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>&copy; '.date('Y').' '.$footer_text3.'</p>
      <p class="date_addr">'.$footer_text1.'&nbsp;&nbsp;&nbsp;</p>
      <p class="date_addr">'.$footer_text2.'</p>
    </div>
  </div>
</div>


<!-- Back to top -->
  <div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
      <!-- <i class="fa fa-angle-double-up" aria-hidden="true"></i> -->
      <i class="fa fa-anchor" aria-hidden="true"></i>
    </span>
  </div>

<!-- SEARCH -->
<!--
  <div class="lvn-overlay"></div>
<div class="lvn-overlay2"></div>
<div id="lvn-search" class="nm-search">
    <form method="POST" action="/Search">
        <input type="search" name="search" placeholder="'.$menu_text6.'">
    </form>
</div> 
-->
';
?>
