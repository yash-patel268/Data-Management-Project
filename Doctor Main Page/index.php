<?php
    $email = $_GET['email'];

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "clinicregistration";
    $portnumber = "3308";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $portnumber);

    $sql="SELECT * FROM doctorreg WHERE email='$email'";

    $query =  mysqli_query($conn, $sql);
    
    while($row=mysqli_fetch_array($query)){
        $firstname = $row['docfirstname'];
        $lastname = $row['doclastname'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Doctor Main Page</title>
</head>
<body>
    <header>
        <nav>
            <ul class="navArea">
                <li><a href="../Doctor Main Page Tables/patientTable.php?email=<?php echo $email?>" class="nava">View Patients</a></li>
            </ul>
        </nav>
        <a href="../index.html" class="navBtn">Log out</a>
    </header>

    <div class="title">
        <h1>Hello, Dr.<?php echo $lastname ?> to the Clinic Registartion web service.</h1>
    </div>

    <div class="title">
        <h2> Please select from the buttons below.</h2>
    </div>

    <div class="container">
        <div class="buttons">
            <a href="../Doctor Main Page Tables/prescriptionTable.php?email=<?php echo $email?>" class="btn btn-1">Presciptions Given</a>
            <a href="../Doctor Main Page Tables/prescriptionTableAll.php?email=<?php echo $email?>" class="btn btn-1">All Presciptions</a>
            <a href="" class="btn btn-1">Appointments</a>
            <a href="" class="btn btn-1">All Appointments</a>
        </div>
    </div>
</body>
</html>