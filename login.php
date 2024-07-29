
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="login.css"> 
</head>
<body>
    <div class="overlay"></div> 
    <header>
        <img src="images\kengenlogo.jpg" alt="student Icon" class="icon">
    </header>
    <h1> ICT INVENTORY </h1>
        <form method="post" action="login-process.php">
            <br>
            <div>
               <label for="user">Username</label>
               <input type="text" id="username" name="username"><br><br>
            </div>   
           <br><br> 
            <div>
               <label for="password">Password</label>
               <input type="password" id="password" name="password">
            </div>
            <br><br>
            <div>
                <input type="Submit" id="submit" name="Submit">
            </div> 
            <?php
            session_start();
        if (isset($_SESSION['errorMsg'])) {
            echo "<p style='color:red;font-weight:900px'>" . $_SESSION['errorMsg'] . "</p>";
            // Clear the error message after displaying it
            unset($_SESSION['errorMsg']);
        }
        ?>
        </form>
        <footer>
                <p><b><i>Energy For The Nation</i></b></p>
        </footer>
</body>
</html>