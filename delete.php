<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $deleteId = $_POST['deleteId'];

    // Get names from the session array
    $names = isset($_SESSION['names']) ? $_SESSION['names'] : array();

    // Check if the ID exists
    if (isset($names[$deleteId])) {
        // Remove the name with the specified ID
        unset($names[$deleteId]);

        // Update the session variable
        $_SESSION['names'] = $names;
    }
}

// Redirect back to the form page
header('Location: goal.php');
exit;
?>
