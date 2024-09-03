<?php
include_once "head.php";
//

if (!isset($_SESSION['user']) OR $_SESSION['user']==0){

    //redirect
    echo "  <script>location.replace('../')</script>";

}
?>
         
            <div class="main-content-inner">
               












            <div class="error-area text-center">
        <div class="container">
            <div class="error-content">
                <h2>Test Page</h2>
                <p>Page Test Div</p>
                <a href="index.php">Back to Dashboard</a>
            </div>
        </div>
    












            </div>
      
      <?php
include_once "foot.php";
      ?>