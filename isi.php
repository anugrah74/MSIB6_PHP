<div style="height:720px">
        <!-- Halaman Depan -->
   <?php
    //index.php?hal=produk
    error_reporting(0);
    $hal=$_GET['hal'];
    if(!empty($hal)){
        include_once $menu_bawah[$hal];
    }
    else {
        include_once "home.php";
    }   
    ?>
</div>