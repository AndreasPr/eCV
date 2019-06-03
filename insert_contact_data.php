<?php
$servername = "localhost";//Declare the name of the server
$username = "root";//Declare the username of the database
$password = "";//Declare the password of the database
$dbname = "ecv";//Declare the name of the database
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
//Get the values of fields from the contact form via POST method
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
//Create the INSERT statement for the contact array about the name, email, subject and message of the user in ecv database
$sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$fullname', '$email', '$subject', '$message')";
//if the query is correct, then the message is sent successfully
if ($con->query($sql) === TRUE) {
    echo "Your message is sent successfully";
} 
else//Otherwise, user gets an error message 
{
    echo "Error: " . $sql . "<br>" . $con->error;
}
//Close connection
$con->close();
?>