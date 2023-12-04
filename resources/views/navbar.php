<?php
require_once(__DIR__ . '/../../config/config.php');

?>
<?php
if (isset($lang['home']) && $lang['home'] !== null) {
  ?>
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
<?php } ?>