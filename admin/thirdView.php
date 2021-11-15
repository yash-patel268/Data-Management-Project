<?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "clinicregistration";
    $portnumber = "3308";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $portnumber);
    
    $sql = "SELECT
            loginid,
            username,
            email,
            pass
            FROM logintable
            WHERE loginid = (SELECT MAX(loginid) FROM logintable)";

    $query =  mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3rd View</title>
</head>
<body>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="4"><h2>3rd View Most Recent User who joined the system</h2></th>
        </tr>
        <t>
            <th>Login ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
        </t>
        <?php
            while($rows=mysqli_fetch_assoc($query)){
        ?>
            <tr>
                <td align="center"><?php echo $rows['loginid']; ?></td>
                <td align="center"><?php echo $rows['username']; ?></td>
                <td align="center"><?php echo $rows['email']; ?></td>
                <td align="center"><?php echo $rows['pass']; ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>