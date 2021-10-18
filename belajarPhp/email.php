<?php
    $to = "wan.jafar96@gmail.com";
    $subject = "Email HTML";

    $message = "<h1>Selamat siang</h1>
                <h3>Terimakasih telah membaca email kami</h3>";
    // selalu set content-type ketika mengirim email HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers = "Content-type: text/html;charset=UTF-8" . "\r\n";

    $headers = 'From: <wan.jafar1@gmail.com>' . "\r\n";
    $headers = 'Cc: jafalkaff96@gmail.com' . "\r\n";

    mail($to, $subject, $message, $headers);
?>