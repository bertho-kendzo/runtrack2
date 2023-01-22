<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyels = array("a", "e", "i", "o", "u", "y");
$onlyVoyels = "";

for($i = 0; $i < strlen($str); $i++) {
    if(in_array(strtolower($str[$i]), $voyels)) {
        $onlyVoyels .= $str[$i];
    }
}
echo $onlyVoyels;
?>
