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
    <title>Patient Appointment Form</title>
</head>
<body>
    <div class="wrapper">
        <div class="title">
            Patient Appointment Form
        </div>
        <form action="appointment.php" method="POST">
            <div class="form">
                <input type="hidden" name="email" value="<?php echo $email ?>" /> 
            
                <div class="inputField">
                    <label>Doctor Last Name</label>
                    <input type="text" class="input" name="doclastname">
                </div>

                <div class="inputField">
                    <label>Date of Appointment</label>
                    <input type="text" class="input" name="start">
                </div>

                <div class="inputField">
                    <label>Time of Appointment</label>
                    <input type="text" class="input" name="end">
                </div>

                <div class="inputField">
                    <input type="submit" value="Submit" class="btn">
                </div>
            </div>
        </form>
    </div>
</body>
</html>