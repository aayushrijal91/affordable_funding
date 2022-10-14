<?php
include __DIR__ . '/env.php';

$site = "Affordable Funding";
$phone_number = "1300 896 502";
$admin_email = 'admin@affordablefunding.com.au, matt@affordablefunding.com.au';
$facebook = "https://www.facebook.com/affordablefunding";
$instagram = "https://www.instagram.com/affordablefunding/";
$linkedin = "https://www.linkedin.com/company/affordable-funding/";
$gmb = "https://www.google.com/maps/place/AFFORDABLE+FUNDING+-+Car+Loans+Sydney/@-33.811217,150.9185534,15z/data=!4m2!3m1!1s0x0:0x32dabd908706399a?sa=X&ved=2ahUKEwj6wdXqsqT6AhW49zgGHa8zBT8Q_BJ6BAhSECE";
$google_map = "https://www.google.com/maps?ll=-33.821931,150.923757&z=12&t=m&hl=en&gl=AU&mapclient=embed&q=Pemulwuy+New+South+Wales+2145";
$no_reply_email = 'info@affordablefunding.com.au';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;

function renderImg($filename, $folder, $classname = "")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt=" . $filename_without_ext . " class='" . $classname . "'>";
}
