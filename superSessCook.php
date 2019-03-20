<?php
session_start();

$_SESSION["firstName"] = 'Alex';
$_SESSION["lastName"] = 'Mondt';
$_SESSION["age"] = 24;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn PHP - Superglobals | Sessions | Cookies</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'sans serif'
        }
        h1 {
            text-align: center;
            margin: 40px auto;
        }
        h2 {
            text-align: center;
            margin: 20px auto;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input {
            margin: 10px;
            padding: 5px;
        }
        button {
            margin: 10px;
            padding: 5px;
        }
        select {
            margin: 10px;
            padding: 5px;
            align-self: flex-start;
        }
        .my-text {
            width: 50%;
            margin: 20px auto;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #000;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Superglobals | Sessions | Cookies</h1>

    <!-- exercice 1 -->
    <h2>Exercice 1</h2>
    <div class="my-text">
        <p><?php echo $_SERVER['REMOTE_ADDR'] ?></p>
        <br>
        <p><?php echo $_SERVER['HTTP_USER_AGENT'] ?></p>
        <br>
        <p><?php echo $_SERVER['SERVER_NAME'] ?></p>
    </div>

    <!-- exercice 2 -->
    <h2>Exercice 2</h2>
    <div class="my-text">
        <p><?php echo 'Your full name is ' . $_SESSION["firstName"] . ' ' . $_SESSION['lastName'] . ' and you are ' . $_SESSION['age'] . ' years old' ?></p>
        <br>
        <p>Check those info's on another page via '$_SESSION'</p>
        <a href="anotherPage.php"><button>Here</button></a>
    </div>

    <!-- exercice 3 / 4 / 5 -->
    <h2>Exercice 3 / 4 / 5</h2>
    <div class="my-text">
        <form action="againAnotherPage.php" method="post">
            <input type="text" name="login" placeholder="your login here" required>
            <input type="password" name="pwd" placeholder="your password here" required>
            <button type="submit">Log in</button>
        </form>
    </div>

</body>
</html>