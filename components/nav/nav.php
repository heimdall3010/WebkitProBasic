<div class="component nav-component">

  <?php include "navMeta.php"; ?>

  <div class="nav-main-wrapper">
    <div class="wrapper wrapper-medium">

      <div id="nav-main-wrapper">

        <?php if ($lang == "en") { ?>
          <a href=<?php echo $base_url . "/en/home.php"; ?>>
          <?php } ?>

          <?php if ($lang == "de") { ?>
            <a href=<?php echo $base_url . "/de/start.php"; ?>>
            <?php } ?>

            <div class="nav-main-logo-container">
              <img src=<?php echo $base_url . "/misc/logo_set_2/logo.png"; ?> alt="<?php echo $company_name . ' | Logo'; ?>">
            </div>
            </a>


            <button id="hamburger" class="hamburger hamburger--collapse" type="button" aria-label="Open menu">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>

            <div id="nav-container" class="nav-container">
              <nav id="nav-main" class="nav-main">
                <?php include 'navMain.php'; ?>
              </nav>

              <div id="nav-mobile-info-container" class="nav-mobile-info-container">
                <div id="nav-mobile-divider"></div>

                <?php if ($languageSelection) { ?>
                  <div id="language-selection-mobile">
                    <?php include "navLangSelectMobile.php"; ?>
                  </div>
                <?php } ?>

                <nav id="nav-meta-in-main-nav">
                  <?php include "navSocial.php"; ?>
                </nav>

              </div>
            </div>

      </div>
    </div>
  </div>
</div>
