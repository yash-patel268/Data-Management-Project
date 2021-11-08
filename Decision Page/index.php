<?php
    $email = $_GET['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Patient or Doctor</title>
</head>
<body>
    <div class="container">
        <div class="title">
            Please select your purpose for being on the website<br>
            If you are either a patient or a doctor
        </div>
    </div>
    <div class="patientContainer">
        <a href='../Patient Form Page/index.php?email=<?php echo $email?>' class="patient">Patient</a>
    </div>

    <div class="doctorContainer">
        <a href='../Doctor Form Page/index.php?email=<?php echo $email?>' class="doctor">Doctor</a>
    </div>
</body>
</html>