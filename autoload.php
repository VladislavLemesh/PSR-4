<?php
spl_autoload_register(function ($className) {
  $path = 'src/';
  $class = str_replace("\\", DIRECTORY_SEPARATOR, $className);
  $fullPath = __DIR__ . '/' . $path . $class . '.php';
  require_once $fullPath;
});
