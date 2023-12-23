<?php
// Get names from the cookie or initialize an empty array
$names = isset($_COOKIE['names']) ? unserialize($_COOKIE['names']) : array();

// Display names in a loop with IDs
if (!empty($names)) {
    echo '<ul>';
    foreach ($names as $id => $name) {
        echo '<li>ID: ' . $id . ', Goal To : ' . htmlspecialchars($name) . '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>Do You Have Any Goals in life ?</p>';
}
?>
