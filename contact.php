<?php include("header.php") ?>

<section class=contact>
  <div class=container>
    <div class=row>
      <div class=breadcrumbs>
        <h1 class=center style="padding:10px 0">Contact Us</h1>
      </div>
    </div>
    <div class="row contact-img">
      <div class="col-md-4 col-md-offset-1"><img src=images/contactus.jpg></div>
      <div class="col-md-4 col-md-offset-1">
        <div class="contact-us footer-col-content">
          <p><strong style=color:#D63034>Contact Person : Mr. Salman</strong>
          <div class=divider></div>
          <p><i class="fa fa-building-o"></i><span>&nbsp;&nbsp;2766/8 Nr Moonlight Lalbava Timba Road, Dariapur, Ahmedabad, Gujarat INDIA.</span>
          <div class=divider></div>
          <p><i class="fa fa-phone"></i><span>&nbsp;&nbsp;079-22167799</span>
          <div class=divider></div>
          <p><i class="fa fa-mobile"></i><span>&nbsp;&nbsp;+(91) 9327347954 / 9375007273 </span>
          <div class=divider></div>
          <p><i class="fa fa-envelope"></i><span>&nbsp;&nbsp;mumtazmasala@yahoo.com</span>
          <div class=divider></div>
        </div>
      </div>
    </div>
    <div class=row>
      <div class="col-md-12 contacts">
        <h4>Map</h4>
        <div id=googlemap>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14686.853179043548!2d72.5933386!3d23.0342969!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x281454c7038b7a15!2sMUMTAZ%20GRUH%20UDHYOG!5e0!3m2!1sen!2sin!4v1597077886556!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <style>
#gmap_canvas img{max-width:none!important;background:0 0!important}
</style>
          </div>
          <a href=https://www.embed-map.net/ style=color:#fff>adding google map to website</a>
          <script src="https://embedmaps.com/google-maps-authorization/script.js?id=cca7d4fa10ff9676ffb8db84efa93e551e9bf449"></script>
          <script>function init_map(){var a={zoom:12,center:new google.maps.LatLng(23.0340575,72.59367929999996),mapTypeId:google.maps.MapTypeId.ROADMAP};map=new google.maps.Map(document.getElementById("gmap_canvas"),a),marker=new google.maps.Marker({map:map,position:new google.maps.LatLng(23.0340575,72.59367929999996)}),infowindow=new google.maps.InfoWindow({content:"<strong>Mumtaz Masala</strong><br>2766/8 Nr Moonlight Lalbava Timba Road, Dariapur,  <br> Ahmedabad,<br>"}),google.maps.event.addListener(marker,"click",function(){infowindow.open(map,marker)}),infowindow.open(map,marker)}google.maps.event.addDomListener(window,"load",init_map)</script>
        </div>
        <div class=clear></div>
      </div>
    </div>
  </div>
</section>
<?php require('foooter.php'); ?>
