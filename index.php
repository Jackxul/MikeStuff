<?php

echo "Hello World77889900!";
$psdFilePath = 'page1.psd';
$pngFilePath = 'page1.png';
exec("convert $psdFilePath $pngFilePath");
if (file_exists($pngFilePath)) {
    echo "PSD 文件已成功转换为 PNG 格式！";
} else {
    echo "转换失败，请检查文件路径和 ImageMagick 是否正确安装。";
}
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
