<?php

$contact_name = $_POST["contact_name"];
$company_name = $_POST["company_name"];
$company_email = $_POST["company_email"];
$contact_phone = $_POST["contact_phone"];
$student_type = $_POST["student_type"];

// var_dump($contact_name, $company_name, $company_email, $contact_phone, $student_type);


$host = "localhost";
$dbname = "contact_db";
$username = "root";
$password = "";

$conn = mysqli_connect(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname
);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO information (contact_name, company_name, company_email, student_type, contact_phone)
        VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {

    die(mysqli_error($conn));
}

mysqli_stmt_bind_param(
    $stmt,
    "sssss",
    $contact_name,
    $company_name,
    $company_email,
    $student_type,
    $contact_phone
);

mysqli_stmt_execute($stmt);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />

    <style>
        body {
            background: rgb(56, 49, 60);
            background: linear-gradient(90deg, rgba(56, 49, 60, 1) 0%, rgba(54, 45, 42, 0.16010154061624648) 50%, rgba(224, 141, 102, 1) 100%);
        }

        a {
            text-decoration: none;

        }
    </style>
</head>

<body>
    <div class="container-fluid" style="height: 100vh;">
        <div class="row justify-content-center align-items-center h-100" style="height: 100vh;">
            <div class="col-8 text-center h1 bg-dark text-white border p-4 rounded-4">
                <p>Thank you for your interest</p>
                <a class="btn btn-outline-light" href="./index.php">Back to main page</a>
            </div>

        </div>
    </div>
</body>

</html>