<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: /Project-1/index.html");
    exit();
}

$user_id = $_SESSION['user_id'];

$result = mysqli_query(
    $conn,
    "SELECT username, email FROM users WHERE id='$user_id'"
);

$user = mysqli_fetch_assoc($result);

if (!$user) {
    echo "User not found";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>

<h1>Welcome, <?php echo htmlspecialchars($user['username']); ?> 👋</h1>

<p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
<p><strong>User ID:</strong> <?php echo $user_id; ?></p>

<a href="logout.php">Logout</a>

</body>
</html>
