<?php
echo "Inserting Races...";

$xml=simplexml_load_file("2020_cup_schedule.xml");
echo $xml->season->event[0]["name"];
?>