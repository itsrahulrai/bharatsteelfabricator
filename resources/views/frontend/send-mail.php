<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $subject = trim($_POST['subject']);

    if (empty($name) || empty($phone) || empty($subject)) {
        die("All fields are required");
    }

    if (!preg_match('/^[0-9]{10}$/', $phone)) {
        die("Phone must be exactly 10 digits");
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'shivampal.hovermedia@gmail.com';
        $mail->Password = 'awmzytxsvvvnyguh';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('hasan727223@gmail.com', 'Website Form');
        $mail->addAddress('hasan727223@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "New Enquiry";
        $mail->Body = "
            <h3>New Enquiry Received</h3>
            <p><b>Name:</b> $name</p>
            <p><b>Phone:</b> $phone</p>
            <p><b>Subject:</b> $subject</p>
        ";

        $mail->send();

        header("Location: thank-you.php");
        exit;

    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
?>