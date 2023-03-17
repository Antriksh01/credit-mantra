<?php include('header.php') ?>
<div class="py-12 bg-dual-gradient ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="text-center mb-6">
                    <h1 class="text-white">Login In Your Account</h1>
                    <p class="text-white">
                        We will create your personal account in which you can track the
                        <br />change in your rating.
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
                        <form action="javascript: void(0)" class="otp-form" name="otp-form">

                            <div class="title">
                                <h3>OTP VERIFICATION</h3>
                            </div>
                            <div class="otp-input-fields d-flex">
                                <input type="number" class="otp__digit otp__field__1">
                                <input type="number" class="otp__digit otp__field__2">
                                <input type="number" class="otp__digit otp__field__3">
                                <input type="number" class="otp__digit otp__field__4">
                                <input type="number" class="otp__digit otp__field__5">
                                <input type="number" class="otp__digit otp__field__6">
                                
                            </div>
                            
                            
                        </form>
                        <p class="mt-2 fs-6">
                            We will create your personal account in which you can track
                            the
                            change in your rating.
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
<script>
    var otp_inputs = document.querySelectorAll(".otp__digit")
var mykey = "0123456789".split("")
otp_inputs.forEach((_)=>{
  _.addEventListener("keyup", handle_next_input)
})
function handle_next_input(event){
  let current = event.target
  let index = parseInt(current.classList[1].split("__")[2])
  current.value = event.key
  
  if(event.keyCode == 8 && index > 1){
    current.previousElementSibling.focus()
  }
  if(index < 6 && mykey.indexOf(""+event.key+"") != -1){
    var next = current.nextElementSibling;
    next.focus()
  }
  var _finalKey = ""
  for(let {value} of otp_inputs){
      _finalKey += value
  }
  if(_finalKey.length == 6){
    document.querySelector("#_otp").classList.replace("_notok", "_ok")
    document.querySelector("#_otp").innerText = _finalKey
  }else{
    document.querySelector("#_otp").classList.replace("_ok", "_notok")
    document.querySelector("#_otp").innerText = _finalKey
  }
}
</script>