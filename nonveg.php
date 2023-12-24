<?php include("header.php"); ?>
<div class="col1-layout main-container">
   <div class="container">
      <div class="row">
         <div class="col-xs-12">
            <div class="main">
               <div class="col-main">
                  <div class="padding-s">
                     <div class="std">
                        <div class="clear"></div>
                     </div>
                     <div class="breadcrumbs">
                        <ul>
                           <li class=home><a href=# title="Go to Home Page">Products</a> <span>></span>
                           <li class=category3><a href=#>Non Vegeterian Varieties</a>
                        </ul>
                     </div>
                     <ul class="row products-grid">
                        <?php
                        $category = 2;
                        include("product-details.php");
                        ?>
                     </ul>
                     <!-- Additional HTML/JS code for product grid goes here -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include("footer.php"); ?>