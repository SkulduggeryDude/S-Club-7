<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Rasai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login-container">
        <a href="javascript:history.back()" class="back-arrow"><i class="fa fa-arrow-left"></i></a>
        <h2 class="login-title">Rasai Login</h2> 
        <form action="/submit-your-login-form" method="post">
            <div class="form-group icon-input">
                <i class="fa fa-user"></i>
                <input type="text" id="username" name="username" placeholder="Type your username" required>
            </div>
            <div class="form-group icon-input">
                <i class="fa fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Type your Password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <div class="register-link">
                <p>Not a member? <a href="Registration.php">Register here</a></p>
            </div>
            <div class="social-login">
                <a href="https://facebook.com" class="fa fa-facebook social-icon"></a>
                <a href="https://twitter.com" class="fa fa-twitter social-icon"></a>
                <a href="https://youtube.com" class="fa fa-youtube social-icon"></a>
            </div>
        </form>
    </div>
</body>
</html>