<?php
session_start();

// Get names from the session array
$names = isset($_SESSION['names']) ? $_SESSION['names'] : array();

// Display names in a loop with IDs
if (!empty($names)) {
    echo '<ul>';
    foreach ($names as $id => $name) {
        echo '<li>Goal : ' . $id . ', Name: ' . htmlspecialchars($name) . '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>Do you have any Goals in life?</p>';
}
?>
