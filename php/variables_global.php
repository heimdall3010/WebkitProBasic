<?php

$dev_mode = true;

/*LANGUAGE*/
$languageSelection = true;
$lang = "";

if ($languageSelection) {
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

/* BASE URL */
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



/*CONTACT & SOCIAL MEDIA*/
$company_name = "Company Name";
$company_phone = "+49 123 345 456 678";
$cleaned_company_phone = preg_replace('/\D+/', '', $company_phone);
$company_hotline = "";
$cleaned_company_hotline = preg_replace('/\D+/', '', $company_hotline);
$company_fax = "";
$company_email = "mail@company-domain.com";



$facebook = "www.facebook.com";
$instagram = "www.instagram.com";
$youtube = "www.tiktok.com";

$socialMediaLinks = [
  [$facebook, "social-facebook"],
  [$instagram, "social-instagram"],
  [$youtube, "social-youtube"],
];
