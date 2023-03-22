<?php
include('./template/head.php');
?>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <?php
  include('./template/navbar.php');
  ?>
    <!--Hero-->
    <?php
  include('./template/hero.php');
  ?>
    <!--Left Col-->
    <?php
  include('./template/leftCol.php');
  ?>
    <!--Right Col-->
    <?php
  include('./template/rightCol.php');
  ?>
    <!-- Change the colour #f8fafc to match the previous section colour -->
    <?php
  include('./template/changeColour.php');
  ?>
    <!--Footer-->
    <?php
  include('./template/footer.php');
  ?>
    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
    <?php
  include('./template/script.php');
  ?>
</body>

</html>