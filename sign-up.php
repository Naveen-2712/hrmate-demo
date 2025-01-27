<?php
include 'db.php';
include 'functions.php';


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $blood_group = $_POST['blood_group'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Handle file upload
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["picture"]["name"]);
    $uploadOk = 1;

    if (move_uploaded_file($_FILES["picture"]["tmp_name"], $targetFile)) {
        $picture = $targetFile;
    } else {
        $uploadOk = 0;
        echo "<p>Sorry, there was an error uploading your file.</p>";
    }

    if ($uploadOk && $password === $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert data into the user table
        $sql = "INSERT INTO user (name, email, phone, gender, dob, blood_group, picture, password, confirm_password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssss", $name, $email, $phone, $gender, $dob, $blood_group, $picture, $hashed_password, $hashed_password);

        if ($stmt->execute()) {
            echo "<p>Record added successfully! Redirecting you to the sign-in page...</p>";
            header("refresh:3; url=index.php");  // Assuming 'signin.php' is your sign-in page
                exit();
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
    } else {
        echo "<p>Passwords do not match or file upload failed.</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />

	<title>Sign Up | Hr-Mate</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="content">
    <body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Sign Up | Register</h1>
							<p class="lead">Register yourself with Us </p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<?php if (isset($error)) { echo "<div class='alert alert-danger'>$error</div>"; } ?>
                				    <?php if (isset($success)) { echo "<div class='alert alert-success'>$success</div>"; } ?>
                				    <form method="POST" id="registerForm" enctype="multipart/form-data">
                				        <div class="mb-3">
                				            <label for="name" class="form-label">Name</label>
                				            <input type="text" name="name" id="name" class="form-control" required>
                				        </div>
                                        <div class="mb-3">
<label for="email" class="form-label">Email ID</label>
<input type="email" class="form-control" id="email" name="email" required>
<div class="invalid-feedback">Please enter a valid email address.</div>
</div>
                                        <div class="mb-3">
<label for="phone" class="form-label">Phone Number</label>
<input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" required>
<div class="invalid-feedback">Please enter a valid 10-digit phone number.</div>
</div>

                                        <div class="mb-3">
<label for="gender" class="form-label">Gender</label>
<select class="form-control" id="gender" name="gender" required>
<option value="" disabled selected>Select your gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="other">Other</option>
</select>
</div>

                                        <div class="mb-3">
<label for="dob" class="form-label">Date of Birth:</label>
<input type="date" class="form-control" id="dob" name="dob" required>
</div>

                                        <div class="mb-3">
<label for="blood_group">Blood Group:</label>
        <input type="text" id="blood_group" name="blood_group" class="form-control" required>
</div>
                                        <div class="mb-3">
                				            <label for="picture" class="form-label">Upload Picture</label>
                				            <input type="file" name="picture" id="picture" accept="image/*" class="form-control" accept="image/png, image/jpeg" required>
                				        </div>
                				        <div class="mb-3">
                				            <label for="password" class="form-label">Password</label>
                				            <input type="password" name="password" id="password" class="form-control"  minlength="8" maxlength="16" required>
                				        </div>
										<div class="mb-3">
    										<label for="confirm_password" class="form-label">Confirm Password</label>
    										<input type="password" name="confirm_password" id="confirm_password" class="form-control" minlength="8" maxlength="16" required>
										</div>
										
                				        <button type="submit" class="btn btn-primary">Register</button>
                				    </form>
								</div>
							</div>
						</div>

						<div class="text-center mb-3">
							Already have an account? <a href="index.php">Login here</a>.
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>
    <script src="js/app.js"></script>
	<script>
    document.getElementById('registerForm').addEventListener('submit', function (e) {
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirm_password').value;

        if (password !== confirmPassword) {
            e.preventDefault(); // Prevent form submission
            alert('Passwords do not match. Please try again.');
        }
    });
</script>

</body>

</html>