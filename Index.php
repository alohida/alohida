<?php
error_reporting(0);
ob_start();
$API_KEY = '2061453832:AAGvdg3QLOtMXPaFhqraoLVd1kbSMt6IhBc';
echo "api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
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
function kurs(){
       $response = "";
       $xml = file_get_contents("http://cbu.uz/uzc/arkhiv-kursov-valyut/xml/");
       $m = new SimpleXMLElement($xml);
       foreach ($m as $val) {
           if($val->Ccy == 'USD'){
               $response .= "1 USD💵 - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'EUR'){
               $response .= "1 EURO💶 - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'JPY'){
               $response .= "1 JPY💴 - " . $val->Rate . " sum\n";
           }  if($val->Ccy == 'RUB'){
               $response .= "1 RUB💴 - " . $val->Rate . " sum\n";
           }
       }

       return $response;
   }   function Parse($p1, $p2, $p3) {
$num1 = strpos($p1, $p2);
if($num1 === false) return 0;
$num2 = substr($p1, $num1);
return strip_tags(substr($num2, 0, strpos($num2, $p3)));
}
$String = file_get_contents('http://obhavo.uz/namangan');
$tt = '<h2>'.Parse($String, '<h2>', '</h2>').'</h2><div class="current-day">'.Parse($String, '<div class="current-day">', '</div>').'</div>
<div class="current-forecast">
            	<span><img src="http://obhavo.uz/images/icons/partlycloudy.png" /></span> <span><strong>'.Parse($String, '<div class="current-forecast">', '</div>').'</strong></span></div><div class="current-forecast-desc">';
$ttt = Parse($String, '<div class="current-forecast-desc">', '</div>').'</div>';
//asosisiy
   $update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id; $message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;
$button = json_encode([
			'inline_keyboard'=>[
			[['text'=>'🏙Toshkent','callback_data'=>'tosh']],[['text'=>'Bizning Kanal','url'=>'link'],['text'=>'😜Kanal😜','url'=>'https://t.me/Hacker_Bey']],[['text'=>'🏡Andijon','callback_data'=>'ano'],['text'=>'🕌Buxoro','callback_data'=>'buh']],[['text'=>'🏞Guliston','callback_data'=>'gul'],['text'=>'🏖Jizzah','callback_data'=>'jiz']],[['text'=>'🏘Zarafshon','callback_data'=>'zar'],['text'=>'⛲Qarshi','callback_data'=>'qar']],[['text'=>'🏠Navoiy','callback_data'=>'nav'],['text'=>'🎎Xiva','callback_data'=>'xiv']],[['text'=>'🎇Nukus','callback_data'=>'nuk'],['text'=>'🗾Termiz','callback_data'=>'ter']],[['text'=>'🌉Urganch','callback_data'=>'ur'],['text'=>'🏘Farg`ona','callback_data'=>'fer']],[['text'=>'🕌Samarqand','callback_data'=>'sam'],['text'=>'🎏Namangan','callback_data'=>'obn']],[['text'=>'💱Valyutalar💷','callback_data'=>'kurs'],['text'=>'🆕Tezkor yangilik🔥','callback_data'=>'yan']],[['text'=>'♻Tarqatish↗','url'=>'http://telegram.me/share/url?url=@ob_havo']]
			]
		]);
//asosiysini yopilishi
//------------------------------
//2 korinish
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id; $message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;
$button2 = json_encode([
			'inline_keyboard'=>[ 
			[['text'=>'🌫Toshkent','callback_data'=>'tosh']],[['text'=>'Bizning Kanal','url'=>'link'],['text'=>'😜Kanal😜','url'=>'https://t.me/Hacker_Bey']],[['text'=>'🏡Andijon','callback_data'=>'ano']],[['text'=>'🕌Buxoro','callback_data'=>'buh'],['text'=>'🏞Guliston','callback_data'=>'gul']],[['text'=>'🏖Jizzah','callback_data'=>'jiz']],[['text'=>'🏘Zarafshon','callback_data'=>'zar'],['text'=>'⛲Qarshi','callback_data'=>'qar']],[['text'=>'🏠Navoiy','callback_data'=>'nav']],[['text'=>'🎎Xiva','callback_data'=>'xiv'],['text'=>'🎇Nukus','callback_data'=>'nuk']],[['text'=>'🗾Termiz','callback_data'=>'ter']],[['text'=>'🌉Urganch','callback_data'=>'ur'],['text'=>'🏘Farg`ona','callback_data'=>'fer']],[['text'=>'🕌Samarqand','callback_data'=>'sam'],['text'=>'🎏Namangan','callback_data'=>'obn']],[['text'=>'💱Valyutalar💷','callback_data'=>'kurs']],[['text'=>'🆕Tezkor yangilik🔥','callback_data'=>'yan'],['text'=>'♻Tarqatish↗','url'=>'http://telegram.me/share/url?url=@ob_havo']]
			]
		]);
//2korinishni yopilish
//-----------------------------
//3korinishi
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id; $message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;
$button3 = json_encode([
			'inline_keyboard'=>[
			[['text'=>'☄Toshkent','callback_data'=>'tosh']],[['text'=>'Bizning Kanal','url'=>'link'],['text'=>'😜Kanal😜','url'=>'https://t.me/Hacker_Bey']],[['text'=>'🏡Andijon','callback_data'=>'ano'],['text'=>'🕌Buxoro','callback_data'=>'buh'],['text'=>'🏞Guliston','callback_data'=>'gul']],[['text'=>'🏖Jizzah','callback_data'=>'jiz'],['text'=>'🏘Zarafshon','callback_data'=>'zar'],['text'=>'⛲Qarshi','callback_data'=>'qar']],[['text'=>'🏠Navoiy','callback_data'=>'nav'],['text'=>'🎎Xiva','callback_data'=>'xiv']],[['text'=>'🎇Nukus','callback_data'=>'nuk']],[['text'=>'🗾Termiz','callback_data'=>'ter'],['text'=>'🌉Urganch','callback_data'=>'ur'],['text'=>'🏘Farg`ona','callback_data'=>'fer']],[['text'=>'🕌Samarqand','callback_data'=>'sam'],['text'=>'🎏Namangan','callback_data'=>'obn']],[['text'=>'💱Valyutalar💷','callback_data'=>'kurs']],[['text'=>'🆕Tezkor yangilik🔥','callback_data'=>'yan'],['text'=>'🌤ObHavo🌨','url'=>'https://t.me/ob_havo'],['text'=>'♻Tarqatish↗','url'=>'http://telegram.me/share/url?url=@ob_havo']]
			]
		]);
//3korinish yopilishi
//----------------------------------
//4korinish
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id; $message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;
$button4 = json_encode([
			'inline_keyboard'=>[
			[['text'=>'🏙Toshkent','callback_data'=>'tosh']],[['text'=>'Bizning Kanal','url'=>'link'],['text'=>'😜Kanal😜','url'=>'https://t.me/Hacker_Bey']],[['text'=>'🏡Andijon','callback_data'=>'ano'],['text'=>'🕌Buxoro','callback_data'=>'buh'],['text'=>'🏞Guliston','callback_data'=>'gul']],[['text'=>'🏖Jizzah','callback_data'=>'jiz'],['text'=>'🏘Zarafshon','callback_data'=>'zar']],[['text'=>'⛲Qarshi','callback_data'=>'qar']],[['text'=>'🏠Navoiy','callback_data'=>'nav'],['text'=>'🎎Xiva','callback_data'=>'xiv'],['text'=>'🎇Nukus','callback_data'=>'nuk']],[['text'=>'🗾Termiz','callback_data'=>'ter'],['text'=>'🌉Urganch','callback_data'=>'ur']],[['text'=>'🏘Farg`ona','callback_data'=>'fer']],[['text'=>'🕌Samarqand','callback_data'=>'sam'],['text'=>'🎏Namangan','callback_data'=>'obn']],[['text'=>'💱Valyutalar💷','callback_data'=>'kurs'],['text'=>'🆕Tezkor yangilik🔥','callback_data'=>'yan'],['text'=>'♻Tarqatish↗','url'=>'http://telegram.me/share/url?url=@ob_havo']],[['text'=>'🌤ObHavo🌧','url'=>'https://t.me/ob_havo'],['text'=>'🇺🇿UzBots🔹','url'=>'https://t.me/uzbots_group']]
			]
		]);
//4korinish yopilishi
//;---------------------------
//5korinish
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id; $message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;
$button5 = json_encode([
			'inline_keyboard'=>[
			[['text'=>'🎇Toshkent','callback_data'=>'tosh'],['text'=>'☀Andijon','callback_data'=>'ano']],[['text'=>'😜Kanal😜','url'=>'https://t.me/Hacker_Bey']],[['text'=>'⛅Buxoro','callback_data'=>'buh'],['text'=>'🌿Guliston','callback_data'=>'gul'],['text'=>'🏖Jizzah','callback_data'=>'jiz']],[['text'=>'🌾Zarafshon','callback_data'=>'zar'],['text'=>'🌫Qarshi','callback_data'=>'qar']],[['text'=>'💧Navoiy','callback_data'=>'nav']],[['text'=>'⛅Xiva','callback_data'=>'xiv'],['text'=>'🌂Nukus','callback_data'=>'nuk'],['text'=>'☄Termiz','callback_data'=>'ter']],[['text'=>'🌀Urganch','callback_data'=>'ur'],['text'=>'🌠Farg`ona','callback_data'=>'fer']],[['text'=>'🌡Samarqand','callback_data'=>'sam'],['text'=>'☁Namangan','callback_data'=>'obn']],[['text'=>'💱Valyutalar💷','callback_data'=>'kurs'],['text'=>'🆕Tezkor yangilik🔥','callback_data'=>'yan']],[['text'=>'♻Tarqatish↗','url'=>'http://telegram.me/share/url?url=@ob_havo']],[['text'=>'🌤ObHavo🌩','url'=>'https://t.me/ob_havo'],['text'=>'👑Homiy','url'=>'https://t.me/uzbots_group']]
			]
		]);
//5korinish yopilishi
//------------------------------
//6korinish
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id; $message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;
$button6 = json_encode([
			'inline_keyboard'=>[
			[['text'=>'🌂Toshkent','callback_data'=>'tosh']],[['text'=>'Bizning Kanal','url'=>'link'],['text'=>'😜Kanal😜','url'=>'https://t.me/Hacker_Bey']],[['text'=>'🌠Andijon','callback_data'=>'ano'],['text'=>'🎇Buxoro','callback_data'=>'buh'],['text'=>'🌿Guliston','callback_data'=>'gul']],[['text'=>'🏖Jizzah','callback_data'=>'jiz'],['text'=>'☄Zarafshon','callback_data'=>'zar'],['text'=>'⛲Qarshi','callback_data'=>'qar']],[['text'=>'🏠Navoiy','callback_data'=>'nav'],['text'=>'🌫Xiva','callback_data'=>'xiv'],['text'=>'🌾Nukus','callback_data'=>'nuk']],[['text'=>'🗾Termiz','callback_data'=>'ter'],['text'=>'🌡Urganch','callback_data'=>'ur'],['text'=>'☁Farg`ona','callback_data'=>'fer']],[['text'=>'🕌Samarqand','callback_data'=>'sam'],['text'=>'🎏Namangan','callback_data'=>'obn'],['text'=>'💱Valyutalar💷','callback_data'=>'kurs']],[['text'=>'🆕Tezkor yangilik🔥','callback_data'=>'yan']],[['text'=>'♻Tarqatish↗','url'=>'http://telegram.me/share/url?url=@ob_havo']],[['text'=>'🌤ObHavo, 💱Kurs, 📰Yangiliklar','url'=>'https://t.me/ob_havo']]
			]
		]);
//6korinish yopilishi
//------------------------------
//7korinish
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id; $message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;
$button7 = json_encode([
			'inline_keyboard'=>[
			[['text'=>'🌃Toshkent','callback_data'=>'tosh'],['text'=>'🏡Andijon','callback_data'=>'ano'],['text'=>'🕌Buxoro','callback_data'=>'buh']],[['text'=>'🏞Guliston','callback_data'=>'gul'],['text'=>'🏖Jizzah','callback_data'=>'jiz'],['text'=>'🌈Zarafshon','callback_data'=>'zar']],[['text'=>'⛲Qarshi','callback_data'=>'qar'],['text'=>'🏠Navoiy','callback_data'=>'nav'],['text'=>'🎎Xiva','callback_data'=>'xiv']],[['text'=>'⛲Nukus','callback_data'=>'nuk'],['text'=>'🗾Termiz','callback_data'=>'ter'],['text'=>'🏖Urganch','callback_data'=>'ur']],[['text'=>'🏡Farg`ona','callback_data'=>'fer'],['text'=>'🌀Samarqand','callback_data'=>'sam'],['text'=>'🎏Namangan','callback_data'=>'obn']],[['text'=>'💱Valyutalar💷','callback_data'=>'kurs'],['text'=>'🆕Tezkor yangilik🔥','callback_data'=>'yan']],[['text'=>'♻Tarqatish↗','url'=>'http://telegram.me/share/url?url=@ob_havo']],[['text'=>'😍Redgram','url'=>'link'],['text'=>'💃Shaxzoda😍','url'=>'https://t.me/joinchat/AAAAAEaO2jvM8qfZDDidlw'],['text'=>'🌤ObHavo🌩','url'=>'https://t.me/ob_havo']]
			]
		]);
//7korinish yopilishi
//-------;-----------------------
//8korinish
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id; $message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;
$button8 = json_encode([
			'inline_keyboard'=>[
			[['text'=>'🏙Toshkent','callback_data'=>'tosh']],[['text'=>'Bizning Kanal','url'=>'link'],['text'=>'😜Kanal😜','url'=>'https://t.me/Hacker_Bey']],[['text'=>'🌈Andijon','callback_data'=>'ano'],['text'=>'🕌Buxoro','callback_data'=>'buh'],['text'=>'🌸Guliston','callback_data'=>'gul']],[['text'=>'🌠Jizzah','callback_data'=>'jiz']],[['text'=>'🎇Zarafshon','callback_data'=>'zar'],['text'=>'⛲Qarshi','callback_data'=>'qar']],[['text'=>'🌂Navoiy','callback_data'=>'nav'],['text'=>'🎎Xiva','callback_data'=>'xiv'],['text'=>'🎇Nukus','callback_data'=>'nuk']],[['text'=>'🗾Termiz','callback_data'=>'ter']],[['text'=>'🌉Urganch','callback_data'=>'ur'],['text'=>'🏘Farg`ona','callback_data'=>'fer']],[['text'=>'🕌Samarqand','callback_data'=>'sam'],['text'=>'🎏Namangan','callback_data'=>'obn'],['text'=>'💱Valyutalar💷','callback_data'=>'kurs']],[['text'=>'🆕Tezkor yangilik🔥','callback_data'=>'yan'],['text'=>'🌤ObHavo🌧','url'=>'https://t.me/ob_havo'],['text'=>'♻Tarqatish↗','url'=>'http://telegram.me/share/url?url=@ob_havo']]
			]
		]);
//8korinish yopilishi
//-------;-----------------------
//9korinish
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id; $message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;
$button9 = json_encode([
			'inline_keyboard'=>[
			[['text'=>'🌡Toshkent','callback_data'=>'tosh']],[['text'=>'Bizning Kanal','url'=>'link'],['text'=>'😜Kanal😜,'url'=>'https://t.me/Hacker_Bey']],[['text'=>'🌃Andijon','callback_data'=>'ano'],['text'=>'🕌Buxoro','callback_data'=>'buh'],['text'=>'🌿Guliston','callback_data'=>'gul']],[['text'=>'🏖Jizzah','callback_data'=>'jiz'],['text'=>'🏡Zarafshon','callback_data'=>'zar'],['text'=>'⛲Qarshi','callback_data'=>'qar']],[['text'=>'🏠Navoiy','callback_data'=>'nav'],['text'=>'🎎Xiva','callback_data'=>'xiv'],['text'=>'🌫Nukus','callback_data'=>'nuk']],[['text'=>'🗾Termiz','callback_data'=>'ter'],['text'=>'☁Urganch','callback_data'=>'ur'],['text'=>'💧Farg`ona','callback_data'=>'fer']],[['text'=>'🕌Samarqand','callback_data'=>'sam'],['text'=>'🏠Namangan','callback_data'=>'obn'],['text'=>'💱Valyutalar💷','callback_data'=>'kurs']],[['text'=>'🆕Tezkor yangilik🔥','callback_data'=>'yan'],['text'=>'♻Tarqatish↗','url'=>'http://telegram.me/share/url?url=@ob_havo']],[['text'=>'🌤ObHavo,💱Kurs, 📰Yangiliklar','url'=>'https://t.me/ob_havo']]
			]
		]);
//79korinish yopilishi
//-------;-----------------------
//10korinish
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id; $message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;
$button10 = json_encode([
			'inline_keyboard'=>[
			[['text'=>'🏙Toshkent','callback_data'=>'tosh']],[['text'=>'Bizning Kanal','url'=>'link'],['text'=>'😜Kanal😜,'url'=>'https://t.me/Hacker_Bey']],[['text'=>'🌈Andijon','callback_data'=>'ano'],['text'=>'🌂Buxoro','callback_data'=>'buh'],['text'=>'🌿Guliston','callback_data'=>'gul']],[['text'=>'🏖Jizzah','callback_data'=>'jiz'],['text'=>'☄Zarafshon','callback_data'=>'zar']],[['text'=>'⛲Qarshi','callback_data'=>'qar'],['text'=>'🏕Navoiy','callback_data'=>'nav'],['text'=>'🎎Xiva','callback_data'=>'xiv']],[['text'=>'🏢Nukus','callback_data'=>'nuk']],[['text'=>'🗾Termiz','callback_data'=>'ter'],['text'=>'🌉Urganch','callback_data'=>'ur']],[['text'=>'🌁Farg`ona','callback_data'=>'fer'],['text'=>'♨Samarqand','callback_data'=>'sam'],['text'=>'🌠Namangan','callback_data'=>'obn']],[['text'=>'💱Valyutalar💷','callback_data'=>'kurs'],['text'=>'🆕Tezkor yangilik🔥','callback_data'=>'yan']],[['text'=>'♻Tarqatish↗','url'=>'http://telegram.me/share/url?url=@ob_havo']]
			]
		]);
//10korinish yopilishi
//-------;-----------------------
$message_ch_author = $message_ch->author_signature;
$message_ch_mid = $message_ch->message_id;
$message_ch_chid = $message_ch->chat->id;
$message_ch_user = $message_ch->chat->username;
$audio_ch = $message_ch->audio;
$mest->$message_ch->chat->title;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;$bot = '@'.bot('getme',['bot'])->result->username;
$mesidd = $update->message->message_id;
$data = $update->callback_query->data;
$in_id = $update->callback_query->inline_message_id;
$id = $update->callback_query->from->id;
$inlineqt = $update->inline_query->query;
if ($text == '/start') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'parse_mode'=>'markdown',
		'text'=>"👋*Assalomu Alaykum, 🌤ObHavo🌨botiga ✨hush kelibsiz!👏

🔹Bu bot yordamida siz 🌤ObHavo🌨 , 💱Valyutalar kursi hamda 🔥Qaynoq yangiliklardan xabardor bolasiz✅

🔸Botni kanalingizga admin qilip iwlata olasiz👏

🇺🇿 O'zbekistonda eng zōr* [@Hacker_Bey] *kanaliga ➕A'zo bo'ling.✅

👨‍💻 Yaratuvchi:* [@SMODILOV]",
		'reply_markup'=>json_encode([
			'inline_keyboard'=>[
				
				[['text'=>'🔹Kanalimiz 🌪','url'=>'t.me/Hacker_Bey']]
			]
		])
	]);     bot('sendMessage',[
		'chat_id'=>$chat_id,
		'parse_mode'=>'markdown',
		'text'=>"*👋Bot faqat kanalga ishlaydi*❗👇
🔹[@botusername] *ni kanalingizga admin qilasiz va kanalingizga maxsus komandalar bilan uzizga yoqgan tarzini kanalizga yuborasiz👏*
`obhavo 
obhavo2
obhavo3
obhavo4
obhavo5
obhavo6
obhavo7
obhavo8
obhavo9
obhavo10`
*👆Bu komandalarni xoxlaganizni kanalizga yuborasiz va 🌤ObHavo,💱Kurs, 📰Yangiliklarni online♨ tarzda korsatadi, bot admin bolsa albatta😉*

[@SMODILOV] *tomonida UZB da sovg'a😉*",
]);
}     
//komanda asosiysi
 if ($message_ch_text == 'obhavo') { bot('deletemessage',[ 'chat_id'=>$message_ch_chid, 'message_id'=>$message_ch_mid ]);
	bot('sendMessage',[
		'chat_id'=>$message_ch_chid,
		'parse_mode'=>'markdown',
		'text'=>"*🔹 Bugungi 🌤Ob-Havo, 💱Kurs va 🔥Yangiliklarni bilib oling✅

👇 Viloyatingizni tanlang: 👇*",
		'reply_markup'=>$button
	]);
}  
//komanda asosiysi yopilishi
//----------------------
//komanda2
 if ($message_ch_text == 'obhavo2') { bot('deletemessage',[ 'chat_id'=>$message_ch_chid, 'message_id'=>$message_ch_mid ]);
	bot('sendMessage',[
		'chat_id'=>$message_ch_chid,
		'parse_mode'=>'markdown',
		'text'=>"*🔹 Bugungi 🌤Ob-Havo, 💱Kurs va 🔥Yangiliklarni bilib oling✅

👇 Viloyatingizni tanlang: 👇*",
		'reply_markup'=>$button2
	]);
}  
//komandan 2 yopilishi
//---------------------------
//komanda3
 if ($message_ch_text == 'obhavo3') { bot('deletemessage',[ 'chat_id'=>$message_ch_chid, 'message_id'=>$message_ch_mid ]);
	bot('sendMessage',[
		'chat_id'=>$message_ch_chid,
		'parse_mode'=>'markdown',
		'text'=>"*🔹 Bugungi 🌤Ob-Havo, 💱Kurs va 🔥Yangiliklarni bilib oling✅

👇 Viloyatingizni tanlang: 👇*",
		'reply_markup'=>$button3
	]);
}  

//komanda 3 yopilishi
//---------------------------
//komanda4
 if ($message_ch_text == 'obhavo4') { bot('deletemessage',[ 'chat_id'=>$message_ch_chid, 'message_id'=>$message_ch_mid ]);
	bot('sendMessage',[
		'chat_id'=>$message_ch_chid,
		'parse_mode'=>'markdown',
		'text'=>"*🔹 Bugungi 🌤Ob-Havo, 💱Kurs va 🔥Yangiliklarni bilib oling✅

👇 Viloyatingizni tanlang: 👇*",
		'reply_markup'=>$button4
	]);
}  

//komanda 4 yopilishi
//---------------------------
//komanda5
 if ($message_ch_text == 'obhavo5') { bot('deletemessage',[ 'chat_id'=>$message_ch_chid, 'message_id'=>$message_ch_mid ]);
	bot('sendMessage',[
		'chat_id'=>$message_ch_chid,
		'parse_mode'=>'markdown',
		'text'=>"*🔹 Bugungi 🌤Ob-Havo, 💱Kurs va 🔥Yangiliklarni bilib oling✅

👇 Viloyatingizni tanlang: 👇*",
		'reply_markup'=>$button5
	]);
}  

//komanda 5 yopilishi
//---------------------------
//komanda6
 if ($message_ch_text == 'obhavo6') { bot('deletemessage',[ 'chat_id'=>$message_ch_chid, 'message_id'=>$message_ch_mid ]);
	bot('sendMessage',[
		'chat_id'=>$message_ch_chid,
		'parse_mode'=>'markdown',
		'text'=>"*🔹 Bugungi 🌤Ob-Havo, 💱Kurs va 🔥Yangiliklarni bilib oling✅

👇 Viloyatingizni tanlang: 👇*",
		'reply_markup'=>$button6
	]);
}  

//komanda 6 yopilishi
//---------------------------
//komanda7
 if ($message_ch_text == 'obhavo7') { bot('deletemessage',[ 'chat_id'=>$message_ch_chid, 'message_id'=>$message_ch_mid ]);
	bot('sendMessage',[
		'chat_id'=>$message_ch_chid,
		'parse_mode'=>'markdown',
		'text'=>"*🔹 Bugungi 🌤Ob-Havo, 💱Kurs va 🔥Yangiliklarni bilib oling✅

👇 Viloyatingizni tanlang: 👇*",
		'reply_markup'=>$button7
	]);
}  

//komanda 7 yopilishi
//--------------------------
//komanda8
 if ($message_ch_text == 'obhavo8') { bot('deletemessage',[ 'chat_id'=>$message_ch_chid, 'message_id'=>$message_ch_mid ]);
	bot('sendMessage',[
		'chat_id'=>$message_ch_chid,
		'parse_mode'=>'markdown',
		'text'=>"*🔹 Bugungi 🌤Ob-Havo, 💱Kurs va 🔥Yangiliklarni bilib oling✅

👇 Viloyatingizni tanlang: 👇*",
		'reply_markup'=>$button8
	]);
}  

//komanda 8 yopilishi
//---------------------------
//komanda9
 if ($message_ch_text == 'obhavo9') { bot('deletemessage',[ 'chat_id'=>$message_ch_chid, 'message_id'=>$message_ch_mid ]);
	bot('sendMessage',[
		'chat_id'=>$message_ch_chid,
		'parse_mode'=>'markdown',
		'text'=>"*🔹 Bugungi 🌤Ob-Havo, 💱Kurs va 🔥Yangiliklarni bilib oling✅

👇 Viloyatingizni tanlang: 👇*",
		'reply_markup'=>$button9
	]);
}  

//komanda 9 yopilishi
//---------------------------
//komanda10
 if ($message_ch_text == 'obhavo10') { bot('deletemessage',[ 'chat_id'=>$message_ch_chid, 'message_id'=>$message_ch_mid ]);
	bot('sendMessage',[
		'chat_id'=>$message_ch_chid,
		'parse_mode'=>'markdown',
		'text'=>"*🔹 Bugungi 🌤Ob-Havo, 💱Kurs va 🔥Yangiliklarni bilib oling✅

👇 Viloyatingizni tanlang: 👇*",
		'reply_markup'=>$button10
	]);
}  

//komanda 10 yopilishi
//---------------------------
//komanda11

//komanda 11 yopilishi
//---------------------------
//komanda12

//komanda 12 yopilishi
//---------------------------
//komanda13

//komanda 13 yopilishi
//---------------------------
//komanda14

//komanda 14 yopilishi
//---------------------------

   
      
         
               $soat = date('H:i', strtotime('2 hour')); $data1 = $update->callback_query->data;   if($data1 == 'kurs'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>kurs()."\n\nHozir soat⏰: $soat",
'show_alert'=>true
]);
    }
   $kun1 = date('z ',strtotime('2 hour')); 
$a = 364;
$c2 = $a-$kun1;
$d = date('L ',strtotime('2 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('2 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('2 hour')); 
$a3 = 58;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('2 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;

if($data1 == 'new'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"🎄⛄Yangi yilga: $b kun, $b2 soat, $b3 minut, $b4 sekund qoldi!",
'show_alert'=>true
]);
    }
$url = 'https://daryo.uz/feed/';
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
    $line = $item->title;
    break;
}  
if($data1 == 'yan'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"🆕 $line\n\n⏰Soat : $soat",
'show_alert'=>true
]);
    }
 

if($data1 == 'obn'){  $ex1=explode("\n",$String);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr);  $havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  $nam=str_replace('</p>',' ',$nam); $nam= trim($nam); $bosim=str_replace('<p>',' ',$ex1[84]);  $bosim=str_replace('</p>',' ',$bosim); $bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[83]);  $shamol=str_replace('</p>',' ',$shamol); $shamol= trim($shamol); $oy=str_replace('<p>',' ',$ex1[87]);  $oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy); $oy= trim($oy);    $qch=str_replace('<p>',' ',$ex1[88]);  $qch=str_replace('</p>',' ',$qch); $qch= trim($qch);     $qb=str_replace('<p>',' ',$ex1[89]);  $qb=str_replace('</p>',' ',$qb); $qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2); bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Namangan $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }   if($data1 == 'ern'){
$ex1=explode("\n",$String);
   
$er1=str_replace('<span class="forecast-day">','',$ex1[165]);  $er1=str_replace('</span>','',$er1); $er1= trim($er1);
$havo = trim($ex1[169]);
$er2=str_replace('<span class="forecast-night">','',$ex1[166]); $yog = trim($ex1[172]); $er2=str_replace('</span>','',$er2); $er2= trim($er2); bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"Ertaga, $havo\n\n☀Kun: $er1\n🌙 Tun: $er2\n☁Yo'gingarchilik ehtimoli: $yog",
'show_alert'=>true
]);
    }
 
if($data1 == 'ano'){ $anb = file_get_contents('http://obhavo.uz/andijan'); $ex1=explode("\n",$anb);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr); $havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  $nam=str_replace('</p>',' ',$nam); $nam= trim($nam); $bosim=str_replace('<p>',' ',$ex1[84]);  $bosim=str_replace('</p>',' ',$bosim); $bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[83]);  $shamol=str_replace('</p>',' ',$shamol); $shamol= trim($shamol); $oy=str_replace('<p>',' ',$ex1[87]);  $oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy); $oy= trim($oy);    $qch=str_replace('<p>',' ',$ex1[88]);  $qch=str_replace('</p>',' ',$qch); $qch= trim($qch);     $qb=str_replace('<p>',' ',$ex1[89]);  $qb=str_replace('</p>',' ',$qb); $qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2); bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Andijon $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }

if($data1 == 'fer'){ $anb1 = file_get_contents('http://obhavo.uz/ferghana'); $ex1=explode("\n",$anb1);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr); $havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  $nam=str_replace('</p>',' ',$nam); $nam= trim($nam); $bosim=str_replace('<p>',' ',$ex1[84]);  $bosim=str_replace('</p>',' ',$bosim); $bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[83]);  $shamol=str_replace('</p>',' ',$shamol); $shamol= trim($shamol); $oy=str_replace('<p>',' ',$ex1[87]);  $oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy); $oy= trim($oy);    $qch=str_replace('<p>',' ',$ex1[88]);  $qch=str_replace('</p>',' ',$qch); $qch= trim($qch);     $qb=str_replace('<p>',' ',$ex1[89]);  $qb=str_replace('</p>',' ',$qb); $qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2); bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Farg’ona $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }

if($data1 == 'tosh'){ $anb2 = file_get_contents('http://obhavo.uz/tashkent'); $ex1=explode("\n",$anb2);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr); $havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  $nam=str_replace('</p>',' ',$nam); $nam= trim($nam); $bosim=str_replace('<p>',' ',$ex1[84]);  $bosim=str_replace('</p>',' ',$bosim); $bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[83]);  $shamol=str_replace('</p>',' ',$shamol); $shamol= trim($shamol); $oy=str_replace('<p>',' ',$ex1[87]);  $oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy); $oy= trim($oy);    $qch=str_replace('<p>',' ',$ex1[88]);  $qch=str_replace('</p>',' ',$qch); $qch= trim($qch);     $qb=str_replace('<p>',' ',$ex1[89]);  $qb=str_replace('</p>',' ',$qb); $qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2); bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Toshkent $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }

if($data1 == 'buh'){ $anb3 = file_get_contents('http://obhavo.uz/bukhara'); $ex1=explode("\n",$anb3);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr); $havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  $nam=str_replace('</p>',' ',$nam); $nam= trim($nam); $bosim=str_replace('<p>',' ',$ex1[84]);  $bosim=str_replace('</p>',' ',$bosim); $bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[83]);  $shamol=str_replace('</p>',' ',$shamol); $shamol= trim($shamol); $oy=str_replace('<p>',' ',$ex1[87]);  $oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy); $oy= trim($oy);    $qch=str_replace('<p>',' ',$ex1[88]);  $qch=str_replace('</p>',' ',$qch); $qch= trim($qch);     $qb=str_replace('<p>',' ',$ex1[89]);  $qb=str_replace('</p>',' ',$qb); $qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2); bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Buhoro $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n?? $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }

if($data1 == 'gul'){ $anb4 = file_get_contents('http://obhavo.uz/gulistan'); $ex1=explode("\n",$anb4);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr); $havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  $nam=str_replace('</p>',' ',$nam); $nam= trim($nam); $bosim=str_replace('<p>',' ',$ex1[84]);  $bosim=str_replace('</p>',' ',$bosim); $bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[83]);  $shamol=str_replace('</p>',' ',$shamol); $shamol= trim($shamol); $oy=str_replace('<p>',' ',$ex1[87]);  $oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy); $oy= trim($oy);    $qch=str_replace('<p>',' ',$ex1[88]);  $qch=str_replace('</p>',' ',$qch); $qch= trim($qch);     $qb=str_replace('<p>',' ',$ex1[89]);  $qb=str_replace('</p>',' ',$qb); $qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2); bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Guliston $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }

if($data1 == 'jiz'){ $anb5 = file_get_contents('http://obhavo.uz/jizzakh'); $ex1=explode("\n",$anb5);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr); $havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  $nam=str_replace('</p>',' ',$nam); $nam= trim($nam); $bosim=str_replace('<p>',' ',$ex1[84]);  $bosim=str_replace('</p>',' ',$bosim); $bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[83]);  $shamol=str_replace('</p>',' ',$shamol); $shamol= trim($shamol); $oy=str_replace('<p>',' ',$ex1[87]);  $oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy); $oy= trim($oy);    $qch=str_replace('<p>',' ',$ex1[88]);  $qch=str_replace('</p>',' ',$qch); $qch= trim($qch);     $qb=str_replace('<p>',' ',$ex1[89]);  $qb=str_replace('</p>',' ',$qb); $qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2); bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Jizzah $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }

if($data1 == 'nav'){ $anb6 = file_get_contents('http://obhavo.uz/navoi'); $ex1=explode("\n",$anb6);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr); $havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  $nam=str_replace('</p>',' ',$nam); $nam= trim($nam); $bosim=str_replace('<p>',' ',$ex1[84]);  $bosim=str_replace('</p>',' ',$bosim); $bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[83]);  $shamol=str_replace('</p>',' ',$shamol); $shamol= trim($shamol); $oy=str_replace('<p>',' ',$ex1[87]);  $oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy); $oy= trim($oy);    $qch=str_replace('<p>',' ',$ex1[88]);  $qch=str_replace('</p>',' ',$qch); $qch= trim($qch);     $qb=str_replace('<p>',' ',$ex1[89]);  $qb=str_replace('</p>',' ',$qb); $qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2); bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Navoi $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }
if($data1 == 'nuk'){ $anb7 = file_get_contents('http://obhavo.uz/nukus'); $ex1=explode("\n",$anb7);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr); $havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  $nam=str_replace('</p>',' ',$nam); $nam= trim($nam); $bosim=str_replace('<p>',' ',$ex1[84]);  $bosim=str_replace('</p>',' ',$bosim); $bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[83]);  $shamol=str_replace('</p>',' ',$shamol); $shamol= trim($shamol); $oy=str_replace('<p>',' ',$ex1[87]);  $oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy); $oy= trim($oy);    $qch=str_replace('<p>',' ',$ex1[88]);  $qch=str_replace('</p>',' ',$qch); $qch= trim($qch);     $qb=str_replace('<p>',' ',$ex1[89]);  $qb=str_replace('</p>',' ',$qb); $qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2); bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Nukus $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }
if($data1 == 'sam'){ $anb8 = file_get_contents('http://obhavo.uz/samarkand'); $ex1=explode("\n",$anb8);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr); $havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  $nam=str_replace('</p>',' ',$nam); $nam= trim($nam); $bosim=str_replace('<p>',' ',$ex1[84]);  $bosim=str_replace('</p>',' ',$bosim); $bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[83]);  $shamol=str_replace('</p>',' ',$shamol); $shamol= trim($shamol); $oy=str_replace('<p>',' ',$ex1[87]);  $oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy); $oy= trim($oy);    $qch=str_replace('<p>',' ',$ex1[88]);  $qch=str_replace('</p>',' ',$qch); $qch= trim($qch);     $qb=str_replace('<p>',' ',$ex1[89]);  $qb=str_replace('</p>',' ',$qb); $qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2); bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Samarqand $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }
if($data1 == 'zar'){ $anb9 = file_get_contents('http://obhavo.uz/zarafshan'); $ex1=explode("\n",$anb9);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr); $havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  $nam=str_replace('</p>',' ',$nam); $nam= trim($nam); $bosim=str_replace('<p>',' ',$ex1[84]);  $bosim=str_replace('</p>',' ',$bosim); $bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[83]);  $shamol=str_replace('</p>',' ',$shamol); $shamol= trim($shamol); $oy=str_replace('<p>',' ',$ex1[87]);  $oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy); $oy= trim($oy);    $qch=str_replace('<p>',' ',$ex1[88]);  $qch=str_replace('</p>',' ',$qch); $qch= trim($qch);     $qb=str_replace('<p>',' ',$ex1[89]);  $qb=str_replace('</p>',' ',$qb); $qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2); bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Zarafshon $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }
if($data1 == 'qar'){ $anb10 = file_get_contents('http://obhavo.uz/karshi'); $ex1=explode("\n",$anb10);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr); $havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  $nam=str_replace('</p>',' ',$nam); $nam= trim($nam); $bosim=str_replace('<p>',' ',$ex1[84]);  $bosim=str_replace('</p>',' ',$bosim); $bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[83]);  $shamol=str_replace('</p>',' ',$shamol); $shamol= trim($shamol); $oy=str_replace('<p>',' ',$ex1[87]);  $oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy); $oy= trim($oy);    $qch=str_replace('<p>',' ',$ex1[88]);  $qch=str_replace('</p>',' ',$qch); $qch= trim($qch);     $qb=str_replace('<p>',' ',$ex1[89]);  $qb=str_replace('</p>',' ',$qb); $qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2); bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Qarshi $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }
if($data1 == 'ter'){ $anb11 = file_get_contents('http://obhavo.uz/termez'); $ex1=explode("\n",$anb11);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr); $havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  $nam=str_replace('</p>',' ',$nam); $nam= trim($nam); $bosim=str_replace('<p>',' ',$ex1[84]);  $bosim=str_replace('</p>',' ',$bosim); $bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[83]);  $shamol=str_replace('</p>',' ',$shamol); $shamol= trim($shamol); $oy=str_replace('<p>',' ',$ex1[87]);  $oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy); $oy= trim($oy);    $qch=str_replace('<p>',' ',$ex1[88]);  $qch=str_replace('</p>',' ',$qch); $qch= trim($qch);     $qb=str_replace('<p>',' ',$ex1[89]);  $qb=str_replace('</p>',' ',$qb); $qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2); bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Termiz $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }
if($data1 == 'ur'){ $anb12 = file_get_contents('http://obhavo.uz/urgench'); $ex1=explode("\n",$anb12);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr); $havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  $nam=str_replace('</p>',' ',$nam); $nam= trim($nam); $bosim=str_replace('<p>',' ',$ex1[84]);  $bosim=str_replace('</p>',' ',$bosim); $bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[83]);  $shamol=str_replace('</p>',' ',$shamol); $shamol= trim($shamol); $oy=str_replace('<p>',' ',$ex1[87]);  $oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy); $oy= trim($oy);    $qch=str_replace('<p>',' ',$ex1[88]);  $qch=str_replace('</p>',' ',$qch); $qch= trim($qch);     $qb=str_replace('<p>',' ',$ex1[89]);  $qb=str_replace('</p>',' ',$qb); $qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2); bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Urganch $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }
if($data1 == 'xiv'){ $anb13 = file_get_contents('http://obhavo.uz/khiva'); $ex1=explode("\n",$anb13);
    $kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr); $havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[79]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[82]);  $nam=str_replace('</p>',' ',$nam); $nam= trim($nam); $bosim=str_replace('<p>',' ',$ex1[84]);  $bosim=str_replace('</p>',' ',$bosim); $bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[83]);  $shamol=str_replace('</p>',' ',$shamol); $shamol= trim($shamol); $oy=str_replace('<p>',' ',$ex1[87]);  $oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy); $oy= trim($oy);    $qch=str_replace('<p>',' ',$ex1[88]);  $qch=str_replace('</p>',' ',$qch); $qch= trim($qch);     $qb=str_replace('<p>',' ',$ex1[89]);  $qb=str_replace('</p>',' ',$qb); $qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2); bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"📆Xiva $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
'show_alert'=>true
]);
    }
