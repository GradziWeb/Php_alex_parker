<?php

/*
./app/views/template/index.php
*/

?>

<!DOCTYPE html>
<html lang="en">
<?php include '../app/views/template/partials/_head.php'; ?>

<body>

   <!-- Preloader Start -->
   <div class="preloader">
      <div class="rounder"></div>
   </div>
   <!-- Preloader End -->

   <div id="main">
      <div class="container">
         <div class="row">

            <?php include '../app/views/template/partials/_side.php'; ?>

            <?php include '../app/views/template/partials/_main.php'; ?>


         </div>
      </div>
   </div>

   <!-- Back to Top Start -->
   <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
   <!-- Back to Top End -->

   <?php include '../app/views/template/partials/_scripts.php'; ?>

</body>

</html>