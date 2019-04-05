<?php

$servername = "localhost";
$username = "root";
$password = "";

$con = new mysqli($servername, $username, $password);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
if (!mysqli_select_db($con, "2019_nascar_races"))  {  
    echo "Unable to locate the database";   
    exit();  
}

$getRaceData = "SELECT race_id, date FROM races WHERE closed = 0 LIMIT 1";
$res = mysqli_query($con, $getRaceData);
$raceData = mysqli_fetch_array($res);

$raceId = $raceData[0];
$race_date = date_create($raceData[1]);
$today_date = new DateTime();
$pdt = new DateTimeZone('America/Los_Angeles');
$race_date->setTimezone($pdt);
$today_date->setTimezone($pdt);

$rd_month = $race_date->format('m');
$td_month = $today_date->format('m');
$rd_day = $race_date->format('d');
$td_day = $today_date->format('d');

if ($rd_month == $td_month && $rd_day == $td_day) {
    $key = "mn4cqn7md4rn2dysmjkpgnks";
    $request = "http://api.sportradar.us/nascar-ot3/mc/races/" . $raceId . "/results.xml?api_key=" . $key;
    //$request = "";

    $cSession = curl_init();
    curl_setopt($cSession,CURLOPT_URL,$request);
    curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($cSession,CURLOPT_HEADER, false);
    $result=curl_exec($cSession);
    curl_close($cSession);

    $xml2 = simplexml_load_string($result);
    $isRaceOver = ($xml2['status'] == "closed") ? true : false;

    if ($isRaceOver) {
        upload_results($xml2, $con);
    }
}

$race_ids = array();

$getRaces = "SELECT * FROM races WHERE closed = 1";
$res = mysqli_query($con, $getRaces);
$race_count = mysqli_num_rows($res);

while($row = mysqli_fetch_array($res)) {
    $race_ids[] = $row["race_id"];
}

$k = 0;
while ($k < 10) {
    for ($i = 0; $i < $race_count; $i++) {
        get_results_new($teams_week[$i+1][$k], $race_ids[$i], $con);
    }
    $k++;
}

for ($i = 0; $i < $race_count; $i++) {
    get_season_points_new($season_drivers, $race_ids[$i], $con);
}

?>