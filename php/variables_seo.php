<?php

$seo_page_array = [
  // DE
  [
    'page_name' => 'start.php',
    'seo_page_title' => 'Startseite',
    'seo_description' => 'SEO - start - Metabeschreibung DE',
    'seo_alt_lang_de' => 'start',
    'seo_alt_lang_en' => 'home',
    'seo_img' => 'home.png',
    'lang' => 'de',
    'seo_type' => 'WebPage',
  ],
  [
    'page_name' => 'projekte.php',
    'seo_page_title' => 'Projekte',
    'seo_description' => 'SEO - projekte - Metabeschreibung DE',
    'seo_alt_lang_de' => 'projekte',
    'seo_alt_lang_en' => 'projects',
    'seo_img' => 'projects.png',
    'lang' => 'de',
    'seo_type' => 'WebPage',
  ],

  [
    'page_name' => 'impressum.php',
    'seo_page_title' => 'Impressum',
    'seo_description' => 'SEO - Impressum - Metabeschreibung DE',
    'seo_alt_lang_de' => 'impressum',
    'seo_alt_lang_en' => 'imprint',
    'seo_img' => 'imprint.png',
    'lang' => 'de',
    'seo_type' => 'WebPage',
  ],
  [
    'page_name' => 'datenchutz.php',
    'seo_page_title' => 'Datenschutz',
    'seo_description' => 'SEO - Datenschutz - Metabeschreibung DE',
    'seo_alt_lang_de' => 'Datenschutz',
    'seo_alt_lang_en' => 'privacy-policy',
    'seo_img' => 'privacy-policy.png',
    'lang' => 'de',
    'seo_type' => 'WebPage',
  ],
  [
    'page_name' => '404.php',
    'seo_page_title' => 'Oops',
    'seo_description' => 'SEO - Oops - Meta Metabeschreibung DE',
    'seo_alt_lang_de' => '404',
    'seo_alt_lang_en' => '404',
    'seo_img' => '',
    'lang' => 'de',
    'seo_type' => 'WebPage',
  ],

  // EN
  [
    'page_name' => 'home.php',
    'seo_page_title' => 'Home',
    'seo_description' => 'SEO - home - Meta Description EN',
    'seo_alt_lang_de' => 'start',
    'seo_alt_lang_en' => 'home',
    'seo_img' => 'home.png',
    'lang' => 'en',
    'seo_type' => 'WebPage',
  ],
  [
    'page_name' => 'projects.php',
    'seo_page_title' => 'Projects',
    'seo_description' => 'SEO - projecte - Meta Description EN',
    'seo_alt_lang_de' => 'projekte',
    'seo_alt_lang_en' => 'projects',
    'seo_img' => 'projects.png',
    'lang' => 'en',
    'seo_type' => 'WebPage',
  ],
  [
    'page_name' => 'imprint.php',
    'seo_page_title' => 'Imprint',
    'seo_description' => 'SEO - Impressum - Meta Description EN',
    'seo_alt_lang_de' => 'impressum',
    'seo_alt_lang_en' => 'imprint',
    'seo_img' => 'imprint.png',
    'lang' => 'en',
    'seo_type' => 'WebPage',
  ],
  [
    'page_name' => 'privacy-policy.php',
    'seo_page_title' => 'Privacy Policy',
    'seo_description' => 'SEO - Privacy Policy - Meta Description EN',
    'seo_alt_lang_de' => 'Datenschutz',
    'seo_alt_lang_en' => 'privacy-policy',
    'seo_img' => 'privacy-policy.png',
    'lang' => 'en',
    'seo_type' => 'WebPage',
  ],

  [
    'page_name' => '404.php',
    'seo_page_title' => 'Oops',
    'seo_description' => 'SEO - Oops - Meta Description EN',
    'seo_alt_lang_de' => '404',
    'seo_alt_lang_en' => '404',
    'seo_img' => '',
    'lang' => 'en',
    'seo_type' => 'WebPage',
  ]
];



$current_page = basename($_SERVER['SCRIPT_FILENAME']);

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$request_uri = $_SERVER['REQUEST_URI'];
$seo_canonical_url = $protocol . $host . $request_uri;


foreach ($seo_page_array as $seo_page) {
  if ($seo_page['page_name'] === $current_page && $seo_page['lang'] === $lang) {
    $seo_page_title_for_header = strtoupper(str_replace(".php", "", $seo_page['page_name']));
    $seo_page_title_for_header = str_replace("-", " ", $seo_page_title_for_header);

    $seo_page_title = $seo_page['seo_page_title'];
    $seo_description = $seo_page['seo_description'];
    $seo_og_img = $protocol . $host . "/misc/seo/" . $seo_page['seo_img'];

    $breadcrumb_position = $seo_page['breadcrumb_position'];
    $breadcrumb_item = $seo_canonical_url;

    $seo_alt_lang_de = $seo_page['seo_alt_lang_de'];
    $seo_alt_lang_en = $seo_page['seo_alt_lang_en'];

    $seo_type = $seo_page['seo_type'];

    break;
  }
}
