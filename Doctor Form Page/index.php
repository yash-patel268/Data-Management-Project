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
    <title>Doctor Registration Form</title>
</head>
<body>
    <div class="wrapper">
        <div class="title">
            Doctor Registration Form
        </div>
        <form action="doctor.php" method="POST">
            <div class="form">
                <input type="hidden" name="email" value="<?php echo $email ?>" /> 
                <div class="inputField">
                    <label>First Name</label>
                    <input type="text" class="input" name="firstname">
                </div>

                <div class="inputField">
                    <label>Last Name</label>
                    <input type="text" class="input" name="lastname">
                </div>

                <div class="inputField">
                    <label>Phone Number</label>
                    <input type="text" class="input" name="phonenumber">
                </div>

                <div class="inputField">
                    <label>Age</label>
                    <input type="text" class="input" name="age">
                </div>

                <div class="inputField">
                    <label>Gender</label>
                    <input type="text" class="input" name="gender">
                </div>

                <div class="inputField">
                    <label>Date of Birth</label>
                    <input type="text" class="input" name="dayOfBirth">
                </div>

                <div class="inputField">
                    <label>Addresss</label>
                    <textarea class="textarea" name="address"></textarea>
                </div>

                <div class="inputField terms">
                    <label class="check">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <p>Agree to terms and conditions</p>
                </div> 

                <div class="inputField">
                    <input type="submit" value="Register" class="btn">
                </div>
            </div>
        </form>
    </div>
</body>
</html>