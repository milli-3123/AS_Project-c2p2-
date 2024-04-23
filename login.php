<?php
// Initialize variables
$username = "";
$password = "";

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'college_erp');

// Check if the login form is submitted
if (isset($_POST['login_user'])) {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Modify the password using the non_encrypted function
    $password = non_encrypted($password);

    // Prepare the SQL query
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    
    // Execute the query
    $result = mysqli_query($db, $query);

    // Check if the query was executed successfully
    if ($result) {
        // Check if any row was returned
        if (mysqli_num_rows($result) > 0) {
            // If user credentials are correct, display success message in an alert box
            echo '<script>alert("Login successful"); window.location.href = "menu.php";</script>';
        } else {
            // If user credentials are incorrect, display error message in an alert box
            echo '<script>alert("Sql Injection demonstrated! Now you can access the pizza delivery site without having the correct credentials"); window.location.href = "menu.php";</script>';
        }
    } else {
        // If there was an error executing the query, display error message in an alert box
        echo '<script>alert("Error executing query: ' . mysqli_error($db) . '"); window.location.href = "menu.php";</script>';
    }
}

// Define the non_encrypted function
function non_encrypted($fname) {
    // Check if the input contains SQL injection pattern
    if (str_contains($fname, '\' or 1=1 --')) {
        // If the input contains SQL injection pattern, return a string that will always make the query true
        return '\' OR 1=1 --';
    }
    return $fname;
}
?>
