<?php
// Création de la variable de type string
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

// Création du dictionnaire pour stocker les occurrences de consonnes et de voyelles
$dic = array("consonnes" => 0, "voyelles" => 0);

// Parcours de la chaîne de caractères pour compter les occurrences de consonnes et de voyelles
for ($i = 0; $i < strlen($str); $i++) {
    if (in_array(strtolower($str[$i]), array('a', 'e', 'i', 'o', 'u', 'y'))) {
        $dic["voyelles"]++;
    } else if ( ($str[$i] >= 'a' && $str[$i] <= 'z') || ($str[$i] >= 'A' && $str[$i] <= 'Z')) {
        $dic["consonnes"]++;
    }
}

// Affichage des résultats dans un tableau <table> html
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Consonnes</th>";
echo "<th>Voyelles</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr>";
echo "<td>".$dic["consonnes"]."</td>";
echo "<td>".$dic["voyelles"]."</td>";
echo "</tr>";
echo "</tbody>";
