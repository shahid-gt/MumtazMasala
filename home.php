<?php include("header.php") ?>
<style>
@media only screen and (max-width: 767px){
.products-grid .product-shop {
    padding: 10px 5px;
}
}
</style>
<div class=fluid_container_wrap>
  <div class=fluid_container>
    <div class="camera_orange_skin camera_wrap"id=camera_wrap>
      <?php
      $sql = "SELECT * FROM ".$app->getPrefix()."banners";
      $banners = $app->getList($sql);
      foreach( $banners as $banner ):
      ?>
      <div data-link="<?php echo $banner['url']; ?>" data-src="<?php echo $web['host'].'uploads/banners/'.$banner['image1']; ?>"></div>
      <?php
      endforeach;
      ?>
    </div>
  </div>
</div>
<div class=banner-block-bg>
  <div class=container>
    <ul class="row banner-block">
      <?php
      $sql = "SELECT * FROM ".$app->getPrefix()."widgets";
      $widgets = $app->getList($sql);
      foreach( $widgets as $widget ):
        $ary = explode(' ', $widget['title']);
        $widget_title = $widget['title'];
        $widget_title = str_replace($ary[count($ary)-1], '', $widget_title).' <span>'.$ary[count($ary)-1].'</span>';
      ?>
      <li class="col-xs-12 col-sm-4">
        <a href="<?php echo $widget['url']; ?>">
          <div>
            <img alt="Mumtaz Masala" src="<?php echo $web['host'].'uploads/widgets/'.$widget['image1']; ?>">
            <div class="banner-block-c">
              <h2><?php echo $widget_title; ?></h2>
              <p><?php echo $widget['sub_title']; ?></p>
              <button onclick="location.href = '<?php echo $widget['url']; ?>'" class="button"><span><span>View More...</span></span></button>
            </div>
          </div>
        </a>
      </li>
      <?php
      endforeach;
      ?>
    </ul>
  </div>
</div>
<div class="col1-layout main-container">
  <div class=container>
    <div class=row>
      <div class=col-xs-12>
        <div class=main>
          <div class=col-main>
            <div class=padding-s>
              <div class=std>
                <div class=clear></div>
              </div>
              <div class="category-title page-title">
                <h2>Our Products</h2>
              </div>
                <ul class="row products-grid">
                  <?php
                  $sql  = "SELECT p.*, c.slug AS category_slug FROM ".$app->getPrefix()."products p";
                  $sql .= " LEFT JOIN ".$app->getPrefix()."categories c ON c.id = p.category_id";
                  $sql .= " ORDER BY RAND()";
                  $prods = $app->getList($sql, [], 1, 8);
                  foreach( $prods as $prod ):
                  ?>
                  <li class="col-xs-12 col-sm-3 item first">
                    <div class=wrapper-hover><a href="<?php echo $web['host'].$prod['category_slug']; ?>" class="product-image"><img alt="<?php echo $prod['product_title']; ?>" src="<?php echo $web['host']; ?>/uploads/products/<?php echo $prod['image1']; ?>"></a>
                      <div class=product-shop>
                        <h3 class=product-name><a href="<?php echo $web['host'].$prod['category_slug']; ?>"><?php echo $prod['product_title']; ?></a></h3>
                        <div class=wrapper-hover-hiden>
                          <div class=desc_grid><?php echo $prod['short_desc']; ?></div>
                          <div class=actions>
                            <button class="button btn-cart" onclick="setLocation('<?php echo $web['host'].$prod['category_slug']; ?>')" title="View More" type=button><span><span>View More...</span></span></button>
                          </div>
                        </div>
                      </div>
                      <div class=clear></div>
                    </div>
                  </li>
                  <?php
                  endforeach;
                  ?>
                </ul>
                <script>decorateList("widget-catalogsale-products-08e468e25c9140a0e605b9f2696e5ad9","none-recursive")</script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </div>
</div>

<?php include("foooter.php") ?>
