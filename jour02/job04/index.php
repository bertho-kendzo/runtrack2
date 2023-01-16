<?php
for ($mul=1; $mul<=100 ; $mul++) {
  if ($mul%3==0 && $mul%5!=0) {
    echo "Fizz <br>";
  }
  elseif ($mul%5==0 && $mul%3!=0) {
    echo "Buzz <br>";
  }
  elseif ($mul%3==0 && $mul%5==0) {
    echo "FizzBuzz <br>";
  }
  else {
    echo "$mul <br>";
  }
}
 ?>
