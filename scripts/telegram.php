<?php

/* https://api.telegram.org/bot900529172:AAEOhJBaN-7EICzcgQ4irWmZvMlX3Zc5sC8/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
$name = $_POST['name'];
$phone =$_POST['phone'];
$message = $_POST['message'];
$token = "900529172:AAEOhJBaN-7EICzcgQ4irWmZvMlX3Zc5sC8";
$chat_id = "-342631256";
$arr = array(
  'Имя: ' => $name,
  'Номер: ' => $phone,
  'Сообщение: ' => $message
);

foreach ($arr as $key => $value) {
  $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {
  header('Location: Thanks.html');
} else {
  echo "Error";
}
