<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$dbName="hwDB";
if (!mysqli_select_db($conn,$dbName)){ // בודק עם מסד הנתונים לא קיים כבר
    $sql = "CREATE DATABASE $dbName";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
}
$conn = new mysqli($servername, $username, $password, $dbName);

$sql =" SELECT id FROM Users ";
if (!$conn->query($sql)){
    $sql = "CREATE TABLE IF NOT EXISTS `Users` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `Email` varchar(999) NOT NULL UNIQUE,
        `UserName` varchar(999) NOT NULL,
        `password` varchar(999),
        `phone` varchar(999) NOT NULL,
        `vkey` varchar(45) NOT NULL,
        `verified` tinyint(1) DEFAULT 0 NOT NULL,
        PRIMARY KEY (`id`,`Email`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;"
      ;
    if ($conn->query($sql) === TRUE) {
        echo "Table Users created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

}
$sql =" SELECT id FROM Products ";
if (!$conn->query($sql)){
    $sql = "CREATE TABLE IF NOT EXISTS `Products` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `Name` varchar(999) NOT NULL UNIQUE,
        `Quantity` varchar(999) NOT NULL,
        `User` varchar(50) NOT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;"
      ;
    if ($conn->query($sql) === TRUE) {
        echo "Table Products created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

}
$sql =" SELECT id FROM Carts ";
if (!$conn->query($sql)){
    $sql = "CREATE TABLE IF NOT EXISTS `Carts` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `CartName` varchar(50) NOT NULL ,
        `ProductName` varchar(50) NOT NULL,
        `Quantity` varchar(50) NOT NULL,
        `User` varchar(50) NOT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;"
      ;
    if ($conn->query($sql) === TRUE) {
        echo "Table Carts created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

}

$sql =" SELECT id FROM FamilyCarts ";
if (!$conn->query($sql)){
    $sql = "CREATE TABLE IF NOT EXISTS `FamilyCarts` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `CartName` varchar(50) NOT NULL ,
        `ProductName` varchar(50) NOT NULL,
        `Quantity` varchar(50) NOT NULL,
        `FamilyHolder` varchar(50) NOT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;"
      ;
    if ($conn->query($sql) === TRUE) {
        echo "Table FamilyCarts created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}
    $sql =" SELECT FamilyName FROM Family";
if (!$conn->query($sql)){
    $sql = "CREATE TABLE IF NOT EXISTS `Family` (
        
        `FamilyName` varchar(50) NOT NULL,
        PRIMARY KEY (`FamilyName`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;"
      ;
    if ($conn->query($sql) === TRUE) {
        echo "Table Family successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

}
$sql =" SELECT HolderMail FROM Families ";
if (!$conn->query($sql)){
    $sql = "CREATE TABLE IF NOT EXISTS `Families` (
        
        `HolderMail` varchar(50) NOT NULL,
        `FamilyMember` varchar(50) NOT NULL,
        PRIMARY KEY (`HolderMail`,`FamilyMember`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;"
      ;
    if ($conn->query($sql) === TRUE) {
        echo "Table Families created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

}
