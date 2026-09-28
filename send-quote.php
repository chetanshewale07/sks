<?php
/**
 * send-quote.php
 * Handles submissions from the "Request a Quote" form (contact.php and index.php).
 * Sends the enquiry details by email to the company inbox.
 *
 * IMPORTANT: PHP's mail() function requires a properly configured mail server
 * (sendmail/Postfix) on your hosting. Most shared hosting providers (e.g. cPanel)
 * support this out of the box. If emails do not arrive, ask your host about SMTP
 * settings and consider using PHPMailer with SMTP credentials instead of mail().
 */

// Recipient (from the company document)
$toEmail = "sksecurityservices1002@gmail.com";

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

// Collect + sanitize form fields
function clean($value) {
    return htmlspecialchars(strip_tags(trim($value ?? '')), ENT_QUOTES, 'UTF-8');
}

$fullName        = clean($_POST['fullName'] ?? '');
$companyName     = clean($_POST['companyName'] ?? '');
$mobileNumber    = clean($_POST['mobileNumber'] ?? '');
$emailAddress    = clean($_POST['emailAddress'] ?? '');
$serviceRequired = clean($_POST['serviceRequired'] ?? '');
$location        = clean($_POST['location'] ?? '');
$personnelCount  = clean($_POST['personnelCount'] ?? '');
$message         = clean($_POST['message'] ?? '');

// Basic required-field validation
$errors = [];
if ($fullName === '') $errors[] = "Full name is required.";
if ($mobileNumber === '') $errors[] = "Mobile number is required.";
if ($emailAddress === '' || !filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) $errors[] = "A valid email address is required.";
if ($serviceRequired === '') $errors[] = "Please select a service.";
if ($location === '') $errors[] = "Location is required.";

if (!empty($errors)) {
    // In production, redirect back with error messages (e.g. via session flash)
    echo "There was a problem with your submission: " . implode(' ', $errors);
    exit;
}

// Build email
$subject = "New Quote Request - Shree Kaleshwari Security Services";
$body = "A new enquiry has been submitted on the website:\n\n"
      . "Full Name: {$fullName}\n"
      . "Company / Organization: {$companyName}\n"
      . "Mobile Number: {$mobileNumber}\n"
      . "Email Address: {$emailAddress}\n"
      . "Service Required: {$serviceRequired}\n"
      . "Location: {$location}\n"
      . "Number of Personnel Required: {$personnelCount}\n"
      . "Message: {$message}\n";

$headers = "From: website@sksecurityservices.com\r\n";
$headers .= "Reply-To: {$emailAddress}\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$sent = @mail($toEmail, $subject, $body, $headers);

if ($sent) {
    header('Location: contact.php?status=success#quote');
} else {
    header('Location: contact.php?status=error#quote');
}
exit;
