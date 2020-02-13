<?php
echo "Inserting Races...";
echo "<br>";
echo "<br>";

$xml=simplexml_load_file("2020_cup_schedule.xml");

$k = 1;
foreach ($xml->season->event as $event) {
    foreach ($event->race as $race) {
        if (isset($race["number"])) {
            echo $k . ". " . $race["name"];
            echo "<br>";
            $k++;
        }
    }
}

?>