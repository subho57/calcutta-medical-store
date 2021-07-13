<?php
if (session_status() == PHP_SESSION_NONE) {
    // Configure timeout to 15 minutes
    $timeout = 2628000;

    // Set the maxlifetime of session
    ini_set("session.gc_maxlifetime", $timeout);

    // Also set the session cookie timeout
    ini_set("session.cookie_lifetime", $timeout);

    // Now start the session 
    session_start();
}
/**
 * Change these details according to your server
 */
$server = "localhost";
$username = "u261452081_calcuttamedic";
$password = "CalcuttaMedicalStore@123";
$database = "u261452081_calcuttamedic";
$port = 3306;

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    //Username, Password and Database
    $con = new mysqli($server, $username, $password, $database, $port);
    $con->set_charset("utf8mb4");
} catch (Exception $e) {
    //    error_log($e->getMessage());
?>
    <script>
        window.location.href = "500.shtml";
    </script>
<?php
    //Should be a message a typical user could understand
}
$fset = $con->query("select * from setting")->fetch_assoc();

date_default_timezone_set($fset['timezone']);
$dirname = dirname(dirname(__FILE__)) . '/api';
