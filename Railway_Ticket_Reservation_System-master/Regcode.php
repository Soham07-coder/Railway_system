<?php
// Define $conn variable as null
$conn=mysqli_connect("localhost","root","","Details");
if(!$conn){
    echo"Error Connecting ".$mysqli_connect_error($conn);
}
echo"Connected Successfully"; 
$conn=mysqli_connect('localhost','root','','Details');
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Check if registration form is submitted
if (isset($_POST['register'])) {
    $table = 'CREATE TABLE register(ID INTEGER(10)PRIMARY KEY AUTO_INCREMENT,username VARCHAR(20)NOT NULL,email VARCHAR(50) NOT NULL,password VARCHAR(20)NOT NUll)';
    if(mysqli_query($conn,$table)){
        echo"<br>";
        echo"Table Created";
    }
    else{
        echo"<br>";
        echo"Table Not created ".mysqli_error($conn);
    }
    $query = "SELECT * FROM logins WHERE username = '$username' AND password = '$password'";
    // Execute the query
    $result = mysqli_query($conn, $query);
    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        // The record already exists, do not add to the database
        echo "Record already exists.";
    }
    else{
        // Insert new user into database
        $insert_sql = "INSERT INTO register (username, email, password) VALUES ('$username', '$email', '$password')";
        $insert_result = mysqli_query($conn, $insert_sql);
        if ($insert_result) {
            // Redirect to main page
            header("Location: login.php");
            exit();
        } else {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
    }
}
?>