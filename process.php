<?php
include "session.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    
    // Save the name in the session array
    $_SESSION['names'][] = $name;

    // Redirect back to the form page
    header('Location: goal.php');
    exit;
}
?>
