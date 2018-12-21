<?php
$show = $_GET['page'];

    //HTML header
    include ('includes/html_header.php');
    //    <!-- navBar -->

    include ('includes/header.php');
    ?>
    <!-- end navBar -->
    <div id="app" class="container-fluid" >
        <?php
            switch ($show){
                case 'home':
                    include 'includes/home.php';
                    break;
                case 'users':
                    include 'includes/users.php';
                    break;
            }
        ?>

    </div>

    <script src="libs/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/application.js"></script>
        <?php
        if(!empty($show)){
            echo "<script>                
                    vm.page = '$show';
                </script>";
        }
        ?>
  </body>
</html>
