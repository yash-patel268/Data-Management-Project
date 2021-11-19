# Data-Management-Project

This is the final project for the Data management course. Our choice this project was to make a clinic registration application to demostrate our knowledge of databases and how to work with them. The creation of this web application was done through the languages that include HTML, CSS, PHP, Javascript, XML, and SQL. 

## How to run the application

Inorder to run the application it is required to have WAMP Package. WAMP will allow the application to be hosted locally with databases. (Here is the link if the application isnt on your computer already: https://www.wampserver.com/en/)

### Port
After launching WAMP it must be noted that for this project the port server used is 3308 which was changed due to applications using the same port, this must be changed in the code to another port in each PHP file where its used or your port must be changed in WAMP. To change port for SQL right click on WAMP icon on tool bar, then click "MySQL", and changed the port used by MySQL.

### Creating databases in WAMP
To create database in WAMP you must click on the icon in the tool bar and select "phpMyAdmin" which will take you to a login page. Typically the username is "root" and the password is "" (nothing, just leave it blank if you haven't changed it). However, if you have changed the username and pasword the PHP files where its used. After the login page you must select new on left hand side of the phpMyAdmin page. Here you must create a database called "clinicregistration". After doing so select the database and click the SQL button in the top navbar. Within this area you must paste the following SQL commands one at a time:
1. CREATE TABLE `logintable` (
 `loginid` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(45) DEFAULT NULL,
 `email` varchar(45) DEFAULT NULL,
 `pass` varchar(45) DEFAULT NULL,
 PRIMARY KEY (`loginid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
2. CREATE TABLE `patientreg` (
 `patientid` int(11) NOT NULL AUTO_INCREMENT,
 `firstname` varchar(45) DEFAULT NULL,
 `lastname` varchar(45) DEFAULT NULL,
 `phonenumber` varchar(45) DEFAULT NULL,
 `age` varchar(45) DEFAULT NULL,
 `gender` varchar(45) DEFAULT NULL,
 `dayOfBirth` varchar(45) DEFAULT NULL,
 `username` varchar(45) DEFAULT NULL,
 `email` varchar(45) DEFAULT NULL,
 `pass` varchar(45) DEFAULT NULL,
 `address` varchar(45) DEFAULT NULL,
 PRIMARY KEY (`patientid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
3. CREATE TABLE `doctorreg` (
 `doctorid` int(11) NOT NULL AUTO_INCREMENT,
 `docfirstname` varchar(45) DEFAULT NULL,
 `doclastname` varchar(45) DEFAULT NULL,
 `docphonenumber` varchar(45) DEFAULT NULL,
 `docage` varchar(45) DEFAULT NULL,
 `docgender` varchar(45) DEFAULT NULL,
 `docdayOfBirth` varchar(45) DEFAULT NULL,
 `username` varchar(45) DEFAULT NULL,
 `email` varchar(45) DEFAULT NULL,
 `pass` varchar(45) DEFAULT NULL,
 `docaddress` varchar(45) DEFAULT NULL,
 PRIMARY KEY (`doctorid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
4. CREATE TABLE `appointments` (
 `appointmentid` int(11) NOT NULL AUTO_INCREMENT,
 `patientid` varchar(45) DEFAULT NULL,
 `choosendate` varchar(45) DEFAULT NULL,
 `time` varchar(45) DEFAULT NULL,
 `doctorid` varchar(45) DEFAULT NULL,
 PRIMARY KEY (`appointmentid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
5. CREATE TABLE `prescription` (
 `prescriptionid` int(11) NOT NULL AUTO_INCREMENT,
 `patientid` varchar(45) DEFAULT NULL,
 `doctorid` varchar(45) DEFAULT NULL,
 `prescriptionname` varchar(45) DEFAULT NULL,
 `start` varchar(45) DEFAULT NULL,
 `end` varchar(45) DEFAULT NULL,
 PRIMARY KEY (`prescriptionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8

### Add to www directory
After creating the tables open the www directory by clicking on the WAMP icon in the tool bar and click on "www directory". Here you put the extracted file from the git repo.

### Add virtual host
Open a web browser and type in localhost, this should take you to WAMP main webpage. Here click on add virtual host and fill out the name to be "clinicregistration" and add the absolute file path to the extracted folder. This will add a shortcut to the application on the main page on the bottom right corner which can be clicked to access the application.