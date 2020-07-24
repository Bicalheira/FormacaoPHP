<?php
for ($counter = 1; $counter <= 15; $counter++) {
  if ($counter == 10) {
    continue;
  } else if ($counter == 13) {
    break;
  }
  echo "#$counter" . PHP_EOL;
}
