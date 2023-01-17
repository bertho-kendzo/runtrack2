<?php
for ($pr=1; $pr <=1000 ; $pr++) {
  if ($pr%1==0 && $pr%$pr!=0) {
    echo "$pr n'est pas un nombre premier <br>";
  }
  elseif ($pr%1!=0 && $pr%$pr==0) {
    echo "$pr n'est pas un nombre premier <br>";
  }
  else {
    echo "$pr est un nombre premier <br>";
  }
}
 ?>
