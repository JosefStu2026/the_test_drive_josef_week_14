<?php
try {
    $mysqli = new mysqli('localhost', 'root', '', 'tester_status');
    if ($mysqli->connect_error) {
        echo 'Connection failed: ' . $mysqli->connect_error;
    } else {
        echo 'Success! Connected to MySQL database.';
    }
    $mysqli->close();
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>