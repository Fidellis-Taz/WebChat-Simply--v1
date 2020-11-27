<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- for new users -->
    <h2>Register Your Account</h2>

    <form action="signup.php" method="post">
        <div class="container">
            <h2>Don't have an account sign up here</h2>

            <label>UserName</label>
            <input type="text" name="uname" placeholder="Username"><br><br>

            <label>Email</label>
            <input type="text" name="Email" placeholder="Email"><br><br>

            <label>Password</label>
            <input type="text" name="Password" placeholder="Password"><br><br>

            <button style="background-color:green;color:white;" type="submit"><br>Signup</button>

        </div>
    </form>
</body>

</html>