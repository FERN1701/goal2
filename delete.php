<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $deleteId = $_POST['deleteId'];

    // Get existing names from the cookie or initialize an empty array
    $names = isset($_COOKIE['names']) ? unserialize($_COOKIE['names']) : array();

    // Check if the ID exists
    if (isset($names[$deleteId])) {
        // Remove the name with the specified ID
        unset($names[$deleteId]);

        // Save the updated names array in the cookie
        setcookie('names', serialize($names), time() + 3600); // Cookie expires in 1 hour
    }
}

header('Location: goal.php');
exit;
?>
