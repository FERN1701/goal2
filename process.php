<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];

    // Get existing names from the cookie or initialize an empty array
    $names = isset($_COOKIE['names']) ? unserialize($_COOKIE['names']) : array();

    // Add the new name to the array
    $names[] = $name;

    // Save the names array in a cookie
    setcookie('names', serialize($names), time() + 3600); // Cookie expires in 1 hour

    header('Location: goal.php');
    exit;
}
?>
