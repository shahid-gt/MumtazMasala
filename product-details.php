<?php
$sql = "SELECT * FROM " . $app->getPrefix() . "products WHERE category_id=$category"; // Replace 'your_product_table' with your actual table name
$products = $app->getList($sql);
?>

<div class="container-fluid" style="background-color:#e6e6e6;border-radius: 20px;">
    <div class="container">
        <div class="row">
            <?php
            foreach ($products as $product): ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-5">
                    <div class="card product-card">
                        <img src="images/<?php echo $product['image1']; ?>"
                            class="card-img-top product-card-img zoom-card p-5"
                            alt="Sorry! Image <?php echo $product['product_title']; ?> Not Found." />
                        <div class="card-body">
                            <h1 class="text-center mt-4"><span class="badge rounded-pill bg-primary">
                                    <?php echo $product['product_title']; ?>
                                </span></h1>
                        </div>
                        <div class="product-description">
                            <span class="badge rounded-pill bg-success"> &#x20B9; 15 </span> <br>
                            <span class="badge rounded-pill bg-success">50 gm | Packet</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>