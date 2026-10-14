<?php

if ($lang == "en") {
  $accordionArray = $accordionArray_en;
}

if ($lang == "de") {
  $accordionArray = $accordionArray_de;
}

?>

<?php if (count($accordionArray)) { ?>
  <div class="component accordion-component">

    <?php foreach ($accordionArray as $item) { ?>

      <div class="accordion">

        <div class="accordion-headline">

          <?php if ($item['headline']) { ?>
            <h3><?php echo $item['headline']; ?></h3>
          <?php } ?>

          <div class="accordion-icon">
            <?php echo file_get_contents(__DIR__ . '/../../misc/svg_set_2/arrow-down-circle.svg'); ?>
          </div>
        </div>

        <div class="accordion-content">
          <?php if ($item['text']) { ?>
            <p><?php echo $item['text']; ?></p>
          <?php } ?>

          <?php if ($item['btn_link']) { ?>
            <a class="btn btn-sec" href="<?php echo $item['btn_link']; ?>" target="<?php echo !empty($item['btn_target']) ? $item['btn_target'] : '_self'; ?>">
              <?php echo $item['btn_text']; ?>
            </a>
          <?php } ?>
        </div>

      </div>

    <?php } ?>

  </div>
<?php } ?>
