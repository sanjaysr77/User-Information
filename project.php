<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $dob = htmlspecialchars($_POST['dob']);
    $country = htmlspecialchars($_POST['country']);
    $interests = isset($_POST['interests']) ? implode(", ", $_POST['interests']) : "None";
    $address = htmlspecialchars($_POST['address']);
    
    echo "<div style='font-family: Arial; background-color: #333; color: white; padding: 20px; border-radius: 10px;'>";
    echo "<h2>Submitted Details</h2>";
    echo "<p><b>Full Name:</b> $fullName</p>";
    echo "<p><b>Email:</b> $email</p>";
    echo "<p><b>Phone:</b> $phone</p>";
    echo "<p><b>Gender:</b> $gender</p>";
    echo "<p><b>Date of Birth:</b> $dob</p>";
    echo "<p><b>Country:</b> $country</p>";
    echo "<p><b>Interests:</b> $interests</p>";
    echo "<p><b>Address:</b> $address</p>";
    echo "</div>";
}
?>
