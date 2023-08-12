
<?php
// https://support.google.com/accounts/answer/185833?hl=en



// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php';

// $errors = [];
// $errorMessage = '';
// $successMessage = '';
// $siteKey = ''; // reCAPTCHA site key
// $secret = ''; // reCAPTCHA secret key

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $name = sanitizeInput($_POST['name']);
//     $email = sanitizeInput($_POST['email']);
//     $message = sanitizeInput($_POST['message']);
//     // $recaptchaResponse = sanitizeInput($_POST['g-recaptcha-response']);

//     $toEmail = 'mailtrap.club@gmail.com';
//     $emailSubject = 'New email from your contaсt form';

//       // Create a new PHPMailer instance
//         $mail = new PHPMailer(true);
//         try {
//             // Configure the PHPMailer instance
//             $mail->isSMTP();
//             $mail->Host = 'live.smtp.mailtrap.io';
//             $mail->SMTPAuth = true;
//             $mail->Username = 'jay.tops.sg@gmail.com';
//             $mail->Password = 'eogimxrbibxnzkjq';
//             $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//             $mail->Port = 587;
//             // Set the sender, recipient, subject, and body of the message
//             $mail->setFrom($email);
//             $mail->addAddress($toEmail);
//             $mail->Subject = $emailSubject;
//             $mail->isHTML(true);
//             $mail->Body = "<p>Name: {$name}</p><p>Email: {$email}</p><p>Message: {$message}</p>";
//             // Send the message
//             $mail->send();
//             $successMessage = "<p style='color: green;'>Thank you for contacting us :)</p>";
//         } catch (Exception $e) {
//             echo"<pre>";
//             print_r($e);
//       $errorMessage = "<p style='color: red;'>Oops, something went wrong. Please try again later</p>";
//     }
// }

// function sanitizeInput($input) {
//    $input = trim($input);
//    $input = stripslashes($input);
//    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
//    return $input;
// }



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
ob_start();
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$OTP = rand(1000,9999);
if (isset($_POST['sendmail'])) {
    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username   = 'jay.tops.sg@gmail.com';                     //SMTP username
    $mail->Password   = 'eogimxrbibxnzkjq';  // your password 2step varified 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                
    $mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
    $mail->setFrom('jay.tops.sg@gmail.com', 'Name');
    $mail->addAddress($_POST['email']);   // Add a recipient
    $mail->isHTML(true);  // Set email format to HTML
    
    $bodyContent = "<h1>HeY!,</h1>: OTP : $OTP";
    $bodyContent .= '<p>This is a email that Radhika send you From LocalHost using PHPMailer</p>';
    $mail->Body    = $bodyContent;
    $mail->Subject = 'Email from Localhost by Radhika';
    if(!$mail->send()) {
      echo 'Message was not sent.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
      echo 'Message has been sent.';
    }
}

?>

<form method="post">
    <input type="text" name="email" id="email">
    <input type="text" name="body" id="body">
    <input type="submit" name="sendmail" id="sendmail">
</form>

<!-- <html>
  <body>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <form method="post" id="contact-form">
      <h2>Contact us</h2>
      <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
      <?php echo((!empty($successMessage)) ? $successMessage : '') ?>
      <p>
        <label>First Name:</label>
        <input name="name" type="text" required />
      </p>
      <p>
        <label>Email Address:</label>
        <input style="cursor: pointer;" name="email" type="email" required />
      </p>
      <p>
        <label>Message:</label>
        <textarea name="message" required></textarea>
      </p>
      <p>
        <button
        class="g-recaptcha"
        type="submit"
        data-sitekey="<?php echo $siteKey ?>"
        data-callback='onRecaptchaSuccess'
        >
          Submit
        </button>
      </p>
    </form>

    <script>
    function onRecaptchaSuccess() {
      document.getElementById('contact-form').submit();
    }
    </script>
  </body>
</html> -->
