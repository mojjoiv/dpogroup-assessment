<?php

// Database credentials
$serverName = "server_name"; 
$databaseName = "database_name"; 
$username = "username"; 
$password = "password"; 


$conn = sqlsrv_connect($serverName, array(
    "Database" => $databaseName,
    "Uid" => $username,
    "PWD" => $password
));

if ($conn === false) {
    echo "Database connection failed.";
} else {
  
    $query = "SELECT * FROM Products";


    $stmt = sqlsrv_query($conn, $query);

 
    if ($stmt === false) {
        echo "Query execution failed: " . print_r(sqlsrv_errors(), true);
    } else {
        $data = array();
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $data[] = $row;
        }
        sqlsrv_free_stmt($stmt);

        sqlsrv_close($conn);
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
?>
