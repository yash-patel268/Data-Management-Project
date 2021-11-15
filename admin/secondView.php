<?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "clinicregistration";
    $portnumber = "3308";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $portnumber);
    
    $sql = "SELECT 
            COUNT(patientid),
            gender
            FROM patientreg
            WHERE patientid = ANY (SELECT patientid FROM patientreg)
            GROUP BY gender
            order by COUNT(patientid)";

    $query =  mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2nd View</title>
</head>
<body>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="2"><h2>2nd Amount of each of gender within patient table</h2></th>
        </tr>
        <t>
            <th>Count</th>
            <th>Gender</th>
        </t>
        <?php
            while($rows=mysqli_fetch_assoc($query)){
        ?>
            <tr>
                <td align="center"><?php echo $rows['COUNT(patientid)']; ?></td>
                <td align="center"><?php echo $rows['gender']; ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>