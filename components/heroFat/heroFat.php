<div class="component heroFat-component">
  <div class="heroFat-wrapper">
    <div class="wrapper wrapper-medium heroFat-wrapper-inner">


      <div class="heroFat-info-container">

        <?php if ($lang == 'de') { ?>

          <div class="heroFat-headline-container">
            <h1>WebkitPro</h1>
          </div>

          <div class="heroFat-subheadline-container">
            <h2>Ein modulares, Code-First<br>PHP-Webframework</h2>
          </div>

          <div class="heroFat-text-container">
            <p>Ein modulares, Code-First PHP-Webframework zur Entwicklung mehrsprachiger und inhaltsorientierter Websites. WebkitPro kombiniert wiederverwendbare Frontend-Komponenten mit serverseitigem Routing, Templates, zentraler Konfiguration und CMS-ähnlicher Inhaltsverwaltung. Vite übernimmt die moderne Frontend-Build-Pipeline für SCSS, JavaScript und TypeScript einschließlich Bundling, Minifizierung und Asset-Versionierung. Im Gegensatz zu einem klassischen CMS kommt WebkitPro ohne grafische Administrationsoberfläche aus und ermöglicht eine vollständig codebasierte Verwaltung von Struktur, Komponenten und Inhalten.</p>
          </div>

        <?php } ?>


        <?php if ($lang == 'en') { ?>

          <div class="heroFat-headline-container">
            <h1>WebkitPro</h1>
          </div>

          <div class="heroFat-subheadline-container">
            <h2>A Modular, Code-First<br>PHP Website Framework</h2>
          </div>

          <div class="heroFat-text-container">
            <p>A modular, code-first PHP web framework for building multilingual, content-driven websites. WebkitPro combines reusable frontend components with server-side routing, templates, centralized configuration, and CMS-like content management. Vite provides the modern frontend build pipeline for SCSS, JavaScript, and TypeScript, including bundling, minification, and asset versioning. Unlike a traditional CMS, WebkitPro requires no administrative GUI and keeps the website structure, components, and content entirely code-driven.</p>
          </div>

        <?php } ?>

      </div>



      <div class="portrait-container">
        <img src=<?php echo $base_url . "/components/heroFat/img/portrait-cutout.png"; ?> alt="<?php echo $company_name; ?>">
      </div>



      <div class="circle-container"></div>



      <div id="jump-to-main" class="heroFat-arrow-container">
        <?php echo file_get_contents(__DIR__ . '/../../misc/svg_set_2/arrow-down.svg'); ?>
      </div>

    </div>
  </div>
</div>
