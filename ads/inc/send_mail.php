<?php


// Import PHPMailer classes into the global namespace
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// // Include PHPMailer files
// require __DIR__ . '/resources/PHPMailer/src/Exception.php';
// require __DIR__ . '/resources/PHPMailer/src/PHPMailer.php';
// require __DIR__ . '/resources/PHPMailer/src/SMTP.php';

// // die("fd");
// // Create an instance of PHPMailer
// $mail = new PHPMailer(true);

// try {
//     // Server settings
//     $mail->isSMTP();                                            // Use SMTP
//     $mail->Host = 'smtp.gmail.com';                       // SMTP server (e.g., Gmail)
//     $mail->SMTPAuth = true;                                   // Enable SMTP authentication
//     $mail->Username = ' enquiry@aaft.edu.in';                  // SMTP username (your email)
//     $mail->Password = 'fgit wjmi yrho waua';                          // SMTP password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
//     $mail->Port = 587;                                   // TCP port to connect to

//     $body = "Dear " . $id_YourName . ", <br>

// Thank you for expressing your interest in AAFT University. We are pleased to inform you that
// we have successfully received your application.<br>
// To proceed further, please verify your email address by clicking on the link sent to your
// registered Email ID. You will be connected to our admissions counsellor shortly and they will
// guide you through the next steps of the admission process. <br>
// Ignore this message if you have already verified.<br>
// Feel free to reach out to us at "."<a href='mailto:enquiry@aaft.edu.in'>enquiry@aaft.edu.in</a>"." or give us a call at +91-9109112078 in case
// of any queries.<br>
// We look forward to welcoming you to the AAFT Family!
// Best regards,
// Admissions Team
// AAFT University
// ";

//     // Recipients
//     $mail->setFrom(' enquiry@aaft.edu.in', 'AAFT Enquiry');      // Sender email and name
//     $mail->addAddress('gs2846605@egmail.com', 'Recipient Name'); // Recipient email and name

//     // Content
//     $mail->isHTML(true);                                        // Set email format to HTML
//     $mail->Subject = 'Subject - Application Received Successful at AAFT University';               // Email subject
//     $mail->Body = 'This is a <b>test email</b> sent using PHPMailer in core PHP.'; // Email body
//     $mail->AltBody = 'This is a plain text version of the email.'; // Plain text body


//     // Send the email
//     $mail->send();
//     echo json_encode(['status' => 'success', 'message' => 'Thank your for reaching us. We will contact Shortly ']);
// } catch (Exception $e) {
//     echo json_encode(['status' => 'error', 'message' => "Error: {$mail->ErrorInfo}"]);

//     // echo "Failed to send email. Error: {$mail->ErrorInfo}";
// }
// <?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require __DIR__ . '/resources/PHPMailer/src/Exception.php';
require __DIR__ . '/resources/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/resources/PHPMailer/src/SMTP.php';

// Load environment variables (if using .env file)
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();                                            
    $mail->Host = 'smtp.gmail.com';       
    $mail->SMTPAuth = true;                                   
    $mail->Username = 'enquiry@aaft.edu.in';                 
    // $mail->Password = 'fgit wjmi yrho waua';            
    //$mail->Password = 'dyrz pxdu jiaj oxpw';            
    // $mail->Password = 'tfly escs wkrk rern';
    $mail->Password = 'ipfk iycn umuo lbvt';

    

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      
    $mail->Port = 587;  

    // Ensure $id_YourName is set (use a fallback)
    // $id_YourName = $_POST['name'] ?? 'Applicant';

    $body = "Dear " . htmlspecialchars($id_YourName) . ", <br><br>
    Thank you for expressing your interest in AAFT University. We have successfully received your application.<br>
    To proceed further, please verify your email address by clicking on the link sent to your registered Email ID.<br>
    Our admissions counsellor will contact you shortly and guide you through the next steps.<br><br>
    Ignore this message if you have already verified.<br><br>
    Feel free to reach out to us at <a href='mailto:enquiry@aaft.edu.in'>enquiry@aaft.edu.in</a> or call us at +91-9109112078.<br><br>
    We look forward to welcoming you to the AAFT Family!<br><br>
    <b>Best regards,</b><br>
    Admissions Team<br>
    AAFT University";

    // Recipients
    $mail->setFrom('enquiry@aaft.edu.in', 'AAFT Enquiry');      
//    $mail->addAddress('gaurav@weaddo.com'); 
    $mail->addAddress($id_Email, $id_YourName); 
    


    // Content
    $mail->isHTML(true);                                        
    $mail->Subject = 'Application Received - AAFT University';               
    $mail->Body = $body; 
    $mail->AltBody = strip_tags($body); 

    // Send the email
    $mail->send();
    echo json_encode(['status' => 'success', 'message' => 'Thank you for reaching out. We will contact you shortlyy.']);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => "Error: {$mail->ErrorInfo}"]);
}
?>

