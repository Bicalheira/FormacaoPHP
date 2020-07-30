<?php

spl_autoload_register(function (string $fullNameClass) {

  $filePath = str_replace('Alura\\Bank', 'src', $fullNameClass);
  $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $filePath);
  $filePath .= '.php';

  if (file_exists($filePath)) {
    require_once $filePath;
  }
});
