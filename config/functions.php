<?php

function dashboardGreet(){
    $b = time();
    $hour = date("g",$b);
    $m = date ("A", $b);

    if ($m == "AM") {
      if ($hour == 12) { echo _("Good Evening"); }
      elseif ($hour < 4) { echo _("Good Evening"); }
      elseif ($hour > 3) { echo _("Good Morning"); } }
      elseif ($m == "PM") {
    if ($hour == 12) { echo _("Good Afternoon"); }
      elseif ($hour < 7) { echo _("Good Afternoon"); }
      elseif ($hour > 6) { echo _("Good Evening"); } }
}

function db_connect() {
    // Define connection as a static variable, to avoid connecting more than once
    static $connection;
    // Try and connect to the database, if a connection has not been established yet
    if(!isset($connection)) {
        $config = parse_ini_file('config.ini');
        $connection = mysqli_connect('external-db.s194511.gridserver.com',$config['username'],$config['password'],$config['dbname']);
    }

    // If connection was not successful, handle the error
    if($connection === false) {
        die();
    }
    return $connection;
}

// Function to query the db
function db_query($query) {
    // Connect to the database
    $connection = db_connect();

    // Query the database
    $result = mysqli_query($connection,$query);

    return $result;
}

// Database select query
function db_select($query) {
    $rows = array();
    $result = db_query($query);

    // If query failed, return `false`
    if($result === false) {
        return false;
    }

    // If query was successful, retrieve all the rows into an array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Function to escape quotes and prevent sql injections
function db_quote($value) {
    $connection = db_connect();
    return "'" . mysqli_real_escape_string($connection,$value) . "'";
}
function db_error() {
    $connection = db_connect();
    return mysqli_error($connection);
}

/***********************************/
//
//    MISCELLANEOUS FUNCTIONS
//
/***********************************/

function redirect($path)
{
    header("Location: /{$path}");
}

// Confirm queries are working properly or display error message.
function confirmQuery($result){
  global $connection;

  if(!$result){
    die("Database query failed: " . mysqli_error($connection));
  }
}
