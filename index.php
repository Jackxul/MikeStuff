<?php

echo "Hello World77889900!";

// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:sqlmikaydemo.public.d25eecdeef3c.database.windows.net,3342; Database = AdventureWorks", "ecvdemouser", "ecv@demouser2024");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";  // 連線成功時的提示
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "ecvdemouser@sqlmikaydemo", "pwd" => "ecv@demouser2024", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:sqlmikaydemo.public.d25eecdeef3c.database.windows.net,3342";
$conn = sqlsrv_connect($serverName, $connectionInfo);

// 其他你的應用程式邏輯可以放在這之後

?>
