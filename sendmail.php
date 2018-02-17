​<?php
 $phone = $_POST['phone'];
 $from = 'burykhma@mail.ru';
 $to .= 'burykhma@mail.ru';
   $subject = "Заказ звонка с лендинга !АКЦИЯ!";
   $text =  "Телефон: $phone";

   $header = "Content-type: text/html; charset=utf-8\r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "From: landR <$from>";
   $sending = mail($to, $subject, $text, $header);
?>
