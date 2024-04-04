<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Aqui você pode adicionar código para processar os dados do formulário,
    // como enviar um e-mail, salvar em um banco de dados, etc.

    // Exemplo: enviar um e-mail de notificação
    $to = "cesarfreitas075cf@gmail.com";
    $subject = "Nova mensagem de contato";
    $body = "Nome: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Mensagem: " . $message;
    $headers = "From: " . $email;

    if (mail($to, $subject, $body, $headers)) {
        // Envio do e-mail bem-sucedido
        echo "Obrigado por entrar em contato! Recebemos sua mensagem.";
    } else {
        // O envio do e-mail falhou
        echo "Desculpe, ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.";
    }
}
?>
