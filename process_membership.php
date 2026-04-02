<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $schoolName  = $_POST['schoolName'];
    $contactName = $_POST['contactName'];
    $email       = $_POST['email'];
    $phone       = $_POST['phone'];
    $category    = $_POST['category'];

    $sql = "INSERT INTO membership (school_name, contact_name, email, phone, category)
            VALUES ('$schoolName', '$contactName', '$email', '$phone', '$category')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

}
?>