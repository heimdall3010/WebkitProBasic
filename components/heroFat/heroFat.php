<div class="component heroFat-component">
  <div class="heroFat-wrapper">
    <div class="wrapper wrapper-medium heroFat-wrapper-inner">

      <div class="heroFat-info-container">

        <?php if (!empty($heroFat_array['headline'])): ?>
          <div class="heroFat-headline-container">
            <h1><?= $heroFat_array['headline'] ?></h1>
          </div>
        <?php endif; ?>

        <?php if (!empty($heroFat_array['subheadline'])): ?>
          <div class="heroFat-subheadline-container">
            <h2><?= $heroFat_array['subheadline'] ?></h2>
          </div>
        <?php endif; ?>

        <?php if (!empty($heroFat_array['text'])): ?>
          <div class="heroFat-text-container">
            <?= $heroFat_array['text'] ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($heroFat_array['buttons'])): ?>
          <div class="heroFat-button-container">
            <?php foreach ($heroFat_array['buttons'] as $button): ?>
              <?php if (empty($button['btn_text']) || empty($button['btn_link'])) continue; ?>

              <a class="btn <?= in_array($button['btn_type'] ?? '', ['btn-colored', 'btn-colored-outline'], true) ? $button['btn_type'] : 'btn-colored' ?>"
                 href="<?= $button['btn_link'] ?>"
                 target="<?= in_array($button['btn_target'] ?? '', ['_self', '_blank', '_parent', '_top'], true) ? $button['btn_target'] : '_self' ?>"
                 <?= ($button['btn_target'] ?? '_self') === '_blank' ? 'rel="noopener noreferrer"' : '' ?>><?= $button['btn_text'] ?></a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

      </div>

      <?php if (!empty($heroFat_array['portrait'])): ?>
        <div class="portrait-container">
          <img src="<?= $base_url . '/components/heroFat/img/' . rawurlencode($heroFat_array['portrait']) ?>" alt="<?= $company_name ?>">
        </div>
      <?php endif; ?>

      <div class="circle-container"></div>

      <div class="orbit-icon-container">
        <?php foreach (($heroFat_array['orbit_icons'] ?? []) as $icon): ?>
          <?php
          if (!is_string($icon) || !preg_match('/^[a-zA-Z0-9_-]+$/', $icon)) continue;
          if (is_file(__DIR__ . '/../../misc/svg_set_2/' . $icon . '.svg')) echo file_get_contents(__DIR__ . '/../../misc/svg_set_2/' . $icon . '.svg');
          ?>
        <?php endforeach; ?>
      </div>

      <div id="jump-to-main" class="heroFat-arrow-container">
        <?php echo file_get_contents(__DIR__ . '/../../misc/svg_set_2/arrow-down.svg'); ?>
      </div>

    </div>
  </div>
</div>
