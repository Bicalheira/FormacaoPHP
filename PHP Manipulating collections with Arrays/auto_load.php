<?php

spl_autoload_register(
  function (string $nameSpaceClass): void {
    $path = "/src";
    $directory_class = str_replace("\\", DIRECTORY_SEPARATOR, $nameSpaceClass);
    @include_once getcwd() . $path . DIRECTORY_SEPARATOR . "{$directory_class}.php";
  }
);
