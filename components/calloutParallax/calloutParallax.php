<?php

include "calloutParallax_content.php";

if ($lang == "en") {
  $calloutParallaxArray = $calloutParallaxArray_en;
}

if ($lang == "de") {
  $calloutParallaxArray = $calloutParallaxArray_de;
}

?>

<?php if (count($calloutParallaxArray)) { ?>

  <div class="component calloutParallax-component" style="background-image: url(<?php echo '../components/calloutParallax/img/' .  $calloutParallaxArray['background_image']; ?>)">
    <div class="wrapper wrapper-medium">
      <div class="callout-parallax-container">

        <div class="callout-parallax-headline">

          <?php if ($calloutParallaxArray['quote-symbols']) { ?>
            <div class="quote-marker">
              <?php echo file_get_contents(__DIR__ . '/../../misc/svg_set_2/quote-left.svg'); ?>
            </div>
          <?php } ?>

          <?php if ($calloutParallaxArray['headline']) { ?>
            <h2><?php echo $calloutParallaxArray['headline']; ?></h2>
          <?php } ?>

          <?php if ($calloutParallaxArray['quote-symbols']) { ?>
            <div class="quote-marker">
              <?php echo file_get_contents(__DIR__ . '/../../misc/svg_set_2/quote-right.svg'); ?>
            </div>
          <?php } ?>

        </div>




        <div class="callout-parallax-subheadline">
          <?php if ($calloutParallaxArray['subheadline']) { ?>
            <h3><?php echo $calloutParallaxArray['subheadline']; ?></h3>
          <?php } ?>
        </div>


        <div class="callout-parallax-text">
          <?php if ($calloutParallaxArray['text']) { ?>
            <p><?php echo $calloutParallaxArray['text']; ?></p>
          <?php } ?>
        </div>



        <div class="callout-parallax-button-box">
          <?php if ($calloutParallaxArray['btn_links']) { ?>
            <?php foreach ($calloutParallaxArray['btn_links'] as $key => $item) { ?>
              <a class="btn btn-colored<?php echo $item['btn_type']; ?>" href="<?php echo $item['btn_link']; ?>" target="<?php echo !empty($item['btn_target']) ? $item['btn_target'] : '_self'; ?>">
                <?php echo $item['btn_text']; ?>
              </a>
            <?php } ?>
          <?php } ?>
        </div>


      </div>
    </div>
  </div>
<?php } ?>
