<?php
session_start();

// Ensure only admin can access this page
if (!isset($_SESSION['is_user']) || $_SESSION['is_user'] !== true) {
    header("Location: index.php");
    exit();
}

include 'db.php';
include 'functions.php';

// Handle form submissions for adding, updating, and deleting users
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_user'])) {
        addUser($_POST['name'], $_POST['email']);
    } elseif (isset($_POST['update_user'])) {
        updateUser($_POST['id'], $_POST['name'], $_POST['email']);
    } elseif (isset($_POST['delete_user'])) {
        deleteUser($_POST['id']);
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

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>User Management | HR-Mate</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
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
                        Management
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="company-details.html">
                            <i class="align-middle" data-feather="building"></i> <span class="align-middle">Company Details</span>
                        </a>
                    </li>
                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="user.php">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">User Management</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="main">
            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3">User Management</h1>

                    <form method="POST">
                        <h5>Add User</h5>
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <button type="submit" name="add_user">Add User</button>
                    </form>

                    <form method="POST">
                        <h5>Update User</h5>
                        <input type="hidden" name="id" required>
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <button type="submit" name="update_user">Update User</button>
                    </form>

                    <form method="POST">
                        <h5>Delete User</h5>
                        <input type="hidden" name="id" required>
                        <button type="submit" name="delete_user">Delete User</button>
                    </form>
                </div>
            </main>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>

</html>
