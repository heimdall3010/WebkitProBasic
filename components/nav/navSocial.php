<ul>
  <?php if ($company_phone) { ?>
    <li><a href="tel:<?php echo $cleaned_company_phone; ?>">
        <?php echo file_get_contents(__DIR__ . '../../../misc/svg_set_2/social-phone.svg'); ?>
        <span class="nav-meta-contact-info-text">
          <?php echo $company_phone; ?>
        </span>
      </a>
    </li>
  <?php } ?>
  <?php if ($company_email) { ?>
    <li><a href="mailto:<?php echo $company_email; ?>">
        <?php echo file_get_contents(__DIR__ . '../../../misc/svg_set_2/social-mail.svg'); ?>
        <span class="nav-meta-contact-info-text">
          <?php echo $company_email; ?>
        </span>
      </a>
    </li>
  <?php } ?>
</ul>



<?php $nav_social_media_present = false;
foreach ($socialMediaLinks as $item) {
  if ($item[0] == true) {
    $nav_social_media_present = true;
    break;
  }
} ?>

<?php if ($nav_social_media_present) { ?>
  <ul class="nav-meta-icons-container">

    <?php foreach ($socialMediaLinks as $item) { ?>
      <?php if ($item[0] != "") { ?>
        <li>
          <a href="<?php echo $item[0]; ?>" title="<?php echo $item[1]; ?>" aria-label="<?php echo $item[1]; ?>" target="_blank">
            <?php echo file_get_contents('../misc/svg_set_2/' . $item[1] . '.svg'); ?>
          </a>
        </li>
      <?php } ?>

    <?php } ?>

  </ul>

<?php } ?>
