<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./style/style.css">
    <script defer src="./script.js"></script>
</head>
<body>
    <?php require "./components/nav.html" ?>
    <div class="formContainer">
        <form method="POST">
            <div class="form">
                <h1>Register</h1>
                <input type="text" name="name" id="name" placeholder="Name">
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="password" name="password" id="password" placeholder="Password">
                <button type="submit">Register now</button>
                <a href="#">Or login</a>
            </div>
        </form>
    </div>
    <?php require "./components/footer.html" ?>
</body>
</html>

<!-- chipi chipi chapa chapa dubi dubi daba daba magico mi dubi dubi boom boom boom boom -->