<?php  
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if(!empty($username) || !empty($email ||!empty($password))){
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "clinicregistration";
        $portnumber = "3308";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $portnumber);

        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        } else{
            $SELECT = "SELECT email From logintable Where email = ? Limit 1";
            $INSERT = "INSERT Into logintable(username, email, pass) values(?,?,?)";

            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt -> num_rows;

            if($rnum==0){
                $stmt->close();

                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sss",  $username, $email, $pass);
                $stmt->execute();
                header("location:../Decision Page/index.php?email=$email");
            } else{
                echo "Someone already used that email";
            }
            $stmt->close();
            $conn->close();
        }
    } else{
        echo "All fields are required";
        die();
    }
?>