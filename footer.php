<div class="wrapper-prim">
  <?php if ($side_panel) { ?>
    <?php include __DIR__ . "/components/sidePanel/sidePanel.php"; ?>
  <?php } ?>

  <?php include __DIR__ . "/components/dialog/dialog.php"; ?>
  <?php include __DIR__ . "/components/jumpToTopArrow/jumpToTopArrow.php"; ?>
  <?php include __DIR__ . "/components/cookieBanner/cookieBanner.php"; ?>
</div>




<footer class="waveWrapper-component wave-wrapper-quart wave-wrapper-quart-glow">
  <div class="wave-wrapper-inner-up">

    <div class="wrapper wrapper-medium wrapper-prim">

      <nav id="footer-nav">
        <div class="box-container">
          <div class="box-50">

            <?php if ($lang == "en") { ?>
              <h6>What you need to know</h6>
              <p>Webkit Pro demonstrates a modular component architecture in which individual UI components combine PHP templates, SCSS styling, and JavaScript or TypeScript functionality. PHP handles server-side rendering, routing, configuration, multilingual content, and application logic, while Vite manages the frontend build process. Component styles and scripts are bundled, optimized, minified, and versioned automatically for production. The result is a lightweight development architecture that combines server-rendered PHP with a modern frontend toolchain without requiring a traditional CMS or client-side framework.</p>

            <?php } ?>

            <?php if ($lang == "de") { ?>
              <h6>Was Sie wissen sollten</h6>
              <p>Webkit Pro demonstriert eine modulare Komponentenarchitektur, bei der einzelne UI-Komponenten PHP-Templates, SCSS-Styles und JavaScript- oder TypeScript-Funktionalität miteinander verbinden. PHP übernimmt das serverseitige Rendering, Routing, die Konfiguration, mehrsprachige Inhalte und die Anwendungslogik, während Vite den Frontend-Build-Prozess verwaltet. Komponenten-Styles und Skripte werden für den Produktivbetrieb automatisch gebündelt, optimiert, minifiziert und versioniert. Dadurch entsteht eine schlanke Entwicklungsarchitektur, die serverseitiges PHP mit einer modernen Frontend-Toolchain verbindet, ohne ein klassisches CMS oder ein clientseitiges Framework vorauszusetzen.</p>
            <?php } ?>

          </div>

          <div class="box-25 text-right">

            <?php if ($lang == "en") { ?>
              <h6>Quick Links</h6>
              <ul class="footer-nav">
                <li><a href=<?php echo $base_url  . "/en/about-us"; ?>>About Us</a></li>
                <li><a href=<?php echo $base_url  . "/en/projects"; ?>>Projects</a></li>
                <li><a href=<?php echo $base_url  . "/en/team"; ?>>Team</a></li>
              </ul>
            <?php } ?>

            <?php if ($lang == "de") { ?>
              <h6>Schnellzugriff</h6>
              <ul class="footer-nav">
                <li><a href=<?php echo $base_url  . "/de/ueber-uns"; ?>>Über Uns</a></li>
                <li><a href=<?php echo $base_url  . "/de/projekte"; ?>>Projekte</a></li>
                <li><a href=<?php echo $base_url  . "/de/team"; ?>>Team</a></li>
              </ul>
            <?php } ?>

          </div>
          <div class="box-25 text-right">

            <?php if ($lang == "en") { ?>
              <h6>Legal</h6>
              <ul class="footer-nav">
                <li><a href=<?php echo $base_url  . "/en/contact"; ?>>Contact</a></li>
                <li><a href=<?php echo $base_url  . "/en/imprint"; ?>>Imprint</a></li>
                <li><a href=<?php echo $base_url  . "/en/privacy"; ?>>Privacy Policy</a></li>
              </ul>
            <?php } ?>

            <?php if ($lang == "de") { ?>
              <h6>Gesetztliches</h6>
              <ul class="footer-nav">
                <li><a href=<?php echo $base_url  . "/de/kontakt"; ?>>Kontakt</a></li>
                <li><a href=<?php echo $base_url  . "/de/impressum"; ?>>Impressum</a></li>
                <li><a href=<?php echo $base_url  . "/de/datenschutz"; ?>>Datenschutz</a></li>
              </ul>
            <?php } ?>

          </div>
        </div>



        <?php $footer_social_media_present = false;
        foreach ($socialMediaLinks as $item) {
          if ($item[0] == true) {
            $footer_social_media_present = true;
            break;
          }
        } ?>

        <?php if ($footer_social_media_present) { ?>

          <div class="footer-social-container">
            <ul id="footer-social-nav">

              <?php foreach ($socialMediaLinks as $item) { ?>

                <?php if ($item[0] != "") { ?>

                  <li>
                    <a href="<?php echo $item[0]; ?>" title="<?php echo $item[1]; ?>" aria-label="<?php echo $item[1]; ?>" target="_blank">
                      <?php echo file_get_contents('./../misc/svg_set_2/' . $item[1] . '.svg'); ?>
                    </a>
                  </li>

                <?php } ?>
              <?php } ?>

            </ul>
          </div>

        <?php } ?>


      </nav>



    </div>
  </div>
</footer>
