<?php 
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "clinicregistration";
    $portnumber = "3308";

    $mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbname, $portnumber);

    $query = "SELECT patientid, firstname, lastname, phonenumber, age, gender, dayOfBirth, username, email, pass, address FROM patientreg";

    $patientsArray = array();

    if($result = $mysqli->query($query)){
        while($row = $result->fetch_assoc()){
            array_push($patientsArray, $row);
        }

        if(count($patientsArray)){
            createXMLfile($patientsArray);
        }

        $result->free();
    }

    $mysqli->close();


    function createXMLfile($patientsArray){
        $filePath = 'patient.xml';
        $dom = new DOMDocument('1.0', 'utf-8');
        $root = $dom->createElement('patient');
        for($i=0; $i<count($patientsArray); $i++){
            $patientid = $patientsArray[$i]['patientid'];
            $firstname = $patientsArray[$i]['firstname'];
            $lastname = $patientsArray[$i]['lastname'];
            $phonenumber = $patientsArray[$i]['phonenumber'];
            $age = $patientsArray[$i]['age'];
            $gender = $patientsArray[$i]['gender'];
            $dayOfBirth = $patientsArray[$i]['dayOfBirth'];
            $username = $patientsArray[$i]['username'];
            $email = $patientsArray[$i]['email'];
            $pass = $patientsArray[$i]['pass'];
            $address = $patientsArray[$i]['address'];

            $patient = $dom->createElement('patient');
            $patient->setAttribute('patientid', $patientid);

            $first = $dom->createElement('firstname', $firstname);
            $patient->appendChild($first);

            $last = $dom->createElement('lastname', $lastname);
            $patient->appendChild($last);

            $phone = $dom->createElement('phonenumber', $phonenumber);
            $patient->appendChild($phone);

            $patientAge = $dom->createElement('age', $age);
            $patient->appendChild($patientAge);

            $patientGender = $dom->createElement('gender', $gender);
            $patient->appendChild($patientGender);

            $dOB = $dom->createElement('dayOfBirth', $dayOfBirth);
            $patient->appendChild($dOB);

            $user = $dom->createElement('username', $username);
            $patient->appendChild($user);

            $patientEmail = $dom->createElement('email', $email);
            $patient->appendChild($patientEmail);

            $password = $dom->createElement('pass', $pass);
            $patient->appendChild($password);

            $add = $dom->createElement('address', $address);
            $patient->appendChild($add);
            
            $root->appendChild($patient);
        }

        $dom->appendChild($root);
        $dom->save($filePath);
    }
    header("location:patient.xml");
?>