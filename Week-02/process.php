<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: Lab_3_task.php");
    exit();
}
$applicant_id = trim($_POST["applicant_id"] ?? "");
$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$password = $_POST["password"] ?? "";
$gender = $_POST["gender"] ?? "";
$job_position = $_POST["job_position"] ?? "";
$qualification = trim($_POST["qualification"] ?? "");
$address = trim($_POST["address"] ?? "");

$errors = [];
if ($applicant_id === "") {
    $errors[] = "Applicant ID is required.";
}

if ($name === "") {
    $errors[] = "Name is required.";
}

if ($email === "") {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email address.";
}

if ($phone === "") {
    $errors[] = "Phone number is required.";
} elseif (!preg_match("/^[0-9]{11}$/", $phone)) {
    $errors[] = "Phone number must contain exactly 11 digits.";
}

if ($password === "") {
    $errors[] = "Password is required.";
} elseif (strlen($password) < 6) {
    $errors[] = "Password must contain at least 6 characters.";
}

if ($gender === "") {
    $errors[] = "Please select your gender.";
}

$valid_positions = [
    "Software Developer",
    "Web Developer",
    "Database Administrator",
    "Network Engineer"
];

if ($job_position === "") {
    $errors[] = "Please select a job position.";
} elseif (!in_array($job_position, $valid_positions)) {
    $errors[] = "Invalid job position selected.";
}

if ($qualification === "") {
    $errors[] = "Qualification is required.";
}

if ($address === "") {
    $errors[] = "Address is required.";
}

if (!isset($_FILES["cv"]) || $_FILES["cv"]["error"] === UPLOAD_ERR_NO_FILE) {

    $errors[] = "Please upload your CV.";

} elseif ($_FILES["cv"]["error"] !== UPLOAD_ERR_OK) {

    $errors[] = "There was an error uploading your CV.";

} else {

    $cv_name = $_FILES["cv"]["name"];
    $cv_tmp_name = $_FILES["cv"]["tmp_name"];
    $cv_size = $_FILES["cv"]["size"];

   
    $file_extension = strtolower(
        pathinfo($cv_name, PATHINFO_EXTENSION)
    );

   
    $allowed_extensions = ["pdf", "doc", "docx"];

 
    $max_size = 2 * 1024 * 1024;

    if (!in_array($file_extension, $allowed_extensions)) {
        $errors[] = "Invalid CV format. Only PDF, DOC, and DOCX files are allowed.";
    }

    if ($cv_size > $max_size) {
        $errors[] = "CV file size must not exceed 2 MB.";
    }
}

// -------------------------
// Display Errors
// -------------------------

if (!empty($errors)) {
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Application Failed</title>
        
    </head>

    <body>

    <div class="container error-container">

        <h1>Application Failed!</h1>

        <div class="error-box">

            <?php foreach ($errors as $error): ?>
                <p>❌ <?php echo htmlspecialchars($error); ?></p>
            <?php endforeach; ?>

        </div>

        <a href="Lab_3_task.php" class="back-button">
            Go Back to Application Form
        </a>

    </div>

    </body>
    </html>

    <?php

    exit();
}

// -------------------------
// Upload CV
// -------------------------

$upload_directory = "uploads/";

// Create uploads folder if it doesn't exist
if (!is_dir($upload_directory)) {
    mkdir($upload_directory, 0777, true);
}

// Generate a unique filename
$new_cv_name = uniqid("CV_", true) . "." . $file_extension;

$destination = $upload_directory . $new_cv_name;

// Move uploaded file to uploads folder
if (!move_uploaded_file($cv_tmp_name, $destination)) {

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Upload Error</title>
       
    </head>

    <body>

    <div class="container error-container">
        <h1>Application Failed!</h1>

        <div class="error-box">
            <p>❌ Unable to store the uploaded CV.</p>
        </div>

        <a href="Lab_3_task.php" class="back-button">
            Go Back
        </a>
    </div>

    </body>
    </html>

    <?php

    exit();
}

// -------------------------
// Send data using GET
// -------------------------

$query = http_build_query([
    "applicant_id" => $applicant_id,
    "name" => $name,
    "cv" => $new_cv_name,
    "email" => $email,
    "phone" => $phone,
    "gender" => $gender,
    "job_position" => $job_position,
    "qualification" => $qualification,
    "address" => $address
]);

header("Location: result.php?" . $query);
exit();

?>