<?php

include 'db_credentials.php';

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

$michael_mcdowell = new Season_Driver("Michael McDowell");
$joey_logano = new Season_Driver("Joey Logano");
$kyle_larson = new Season_Driver("Kyle Larson");
$ty_dillon = new Season_Driver("Ty Dillon");
$austin_dillon = new Season_Driver("Austin Dillon");
$ricky_stenhouse = new Season_Driver("Ricky Stenhouse Jr");
$aric_almirola = new Season_Driver("Aric Almirola");
$denny_hamlin = new Season_Driver("Denny Hamlin");
$chris_buescher = new Season_Driver("Chris Buescher");
$alex_bowman = new Season_Driver("Alex Bowman");
$martin_truex = new Season_Driver("Martin Truex Jr");
$ryan_newman = new Season_Driver("Ryan Newman");
$brad_keselowski = new Season_Driver("Brad Keselowski");
$erik_jones = new Season_Driver("Erik Jones");
$corey_lajoie = new Season_Driver("Corey Lajoie");
$chase_elliott = new Season_Driver("Chase Elliott");
$kyle_busch = new Season_Driver("Kyle Busch");
$kevin_harvick = new Season_Driver("Kevin Harvick");
$daniel_suarez = new Season_Driver("Daniel Suarez");
$ryan_blaney = new Season_Driver("Ryan Blaney");
$jimmie_johnson = new Season_Driver("Jimmie Johnson");
$clint_bowyer = new Season_Driver("Clint Bowyer");
$kurt_busch = new Season_Driver("Kurt Busch");
$matt_DiBenedetto = new Season_Driver("Matt DiBenedetto");
$bubba_wallace = new Season_Driver("Bubba Wallace");
$william_byron = new Season_Driver("William Byron");
$ryan_preece = new Season_Driver("Ryan Preece");
$tyler_reddick = new Season_Driver("Tyler Reddick");
$cole_custer = new Season_Driver("Cole Custer");
$jh_nemechek = new Season_Driver("John H. Nemechek");
$harrison_burton = new Season_Driver("Harrison Burton");
$quinn_houff = new Season_Driver("Quin Houff");
$joey_gase = new Season_Driver("Joey Gase");
$timmy_hill = new Season_Driver("Timmy Hill");
$brennan_poole = new Season_Driver("Brennan Poole");
$christopher_bell = new Season_Driver("Christopher Bell");
$jj_yeley = new Season_Driver("JJ Yeley");
$ross_chastain = new Season_Driver("Ross Chastain");
$bj_mcleod = new Season_Driver("BJ McLeod");
$reed_sorenson = new Season_Driver("Reed Sorenson");
$brendan_gaughan = new Season_Driver("Brendan Gaughan");
$justin_haley = new Season_Driver("Justin Haley");
$david_ragan = new Season_Driver("David Ragan");

$season_drivers = array($tyler_reddick,
                        $michael_mcdowell,
                        $joey_logano,
                        $kyle_larson,
                        $ty_dillon,
                        $austin_dillon,
                        $ricky_stenhouse,
                        $aric_almirola,
                        $denny_hamlin,
                        $chris_buescher,
                        $alex_bowman,
                        $martin_truex,
                        $ryan_newman,
                        $brad_keselowski,
                        $erik_jones,
                        $corey_lajoie,
                        $chase_elliott,
                        $kyle_busch,
                        $kevin_harvick,
                        $daniel_suarez,
                        $ryan_blaney,
                        $jimmie_johnson,
                        $clint_bowyer,
                        $kurt_busch,
                        $matt_DiBenedetto,
                        $bubba_wallace,
                        $william_byron,
                        $ryan_preece,
                        $cole_custer,
                        $jh_nemechek,
                        $harrison_burton,
                        $quinn_houff,
                        $joey_gase,
                        $timmy_hill,
                        $brennan_poole,
                        $christopher_bell,
                        $jj_yeley,
                        $ross_chastain,
                        $bj_mcleod,
                        $reed_sorenson,
                        $brendan_gaughan,
                        $justin_haley,
                        $david_ragan);

/*$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ryan Newman","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_1_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_2_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Chris Buescher","Christopher Bell");

$week_3_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_4_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_5_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_6_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_7_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_8_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_9_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_10_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_11_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_12_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_13_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_14_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_15_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_16_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_17_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_18_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_19_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_20_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_21_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_22_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_23_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_24_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_25_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Christopher Bell","Chris Buescher");

$week_26_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Chris Buescher","Christopher Bell");

$week_27_teams = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);

$team_rachel = new Team("Team Rachel","Martin Truex Jr","Tyler Reddick","Michael McDowell","Quin Houff");
$team_donna = new Team("Team Donna","Kevin Harvick","Ross Chastain","Ryan Preece","Joey Gase");
$team_jim = new Team("Team Jim","Kyle Busch","Matt DiBenedetto","Ty Dillon","Harrison Burton");
$team_chives = new Team("Team Chives","Denny Hamlin","Cole Custer","Austin Dillon","Richard Petty");
$team_joey = new Team("Team Joey","Joey Logano","Brad Keselowski","Brennan Poole","Daniel Suarez");
$team_docks = new Team("Team Docks","Kyle Larson","Clint Bowyer","Ricky Stenhouse Jr","Dale Earnhardt");
$team_mike = new Team("Team Mike","Ryan Blaney","Alex Bowman","John H. Nemechek","JJ Yeley");
$team_jru = new Team("Team Jru","Chase Elliott","Jimmie Johnson","Bubba Wallace","Greg Biffle");
$team_nick = new Team("Team Nick","Kurt Busch","Erik Jones","Corey Lajoie","Timmy Hill");
$team_matt = new Team("Team Matt","William Byron","Aric Almirola","Chris Buescher","Christopher Bell");*/

$team_names = array();
$drivers1 = array();
$drivers2 = array();
$drivers3 = array();
$drivers4 = array();

$getRaceData = "SELECT * FROM teams_2020";
$res = mysqli_query($con, $getRaceData);

while ($row = mysqli_fetch_array($res)) {
    $team_names[] = $row["team_name"];
    $drivers1[] = $row["driver1"];
    $drivers2[] = $row["driver2"];
    $drivers3[] = $row["driver3"];
    $drivers4[] = $row["driver4"];
}

$teams = array();
$teams_week = array();
$team_standings = array();
$week_0_teams = array(); // DUMMY TEAM TO COVER INDEX 0 //
array_push($teams_week, $week_0_teams);
for ($i = 0; $i < 270; $i++) {
    if ($i != 0 && fmod($i,10) == 0) {
        array_push($teams_week, $teams);
        $teams = array();
    }
    array_push($teams, new Team($team_names[$i], $drivers1[$i], $drivers2[$i], $drivers3[$i], $drivers4[$i]));
}
array_push($teams_week, $teams);
array_push($team_standings, $teams);

//$week_0_teams = array(); // DUMMY TEAM TO COVER INDEX 0 //
//$teams_week = array($week_0_teams,$week_1_teams,$week_2_teams,$week_3_teams,$week_4_teams,$week_5_teams,$week_6_teams,$week_7_teams,$week_8_teams,$week_9_teams,$week_10_teams,$week_11_teams,$week_12_teams,$week_13_teams,$week_14_teams,$week_15_teams,$week_16_teams,$week_17_teams,$week_18_teams,$week_19_teams,$week_20_teams,$week_21_teams,$week_22_teams,$week_23_teams,$week_24_teams,$week_25_teams,$week_26_teams,$week_27_teams);

//$team_standings = array($team_rachel,$team_donna,$team_jim,$team_chives,$team_joey,$team_docks,$team_mike,$team_jru,$team_nick,$team_matt);
$team_roster = $team_standings;
$driver_rank = array();

?>