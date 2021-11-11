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
                    <input type="text" placeholder="first name" class="input" name="firstname" required>
                </div>

                <div class="inputField">
                    <label>Last Name</label>
                    <input type="text" placeholder="last name" class="input" name="lastname" required>
                </div>

                <div class="inputField">
                    <label>Phone Number</label>
                    <input type="text" placeholder="XXX-XXX-XXXX" class="input" name="phonenumber" required>
                </div>

                <div class="inputField">
                    <label>Age</label>
                    <input type="number" placeholder="Age" class="input" name="age" required>
                </div>

                <div class="inputField">
                    <label>Gender</label>
                    <input type="text" placeholder="Gender" class="input" name="gender" required>
                </div>

                <div class="inputField">
                    <label>Date of Birth</label>
                    <input type="date" class="input" name="dayOfBirth" required>
                </div>

                <div class="inputField">
                    <label>Address</label>
                    <textarea class="textarea" placeholder="Address" name="address"></textarea>
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