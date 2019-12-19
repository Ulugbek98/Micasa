<?php

/* https://api.telegram.org/bot927869601:AAHIPKbcC8MhxoOLRJUNIaijbbz_imluRPk/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
$plas= "%2B";
$name = $_POST['name'];
$phone =$_POST['phone'];
$message = $_POST['message'];
$token = "927869601:AAHIPKbcC8MhxoOLRJUNIaijbbz_imluRPk";
$chat_id = "-394154449";
$arr = array(
  'Name: ' => $name,
  'Phone: ' => $plas.$phone,
  'Message: ' => $message,
);

foreach ($arr as $key => $value) {
  $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
