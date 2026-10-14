<?php

/*
|--------------------------------------------------------------------------
| Global Variables
|--------------------------------------------------------------------------
*/

include "php/variables_global.php";
include "php/variables_seo.php";


/*
|--------------------------------------------------------------------------
| Vite Assets
|--------------------------------------------------------------------------
*/

$viteManifestPath = __DIR__ . '/dist/.vite/manifest.json';

if (!is_file($viteManifestPath)) {
  throw new RuntimeException(
    'Vite manifest not found. Run "npm run build" first.'
  );
}

$viteManifestContent = file_get_contents($viteManifestPath);

if ($viteManifestContent === false) {
  throw new RuntimeException(
    'Vite manifest could not be read.'
  );
}

$viteManifest = json_decode(
  $viteManifestContent,
  true,
  512,
  JSON_THROW_ON_ERROR
);

$viteEntry = $viteManifest['src/main.ts'] ?? null;

if (!is_array($viteEntry)) {
  throw new RuntimeException(
    'Vite entry "src/main.ts" not found in manifest.'
  );
}

$viteJsFile = $viteEntry['file'] ?? null;
$viteCssFiles = $viteEntry['css'] ?? [];

?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>

  <?php
  /*
  |--------------------------------------------------------------------------
  | Basic Meta Data
  |--------------------------------------------------------------------------
  */
  ?>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">

  <?php
  /*
  |--------------------------------------------------------------------------
  | No index
  |--------------------------------------------------------------------------
  */
  ?>

  <meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noimageindex, notranslate" />

  <?php
  /*
  |--------------------------------------------------------------------------
  | Favicon
  |--------------------------------------------------------------------------
  */
  ?>

  <link
    rel="icon"
    type="image/x-icon"
    href="<?php echo $base_url . '/misc/favicon_set_2/favicon.ico'; ?>">

  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="<?php echo $base_url . '/misc/favicon_set_2/apple-touch-icon.png'; ?>">

  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="<?php echo $base_url . '/misc/favicon_set_2/favicon-32x32.png'; ?>">

  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="<?php echo $base_url . '/misc/favicon_set_2/favicon-16x16.png'; ?>">

  <link
    rel="manifest"
    href="<?php echo $base_url . '/misc/favicon_set_2/site.webmanifest'; ?>">


  <?php
  /*
  |--------------------------------------------------------------------------
  | SEO Meta Data
  |--------------------------------------------------------------------------
  */
  ?>

  <title><?php echo $company_name . ' | ' . $seo_page_title; ?></title>

  <meta
    name="description"
    content="<?php echo $seo_description; ?>">

  <link
    rel="canonical"
    href="<?php echo $seo_canonical_url; ?>">


  <?php
  /*
  |--------------------------------------------------------------------------
  | Open Graph
  |--------------------------------------------------------------------------
  */
  ?>

  <meta
    property="og:title"
    content="<?php echo $company_name . ' | ' . $seo_page_title; ?>">

  <meta
    property="og:description"
    content="<?php echo $seo_description; ?>">

  <meta
    property="og:url"
    content="<?php echo $seo_canonical_url; ?>">

  <meta
    property="og:image"
    content="<?php echo $seo_og_img; ?>">


  <?php
  /*
  |--------------------------------------------------------------------------
  | Twitter Card
  |--------------------------------------------------------------------------
  */
  ?>

  <meta
    name="twitter:card"
    content="summary_large_image">

  <meta
    name="twitter:title"
    content="<?php echo $company_name . ' | ' . $seo_page_title; ?>">

  <meta
    name="twitter:description"
    content="<?php echo $seo_description; ?>">

  <meta
    name="twitter:image"
    content="<?php echo $seo_og_img; ?>">


  <?php
  /*
  |--------------------------------------------------------------------------
  | Alternate Language Versions
  |--------------------------------------------------------------------------
  */
  ?>

  <link
    rel="alternate"
    href="<?php echo $base_url . '/de/' . $seo_alt_lang_de; ?>"
    hreflang="de">

  <link
    rel="alternate"
    href="<?php echo $base_url . '/en/' . $seo_alt_lang_en; ?>"
    hreflang="en">

  <link
    rel="alternate"
    href="<?php echo $base_url . '/en/' . $seo_alt_lang_en; ?>"
    hreflang="x-default">


  <?php
  /*
  |--------------------------------------------------------------------------
  | JSON-LD: Page Schema
  |--------------------------------------------------------------------------
  */
  ?>

  <?php if ($seo_type == "MusicAlbum") { ?>

    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "BlogPosting",
        "headline": "<?php echo addslashes($seo_page_title); ?>",
        "description": "<?php echo addslashes($seo_description); ?>",
        "image": "<?php echo $seo_og_img; ?>",
        "url": "<?php echo $seo_canonical_url; ?>",
        "datePublished": "<?php echo date('Y-m-d'); ?>",
        "author": {
          "@type": "Person",
          "name": "<?php echo addslashes($company_name); ?>"
        },
        "inLanguage": "<?php echo $lang; ?>"
      }
    </script>

  <?php } else { ?>

    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "<?php echo $seo_type; ?>",
        "name": "<?php echo addslashes($company_name . ' | ' . $seo_page_title); ?>",
        "description": "<?php echo addslashes($seo_description); ?>",
        "url": "<?php echo $seo_canonical_url; ?>",
        "image": "<?php echo $seo_og_img; ?>",
        "inLanguage": "<?php echo $lang; ?>"
      }
    </script>

  <?php } ?>


  <?php
  /*
  |--------------------------------------------------------------------------
  | JSON-LD: Breadcrumbs
  |--------------------------------------------------------------------------
  */

  $breadcrumb_items = [];

  if ($breadcrumb_position > 1) {
    $breadcrumb_items[] = [
      "@type" => "ListItem",
      "position" => 1,
      "name" => $lang === "de" ? "Start" : "Home",
      "item" => $protocol . $host . '/' . $lang . '/' . (
        $lang === 'de'
        ? 'start'
        : 'home'
      )
    ];
  }

  $breadcrumb_items[] = [
    "@type" => "ListItem",
    "position" => $breadcrumb_position,
    "name" => $seo_page_title,
    "item" => $breadcrumb_item
  ];

  ?>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": <?php
                          echo json_encode(
                            $breadcrumb_items,
                            JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
                          );
                          ?>
    }
  </script>


  <?php
  /*
  |--------------------------------------------------------------------------
  | Vite CSS & JavaScript Assets
  |--------------------------------------------------------------------------
  */
  ?>

  <?php foreach ($viteCssFiles as $viteCssFile) { ?>

    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo htmlspecialchars(
              $base_url . '/dist/' . $viteCssFile,
              ENT_QUOTES,
              'UTF-8'
            ); ?>">

  <?php } ?>

  <?php if (is_string($viteJsFile) && $viteJsFile !== '') { ?>

    <script
      type="module"
      src="<?php echo htmlspecialchars(
              $base_url . '/dist/' . $viteJsFile,
              ENT_QUOTES,
              'UTF-8'
            ); ?>"></script>

  <?php } ?>

</head>

<body class="lightmode" id="_top">


  <?php
  /*
  |--------------------------------------------------------------------------
  | Backdrop
  |--------------------------------------------------------------------------
  */
  ?>

  <div class="backdrop"></div>


  <?php
  /*
  |--------------------------------------------------------------------------
  | Header
  |--------------------------------------------------------------------------
  */
  ?>

  <header>

    <?php
    /*
    |--------------------------------------------------------------------------
    | Navigation
    |--------------------------------------------------------------------------
    */
    ?>

    <div class="wrapper-prim">

      <?php
      include "components/nav/nav.php";
      ?>

    </div>


    <?php
    /*
    |--------------------------------------------------------------------------
    | Hero
    |--------------------------------------------------------------------------
    */
    ?>

    <section>

      <?php
      $currentPage = basename($_SERVER['SCRIPT_FILENAME']);

      if (
        $currentPage === 'start.php'
        || $currentPage === 'home.php'
      ) {
      ?>

        <div class="wrapper wrapper-prim">
          <?php include "components/heroFat/heroFat.php"; ?>
        </div>

      <?php } else { ?>

        <div class="wrapper wrapper-prim">
          <?php include "components/heroSlim/heroSlim.php"; ?>
        </div>

      <?php } ?>

    </section>

  </header>
