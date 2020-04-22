<!-- Script following story submission.  Now request paypal payment -->
<?php

$from = preg_replace("([\r\n])", "", $_POST['inputEmail']);
$subject = preg_replace("([\r\n])", "", $_POST['inputTitle']);

$match = "/(bcc:|cc:|content\-type:)/i";
if (preg_match($match, $from) ||
	preg_match($match, $subject) ||
	preg_match($match, $body)) {
  die("Header injection detected.");
}

// If no url (to kick out spammers)
if(isset($_POST['url']) && $_POST['url'] == ''){
	$userName 		= $_POST['inputName'];
	$userEmail	 	= $_POST['inputEmail'];
	$userTitle	 	= $_POST['inputTitle'];
	$userStory 		= $_POST['inputStory'];

	$to 			= "flashfiction2020@gmail.com";
	$subject 		= "TEST Story Submission from " . $userName;;
	$body 			= "Story Submitted:";

	$body .= "\r\n Name: " . $userName;
	$body .= "\r\n Title: " . $userTitle;
	$body .= "\r\n Email address: " . $userEmail;
	$body .= "\r\n Story: " . $userStory;

	$headers 		= 'From: FlashFic2020 Website <support@ff2020.com>' . "\r\n" .
	'Reply-To: support@ff2020.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();


	//mail($to, $subject, $body);
// Email to me
	mail($to,$subject ,$body, $headers);


	// Email confirmation to customer
	$headers 		= 'From: FlashFic2020 Website <flashfiction2020@gmail.com>' . "\r\n" .
	'Reply-To: flashfiction2020@gmail.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	$userSubject 		= "Thank you for your submission to FlashFic 2020 ";;
	$userBody 			= "Dear ". $userName . ",";
	$userBody .= "\r\n Thank you for submitting your story, " . $userTitle . " for FlashFic 2020.";
	$userBody .= " We look forward to reading it and will respond as soon after the closing date as possible.";
	$userBody .= "\r\n \r\n Please be aware that this email is not confirmation of payment.  Your entry is only valid upon receipt of payment via PayPal.";
	$userBody .= "\r\n \r\n Kind Regards,";
	$userBody .= "\r\n \r\n The FlashFic 2020 Team";
	mail($userEmail,$userSubject ,$userBody, $headers);

} else {
    die("Spam bot detected.  Submission denied. <a href='../index.html'> Return to homepage</a>");
}

// Send email to user confirming receipt of story but not payment.

?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FlashFic 2020</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="../../../scripts/bootstrap-yeti-wendy.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script>
  $(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 2000, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });
  </script>
  <script src="vendor/w3js.min.js"></script>
  <script src="w3.includeHTML();"></script>
  <link rel='icon' href='../favicon.png' type='image/x-icon' >
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/v4-shims.css">
<link href="../../../scripts/BHWD-scripts.css" rel="stylesheet" type="text/css">
<link href="bhwd-flash.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Prompt' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Beth Ellen' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Raleway Dots' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Ruthie' rel='stylesheet'>
 <style>

</style>

<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->

</head>

<body>
   
            
            <div class="text-white" style="width:100%;">

                    <header class="header navbar navbar-flash">
    
                        <!--<h1 style="font-family:Helvetica Neue;padding-left: 10px;"><a href="index.html">Ashwell Systems</a></h1>-->
                            
                        <input class="menu-btn" type="checkbox" id="menu-btn" />
                        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                        <h1 style="font-size:3em;font-family:'Cookie';text-align: center;color: whitesmoke;font-weight:100;"><a href="../index.html">FlashFic 2020</a></h1>
                        <h3 class="sub-heading">Dark Fiction Contest</h3>
                   
                         
                    </header>
            </div>
 

        </div>
            <!--  end of nav bar -->

    

       
    </div> -->
</div>
</div>
<br><br><br><br>


  <!-- Entry section -->
  <!-- Form-->
 <!-- Whole page row/col--> 
 <div class="container-fluid overlay-none">
 <br><br>
                    <!--<button type="submit" class="btn btn-primary">Submit</button>-->
                    <div class="form-check" id="enterDiv">
                    <div class="container-fluid overlay-none">
                            <div class="row single-col-padding" >
									<div class="col-md-6" style="text-align: center; ">
									Thank you for submitting your story, <?php echo $_POST['inputTitle']; ?>.
                                        <label  class="form-check-label" >Entry fee is £1.50.  Please hit Paypal/Debit Card button to pay. </label>
                                    </div> 
                                    <div class="col-md-6" style="text-align: center;">
                                        <!--<div class="container overlay-none"   style="width:200px;margin-bottom: 50px;margin-top: 50px;">-->
                                                <form onsubmit="showPaid()" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                                    <input type="hidden" name="cmd" value="_xclick">
                                                    <input type="hidden" name="business" value="eastberkshire@yahoo.co.uk">
                                                    <input type="hidden" name="lc" value="US">
                                                    <input type="hidden" name="amount" value="0.01">
                                                    <input type="hidden" name="currency_code" value="GBP">
                                                    <input type="hidden" name="button_subtype" value="services">
                                                    <input type="hidden" name="no_note" value="0">
                                                    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                                                    <!--<button type="button" class="btn btn-primary btn-paypal" name="submit"><i class="fab fa-paypal"></i> PayPal</button>-->
                                                    <input type="image" src="../images/paypalbutton.png" border="0" name="submit" width="75px" alt="PayPal - The safer, easier way to pay online!">
                                                   
                                                   <!--<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">-->
                                                    <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                                </form>
      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--</form>-->
                <div class="form-check" style="display: none;" id="paidDiv">
                    <div class="container-fluid overlay-none">
                      <br><br><br>
                            Thank you for submitting your story to FlashFic2020.  We look forward to reading it.

                            Once you have paid, please <a href="../index.html" style="color:grey;">return to homepage</a>.
                        </div>
                    </div>
</div>
</div>


 <!-- End of Rules section -->
            </div>
        </div>
    </div>
  

        </div>
    </div>
</div>

<script>
    function showPaid() {
        // Get the checkbox
        //var checkBox = document.getElementById("inputCheckbox");
        // Get the output text
        var text = document.getElementById("enterDiv");
        var paidText = document.getElementById("paidDiv");

        text.style.display = "none";
        paidText.style.display = "block";

        // If the checkbox is checked, display the output text
        // if (checkBox.checked == true){
        // text.style.display = "block";
        // } else {
        // text.style.display = "none";
        // }
    }
</script>
</div>
 <!-- End of Entry section -->
            <!-- Socials Bottom Nav Bar-->
            <div class="container-fluid navbarsecondary-flash  footer">
                <!-- cols -->
                    <div class=" socials-ashwell">
                        <div class="container-fluid">
                            
                            <div class="row">
                                <div class="col" style="text-align: left; vertical-align: bottom;">
                                    <a href="privacy-policy.pdf">Privacy Policy</a>

                                </div>

                                <div class="col">
                                </div>
                                    
                                <div class="col" style="text-align: right;">
                                                                 
                                        FlashFic2020<br>

                                        flashfiction2020@gmail.com
                                        </div>
                                    </div>
                                </div>
                        </div>
                
                <div class="copyright">
                    <h6>
                 
                
                    </h6>
                    
                </div> 
                <div class="bhwd-copyright">
                    <a href="../../index.html">Black Hill Web Design: Copyright 2020</a>
                </div>
            </div>
        
        </div>
                
    </div>
    </div>

</body>
</html>

