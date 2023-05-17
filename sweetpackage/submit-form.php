<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "kontakt@sweetpackage.pl";
    $subject = "Wiadomość z formularza kontaktowego - SweetPackage";
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    $message = "Imię i nazwisko: $name\n\n" .
        "Adres e-mail: $email\n\n" .
        "Wiadomość:\n$message";

    if (mail($to, $subject, $message, $headers)) {
        echo "Twoja wiadomość została wysłana. Dziękujemy!";
    } else {
        echo "Wysłanie wiadomości nie powiodło się. Spróbuj ponownie później.";
    }
}
?>
