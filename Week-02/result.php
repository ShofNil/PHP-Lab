<?php

$applicant_id = $_GET["applicant_id"] ?? "";
$name = $_GET["name"] ?? "";
$cv = $_GET["cv"] ?? "";
$email = $_GET["email"] ?? "";
$phone = $_GET["phone"] ?? "";
$gender = $_GET["gender"] ?? "";
$job_position = $_GET["job_position"] ?? "";
$qualification = $_GET["qualification"] ?? "";
$address = $_GET["address"] ?? "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Result</title>
</head>

<body>

<h1>Application Successful!</h1>

<p>Applicant ID: <?php echo htmlspecialchars($applicant_id); ?></p>

<p>Name: <?php echo htmlspecialchars($name); ?></p>

<p>Email: <?php echo htmlspecialchars($email); ?></p>

<p>Phone: <?php echo htmlspecialchars($phone); ?></p>

<p>Gender: <?php echo htmlspecialchars($gender); ?></p>

<p>Job Position: <?php echo htmlspecialchars($job_position); ?></p>

<p>Qualification: <?php echo htmlspecialchars($qualification); ?></p>

<p>Address: <?php echo htmlspecialchars($address); ?></p>

<p>
    CV:
    <a href="uploads/<?php echo urlencode($cv); ?>" target="_blank">
        View CV
    </a>
</p>

</body>
</html>