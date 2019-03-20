<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Another Page</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'sans serif'
    }
    h3, p {
        text-align: center;
        margin: 40px;
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
    <h3>You are on another page!</h3>

    <p><?php echo 'Your full name is ' . $_SESSION["firstName"] . ' ' . $_SESSION['lastName'] . ' and you are ' . $_SESSION['age'] . ' years old' ?></p>
    <br>

    <a href="superSessCook.php"><button>Back</button></a>
</body>
</html>