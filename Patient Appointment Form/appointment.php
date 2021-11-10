<?php
    $email = $_POST['email'];

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "clinicregistration";
    $portnumber = "3308";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $portnumber);

    $sql="SELECT * FROM patientreg WHERE email='$email'";

    $query =  mysqli_query($conn, $sql);
    
    while($row=mysqli_fetch_array($query)){
        $patientid = $row['patientid'];
    }

    $docLastName = $_POST['doclastname'];
    $chosenDate = $_POST['chosendate'];
    $time = $_POST['time'];

    $sql="SELECT * FROM doctorreg WHERE doclastname='$docLastName'";

    $query =  mysqli_query($conn, $sql);
    
    while($row=mysqli_fetch_array($query)){
        $doctorid = $row['doctorid'];
    }

    $INSERT = "INSERT INTO appointments (patientid, choosendate, time, doctorid) values(?,?,?,?)";

    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("ssss",  $patientid, $chosenDate, $time, $doctorid);
    $stmt->execute();

    header("location:../Patient Main Page/index.php?email=$email");
?>