<div class=footer-container>
  <div class=container>
    <div class=row>
      <div class=col-xs-12>
        <div class=footer>
          <p id=back-top><a href=#top><span></span></a>
          <div class=footer-cols-wrapper>
            <div class=footer-col>
              <h4>About Mumtaz</h4>
              <div class=footer-col-content>
                <p>Mumtaz introduces itself as a prominent manufacturer and supplier of Instant Masala. Established on
                  2002, the company has always followed the philosophy of providing quality products and services to our
                  ever increasing clientele. We can customize the products according to clients requirements. We
                  manufacture all our products in most hygienic manner. All our food products are completely free from
                  preservatives and absolutely delicious.</p>
              </div>
            </div>
            <div class=footer-col>
              <h4>Products</h4>
              <div class=footer-col-content>
                <ul>
                  <?php
                  $sql = "SELECT * FROM " . $app->getPrefix() . "categories";
                  $cats = $app->getList($sql);
                  foreach ($cats as $cat):
                    ?>
                    <li><a href="<?php echo $web['host'] . $cat['slug']; ?>">
                        <?php echo $cat['title']; ?>
                      </a></li>
                    <?php
                  endforeach;
                  ?>

                </ul>
              </div>
            </div>
            <div class=footer-col>
              <h4>Contact Info</h4>
              <div class=footer-col-content>
                <ul>
                  <li><i class="fa fa-building-o"></i><span>&nbsp;&nbsp;2766/8 Nr Moonlight Lalbava Timba Road,
                      Dariapur, Ahmedabad, Gujarat INDIA.</span></li>
                  <li><i class="fa fa-phone"></i><span>&nbsp;&nbsp;079-22167799</span></li>
                  <li><i class="fa fa-mobile"></i><span>&nbsp;&nbsp;+(91) 9327347954, 9375007273</span></li>
                  <li><i class="fa fa-envelope"></i><span>&nbsp;&nbsp;mumtazmasala@yahoo.com</span></li>
                </ul>
              </div>
            </div>
            <div class="footer-col contacts">
              <h4>Map</h4>
              <div class=footer-col-content>
                <div id=googlemap>
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14686.853179043548!2d72.5933386!3d23.0342969!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x281454c7038b7a15!2sMUMTAZ%20GRUH%20UDHYOG!5e0!3m2!1sen!2sin!4v1597077886556!5m2!1sen!2sin"
                    width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>

                </div>
              </div>
            </div>
          </div>
          <div class=divider></div>
          <div class=footer-shadow>
            <p style=float:left>Copyright &copy; 2016.<strong>Mumtaz Masala</strong>. All Rights Reserved.
            <p style=float:right>Designed By: <a href=http://businessinfoindia.com /><strong>Business Info Solution Pvt.
                Ltd.</strong></a>
            <div class=clear></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>