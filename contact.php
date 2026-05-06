<?php
// Strict POST only
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

// Honeypot check to block basic bots
if (!empty($_POST['honeypot'])) {
    // Silently "succeed" for bots
    echo json_encode(['success' => true, 'message' => 'Message sent successfully.']);
    exit;
}

// Sanitize inputs
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
$gdpr = isset($_POST['gdpr']) ? true : false;

// Basic validation
if (!$name || !$email || !$message || !$gdpr) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields and accept the privacy policy.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

$subject = $subject ?: 'New Contact Form Submission';

// Mail setup
$to = 'hello@velarosolutions.com'; // Change this to real email in production
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$mailBody = "Name: $name\n";
$mailBody .= "Email: $email\n";
$mailBody .= "GDPR Consent: Granted\n";
$mailBody .= "Message:\n$message\n";

// Use PHP mail() function
$success = @mail($to, $subject, $mailBody, $headers);

if ($success) {
    echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent.']);
} else {
    // If mail fails (very common on localhost/shared hosting without SMTP)
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Sorry, there was an error sending your message. Please try again later.']);
    
    // For development/demonstration purposes, we can write it to a log file instead
    $log_entry = "[" . date('Y-m-d H:i:s') . "] CONTACT FORM: $name <$email> - $subject\n";
    file_put_contents(__DIR__ . '/contact_log.txt', $log_entry, FILE_APPEND);
}
