<?php
////////////////////////////////////////////////////
function create_conn_db_tables()
{
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create database
    $sql = "CREATE DATABASE clinicregistration";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }

    $dbname = "clinicregistration";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "CREATE TABLE logintable(
        loginid INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(45) NOT NULL,
        email VARCHAR(45) NOT NULL,
        pass VARCHAR(45) NOT NULL)";
    mysqli_query($conn, $sql);

    $sql = "CREATE TABLE patientreg(
            patientid INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(45),
            lastname VARCHAR(45),
            phonenumber VARCHAR(45),
            age VARCHAR(45),
            gender VARCHAR(45),
            dayOfBirth VARCHAR(45),
            username VARCHAR(45),
            email VARCHAR(45),
            pass VARCHAR(45),
            address VARCHAR(45))";
    mysqli_query($conn, $sql);

    $sql = "CREATE TABLE doctorreg(
        doctorid INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        docfirstname VARCHAR(45),
        doclastname VARCHAR(45),
        docphonenumber VARCHAR(45),
        docage VARCHAR(45),
        docgender VARCHAR(45),
        docdayOfBirth VARCHAR(45),
        username VARCHAR(45),
        email VARCHAR(45),
        pass VARCHAR(45),
        docaddress VARCHAR(45))";
mysqli_query($conn, $sql);
   
$sql = "CREATE TABLE prescription(
    appointmentsid INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    patientid VARCHAR(45),
    choosendate VARCHAR(45),
    time VARCHAR(45),
    doctorid VARCHAR(45))";
mysqli_query($conn, $sql);

$sql = "CREATE TABLE appointments(
    prescriptionid INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    patientid VARCHAR(45),
    doctorid VARCHAR(45),
    prescriptionname VARCHAR(45),
    start VARCHAR(45),
    end VARCHAR(45))";
mysqli_query($conn, $sql);
    mysqli_close($conn);
}
////////////////////////////////////////////////////////////////
function drop_db()
{
    $dbname = "clinicregistration";
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die('Could not connect: ' . mysqli_connect_error());
    }

    $sql = "DROP DATABASE {$dbname}";
    if (mysqli_query($conn, $sql)) {
        echo "Database {$dbname} was successfully dropped\n";
    } else {
        echo 'Error dropping database: ' . mysqli_error($conn) . "\n";
    }
}
////////////////////////////////////////////////////////////////////////
function backup_db()
{
    $dbname = "clinicregistration";
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die('Could not connect: ' . mysqli_connect_error());
    }
    $sql = "BACKUP DATABASE {$dbname} TO DISK = '/test.bak' ";
    if (mysqli_query($conn, $sql)) {
        echo "Database {$dbname} was successfully backed up\n";
    } else {
        echo 'backup error: ' . mysqli_error($conn) . "\n";
    }
}