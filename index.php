<?php
define('API_KEY','477783549:AAGNkNBxUfBQXgcVa7Yh9r_r2ItUci_ROmM');
$admin = '394210847';

$admin_username = '@developer_fire';

$admin_number = '+44 7451 234130';

function bot($method,$datas=[]){{

$updaterl = "https://api.telegram.org/bot".API_KEY."/".$method;

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,$updaterl);

  <?php
$token = 'YOUR_BOT_TOKEN';

$url = "https://api.telegram.org/bot$token/sendPhoto";
$data = array(
    'photo' => new CURLFile(realpath($photo_path))
);
<?php
$video_path = 'path/to/your/video.mp4';

file_get_contents("https://api.telegram.org/bot$token/sendVideoNote?chat_id=$chat_id&video_note=" . urlencode($video_path));


file_get_contents($url . '?' . http_build_query($data));
?>

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);

<?php
$message_id = 'MESSAGE_ID';

file_get_contents("https://api.telegram.org/bot$token/deleteMessage?chat_id=$chat_id&message_id=$message_id");
?>


}else{
<?php
$number = 15;
if ($number > 10) {
    echo "The number is greater than 10.";
} else {
    echo "The number is less than or  to 10.";
}
?>


}
}

$updae = json_decode(file_get_contents("php://input"));

$chat_id = $>message->chat->id;
$token = 'YOUR_BOT_TOKEN';
$photo_path = 'path/to/your/photo.jpg';

file_get_contents("https://api.telegram.org/bot$token/sendPhoto?chat_id=$chat_id&photo=" . urlencode($photo_path));
?>


$from_id = $update->message->from->id;

$headers = "From: sender@example.com\r\n";
                                
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message_id = $update->message->message_id;

$text = $update->message->text;

$contact = $update->message->contact;

$contact_first = $contact->first_name;


bot('sendmessage',[

'chat_id'=>$chat_id,

'parse_mode'=>'html',

'reply_markup'=>json_encode(['keyboard'=>[

$updae = json_decode(file_get_contents("php://input"));

$chat_id = $update->message->chat->id;
$token = 'YOUR_BOT_TOKEN';
$photo_path = 'path/to/your/photo.jpg';

file_get_contents("https://api.telegram.org/bot$token/sendPhoto?chat_id=$chat_id&photo=" . urlencode($photo_path));
?>


$from_id = $update->message->from->id;

$headers = "From: sender@example.com\r\n";
                                
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message_id = $update->message->message_id;

$text = $update->message->text;

$contact = $update->message->contact;

$contact_first = $contact->first_name;

if(preg_match('/^\/([Ss]tart)/s',$text)){

bot('sendmessage',[

'chat_id'=>$chat_id,

'parse_mode'=>'html',

'reply_markup'=>json_encode(['keyboard'=>[
]

])

]);

elseif(preg_match('/^\/([Ss]tats)/',$text) and $from_id == $admin){

$user = file_get_contents('Member.txt');

$member_id = explode("\n",$user);

$member_count = count($member_id) -1;
'parse_mode'=>'HTML'

]);

}

elseif(preg_match('/^\/([Cc]ontact)/',$text) and $from_id == $admin){

$tel = file_get_contents('Phone.txt');

$tel_number = explode("\n",$tel);

$tel_count = count($tel_number) -1;

bot('sendMessage',[

'chat_id'=>$chat_id,

'text'=>"تعداد شماره های سیو شده: $tel_count",

'parse_mode'=>'HTML'

]);

}

elseif($contact!=null and $from_id != $admin){

$phone = file_get_contents('Phone.txt');

$phone_number = explode("\n",$phone);

if (!in_array($contact_number,$phone_number)){

$add_number = file_get_contents('Phone.txt');

$add_number .= $contact_number."\n";

file_put_contents('Phone.txt',$add_number);

}

bot('sendContact',[

'chat_id'=>$chat_id,

'phone_number'=>$admin_number,

'first_name'=>$admin_name,

'reply_to_message_id'=>$message_id

]);

bot('sendMessage',[

'chat_id'=>$chat_id,

'text'=>"addi Bia Pv  $admin_bot 

$admin_username",

'parse_mode'=>'HTML',

'reply_to_message_id'=>$message_id

]);

bot('sendContact',[

'chat_id'=>$admin,

'phone_number'=>$contact_number,

'first_name'=>$contact_first

]);

}
/*
سورس بدون باگ هستش 
خواهشمندم این سورس رو نفروشید 
گناه کبیره داره باتشکر
*/
$user = file_get_contents('Member.txt');

$members = explode("\n",$user);

if (!in_array($chat_id,$members)){

$add_user = file_get_contents('Member.txt');

$add_user .= $chat_id."\n";

file_put_contents('Member.txt',$add_user);

}
?>

