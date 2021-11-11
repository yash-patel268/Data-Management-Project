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
    <title>Patient Presciption Form</title>
</head>
<body>
    <div class="wrapper">
        <div class="title">
            Patient Prescription Form
        </div>
        <form action="prescription.php" method="POST">
            <div class="form">
                <input type="hidden" name="email" value="<?php echo $email ?>" /> 
                <div class="inputField">
                    <label>Presciption Name</label>
                    <input type="text" class="input" name="prescriptionname" required>
                </div>

                <div class="inputField">
                    <label>Doctor Last Name</label>
                    <input type="text" class="input" name="doclastname" required>
                </div>

                <div class="inputField">
                    <label>Start Date</label>
                    <input type="date" class="input" name="start" required>
                </div>

                <div class="inputField">
                    <label>End Date</label>
                    <input type="date" class="input" name="end" required>
                </div>

                <div class="inputField">
                    <input type="submit" value="Submit" class="btn">
                </div>
            </div>
        </form>
    </div>
</body>
</html>