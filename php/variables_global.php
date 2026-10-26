<?php

$dev_mode = true  ;

//LANGUAGE
$language_selection = true;
$lang = "";

if ($language_selection) {
  session_start();
  if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
  } elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
  } else {
    $lang = 'de';
  }
}


//BASE URL
if ($dev_mode) {
  $base_url = 'http://localhost' . dirname($_SERVER['PHP_SELF']);

  $base_url = str_replace(
    ['/de', '/en'],
    '',
    $base_url
  );
} else {
  $protocol = (
    !empty($_SERVER['HTTPS']) &&
    $_SERVER['HTTPS'] !== 'off'
  ) || $_SERVER['SERVER_PORT'] == 443
    ? 'https://'
    : 'http://';

  $base_url = $protocol . $_SERVER['HTTP_HOST'];
}

$base_url = rtrim($base_url, '/');



//BLOG
$icons_folder = __DIR__ . '/../svg_set_2/';
$connection_type = "local";

$current_page = basename($_SERVER['SCRIPT_FILENAME']);
if ($current_page === 'blog.php' or $current_page === 'post.php') {
  include __DIR__ . '/../components/blog/config/blog_config.php';
}


//CONTACT & SOCIAL MEDIA
$company_name = "Company";
$company_phone = "+49 123 123 123";
$cleaned_company_phone = preg_replace('/\D+/', '', $company_phone);
$company_hotline = "";
$cleaned_company_hotline = preg_replace('/\D+/', '', $company_hotline);
$company_fax = "";
$company_email = "mail@company.com";



$facebook = "www.facebook.com";
$instagram = "www.instagram.com";
$youtube = "www.tiktok.com";

$social_media_links = [
  [$facebook, "social-facebook"],
  [$instagram, "social-instagram"],
  [$youtube, "social-youtube"],
];

/*SIDE PANEL*/

$side_panel = true;

if ($lang == "en") {
  $side_panel_text_phone = "Just give me a call";
  $side_panel_text_email = "Write an e-Mail";
  $side_panel_text_facebook = "Like us on Facebook";
  $side_panel_text_instagram = "Follow our Instagram";
  $side_panel_text_youtube = "Subscribe to your channel";
}

if ($lang == "de") {
  $side_panel_text_phone = "Klingel einfach durch";
  $side_panel_text_email = "Schreib mir einfach";
  $side_panel_text_facebook = "Folge mir auf Facebook";
  $side_panel_text_instagram = "Folge mir auf Instagram";
  $side_panel_text_youtube = "Folge mir auf YouTube";
}
