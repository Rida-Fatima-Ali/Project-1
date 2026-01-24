<?php
session_start();
session_unset();
session_destroy();

header("Location: /Project-1/index.html");
exit;
?>
