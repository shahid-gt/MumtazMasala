<?php include("header.php") ?>

<section class=contact>
  <div class=container>
    <div class=row>
      <div class=breadcrumbs>
        <h1 class=center style="padding:10px 0">Inquiry Form</h1>
      </div>
    </div>
    <div class="row enquiry">
      <div class="col-md-12 enq">
      <form method="post" action="send.php">
        <h6>*All fields are mandatory.</h6>
        <div class="col-md-6 form-group">
          <input class=form-control name=name placeholder="Full Name:" required type="text">
        </div>
        <div class="col-md-6 form-group">
          <input class=form-control name=company placeholder="Company Name:"required type="text">
        </div>
        <div class="col-md-6 form-group">
          <input class=form-control name=email placeholder=E-mail: type="text">
        </div>
        <div class="col-md-6 form-group">
          <input class=form-control name=phone placeholder="Contact No:"required type="text">
        </div>
        <div class="form-group col-md-12">
          <textarea class=form-control name=message placeholder="Enter Your Message Here:"required></textarea>
        </div>
        <br>
        <div class="col-md-6 col-md-offset-5">
        <input type="submit" name="submit" value="Send" />
         <!-- <button name=send type=submit value=submit>SEND</button>-->
        </div>
       </form>
        <br>
      </div>
    </div>
  </div>
</section>
<?php include("foooter.php") ?>
