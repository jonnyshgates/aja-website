<?php
include 'functions.php';
$page = pageId();
?>
<div class="row">
              <div class="eight columns">
                <img class="logo" src="/img/ajalogo.png" alt="Home Cleaning" >
                <span id="mobile-nav"><i class="fa fa-bars fa-2x"></i></span>
              </div>
              <div class="eight columns">
                <div id="navigation">
                  <ul>
                    <li><a <?php if($page === 'Home'): ?>class="selected"<?php endif; ?> href="index.php"> Home </a></li>
                    <li><a <?php if($page === 'Services'): ?>class="selected"<?php endif; ?> href="services.php"> Services </a></li>
                    <li><a <?php if($page === 'About'): ?>class="selected"<?php endif; ?> href="about.php"> About </a></li>
                    <li><a <?php if($page === 'Contact'): ?>class="selected"<?php endif; ?> href="contact.php"> Contact </a></li> 
                  </ul>
                </div>
              </div>
            </div>