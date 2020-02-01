<?php
    
    $servername = $_POST["localhost:3306"];
    $usernameDB = $_POST["learnaut_admin"];
    $passwordDB = $_POST["admin123"];
    $dbName = $_POST["learnaut_Automation"];
    $username= $_POST["formName"];
    $password= $_POST["formPswd"];

    /*
    $servername = $_GET["localhost"];
    $usernameDB = $_GET["learnaut_admin"];
    $passwordDB = $_GET["admin123"];
    $dbName = $_GET["learnaut_Automation"];
    $username= $_POST["formName"];
    $password= $_POST["formPswd"];
    */

    $conn = new mysqli($servername, $usernameDB, $passwordDB, $dbName);


   // Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

    $sql_username = "SELECT * FROM LAQA_USERS WHERE USERNAME='$username';";
    $sql_password = "SELECT * PASSWORD FROM LAQA_USERS WHERE PASSWORD='$password';";

if (mysqli_multi_query($conn, $sql_username, $sql_password )) {
    
    if(($sql_username==$username) && ($sql_password==$password)){
            
        echo "Correct credentials. Go ahead!";
        
    }else{
        echo "Wrong credentials!";
    }
    echo "Information gathered properly";
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