<!DOCTYPE html>
<html lang="en">
<?php include('./parts/head.php'); ?>
<body>
    <?php include('./parts/menu.php'); ?>
    <div class="app-content flex">
        <?php include('./parts/banner.php'); ?>
        
        <div class="section-2">
            <?php 
                include('./parts/products.php');
                include('./parts/services.php');
            ?>
        </div>

        <div class="section-3">
            <?php 
                include('./parts/fundementals.php');
                include('./parts/comparison.php');
            ?>
        </div>

        <?php include('./parts/footer.php'); ?>
    </div>

    <!-- =============== JQUERY =============== -->
    <script src="js/jquery-2.1.4.min.js"></script>

    <!-- =============== PLUGIN =============== -->
    <script src="js/semantic.min.js"></script>

    <script src="js/app-v7.js"></script>
</body>
</html>
