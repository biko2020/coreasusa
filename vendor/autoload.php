<?php

// Register the autoloader
spl_autoload_register(function ($class) {
  // Convert class name to file path
  $classFile = __DIR__ . '/../app/' . str_replace('\\', '/', $class) . '.php';

  // Check if the file exists before including it
  if (file_exists($classFile)) {
    include $classFile;
  }
});

?>