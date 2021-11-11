<?php 
     $email = $_GET['email'];
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "clinicregistration";
    $portnumber = "3308";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $portnumber);

    $sql="SELECT * FROM patientreg";
    $result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>View Doctors in system</title>
</head>
<body>
    <table align="center" border="1px" style="width:1000px; line-height:40px;">
        <tr>
            <th colspan="8"><h2>View Doctors</h2></th>
        </tr>
        <t>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Address</th>
            <th>Email</th>
        </t>
        <?php
            while($rows=mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td align="center"><?php echo $rows['firstname']; ?></td>
                <td align="center"><?php echo $rows['lastname']; ?></td>
                <td align="center"><?php echo $rows['phonenumber']; ?></td>
                <td align="center"><?php echo $rows['age']; ?></td>
                <td align="center"><?php echo $rows['gender']; ?></td>
                <td align="center"><?php echo $rows['dayOfBirth']; ?></td>
                <td align="center"><?php echo $rows['address']; ?></td>
                <td align="center"><?php echo $rows['email']; ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
    <a href="../Doctor Main Page/index.php?email=<?php echo $email?>">CLICK HERE TO RETURN TO MAIN PAGE</a>
</body>
</html>