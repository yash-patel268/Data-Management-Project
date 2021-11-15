<?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "clinicregistration";
    $portnumber = "3308";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $portnumber);
    
    $sql = "SELECT logintable.email, 
            patientreg.firstname,
            prescription.prescriptionname
            From patientreg
            JOIN logintable
            ON patientreg.username = logintable.username
            JOIN prescription
            ON prescription.patientid = patientreg.patientid";

    $query =  mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1st View</title>
</head>
<body>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="3"><h2>1st View Patients who have prescriptions</h2></th>
        </tr>
        <t>
            <th>Email</th>
            <th>First Name</th>
            <th>Prescription Name</th>
        </t>
        <?php
            while($rows=mysqli_fetch_assoc($query)){
        ?>
            <tr>
                <td align="center"><?php echo $rows['email']; ?></td>
                <td align="center"><?php echo $rows['firstname']; ?></td>
                <td align="center"><?php echo $rows['prescriptionname']; ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>