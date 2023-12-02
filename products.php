<?php
include("header.php");
$category_id = $request->get('category_id', 0);
$sql = "SELECT * FROM ".$app->getPrefix()."categories WHERE id = ?";
$rws = $app->getList($sql, [$category_id]);
$category_title = '';
if ( count($rws) > 0 )
   $category_title = $rws[0]['title'];
?>
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
                     <div class=breadcrumbs>
                        <ul>
                           <li class=home><a href=# title="Go to Home Page">Products</a> <span>></span>
                           <li class=category3><a href=#><?php echo $category_title; ?></a>
                        </ul>
                     </div>
                     <ul class="row products-grid">
                        <?php
                        $sql  = "SELECT p.* FROM ".$app->getPrefix()."products p WHERE category_id = ?";
                        $prods = $app->getList($sql, [$category_id]);
                        foreach( $prods as $prod ):
                        ?>
                        <li class="col-xs-12 col-sm-3 item first">
                           <div class=wrapper-hover>
                              <a href=# title="<?php echo $prod['product_title']; ?>" class="product-image"><img alt="<?php echo $prod['product_title']; ?>" src="<?php echo $web['host']; ?>/uploads/products/<?php echo $prod['image1']; ?>"></a>
                              <div class="product-shop">
                                 <h3 class="product-name"><a href="#" title="<?php echo $prod['product_title']; ?>"><?php echo $prod['product_title']; ?></a></h3>
                                 <div class="wrapper-hover-hiden"></div>
                              </div>
                              <div class="label-product"></div>
                              <div class="clear"></div>
                           </div>
                        </li>
                        <?php
                        endforeach;
                        ?>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include("foooter.php") ?>
