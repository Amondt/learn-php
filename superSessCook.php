<?php

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
        <form action="user.php" method="GET">
            <input type="text" name="lastName" placeholder="Your last name here" required>
            <input type="text" name="firstName" placeholder="Your first name here" required>
            <button type="submit">Send</button>
        </form>
    </div>


</body>
</html>