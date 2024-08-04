<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Send email logic (configure this part based on your requirements)
    // mail($to, $subject, $message, $headers);

    echo "Thank you, $name. Your message has been sent.";
}
?>
