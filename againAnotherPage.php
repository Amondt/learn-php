<?php 
if (isset($_POST['login']) && isset($_POST['pwd'])) {
    setcookie('login', $_POST['login'], time() + 365*24*3600);
    setcookie('pwd', $_POST['pwd'], time() + 365*24*3600);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Again Another Page</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'sans serif'
    }
    h3 {
        text-align: center;
        margin: 40px auto 0 auto;
    }
    p {
        margin: 40px;
        text-align: center;
    }
    h6 {
        margin: 10px;
        text-align: center;
    }
    button {
        padding: 5px;
        display: block;
        margin: auto;
        font-size: 1em;
    }
    a {
        text-decoration: none;
    }
    </style>
</head>
<body>
    <h3>You are on another page again (but another another)!</h3>
    <h6>(You might need to refresh the page to see the changes)</h6>

    <p><?php echo 'Your login is \'' . $_COOKIE['login'] . '\' and your password is \'' . $_COOKIE['pwd'] . '\'' ?></p>
    <br>

    <a href="superSessCook.php"><button>Back</button></a>
</body>
</html>