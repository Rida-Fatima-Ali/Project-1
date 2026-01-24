<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: ../index.html");
}
?>
<h1>Welcome <?php echo $_SESSION['user']; ?></h1>
<a href="php/logout.php">Logout</a>