<?php header("Location: login.php"); exit; ?> 
<?php

if (isset($_SESSION['usuario_id'])) {
    header("Location: dashboard.php");
    exit;
} else {
    header("Location: login.php");
    exit;
}
?>