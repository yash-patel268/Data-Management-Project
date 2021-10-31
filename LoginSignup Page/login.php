<?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "clinicregistration";
    $portnumber = "3308";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $portnumber);

        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        } else{
            $username=mysqli_real_escape_string($conn,$_POST["username"]);
	        $pass=mysqli_real_escape_string($conn,$_POST["pass"]);

            $sql="SELECT loginid FROM logintable WHERE username='$username' AND pass='$pass'";

            $result=mysqli_query($conn,$sql);
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }
	        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	                
	        $count=mysqli_num_rows($result);
	        if($count==1){
	            $_SESSION['login_user']=$username;
                echo "valid login";
                //header("location:checkUser.php");
	                	
			} else {
			    echo "invalid login";
			}
        }
?>