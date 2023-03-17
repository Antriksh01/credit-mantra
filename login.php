<?php include('header.php') ?>
<div class="py-12 bg-dual-gradient ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <div class="text-center mb-6">
          <h1 class="text-white">Login In Your Account</h1>
          <p class="text-white">
            We provide credit ratings to all your
            <br />existing and previous loans.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="mt-n14 mb-8">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-12 col-md-12 col-12">
        <div class="card mx-4 bg-white shadow">
          <div class="card-body">
            <form class="row g-1" action="login-otppage.php">

              <div class="col-lg-8 col-md-6 col-12">
                <label for="phonenumber" class="sr-only"></label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">+91</span>
                  </div>
                  <input id="phone" name="phone" maxlength="13" type="phone" pattern="^(([0-9]{10})|(0[0-9]{10}))$"
                    required placeholder="Enter Your Mobile Number" class="form-control">
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="d-grid">
                  <!-- <a href="login-otppage.php"> -->
                  <button type="submit" class="btn btn-dark">
                    Get Code by SMS
                  </button>
                  <!-- </a> -->
                </div>
              </div>
            </form>
            <p class="mt-2 fs-6">

            </p>
            <div class="form-check custom-checkbox">
              <input type="checkbox" class="form-check-input" id="information" />
              <label class="form-check-label fs-6" for="information">I agree
                with the rules for the provision of
                information.</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php') ?>