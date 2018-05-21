<?php
require_once ('db/config.php');
$dbh = new DB_Connection();

if( isset($_GET['action']) && $_GET['action'] == 'saveResults' && isset($_GET['user_id']) && isset($_GET['results'])){
    $user_id = $_GET['user_id'];
    $results = serialize(json_decode($_GET['results']));
    $test_id = $_GET['test_id'];


    $date = date('Y-m-d H:i:s');
    $strQuery="INSERT  INTO tests_results (uid,results,testid,datetime) VALUES ('".$user_id."','".$results."','".$test_id."','".$date."')";
    $data = $dbh->execQuery($strQuery);
}

?>