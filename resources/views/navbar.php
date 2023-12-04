<?php
require_once(__DIR__ . '/../../config/config.php');

?>
<?php
if (isset($lang['home']) && $lang['home'] !== null) {
  ?>
  <!-- add navbar menu -->
  <nav>
    <ul>
      <li> <a href="/coreasusa/">
          <?= $lang['home']; ?>
        </a> </li>
      <li> <a href="/coreasusa/services">
          <?= $lang['services']; ?>
        </a> </li>
      <li> <a href="/coreasusa/contact">
          <?= $lang['contact']; ?>
        </a> </li>
    </ul>
  </nav>

  <!-- add languages icons -->
  <div class="language-selector">
    <a href="?lang=en"><img src="/coreasusa/public/img/icons/flag_en.png" alt="English"></a>
    <a href="?lang=fr"><img src="/coreasusa/public/img/icons/flag_fr.png" alt="French"></a>
  </div>

<?php } ?>