<?php include('header.php') ?>
<div class="bg-dual-gradient py-lg-8 py-5" style="    background: #2c2a50;">
    <div class="container">
        <div class="row">
            <div class="offset-xl-2 col-xl-8  col-md-12 col-12 ">
                <div class="mb-10 text-center">
                    <!-- section title start-->
                    <h1 class="text-white mb-1">If there is a Will,
                        <br />There is a Way of getting an <span style="color:#f1bd03fa; font-weight:bold">Education
                            Loan</span>
                    </h1>

                </div>
                <!-- /.section title start-->
            </div>
        </div>
        <div class="container">
            <div class="row g-5">

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="students-request-form">
                        <form method="post" action="https://easetemplate.com/borrow/pages/get-quote.php">
                            <div class="row g-2">
                                <p class="lead text-center" style="color:#f1bd03fa;">Fill up the form below <br /> and
                                    get an
                                    assistance call from
                                    our executive
                                </p>
                                <!-- Text input-->
                                <div class="mb-3 col-md-6 col-12">
                                    <label class="form-label sr-only" for="name">Name</label>
                                    <input id="name" name="name" type="text" placeholder="Name"
                                        class="form-control border-0 " required="">
                                </div>
                                <!-- Text input-->
                                <div class="mb-3 col-md-6 col-12">
                                    <label class="form-label sr-only" for="email">E-Mail</label>
                                    <input id="email" name="email" type="text" placeholder="E-mail"
                                        class="form-control border-0 " required="">
                                </div>
                                <!-- Text input-->
                                <div class="mb-3 col-md-6 col-12">
                                    <label class="form-label sr-only" for="phone">Phone</label>
                                    <input id="phone" name="phone" type="text" placeholder="Phone"
                                        class="form-control border-0 " required="">
                                </div>
                                <!-- Select Basic -->
                                <div class="mb-3 col-md-6 col-12">
                                    <label class="form-label sr-only" for="city">Loan Category</label>
                                    <select id="city" name="city" class="form-select border-0 ">
                                        <option value="Education Loan">Education Loan</option>
                                        <option value="Car Loan">Car Loan</option>
                                        <option value="Business Loan">Business Loan</option>
                                        <option value="Persnal Loan">Personal Loan</option>

                                    </select>
                                </div>
                                <div class="mb-3 col-md-6 col-12">
                                    <label class="form-label sr-only" for="phone">DOB</label>
                                    <input id="DOB" name="DOB" type="date" placeholder="DOB"
                                        class="form-control border-0 " required="">
                                </div>
                                <div class="mb-3 col-md-6 col-12">
                                    <label class="form-label sr-only" for="phone">PAN Number</label>
                                    <input id="PAN Number" name="PAN Number" type="text" placeholder="PAN Number"
                                        class="pan form-control border-0 " style="text-transform: uppercase"
                                        required="">
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
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 form-opp">
                    <h2 style="color:#ffc107">Credit Mantra's Education Loan Provides</h2>
                    <p style="color:#ffc107; font-weight:bold">Education loan is a type of loan which can only be used
                        to finance Higher
                        education including education related expenses. Also this loan has to be repaid by student
                        itself
                    </p>
                    <ul class="text-white mt-5">
                        <li>Fast sanctioning</li>
                        <li>Student Friendly Options</li>
                        <li>Low Rate of interest</li>
                        <li>Easy Repayment procedure</li>
                        <li>Lite EMI's</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
<style>
    .form-opp {


        padding: 2rem;
        border-radius: 1rem;
        box-shadow: 1px 1px 11px black;
        /* background-color: #ffca28e6; */
        background: linear-gradient(to right, #ffc10700, #b0ab9c);
    }
</style>
<?php include('footer.php') ?>

<script type="text/javascript">
    $(document).ready(function () {

        $(".pan").change(function () {
            var inputvalues = $(this).val();
            var regex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
            if (!regex.test(inputvalues)) {
                $(".pan").val("");
                alert("invalid PAN no");
                return regex.test(inputvalues);
            }
        });

    });    
</script>