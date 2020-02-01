<?php
    
    $servername = $_POST["localhost:3306"];
    $username = $_POST["learnaut_admin"];
    $password = $_POST["admin123"];
    $dbName = $_POST["learnaut_Automation"];
    $name = $_POST["userName"];
    $phone= $_POST["phone"];
    $email= $_POST["emailId"];
    $message= $_POST["comments"];
    
    /*
    $servername = $_GET["localhost"];
    $username = $_GET["learnaut_admin"];
    $password = $_GET["admin123"];
    $dbName = $_GET["learnaut_Automation"];
    $name = $_GET["userName"];
    $phone= $_GET["phone"];
    $email= $_GET["emailId"];
    $message= $_GET["comments"];
    */

    $conn = new mysqli($servername, $username, $password, $dbName);


   // Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

    $sql = "INSERT INTO LAQA_FORM (NAME, PHONE, EMAIL, MESSAGE) VALUES ('$name', '$phone', '$email', '$message');";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

    /*
    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE myDBPDO";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Database created successfully<br>";
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
    
    $conn = null; 
    */
    ?>