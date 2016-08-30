<?php
// -------- Admin login page --------
session_start();

//data
$username = "DV";
$pass = "divisionVitrum2016";
$hash = password_hash($pass, PASSWORD_DEFAULT);

// Check for a postback
if (isset($_POST['submit'])) {
    $postedName = htmlentities($_POST['username']); //Save the username, escape any characters
    $postedPass = htmlentities($_POST["password"]); //Save the pass, escape any characters

    //Check if the acount exists
    if($postedName == $username) {
        //Check password
        if(password_verify($postedPass, $hash)){
            $_SESSION['true'] = true;
            header("location:../dashboard/"); //send to the landing page page
        }else{
            $errors[0] = "Password incorrect"; //if password is incorrect set it in the errors
        }
    }else{
        $errors[1] = "Acount doesn't exist"; //if acount doesn't exist set it in the erros
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
<main>
    <div id="card">
        <h1>Admin <span>Login</span></h1>
        <!--Send a postback-->
        <form action="index.php" method="post">
            <input type="text" name="username" placeholder="Name">
            <!--Display errors if there are any-->
            <label><?if(!isset($errors[1])){}else{echo $errors[1];}?></label>
            <input type="password" name="password" placeholder="Password">
            <!--Display errors if there are any-->
            <label><?if(!isset($errors[0])){}else{echo $errors[0];}?></label>
            <button type="submit" name="submit">Log in</button>
        </form>
    </div>
</main>
</body>
</html>
