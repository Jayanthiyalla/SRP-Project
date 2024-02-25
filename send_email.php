<?php include 'db_connect.php' ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = $_POST['headers'];

    // Send the email
    $mailSent = mail($to, $subject, $message, $headers);
    $to = 'yalladivya101@gamil.com'; 
    $subject = 'Salary Credited';
    $message = 'Dear Employee, your salary has been credited to your account.';
    $headers = 'From:jayanthiyalla141@gmail.com '; 

    // Check if the email was sent successfully
    if ($mailSent) {
        echo 'Email sent successfully.';
    } else {
        echo 'Email could not be sent.';
    }
} else {
    // Handle other HTTP methods (GET, etc.) or direct access to this file
    echo 'Invalid request.';
}
?>
