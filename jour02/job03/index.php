<?php
for ($count==0; $count<=100 ; $count++) {
  if ($count>0 && $count<20) {
    echo "<i> $count </i> <br>";
  }
  elseif ($count>25 && $count<50 && $count!=42) {
    echo "<u> $count </u> <br>";
  }
  elseif ($count==42) {
    echo "La Plateforme <br>";
  }
  else {
    echo "$count <br>";
  }
}
 ?>
