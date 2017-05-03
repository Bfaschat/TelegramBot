<?php

$token ="347283471:AAFsJ2eptBct1nzmMQ1eLBB1ZYMqNLVlzcY";
$website="https://api.telegram.org/bot".$token;

$update =file_get_contents("php://input");
$update =json_decode($update,TRUE);

$text = $update["message"]["text"];
$chatID = $update["message"]["chat"]["id"];
sendMessage($chatID,$text);
function sendMessage($chatID,$message){
  $url = $globals[website]."/sendMessage?chat_id=".$chatID."&text=.urlencode($message)";
  file_get_contents($url);
}

 ?>
