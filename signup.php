<?php include('header.php') ?>
<div class="py-lg-14 py-10 bg-dual-gradient">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-6 col-lg-5 col-md-6 col-sm-12 col-12">
        <div class="mb-6 mb-lg-0">
          <!-- section title start-->
          <h1 class="text-white mb-3">Get Started Simple & Securely</h1>
          <!-- <p class="text-white lead">Donec ullamcorper magna non orci scelerisque consectetur. Aenean ornare lectus nunc, elementum fermentum erat mattis id.</p> -->
          <!-- <p class="text-white mb-4">Aenean ornare lectus nunc, elementum fermentum erat mattis id. Donec ullamcorper magna non orci scelerisque consectetur. </p> -->
          <h3 class="text-white">Just 3 step away</h3>
          <ul class="list-unstyled mb-0 text-white">
            <li>1. Fill the online form. Apply Now</li>
            <li>2. Fill in the mandatory details, & click Submit</li>
            <li>3. Our representative will get in touch with you</li>
          </ul>
        </div>
        <!-- /.section title start-->
      </div>
      <div class="offset-xl-1 col-lg-5 offset-lg-2 col-lg-5 col-md-6 col-sm-12 col-12">
        <div class="card card-body border-0">
          <h3 class="mb-3">Sign Up Your Account</h3>
          <form method="post" action="login-otppage.php">
            <div class="row">
              <!-- Text input-->
              <div class="mb-2 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <label class="form-label sr-only" for="name">Name</label>
                <input id="name" name="name" type="text" placeholder="Name" class="form-control" required="">
              </div>
              <!-- Text input-->
              <div class="mb-2  col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <label class="form-label sr-only" for="email">E-Mail</label>
                <input id="email" name="email" type="email" placeholder="E-mail" class="form-control" required="">
              </div>
              <!-- Text input-->
              <div class="mb-2  col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <label class="form-label sr-only" for="phone">Phone</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">+91</span>
                  </div>
                  <input id="phone" name="phone" maxlength="13" type="phone" pattern="^(([0-9]{10})|(0[0-9]{10}))$"
                    required placeholder="Enter Your Mobile Number" class="form-control">
                </div>
              </div>
              <!-- <div class="mb-2  col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <label class="form-label sr-only" for="OTP">OTP</label>
                  <input id="OTP" name="OTP" type="number" placeholder="OTP" class="form-control" required="">
                </div> -->
              <!-- Select Basic -->
              <!-- <div class="mb-3  col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <label class="form-label sr-only" for="city">City</label>
                  <select id="city" name="city" class="form-select">
                      <option value="Ahmedabad">Ahmedabad</option>
                      <option value="Surat">Surat</option>
                      <option value="Vadodara">Vadodara</option>
                      <option value="Rajkot">Rajkot</option>
                      <option value="Bhavnagar">Bhavnagar</option>
                                        </select>
                </div> -->
              <!-- <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                    <div class="steps-slider"></div>
                    <input type="text" class="form-control mt-3 input-with-keypress-0">
                </div> -->
              <!-- Button -->
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php') ?>