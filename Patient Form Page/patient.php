<?php
    $email = $_GET['email'];
    echo $email;
    /*$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "clinicregistration";
    $portnumber = "3308";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $portnumber);

    $sql="SELECT loginid FROM logintable WHERE email='$email'";

    $query =  mysqli_query($conn, $sql);
    
    while($row=mysqli_fetch_array($query)){
        $username = $row['username'];
    }

    echo $username;*/
?>