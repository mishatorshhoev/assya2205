<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Адрес, на который нужно отправить письмо
    $to = "mishatorshhoev@mail.ru";

    // Тема письма
    $subject = "Новое сообщение для Аси от $name";

    // Сообщение
    $email_message = "Привет! У тебя новое сообщение через сайт!\n\n";
    $email_message .= "Имя: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Сообщение:\n$message\n\n";
    $email_message .= "Гав-гав! 🐾";

    // Заголовки
    $headers = "From: asia@example.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Отправка письма
    mail($to, $subject, $email_message, $headers);

    // Перенаправление на страницу "Спасибо"
    header("Location: thank_you.html");
    exit();
}
?>
