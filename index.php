<?php

function includeWithVariables($filePath, $variables = array(), $print = true)
{
    $output = NULL;
    if(file_exists($filePath)){
        // Extract the variables to a local namespace
        extract($variables);

        // Start output buffering
        ob_start();

        // Include the template file
        include $filePath;

        // End buffering and return its contents
        $output = ob_get_clean();
    }
    if ($print) {
        print $output;
    }
    return $output;

}
?>

<!DOCTYPE html>
<html lang="en">
<!-- <?php include('./parts/head.php'); ?> -->
<body>
    <!-- <?php include('./parts/menu.php'); ?> -->
    <div class="app-content flex">
        <!-- <?php include('./parts/banner.php'); ?> -->
        
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
</body>
</html>