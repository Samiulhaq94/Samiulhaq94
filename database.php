<?php

$firstName = $_POST['firstName'];
$surName   = $_POST['surName'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword= $_POST['confirmPassword'];

//Database Connection
$connection = new mysqli('localhost', 'root', '', 'test');
if ($connection->conncection_error) {
    die('Connection Failed : '.$connection->conncection_error);

} else {
    $stmt = $connection->prepare("Insert into Registration("firstName, surName, email, password, confirmPassword)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss", $firstName, $surName, $email, $password, $confirmPassword);
    $stmt->execute();
    echo "Registration Successfull..";
    $stmt->close();
    $connection->();
}

?>