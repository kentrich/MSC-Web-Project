<?php

// Check if email is set in the POST request
if(isset($_POST['email'])) {
    $email = $_POST['email'];

    // Database connection details
    $dsn = "mysql:host=localhost;dbname=jobportal";
    $username = "root";
    $password = "";

    try {
        // Create a PDO instance
        $pdo = new PDO($dsn, $username, $password);
        
        // Prepare a SQL statement to select email from employees table
        $statement = $pdo->prepare("SELECT ee_email FROM employees WHERE ee_email = :email");

        // Bind the email parameter
        $statement->bindParam(':email', $email, PDO::PARAM_STR);

        // Execute the statement
        $statement->execute();

        // Check if any rows are returned
        if($statement->rowCount() > 0) {
            echo '<div style="color:red;"> <b>'.$email.'</b> is already registered.</div>';
        } else {
            echo 'OK';
        }

    } catch (PDOException $e) {
        // Handle database connection errors
        echo "Error: " . $e->getMessage();
    }
}
?>
