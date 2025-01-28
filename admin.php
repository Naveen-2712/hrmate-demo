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
					<h1 class="h3 mb-3">Welcome to HR-Mate Admin Panel</h1>
					<div class="row">
						<div class="col-12">
							<div class="row">
								<div class="col-md-4">
									<div class="card">
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
									<div class="card">
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
									<div class="card">
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

	<script src="js/app.js"></script>

</body>

</html>
