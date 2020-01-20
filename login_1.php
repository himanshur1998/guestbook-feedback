<?php
    session_start();
    //Fetch post variables.
    $con = new mysqli('localhost', 'root', '', 'registration');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password';";
    $result = $con->query($sql);
    if(mysqli_num_rows($result) != 0) {
        $row = mysqli_fetch_array($result);
        $user = $row['username'];
        $_SESSION['username'] = $user;
        if ($row['user_type'] == 'user') {
            $page = 'welcome.php';    
        }
        else {
            $page = 'admin.html';
        }
    }
    else {
        $_SESSION['_error'] = "<span style='color:#ff0000 ;'>X: Incorrect Credentials. Please try again.</span>";
        $page = 'login.php';
    }
    header('Location:' . $page);
?>

