<?php
session_start();
include 'db.php';

// Fetch all users from the database
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
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

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>Admin Panel | HR-Mate</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
	<style>
.switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }

        .status-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        /* Cards Animation */
.card-animation {
    animation: slideInUp 1s ease-out;
}

/* Keyframe for table fade-in effect */
@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Keyframe for card slide-in effect */
@keyframes slideInUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
.table {
	    max-width: 1000px; /* Keep max width for the table */
	    margin: auto; /* Center the table */
	}

	.table td {
	    padding: 5px; /* Reduce row height */
	    min-width: 150px; /* Set minimum column width for flexibility */
	}

	.table td:nth-child(5) { /* Target the Date Of Birth column */
	    min-width: 200px; /* Increase minimum width for Date Of Birth */
	}

	.table thead th {
	    background-color:#222E3C; /* Change header color to blue */
	    color: white; /* Change text color to white for contrast */
	}

	.btn {
	    padding: 5px 10px; /* Decrease button size */
	    font-size: 12px; /* Decrease font size */
	}

	</style>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Hr-Mate Admin</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						<b>Menu's</b>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="company-details.html">
              <i class="align-middle" data-feather="building"></i> <span class="align-middle">Company Details</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="add-user.html">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Add Users</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="edit-user.html">
              <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Update/Edit Users</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="delete-user.html">
              <i class="align-middle" data-feather="trash-2"></i> <span class="align-middle">Delete Users</span>
            </a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

		<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/pic 1.jpg" class="avatar img-fluid rounded me-1" alt="<?php echo "Admin" //echo htmlspecialchars($adminName); ?>" />
				<span class="text-dark"><?php echo "Admin" //echo htmlspecialchars($adminName); ?></span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href=""><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href=""><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logout.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
            <div class="container-fluid p-0">
        <h1 class="h3 mb-3">List of User's</h1>
        <div class="row">
            <div class="col-12">
                <div class="card table-animation"> <!-- Add table-animation class here -->
                    <div class="card-body">
                    <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Emergency Number</th>
                                        <th>Date of Birth</th>
                                        <th>Blood Group</th>
                                        <th>Marital Status</th>
                                        <th>Address Line 1</th>
                                        <th>Address Line 2</th>
                                        <th>Postal Code</th>
                                        <th>City</th>
                                        <th>Country</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['phone_number']); ?></td>
                                        <td><?php echo htmlspecialchars($row['emergency_number']); ?></td>
                                        <td><?php echo htmlspecialchars($row['date_of_birth']); ?></td>
                                        <td><?php echo htmlspecialchars($row['blood_group']); ?></td>
                                        <td><?php echo htmlspecialchars($row['marital_status']); ?></td>
                                        <td><?php echo htmlspecialchars($row['address_line1']); ?></td>
                                        <td><?php echo htmlspecialchars($row['address_line2']); ?></td>
                                        <td><?php echo htmlspecialchars($row['postal_code']); ?></td>
                                        <td><?php echo htmlspecialchars($row['city']); ?></td>
                                        <td><?php echo htmlspecialchars($row['country']); ?></td>
                                        <td>
                                            <div class="status-container">
                                                <label class="switch">
                                                    <input type="checkbox" 
                                                           onchange="updateStatus(this, '<?php echo $row['email']; ?>')"
                                                           <?php echo ($row['status'] == 'Accepted') ? 'checked' : ''; ?>>
                                                    <span class="slider"></span>
                                                </label>
                                                <span class="status-text">
                                                    <?php 
                                                    $status = $row['status'] ?? 'Pending';
                                                    echo $status; 
                                                    ?>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"> OUR STATISTICS</h1>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-animation"> <!-- Add card-animation class here -->
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="card-title">Managers</h5>
                                    <p class="card-text">Number of Managers: <strong>45</strong></p>
                                </div>
                                <i class="bi bi-person-vcard-fill display-4" style="color: #222E3C;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-animation">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="card-title">Project Managers</h5>
                                    <p class="card-text">Number of Project Managers: <strong>30</strong></p>
                                </div>
                                <i class="bi bi-person-lines-fill display-4" style="color: #222E3C;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-animation">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="card-title">Project Managers</h5>
                                    <p class="card-text">Number of Project Managers: <strong>30</strong></p>
                                </div>
                                <i class="bi bi-person-fill-gear display-4" style="color: #222E3C;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
		</div>
	</div>
    <script>
    function updateStatus(checkbox, email) {
        const status = checkbox.checked ? 'Accepted' : 'Pending';
        const statusText = checkbox.closest('.status-container').querySelector('.status-text');
        
        fetch('update_status.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `email=${email}&status=${status}`
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                // Update the status text dynamically
                statusText.textContent = status;
                console.log('Status updated successfully');
            } else {
                console.error('Failed to update status');
                // Revert checkbox if update fails
                checkbox.checked = !checkbox.checked;
            }
        })
        .catch(error => {
            console.error('Error:', error);
            // Revert checkbox if there's an error
            checkbox.checked = !checkbox.checked;
        });
    }
    </script>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<script src="js/app.js"></script>

</body>

</html>
