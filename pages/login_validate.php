<?php
session_start();

$passwordErr = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){

$server = "localhost";
$username = "root";
$password = "";
$dbname = "saidb";

// Create connection
$conn = mysqli_connect($server, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the username exists in the database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

// Check if the query was successful
if($result){
     // Check if the username exists
     if(mysqli_num_rows($result)>0){
        // Fetch the user's data
        $row = mysqli_fetch_assoc($result);

         // Verify if the password matches
         if(password_verify($password, $row['Password'])){
             // Password is correct, redirect to the home page or dashboard
             $_SESSION['username'] = $username; // Store the username in session for further use

            header("Location: home.html");
            exit();
         }else{
            echo "<script>alert('Invalid password. Please try again.'); window.location.href='loginform.html';</script>";
         }
        }else{
            echo "<script>alert('User not found. Please register.');window.location.href='registration.html'</script>";
            
        }
    }else{
        echo "Error".sql."<br>".mysqli_error($conn);
    }
mysqli_close($conn);
}
?>