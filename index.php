<!DOCTYPE html>
<html>

<head>
    <title>WebChat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="bg-img">
    <div id="main">
        <div id="info">
            <h2>Login here</h2>

            <form action="login.php" method="post">
                <label><b>Username</b></label>
                <input type="text" name="uname" placeholder="User name"><br><br>
                <label><b>Password</b></label>
                <input type="text" name="pass" placeholder="Password"><br><br>
                <button class="btn"  type="submit"><b>Login</b></button>
            </form>

            <form action="signup.php" method="post">
                <h2>Don't have an account sign up here</h2>
                <label>Username:</label>
                <input type="text" name="uname" placeholder="Username"><br><br>
                <label>Email:</label>
                <input type="text" name="Email" placeholder="Email"><br><br>
                <label>Password:</label>
                <input type="text" name="Password" placeholder="Password"><br><br>
                <button class="btn"  type="submit"><b>Signup</b></button>
            </form>
        </div>
    </div>
    </div>

</body>

</html>