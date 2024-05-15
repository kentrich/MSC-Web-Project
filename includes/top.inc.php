<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['jobseeker'])) {
    echo '
    <ul>
        <li><a href="index.php">Welcome</a>&nbsp;I&nbsp;&nbsp;
        <li> <a href="jobseeker_home.php">Jobseeker</a>&nbsp;&nbsp;I&nbsp;&nbsp;
        <li> <a href="employer_home.php">Employer</a></li>
    </ul>
    ';
} else {
    $host = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $db_name = "jobportal";

    $dbc = mysqli_connect($host, $username, $password, $db_name);
    if (!$dbc) { 
        trigger_error('Could not connect to MySQL: ' . mysqli_connect_error()); 
    }

    $id = $_SESSION['eeid'];
    $name = '';

    $query = "SELECT ee_fname FROM employees WHERE ee_id = ?";
    $stmt = mysqli_prepare($dbc, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $name);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    echo '
    <ul>
        <li><a href="#"> Welcome ' . $name . ' </a>&nbsp;I&nbsp;&nbsp;
        <li> <a href="#">Jobseeker</a>&nbsp;&nbsp;I&nbsp;&nbsp;
        <li> <a href="logout.php">Logout</a></li>
    </ul>
    ';
}
?>
