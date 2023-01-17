<?php
$nombres = [200, 204, 173, 98, 171, 404, 459];
for ($lines=0; $lines <= 6 ; $lines++) {
  if ($nombres[$lines]%2==0) {
    echo "$nombres[$lines] est paire <br>";
  }
  else {
    echo "$nombres[$lines] est impaire <br>";
  }
}
 ?>
