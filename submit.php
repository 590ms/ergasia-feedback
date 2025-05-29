<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"] ?? 'Anonymous');
    $email = htmlspecialchars($_POST["email"] ?? 'Not provided');
    $message = htmlspecialchars(trim($_POST["message"]));

    if (empty($message)) {
        echo "Message is required.";
        exit;
    }

    $entry = "Name: $name\nEmail: $email\nMessage: $message\n---\n";
    file_put_contents("feedback.txt", $entry, FILE_APPEND | LOCK_EX);
    header("Location: index.html");
    exit;
}
?>
