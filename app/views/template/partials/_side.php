<?php

/*
    ./app/views/template/partials/_side.php
  */


?>

<!-- About Me (Left Sidebar) Start -->
<div class="col-md-3">
  <div class="about-fixed">

    <div class="my-pic">
      <a href="index.html"><img src="images/pic/my-pic.png" alt=""></a>
      <nav id="menu">
        <ul class="menu-link">
          <li><a href="index.html">My blog</a></li>
        </ul>
      </nav>
      <?php
      include_once '../app/Controllers/categoriesController.php';
      \App\Controllers\CategoriesController\indexAction($conn);
      ?>
    </div>



    <div class="my-detail">

      <div class="white-spacing">
        <h1>Alex Parker</h1>
        <span>Web Developer</span>
      </div>

      <ul class="social-icon">
        <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#" target="_blank" class="github"><i class="fa fa-github"></i></a></li>
      </ul>

    </div>
  </div>
</div>
<!-- About Me (Left Sidebar) End -->