<?php
$begin_links = 13;
$begin_rechts = 4;
$waardes = array(1,2,3,6,14);
if($begin_links == $begin_rechts) {
    echo "In belans" . "<br>";
    echo "Waardes zijn: Links = " .$links. " rechts = " .$rechts;
} else if ($begin_links != $begin_rechts) {
    $left = $begin_links - $begin_rechts;
    $right = $begin_rechts - $begin_links;
    // waardes kunnen een min waarde krijgen, moet veranderd worden voor de enkele vergelijkingen.
    if ($left < 0) {
     $left =   str_replace('-', '', $left);
    } else if ($right < 0) {
     $right = str_replace("-",'', $right);
    }
    // kijkt of de left waarde voorkomt in de array || kijkt of waarde right in array voorkomt
    if (in_array($left,$waardes)) {
        echo "in belans"."<br>"."links: ".$begin_links."<br>"."Rechts: ".$begin_rechts."<br>"."wat nodig nog is om in belans te krijgen: ". $left;
    } else if (in_array($right,$waardes)) {
        echo "in belans"."<br>"."links: ".$begin_links."<br>"."Rechts: ".$begin_rechts."<br>"."wat nodig nog is om in belans te krijgen: ". $right;
    // checken of je met 2 waardes balans kan krijgen
    } 
     else {
        echo "waardes zijn niet in belans";
    }
}