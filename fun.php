<?php
// Function to add a new user
function addUser($name, $email) {
    
        global $conn;
        $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $email);
        $stmt->execute();
        $stmt->close();
    // Code to add user to the database
    // Example: INSERT INTO users (name, email) VALUES ($name, $email);
}

// Function to update an existing user
function updateUser($id, $name, $email) {
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssi", $name, $email, $id);
    $stmt->execute();
    $stmt->close();
    // Code to update user in the database
    // Example: UPDATE users SET name = $name, email = $email WHERE id = $id;
}

// Function to delete a user
function deleteUser($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    // Code to delete user from the database
    // Example: DELETE FROM users WHERE id = $id;
}
?>