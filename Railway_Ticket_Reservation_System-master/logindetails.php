<script type="text/javascript">
function Window()
{
	Mywindow = window.open('index.php');
}
</script>
<body onload="Window()"></body>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $uname=$_POST['username'];
        $pass=$_POST['password'];
        //creating databse and connection
        $conn=mysqli_connect('localhost','root','');
        $create='CREATE DATABASE Details ';
        if(mysqli_query($conn,$create)){
            echo"<br>";
            echo"DataBase Created";
        }
        if(!$conn){
            echo"Error Connecting ".$mysqli_connect_error($conn);
        }
        echo"Connection successfull";
        $conn=mysqli_connect('localhost','root','','Details');
        if(isset($_POST['login'])){
            //table creation
            $table = 'CREATE TABLE logins(ID INTEGER(10)PRIMARY KEY AUTO_INCREMENT,username VARCHAR(40)NOT NULL,password VARCHAR(10) NOT NULL)';
            if(mysqli_query($conn,$table)){
                echo"<br>";
                echo"Table Created";
            }
            else{
                echo"<br>";
                echo"Table Not created ".mysqli_error($conn);
            }

            $query = "SELECT * FROM logins WHERE username = '$uname' AND password = '$pass'";
            // Execute the query
            $result = mysqli_query($conn, $query);
            // Check if any rows were returned
            if (mysqli_num_rows($result) > 0) {
                // The record already exists, do not add to the database
                echo"<br>";
                echo "Record already exists.";
            } else {
                //inserting values
                $insert="INSERT INTO logins(username,password)VALUES('$uname','$pass')";
                if(mysqli_query($conn,$insert)){
                    echo"<br>";
                    echo"Data inserted";
                }
                else{
                    echo"Data not inserted ".mysqli_error($conn);
                }
            }
        }
        // Retrieve user data from database
        $select_sql = "SELECT * FROM logins WHERE username='$uname'";
        $select_result = mysqli_query($conn, $select_sql);
        if (mysqli_num_rows($select_result) == 1) {
            // User exists, verify password
            $user = mysqli_fetch_assoc($select_result);
            if ($pass == $user['password']) {
                // Password matches, set session variable and redirect to main page
                session_start();
                $_SESSION['username'] = $uname;
                $_SESSION['loggedin'] = true;
                exit();
            } else {
                echo"<br>";
                echo "Incorrect password";
            }
        } else {
            echo"<br>";
            echo "User not found";
        }
    }
?>

