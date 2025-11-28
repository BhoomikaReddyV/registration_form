<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $dob = htmlspecialchars($_POST['dob']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $course = htmlspecialchars($_POST['course']);
    $address = htmlspecialchars($_POST['address']);

    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "None";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Information</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fde4f2; /* light pink background */
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            width: 60%;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #d63384;
            margin-bottom: 20px;
        }

        .info-box {
            width: 100%;
            margin: auto;
            border-collapse: collapse;
        }

        .info-box td {
            padding: 10px;
            border-bottom: 1px solid #f3c6db;
        }

        .label {
            font-weight: bold;
            width: 30%;
            color: #a72d65;
        }

        .value {
            color: #333;
        }

        .back-btn {
            display: block;
            width: 150px;
            margin: 25px auto 0;
            background-color: #d63384;
            color: white;
            text-align: center;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .back-btn:hover {
            background-color: #b52c6d;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Registration Successful!</h2>

    <table class="info-box">
        <tr><td class="label">First Name:</td><td class="value"><?php echo $fname; ?></td></tr>
        <tr><td class="label">Last Name:</td><td class="value"><?php echo $lname; ?></td></tr>
        <tr><td class="label">Email:</td><td class="value"><?php echo $email; ?></td></tr>
        <tr><td class="label">Password:</td><td class="value"><?php echo $password; ?></td></tr>
        <tr><td class="label">Date of Birth:</td><td class="value"><?php echo $dob; ?></td></tr>
        <tr><td class="label">Phone Number:</td><td class="value"><?php echo $phone; ?></td></tr>
        <tr><td class="label">Gender:</td><td class="value"><?php echo $gender; ?></td></tr>
        <tr><td class="label">Course:</td><td class="value"><?php echo $course; ?></td></tr>
        <tr><td class="label">Hobbies:</td><td class="value"><?php echo $hobbies; ?></td></tr>
        <tr><td class="label">Address:</td><td class="value"><?php echo $address; ?></td></tr>
    </table>

    <a href="index.html" class="back-btn">← Back to Form</a>
</div>

</body>
</html>
