<?php

include "tabs_content.php";

$tabArray = [];

if ($lang === "en") {
  $tabArray = $tabArray_en;
} elseif ($lang === "de") {
  $tabArray = $tabArray_de;
}

?>

<?php if (!empty($tabArray)) { ?>

  <div class="component tab-component">
    <div class="tabs-navigation-wrapper"></div>

    <div class="tabs-containers-wrapper">

      <?php foreach ($tabArray as $tab_item) { ?>

        <div class="tab-container">

          <?php if (!empty($tab_item['headline'])) { ?>
            <h3 class="tab-container-headline">
              <?php echo $tab_item['headline']; ?>
            </h3>
          <?php } ?>

          <?php if (!empty($tab_item['text'])) { ?>
            <p><?php echo $tab_item['text']; ?></p>
          <?php } ?>

          <?php if (!empty($tab_item['btn_links'])) { ?>
              <?php foreach ($tab_item['btn_links'] as $tab_btn_item) { ?>

                <?php if (!empty($tab_btn_item['btn_link'])) { ?>

                  <a
                    class="btn btn-colored<?php echo $tab_btn_item['btn_outline'];?>"
                    href="<?php echo $base_url . $tab_btn_item['btn_link']; ?>"
                    target="<?php echo !empty($tab_btn_item['btn_target'])
                              ? $tab_btn_item['btn_target']
                              : '_self'; ?>">
                    <?php echo $tab_btn_item['btn_text']; ?>
                  </a>

                <?php } else { ?>

                  <button
                    class="btn btn-colored<?php echo $tab_btn_item['btn_outline'];?>"
                    style="opacity: 0; pointer-events: none;"
                    type="button"
                    aria-hidden="true"
                    tabindex="-1">
                    empty
                  </button>

                <?php } ?>

              <?php } ?>

          <?php } ?>

        </div>

      <?php } ?>

    </div>
  </div>

<?php } ?>
