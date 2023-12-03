<?php
require_once(__DIR__ . '/../../config/config.php');
?>

<nav>
  <ul>
  <li> <a href="/coreasusa/"><?= $lang['home'] ?? 'Home'; ?></a> </li>
    <li> <a href="/coreasusa/services"><?= $lang['services'] ?? 'Services'; ?></a> </li>
    <li> <a href="/coreasusa/contact"><?= $lang['contact'] ?? 'Contact'; ?></a> </li>
  </ul>
</nav>