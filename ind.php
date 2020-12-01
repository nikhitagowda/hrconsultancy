<html>
<head>
<title>Contact Form Design - Easy Tutorials</title> 
<link rel="stylesheet" href="contact.css">
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    
    
    
<div class="contact-form">    
<h2>CONTACT US</h2>
<form method="post" action="">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="text" name="phone" placeholder="Phone No" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your Message" required></textarea>
    
    <div class="g-recaptcha" data-sitekey="6LfUY_QZAAAAABgNZJL8x8ktUG8Is1YJxdVotlhy"></div>
    
    <input type="submit" name="submit" value="Send Message" class="submit-btn">
</form>
    
<div class="status">

<?php
 if(isset($_POST['submit']))
 {
     $User_name = $_POST['name'];
     $phone = $_POST['phone'];
     $user_email = $_POST['email'];
     $user_message = $_POST['message'];
     
     
     $email_from = 'noreply@nikigowda.com';
     $email_subject = "New Form Submission";
     $email_body = "Name: $User_name.\n".
                    "Phone No: $phone.\n".
                    "Email Id: $user_email.\n".
                    "User Message: $user_message.\n";
     
     $to_email = "nikhitagowda788@gmailcom";
     $headers = "From: $email_from \r\n";
     $headers .= "Reply-To: $user_email\r\n";
     
     
     $secretKey = "6LfUY_QZAAAAAPY9lKphYCIWfJGP-XKbVAFSCnju";
     $responseKey = $_POST['g-recaptcha-response'];
     $UserIP = $_SERVER['REOMTE_ADDR'];
     $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";
     
     $response = file_get_contents($url);
     $response = json_decode($response);
     
     if ($response->success)
     {
         mail($to_email,$email_subject,$email_body,$headers);
         echo "Message sent Successfully";
     }
     else
     {
         echo "<span>Invalid Captcha, Please Try Again</span>";
     }
 }
?>
        <div class="container">

    <a class="float-left" href="afterlogin.html"> HOME</a>
   
    
    </div>
</div>
  
</div>  
</body>
</html>