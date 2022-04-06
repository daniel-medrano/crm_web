<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signin.css">
    <title>Sing Up</title>
</head>

<body>
    <form action="index.php" method="post">
        <div class="container login">
            <h2 class="title">Sign In</h2>
            <input type="hidden" name="action" value="login">
            <div class="input-box">
                <span class="details">Username</span>
                <input class="text-box" name="username" type="text" placeholder="Enter your username" required>
            </div>
            <div class="input-box">
                <span class="details">Password</span>
                <input class="text-box" name="password" type="password" placeholder="Enter your password" required>
            </div>
            <input class="button" type="submit" value="Sign In">
        </div>
    </form>
</body>

</html>