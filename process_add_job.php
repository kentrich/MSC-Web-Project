<?php
session_start();

// Check if the email is set in the session
if (isset($_SESSION['erid'])) {
    $employer_id = $_SESSION['erid'];

    // Database connection parameters
    define('DATABASE_USER', 'root');
    define('DATABASE_PASSWORD', '');
    define('DATABASE_HOST', 'localhost');
    define('DATABASE_NAME', 'jobportal');

    // Establish MySQLi connection
    $dbc = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
    if (!$dbc) {
        die("Could not connect to MySQL: " . mysqli_connect_error());
    }

    // Check the validity of the employer's job posting
    $val_query = "SELECT number FROM validity WHERE employer_id = '$employer_id'";
    $val_result = mysqli_query($dbc, $val_query);
    if (!$val_result) {
        die("Query failed: " . mysqli_error($dbc));
    }
    $row1 = mysqli_fetch_assoc($val_result);

    // Initialize $add variable
    $add = 0;

    // Check if the employer has any remaining job postings
    if ($row1 !== null && $row1['number'] == 0) {
        $add = 2; // No remaining job postings
    } else {
        // Check if the employer is active
        $emp_query = "SELECT er_active, er_company FROM employers WHERE er_id = '$employer_id'";
        $emp_result = mysqli_query($dbc, $emp_query);
        if (!$emp_result) {
            die("Query failed: " . mysqli_error($dbc));
        }
        $row = mysqli_fetch_assoc($emp_result);
        $active = $row['er_active'];

        if ($active) {
            // Insert the job posting into the database
            $company = $_POST['company'];
            $category = $_POST['category'];
            $sector = $_POST['sector'];
            $title = $_POST['title'];
            $salary = $_POST['salary'];
            $type = $_POST['type'];
            $city = $_POST['city'];
            $country = $_POST['country'];
            $experience = $_POST['experience'];
            $vacancy = $_POST['vacancy'];
            $description = $_POST['description'];
            $todays_date = date("Y-m-d");

            $insert_query = "INSERT INTO jobs (j_er_id, j_category, j_owner_name, j_title, j_hours, j_salary, j_date, j_sector, j_type, j_country, j_vacancy, j_company, j_experience, j_description, j_city, j_active) 
                             VALUES ('$employer_id', '$category', '{$row['er_company']}', '$title', '0', '$salary', '$todays_date', '$sector', '$type', '$country', '$vacancy', '$company', '$experience', '$description', '$city', '0')";
            $insert_result = mysqli_query($dbc, $insert_query);
            if (!$insert_result) {
                die("Query failed: " . mysqli_error($dbc));
            }

            // Decrease the number of remaining job postings for the employer
            if ($row1 !== null) {
                $number = $row1['number'] - 1;
                $update_query = "UPDATE validity SET number = '$number' WHERE employer_id = '$employer_id'";
                $update_result = mysqli_query($dbc, $update_query);
                if (!$update_result) {
                    die("Query failed: " . mysqli_error($dbc));
                }
            }

            $add = 1; // Job posting added successfully
        } else {
            $add = 0; // Employer is not active
        }
    }
} else {
    // Handle if session variable 'erid' is not set
    // Redirect or display an error message
}

// Display appropriate messages based on the value of $add
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer</title>
    <!-- Add your CSS and JavaScript includes here -->
</head>
<body>
    <div>
        <?php if ($add == 1): ?>
            <p>New job successfully added.</p>
        <?php elseif ($add == 2): ?>
            <p>No remaining job postings available.</p>
        <?php elseif ($add == 0): ?>
            <p>You can add a job only after the admin's approval.</p>
        <?php endif; ?>
    </div>
    <!-- Your HTML content goes here -->
</body>
</html>
