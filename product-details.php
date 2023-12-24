<?php
$sql = "SELECT * FROM " . $app->getPrefix() . "products WHERE category_id=$category"; // Replace 'your_product_table' with your actual table name
$products = $app->getList($sql);

foreach ($products as $product):
    ?>
    <li class="col-xs-12 col-sm-3 item">
        <div class="wrapper-hover">
            <a href="#" title="<?php echo $product['product_title']; ?>" class="product-image">
                <img alt="<?php echo $product['product_title']; ?>" src="images/<?php echo $product['image1']; ?>">
            </a>
            <div class="product-shop">
                <h3 class="product-name"><a href="#" title="<?php echo $product['product_title']; ?>">
                        <?php echo $product['product_title']; ?>
                    </a></h3>
                <div class="wrapper-hover-hiden">
                    <!-- Additional product details go here -->
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </li>
    <?php
endforeach;
?>