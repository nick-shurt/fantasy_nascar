<?php
include 'db_credentials.php';
include 'nascar_drivers_teams_2020.php';

echo "Inserting Teams...";
echo "<br>";
echo "<br>";

$servername = "localhost";
$username = $U_NAME;
$password = $P_WORD;
$db = $DATABASE;

$con = new mysqli($servername, $username, $password);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
if (!mysqli_select_db($con, $db))  {  
    echo "Unable to locate the database";   
    exit();  
}

$error = false;
for ($i = 1; $i < 28; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $team_name = $teams_week[$i][$j]->get_team_standing()->get_team_name();
        $driver1 = $teams_week[$i][$j]->get_driver(1);
        $driver2 = $teams_week[$i][$j]->get_driver(2);
        $driver3 = $teams_week[$i][$j]->get_driver(3);
        $driver4 = $teams_week[$i][$j]->get_fourth_driver();
        $week = $i;

        $sql = "INSERT INTO teams_2020 (team_name, driver1, driver2, driver3, driver4, week) VALUES ";
        $sql .= "('" . $team_name . "', '" . $driver1 . "', '" . $driver2 . "', '" . $driver3 . "', '" . $driver4 . "', '" . $week . "')";

        if (mysqli_query($con, $sql)) {
            echo "Week " . $i . ", Team " . $j . " uploaded successfully!<br>";
        } else {
            echo "Race " . $i . ", Team " . $j . " did not upload successfully.<br>" . mysqli_error($con) . "<br>";
            $error = true;
        }
    }
}

if (!$error) {
    echo "<br>All races uploaded successfully!!";
} else {
    echo "<br>SHIT";
}

?>