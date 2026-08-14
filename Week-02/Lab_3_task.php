<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Job Application</title>
</head>

<body>

    <h1>Online Job Application System</h1>

    <form action="process.php" method="POST" enctype="multipart/form-data">

        <label for="applicant_id">Applicant ID</label><br>
        <input type="text" id="applicant_id" name="applicant_id" placeholder="Enter Applicant ID"><br><br>

        <label for="name">Full Name</label><br>
        <input type="text" id="name" name="name" placeholder="Enter your full name"><br><br>

        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" placeholder="Enter your email"><br><br>

        <label for="phone">Phone Number</label><br>
        <input type="text" id="phone" name="phone" placeholder="Enter 11 digit phone number"><br><br>

        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" placeholder="Minimum 6 characters"><br><br>

        <label>Gender</label><br>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <br><br>

        <label for="job_position">Job Position</label><br>
        <select name="job_position" id="job_position">
            <option value="">-- Select Job Position --</option>
            <option value="Software Developer">Software Developer</option>
            <option value="Web Developer">Web Developer</option>
            <option value="Database Administrator">Database Administrator</option>
            <option value="Network Engineer">Network Engineer</option>
        </select>
        <br><br>

        <label for="qualification">Educational Qualification</label><br>
        <input type="text" id="qualification" name="qualification" placeholder="e.g. BSc in CSE"><br><br>

        <label for="address">Address</label><br>
        <textarea id="address" name="address" rows="4" placeholder="Enter your address"></textarea><br><br>

        <label for="cv">Upload CV/Resume</label><br>
        <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx"><br>

        <small>Allowed: PDF, DOC, DOCX | Maximum size: 2 MB</small>
        <br><br>

        <button type="submit">Submit Application</button>

    </form>

</body>

</html>