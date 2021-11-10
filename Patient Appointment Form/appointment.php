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

    $prescriptionName = $_POST['prescriptionname'];
    $docLastName = $_POST['doclastname'];
    $start = $_POST['start'];
    $end = $_POST['end'];

    $sql="SELECT * FROM doctorreg WHERE doclastname='$docLastName'";

    $query =  mysqli_query($conn, $sql);
    
    while($row=mysqli_fetch_array($query)){
        $doctorid = $row['doctorid'];
    }

    $INSERT = "INSERT INTO prescription (patientid, doctorid, prescriptionname, start, end) values(?,?,?,?,?)";

    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("sssss",  $patientid,$doctorid, $prescriptionName, $start, $end);
    $stmt->execute();

    header("location:../Patient Main Page/index.php?email=$email");
?>