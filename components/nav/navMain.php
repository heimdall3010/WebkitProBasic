<?php if ($lang == "en") { ?>
  <ul class="nav-level nav-main-level">
    <li><a href=<?php echo $base_url . "/en/home"; ?>>Home</a>
    </li>
    <li><a href=<?php echo $base_url . "/en/about-us"; ?>>About Us</a>
      <ul class="nav-level nav-sub-level">
        <li><a href="#">History</a></li>
      </ul>
    </li>
    <li><a href=<?php echo $base_url . "/en/projects"; ?>>Projects</a>
      <ul class="nav-level nav-sub-level">
        <li><a href="#">Ongoing Projects</a>
          <ul class="nav-level nav-sub-level">
            <li><a href="#">Project 1</a>
              <ul class="nav-level nav-sub-level">
                <li><a href="#">Concept</a></li>
                <li><a href="#">Costs</a></li>
                <li><a href="#">Resume</a></li>
              </ul>
            </li>
            <li><a href="#">Project 2</a>
              <ul class="nav-level nav-sub-level">
                <li><a href="#">Concept</a></li>
                <li><a href="#">Costs</a></li>
                <li><a href="#">Resume</a></li>
              </ul>
            </li>
            <li><a href="#">Project 3</a>
              <ul class="nav-level nav-sub-level">
                <li><a href="#">Concept</a></li>
                <li><a href="#">Costs</a></li>
                <li><a href="#">Resume</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#">Completed Projects</a></li>
        <li><a href="#">Research & Development</a></li>
      </ul>
    </li>
    <li><a href=<?php echo $base_url . "/en/team"; ?>>Team</a></li>
    <li><a href=<?php echo $base_url . "/en/career"; ?>>Career</a>
      <ul class="nav-level nav-sub-level">
        <li><a href="#">Benefits & Perks</a></li>
        <li><a href="#">Internships & Graduate Programs</a></li>
        <li><a href="#">Employee Development & Growth</a></li>
        <li><a href="#">Diversity & Inclusion</a></li>
      </ul>
    </li>
  </ul>
<?php } ?>

<?php if ($lang == "de") { ?>
  <ul class="nav-level nav-main-level">
    <li><a href=<?php echo $base_url . "/de/start"; ?>>Start</a></li>
    <li><a href=<?php echo $base_url . "/de/ueber-uns"; ?>>Über Uns</a>
      <ul class="nav-level nav-sub-level">
        <li><a href="#">Historie</a></li>
      </ul>
    </li>
    <li><a href=<?php echo $base_url . "/de/projekte"; ?>>Projekte</a>
      <ul class="nav-level nav-sub-level">
        <li><a href="#">Laufende Projekte</a>
          <ul class="nav-level nav-sub-level">
            <li><a href="#">Projekt 1</a>
              <ul class="nav-level nav-sub-level">
                <li><a href="#">Konzept</a></li>
                <li><a href="#">Kosten</a></li>
                <li><a href="#">Resume</a></li>
              </ul>
            </li>
            <li><a href="#">Projekt 2</a>
              <ul class="nav-level nav-sub-level">
                <li><a href="#">Konzept</a></li>
                <li><a href="#">Kosten</a></li>
                <li><a href="#">Resume</a></li>
              </ul>
            </li>
            <li><a href="#">Projekt 3</a>
              <ul class="nav-level nav-sub-level">
                <li><a href="#">Konzept</a></li>
                <li><a href="#">Kosten</a></li>
                <li><a href="#">Resume</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#">Abgeschlossene Projekte</a></li>
        <li><a href="#">Forschung & Entwicklung</a></li>
      </ul>
    </li>
    <li><a href=<?php echo $base_url . "/de/team"; ?>>Team</a></li>
    <li><a href=<?php echo $base_url . "/de/karriere"; ?>>Karriere</a>
      <ul class="nav-level nav-sub-level">
        <li><a href="#">Vorteile & Perks</a></li>
        <li><a href="#">Praktika & Graduiertenprogramme</a></li>
        <li><a href="#">Mitarbeiterentwicklung & Wachstum</a></li>
        <li><a href="#">Vielfalt & Inklusion</a></li>
      </ul>
    </li>
  </ul>
<?php } ?>
