<?php include __DIR__ . "/../header.php"; ?>



<section>
  <div class="wrapper wrapper-medium wrapper-prim">
    <h2>Accordion</h2>
    <div class="wrapper-boxed">
      <?php $accordion_array = loadJsonContent(__DIR__ . '/../components/accordion/accordion_content_' . $lang . '.json'); ?>
      <?php include __DIR__ .  "/../components/accordion/accordion.php"; ?>
    </div>
  </div>
</section>



<section>
  <div class="wrapper wrapper-medium wrapper-prim">
    <h2>Callout Parallax</h2>
  </div>

  <div class="wrapper wrapper-prim">
    <?php $calloutParallax_array = loadJsonContent(__DIR__ . '/../components/calloutParallax/calloutParallax_content_' . $lang . '.json'); ?>
    <?php include __DIR__ .  "/../components/calloutParallax/calloutParallax.php"; ?>
  </div>
</section>



<section>
  <div class="wrapper wrapper-medium wrapper-prim">
    <h2>Tabs</h2>
    <div class="wrapper-boxed">
      <?php $tabs_array = loadJsonContent(__DIR__ . '/../components/tabs/tabs_content_' . $lang . '.json'); ?>
      <?php include __DIR__ .  "/../components/tabs/tabs.php"; ?>
    </div>
  </div>
</section>






<?php include __DIR__ . "/../footer.php"; ?>

</body>

</html>
