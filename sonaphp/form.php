<?php
include "connect.php";
include "header.php";
?>
<style>
  .field5:after {
    content: "";
    position: absolute;
    background-image: url("./image/creative-process.png");
    background-repeat: no-repeat;
    background-position: center left;
    background-size: cover;
    left: 4px;
    top: 8px;
    width: 30px;
    height: 30px;
  }
</style>
<div class="banner">
  <img src="./image/songbanner.jpg" alt="" class="w-100" height="500" />
</div>
<div class="container-fluid contactus my-5">
  <div class="TopTxt py-5 text-center">
    <h4>Contact Us</h4>
    <h2>Let’s talk about your project.</h2>
    <p>
      We’d love to hear from you. Let’s discuss a project, answer any questions you may have, or share<br />
      your point of view on marketing and design.
    </p>
  </div>
  <div class="container">
    <div class="row py-5">
      <div class="col-md-6 shadow formcol">
        <form action="insert.php" method="POST">
          <div class="field1 my-3">
            <input type="text" placeholder="Name" name="NAME" class="w-100" />
          </div>
          <div class="field2 my-3">
            <input type="text" placeholder="Email Address" name="EMAIL" class="w-100" />
          </div>

          <div class="field5 my-3">
            <input type="text" placeholder="Course" name="COURSE" class="w-100" />
          </div>
          <div class="field3 my-3">
            <input type="text" placeholder="Phone No." name="MOBILE" class="w-100" />
          </div>
          <div class="field4 my-3 position-relative">
            <input type="text" placeholder="Message" name="MESSAGE" class="w-100" />
          </div>
          <div class="fieldbutton text-center">
            <button type="submit " name="submit" class="btn button_1">
              <strong>SUBMIT</strong>
            </button>
          </div>
        </form>
      </div>
      <div class="col-md-6 shadow p-0">
        <div class="contactUs p-4">
          <div class="contactUs1 my-4 py-2">
            <div class="myicon"><i class="bx bxs-edit-location bx-lg"></i></div>
            <div class="form-para">
              <h3>E3 Developers</h3>
              <p class="">Suite B-08, D-247/4A Procapitus Business Park, Sector 63, Noida, Uttar Pradesh 201301</p>
            </div>
          </div>
          <div class="contactUs1 w-100 mb-4 py-2">
            <div class="myicon"><i class="bx bxs-phone-call bx-lg"></i></div>
            <div class="form-para">
              <h3>Phone Number</h3>
              <p>+918826549093</p>
              <p>+918826549093</p>
            </div>
          </div>
          <div class="contactUs1 w-100 mb-4 py-2">
            <div class="myicon"><i class="bx bx-envelope bx-lg"></i></div>
            <div class="form-para">
              <h3>Email Address</h3>
              <p>Project@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php"?>
