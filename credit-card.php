<?php include('header.php') ?>
<div class="bg-dual-gradient py-lg-8 py-5">
  <div class="container">
    <div class="row">
      <div class="offset-xl-2 col-xl-8  col-md-12 col-12">
        <div class="mb-10 text-center">
          <!-- section title start-->
          <h1 class="text-white mb-1">Just take 2 minute for your Credit Card </h1>
          <p class="text-white-50 lead">Fill up the form below and Credit Card executive would get in touch with you</p>
        </div>
        <!-- /.section title start-->
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class=" col-lg-6 col-md-6 col-sm-12 col-12">
          <h2 style="color:#ffc107">Get instant approval and enjoy benefits with a Credit Card.</h2>
          <ul class="text-white mt-5">
            <li>EMI Conversion</li>
            <li>Airport lounge access</li>
            <li>Interest-free cash withdrawal up to 50 days</li>
            <li>Up to 12X reward points</li>
          </ul>
        </div>
        <div class=" col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="students-request-form">
            <form method="post" action="https://easetemplate.com/borrow/pages/get-quote.php">
              <div class="row g-2">
                <!-- Text input-->
                <div class="mb-3 col-md-6 col-12">
                  <label class="form-label sr-only" for="name">Name</label>
                  <input id="name" name="name" type="text" placeholder="Name" class="form-control border-0 "
                    required="">
                </div>
                <!-- Text input-->
                <div class="mb-3 col-md-6 col-12">
                  <label class="form-label sr-only" for="email">E-Mail</label>
                  <input id="email" name="email" type="text" placeholder="E-mail" class="form-control border-0 "
                    required="">
                </div>
                <!-- Text input-->
                <div class="mb-3 col-md-6 col-12">
                  <label class="form-label sr-only" for="phone">Phone</label>
                  <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control border-0 "
                    required="">
                </div>
                <!-- Select Basic -->
                <div class="mb-3 col-md-6 col-12">
                  <label class="form-label sr-only" for="city">Select Bank</label>
                  <select id="city" name="city" class="form-select border-0 ">
                    <option value="HDFC">HDFC</option>
                    <option value="ICICI">ICICI</option>
                    <option value="SBI">SBI</option>
                    <option value="Yes Bank">Yes Bank</option>

                  </select>
                </div>
                <div class="mb-3 col-md-6 col-12">
                  <label class="form-label sr-only" for="phone">DOB</label>
                  <input id="DOB" name="DOB" type="date" placeholder="DOB" class="form-control border-0 " required="">
                </div>
                <div class="mb-3 col-md-6 col-12">
                  <label class="form-label sr-only" for="phone">PAN Number</label>
                  <input id="PAN Number" name="PAN Number" type="text" placeholder="PAN Number"
                    class="form-control border-0 " required="">
                </div>
                <!-- Button -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Send A Request</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<?php include('footer.php') ?>