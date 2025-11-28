<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $address = $_POST['address'];

    // Hobbies (multiple checkbox)
    $hobbies = "";
    if (!empty($_POST['hobbies'])) {
        if (is_array($_POST['hobbies'])) {
            $hobbies = implode(", ", $_POST['hobbies']);
        } else {
            $hobbies = $_POST['hobbies'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submitted Details</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .output-box {
            background-color: white;
            width: 50%;
            margin: 40px auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #d63384;
        }

        .line {
            font-size: 16px;
            padding: 6px 0;
        }

        .label {
            font-weight: bold;
            color: #b02669;
        }
    </style>
</head>
<body>

<div class="output-box">
    <h2>Submitted Registration Details</h2>

    <div class="line"><span class="label">First Name:</span> <?= $fname ?></div>
    <div class="line"><span class="label">Last Name:</span> <?= $lname ?></div>
    <div class="line"><span class="label">Email:</span> <?= $email ?></div>
    <div class="line"><span class="label">Date of Birth:</span> <?= $dob ?></div>
    <div class="line"><span class="label">Phone:</span> <?= $phone ?></div>
    <div class="line"><span class="label">Gender:</span> <?= $gender ?></div>
    <div class="line"><span class="label">Course Selected:</span> <?= $course ?></div>
    <div class="line"><span class="label">Hobbies:</span> <?= $hobbies ?></div>
    <div class="line"><span class="label">Address:</span> <?= nl2br($address) ?></div>

</div>

</body>
</html>
