<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration & Login with Mobile OTP verification using Jquery AJAX with PHP Mysql</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

<div class="card text-center" style="padding:20px;">
  <h3>Registration & Login with Mobile OTP verification using Jquery AJAX with PHP Mysql</h3>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
      <div class="col-md-6">   

        <div class="alert alert-success alert-dismissible" style="display: none;">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <span class="success-message"></span>
        </div>

        <form id="mobileForm">
          <div class="form-group">  
            <label for="mobile">Mobile:</label> 
            <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile" required="" 
            id="mobile">
            <span class="error-message" style="color:red;"></span>
          </div>
          <div class="form-group">
            <p>Not registered yet ?<a href="index.php"> Register here</a></p>
            <button type="submit" class="btn btn-primary" id="sendOtp">Send OTP</button>
          </div>
        </form>

        <form id="otpForm" style="display:none;">
          <div class="form-group">  
            <label for="mobile">OTP:</label>
            <input type="text" class="form-control" name="otp" placeholder="Enter OTP" required="" id="otp">
            <span class="otp-message" style="color: red;"></span>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success" id="verifyOtp">Verify OTP</button>
          </div>
        </form>        
      </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){

    // Send OTP mobile jquery
    $("#sendOtp").on("click", function(e){ 
      e.preventDefault();    
      var mobile = $("#mobile").val();
	  
      $.ajax({
        url  : "send_otp.php",
        type : "POST",
        cache:false,
        data : {mobile:mobile},
        success:function(result){
          if (result == "yes") {
            $("#otpForm,.alert-success").show();
            $("#mobileForm").hide();
            $(".success-message").html("OTP sent your mobile number");
          }
          if (result =="no") {
            $(".error-message").html("Please enter valid mobile number");
          }        
        }
      });  
    });   

    // Verify OTP mobile jquery
    $("#verifyOtp").on("click",function(e){
      e.preventDefault();
      var otp = $("#otp").val();
      $.ajax({
        url  : "verify_otp.php",
        type : "POST",
        cache:false,
        data : {otp:otp},
        success:function(response){
          if (response == "yes") {
            window.location.href='dashboard.php';
          }
          if (response =="no") {
            $(".otp-message").html("Please enter valid OTP");
          }        
        }
      });
    });
  });
</script>
</body>
</html>/* CSS Document */

