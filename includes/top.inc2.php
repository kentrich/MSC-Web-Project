<?php
// Check if session is not already active
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Define database configuration constants if not defined
if (!defined('DATABASE_USER')) {
    define('DATABASE_USER', 'root');
}

if (!defined('DATABASE_PASSWORD')) {
    define('DATABASE_PASSWORD', '');
}

if (!defined('DATABASE_HOST')) {
    define('DATABASE_HOST', 'localhost');
}

if (!defined('DATABASE_NAME')) {
    define('DATABASE_NAME', 'jobportal');
}

// Function to connect to the database
function connectToDatabase() {
    $dbc = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
    if (!$dbc) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    return $dbc;
}

// Function to fetch job seeker's name from database
function getJobSeekerName($id, $dbc) {
    $query = "SELECT ee_fname FROM employees WHERE ee_id = $id";
    $result = mysqli_query($dbc, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row['ee_fname'];
    } else {
        return false;
    }
}

// Check if jobseeker session is not set
if (!isset($_SESSION['jobseeker'])) {
    echo '
    <ul>
        <li><a href="index.php">Welcome</a>&nbsp;I&nbsp;&nbsp;</li>
        <li><a href="jobseeker_home.php">Jobseeker</a>&nbsp;&nbsp;I&nbsp;&nbsp;</li>
        <li><a href="employer_home.php">Employer</a></li>
    </ul>';
} else {
    // Connect to the database
    $dbc = connectToDatabase();

    // Fetch job seeker's name from database
    $id = $_SESSION['eeid'];
    $name = getJobSeekerName($id, $dbc);
    if ($name !== false) {
        // Display welcome message with job seeker's name and logout link
        echo '
        <ul>
            <li><a href="#">Welcome ' . $name . '</a>&nbsp;I&nbsp;&nbsp;</li>
            <li><a href="#">Jobseeker</a>&nbsp;&nbsp;I&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a></li>
        </ul>';
    } else {
        // Unable to fetch job seeker's name
        echo "Error: Unable to fetch job seeker's name.";
    }

    // Close database connection
    mysqli_close($dbc);
}
?>
