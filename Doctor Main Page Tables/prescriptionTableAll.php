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
        $patientid = $row['patientid'];
    }

    $sql="SELECT * FROM prescription WHERE patientid='$patientid'";
    $result = mysqli_query($conn, $sql);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>View Your Presciptions</title>
</head>
<body>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="3"><h2>Your Prescriptions</h2></th>
        </tr>
        <t>
            <th>Presciption Name</th>
            <th>Start Date</th>
            <th>End Date</th>
        </t>
        <?php
            while($rows=mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td align="center"><?php echo $rows['prescriptionname']; ?></td>
                <td align="center"><?php echo $rows['start']; ?></td>
                <td align="center"><?php echo $rows['end']; ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
    <a href="../Patient Main Page/index.php?email=<?php echo $email?>">CLICK HERE TO RETURN TO MAIN PAGE</a>
</body>
</html>