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
        $doctorid = $row['doctorid'];
    }

    $sql="SELECT * FROM appointments WHERE doctorid='$doctorid'";
    $result = mysqli_query($conn, $sql);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>View Your Appointments</title>
</head>
<body>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="4"><h2>Your Appointments</h2></th>
        </tr>
        <t>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Chosen Date of Appointment</th>
            <th>Time of Appointment</th>
        </t>
        <?php
            while($rows=mysqli_fetch_assoc($result)){
                $patientid = $rows['patientid'];
                $sql="SELECT * FROM patientreg WHERE patientid='$patientid'";

                $query =  mysqli_query($conn, $sql);
    
                while($row=mysqli_fetch_array($query)){
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                }
        ?>
            <tr>
                <td align="center"><?php echo $firstname; ?></td>
                <td align="center"><?php echo $lastname; ?></td>
                <td align="center"><?php echo $rows['choosendate']; ?></td>
                <td align="center"><?php echo $rows['time']; ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
    <a href="../Doctor Main Page/index.php?email=<?php echo $email?>">CLICK HERE TO RETURN TO MAIN PAGE</a>
</body>
</html>