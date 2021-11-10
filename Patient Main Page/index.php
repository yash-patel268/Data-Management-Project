<?php
    $email = $_GET['email'];

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "clinicregistration";
    $portnumber = "3308";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $portnumber);

    $sql="SELECT * FROM patientreg WHERE email='$email'";

    $query =  mysqli_query($conn, $sql);
    
    while($row=mysqli_fetch_array($query)){
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Patient Main Page</title>
</head>
<body>
    <header>
        <nav>
            <ul class="navArea">
                <li><a href="../Patient Main Page Tables/doctorTable.php?email=<?php echo $email?>" class="nava">View Doctors</a></li>
            </ul>
        </nav>
        <a href="../index.html" class="navBtn">Log out</a>
    </header>

    <div class="title">
        <h1>Hello, <?php echo $firstname ?>  <?php echo $lastname ?> to the Clinic Registartion web service.</h1>
    </div>

    <div class="title">
        <h2> Please select from the buttons below.</h2>
    </div>

    <div class="container">
        <div class="buttons">
            <a href="../Patient Prescription Form/index.php?email=<?php echo $email?>" class="btn btn-1">New Presciption</a>
            <a href="../Patient Main Page Tables/prescriptionTable.php?email=<?php echo $email?>" class="btn btn-1">Current Presciptions</a>
            <a href="../Patient Appointment Form/index.php?email=<?php echo $email?>" class="btn btn-1">New Appointment</a>
            <a href="" class="btn btn-1">Current Appointment</a>
        </div>
    </div>
</body>
</html>