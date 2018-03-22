<!doctype html>
<html lang="en">
    <!-- head -->
      <?php
        include('layout/head.php');
      ?>
    <!-- end head -->

    <body>
        <!-- header -->
          <?php
            include('layout/header.php');
          ?>
        <!-- end header-->

            <!-- content -->

            <!-- DAT TOUR -->
              <?php
                include('layout/dattour.php');
              ?>
            <!-- END DAT TOUR -->

            <!-- TOUR NOI BAT -->
              <?php
                include('layout/tinnoibat.php');
              ?>
            <!-- END TOUR NOI BAT -->
            
             <?php
                include('layout/diemdenyeuthich.php');
              ?>
        
            <!-- end content -->

            <!-- footer -->
              <?php
                include('layout/footer.php');
              ?>
            <!--end footer -->
           
           <!-- script -->
              <?php
                include('layout/script.php');
              ?>
            <!--end script -->
            <script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
    </script>
    </body>

</html>