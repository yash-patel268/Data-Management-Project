<?php
    $email = $_POST['email'];

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "clinicregistration";
    $portnumber = "3308";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $portnumber);

    $sql="SELECT * FROM logintable WHERE email='$email'";

    $query =  mysqli_query($conn, $sql);
    
    while($row=mysqli_fetch_array($query)){
        $username = $row['username'];
        $pass = $row['pass'];
    }


    $firstname = $_POST['firstname'];
    echo "$firstname\n";
    $lastname = $_POST['lastname'];
    echo "$lastname\n";
    $phonenumber = $_POST['phonenumber'];
    echo "$phonenumber\n";
    $age = $_POST['age'];
    echo "$age\n";
    $gender = $_POST['gender'];
    echo "$gender\n";
    $dayOfBirth = $_POST['dayOfBirth'];
    echo "$dayOfBirth\n";

    echo "$email\n";
    echo "$username\n";
    echo "$pass\n";

    $address = $_POST['address'];
    echo "$address\n";
    
    $INSERT = "INSERT INTO doctorreg (docfirstname, doclastname, docphonenumber, docage, docgender, docdayOfBirth, username, email, pass, docaddress) values(?,?,?,?,?,?,?,?,?,?) ";

    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("ssssssssss",  $firstname,$lastname,$phonenumber,$age, $gender,$dayOfBirth,$username,$email,$pass,$address);
    $stmt->execute();

    //header("location:../Patient Main Page/index.php?email=$email");
    echo "doctor signed up";
?>