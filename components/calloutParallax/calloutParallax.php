<?php if (count($calloutParallax_array)) { ?>

  <div class="component calloutParallax-component" style="background-image: url(<?php echo '../components/calloutParallax/img/' .  $calloutParallax_array['background_image']; ?>)">
    <div class="wrapper wrapper-medium">
      <div class="callout-parallax-container">

        <div class="callout-parallax-headline">

          <?php if ($calloutParallax_array['quote-symbols']) { ?>
            <div class="quote-marker">
              <?php echo file_get_contents(__DIR__ . '/../../misc/svg_set_2/quote-left.svg'); ?>
            </div>
          <?php } ?>

          <?php if ($calloutParallax_array['headline']) { ?>
            <h2><?php echo $calloutParallax_array['headline']; ?></h2>
          <?php } ?>

          <?php if ($calloutParallax_array['quote-symbols']) { ?>
            <div class="quote-marker">
              <?php echo file_get_contents(__DIR__ . '/../../misc/svg_set_2/quote-right.svg'); ?>
            </div>
          <?php } ?>

        </div>




        <div class="callout-parallax-subheadline">
          <?php if ($calloutParallax_array['subheadline']) { ?>
            <h3><?php echo $calloutParallax_array['subheadline']; ?></h3>
          <?php } ?>
        </div>


        <div class="callout-parallax-text">
          <?php if ($calloutParallax_array['text']) { ?>
            <p><?php echo $calloutParallax_array['text']; ?></p>
          <?php } ?>
        </div>



        <div class="callout-parallax-button-box">
          <?php if ($calloutParallax_array['btn_links']) { ?>
            <?php foreach ($calloutParallax_array['btn_links'] as $key => $item) { ?>
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
