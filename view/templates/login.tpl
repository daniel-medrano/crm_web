<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Sing Up</title>
</head>

<body>
    <div class="container">
        <div class="title">Sign In</div>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="login">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Username</span>
                    <input name="username" type="text" placeholder="Enter your username" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input name="password" type="text" placeholder="Enter your password" required>
                </div>
                <div class="button">
                    <input type="submit" value="Sign In">
                </div>
            </div>
        </form>
    </div>
</body>

</html>