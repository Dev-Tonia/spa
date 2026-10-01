<?php
// This endpoint must be executed by PHP, not served as a static file by Nuxt.
ini_set('display_errors', '0');
header('Content-Type: application/json; charset=UTF-8');
header('Cache-Control: no-store');

function respond($status, $success, $message)
{
    http_response_code($status);
    echo json_encode(['success' => $success, 'message' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    respond(405, false, 'Method not allowed.');
}

$fields = [
    'fullName' => ['Name', 200],
    'email' => ['Email', 254],
    'phoneNumber' => ['Phone number', 100],
    'companyType' => ['Company', 200],
    'designation' => ['Designation', 200],
    'enquiryType' => ['Enquiry type', 100],
    'additionalInfo' => ['Additional information', 5000],
];
$data = [];
foreach ($fields as $field => $settings) {
    $value = $_POST[$field] ?? '';
    if (!is_string($value) || trim($value) === '' || strlen($value) > $settings[1] || strpos($value, "\0") !== false) {
        respond(422, false, 'Please complete all fields correctly.');
    }
    $data[$field] = trim($value);
}

if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL) || preg_match('/[\r\n]/', $data['email'])) {
    respond(422, false, 'Please enter a valid email address.');
}
if (!in_array($data['enquiryType'], ['SAP Demo', 'SAP Training', 'School Training', 'IDM@School'], true)) {
    respond(422, false, 'Please select a valid enquiry type.');
}

// Configure these addresses for your mail host. Never take the recipient from the request.
$to = 'enquiry@idmng.com';
$from = 'noreply@idmng.com';
$message = "New website contact enquiry\r\n\r\n";
foreach ($fields as $field => $settings) {
    $message .= $settings[0] . ': ' . $data[$field] . "\r\n\r\n";
}
$headers = [
    'From' => $from,
    'Reply-To' => $data['email'],
    'MIME-Version' => '1.0',
    'Content-Type' => 'text/plain; charset=UTF-8',
];

try {
    $sent = mail($to, 'New website contact enquiry', wordwrap($message, 70, "\r\n"), $headers);
} catch (Throwable $exception) {
    $sent = false;
}
if (!$sent) {
    respond(500, false, 'Unable to send your message. Please try again later.');
}
respond(200, true, 'Your message has been submitted.');
