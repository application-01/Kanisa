

<?php
// Server in the this format: <computer>\<instance name> or 
// <server>,<port> when using a non default port number
$server = 'TADB2\\SQLEXPRESS';

// Connect to MSSQL
$dbcon = mysqli_connect($server, 'sa', 'Mshigwa55');

if (!$dbcon) {
    die('Something went wrong while connecting to MSSQL');
}
?>