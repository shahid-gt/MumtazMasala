<?php include("header.php"); ?>
<?php

// Get the requested URL path
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// Remove leading and trailing slashes, and explode the path
$route = trim($urlPath, '/');
$routeParts = explode('/', $route);
$page = $routeParts[1];
$catSql = "SELECT * FROM " . $app->getPrefix() . "categories WHERE page_name='$page'";
$cat = $app->getList($catSql);
?>
<div class="p-5">
    <div class="breadcrumbs">
        <ul>
            <li><a href="index.php" title="Go to Home Page">Products</a> <span>></span>
            <li>
                <?php echo $cat[0]['title'] ?>
            </li>
        </ul>
    </div>
    <?php
    $category = $cat[0]['id'];
    include("product-details.php");
    ?>
</div>

<?php require('foooter.php'); ?>