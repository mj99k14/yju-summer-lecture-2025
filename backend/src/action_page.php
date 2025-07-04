<?php
$Mercurydistance = round((5790 / 30) / 60, 2);
$earthdistance = round((15000 / 30) / 60, 2);
$Marsdistance = round((23000 / 30) / 60, 2);


$answer =  $_POST["planet"];

if (isset($answer) == "수성") {
    echo "Trave time from sun to mercury:", $Mercurydistance;
} elseif (isset($answer) == "지구") {
    echo "Trave time from sun to earth:", $earthdistance;
} else {
    echo "Trave time from sun to Mars:", $Marsdistance;
}
