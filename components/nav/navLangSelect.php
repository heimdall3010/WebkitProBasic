<div class="language-select-container">
  <div class="language-select-inner">
    <label for="language-selector">Select language</label>
    <select id="language-selector" class="language-selector" name="language">
      <option value="en" <?php if ($lang == 'en') echo 'selected'; ?>>EN</option>
      <option value="de" <?php if ($lang == 'de') echo 'selected'; ?>>DE</option>
    </select>
    <div class="language-select-arrow">
      <?php echo file_get_contents(__DIR__ . '/../../misc/svg_set_2/arrow-down.svg'); ?>
    </div>
  </div>
</div>
