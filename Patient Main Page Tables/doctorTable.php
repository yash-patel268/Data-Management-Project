<?php 
     $email = $_GET['email'];
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "clinicregistration";
    $portnumber = "3308";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $portnumber);

    $sql="SELECT * FROM doctorreg";
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
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="4"><h2>View Doctors</h2></th>
        </tr>
        <t>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Gender</th>
            <th>Email</th>
        </t>
        <?php
            while($rows=mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td align="center"><?php echo $rows['doclastname']; ?></td>
                <td align="center"><?php echo $rows['docfirstname']; ?></td>
                <td align="center"><?php echo $rows['docgender']; ?></td>
                <td align="center"><?php echo $rows['email']; ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
    <a href="../Patient Main Page/index.php?email=<?php echo $email?>">CLICK HERE TO RETURN TO MAIN PAGE</a>
</body>
</html>