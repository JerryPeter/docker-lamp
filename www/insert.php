<?php
    $servername = "mariadb";
    $username = "root";
    $password = "example";
    $dbname = "hello";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO test (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully <br>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
    }
    
    $conn->close();  

    echo "Connected successfully";   

?>