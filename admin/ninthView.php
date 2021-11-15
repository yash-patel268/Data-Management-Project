<?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "clinicregistration";
    $portnumber = "3308";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $portnumber);
    
    $sql = "SELECT COUNT(prescriptionid) FROM prescription";

    $query =  mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9th View</title>
</head>
<body>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="1"><h2>9th View</h2></th>
        </tr>
        <t>
            <th>Total number of prescriptions within the system</th>
        </t>
        <?php
            while($rows=mysqli_fetch_assoc($query)){
        ?>
            <tr>
                <td align="center"><?php echo $rows['COUNT(prescriptionid)']; ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>