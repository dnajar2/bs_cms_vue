<?php
$show = "";
if(isset($_GET['page'])){
    $show = $_GET['page'];
}
$userId = null;
if(isset($_GET['id']) && !empty($_GET['id'])){
    $userId = $_GET['id'];
}


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
                case 'edit':
                    include 'includes/editUser.php';
                    break;
                default:
                    include 'includes/home.php';
                    break;

            }
        ?>
        total:{{total}}<br>
        <users-table v-on:increment="incrementTotal"></users-table>
    </div>

<script src="libs/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/moment"></script>
<script src="js/components.js"></script>
    <script src="js/application.js"></script>

        <?php
        if(!empty($show)){
            echo "<script>                
                    vm.page = '$show';
                    vm.userId = '$userId';
                </script>";
        }
        ?>
  </body>
</html>
