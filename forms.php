<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn PHP - Forms</title>
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
    <h1>Forms</h1>

    <!-- exercice 1 / 3 -->
    <h2>Exercice 1 / 3</h2>
    <div class="my-text">
        <form action="user.php" method="GET">
            <input type="text" name="lastName" placeholder="Your last name here" required>
            <input type="text" name="firstName" placeholder="Your first name here" required>
            <button type="submit">Send</button>
        </form>
    </div>

    <!-- exercice 2 / 4  -->
    <h2>Exercice 2 / 4</h2>
    <div class="my-text">
        <form action="user.php" method="POST">
            <input type="text" name="lastName" placeholder="Your last name here" required>
            <input type="text" name="firstName" placeholder="Your first name here" required>
            <button type="submit">Send</button>
        </form>
    </div>

    <!-- exercice 5 / 6 / 7 / 8 -->
    <h2>Exercice 5 / 6 / 7 / 8</h2>
    <div class="my-text">
        <?php
        if (isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['civility']) && !empty($_FILES['myFile']['name'])) {?>
            <h3><?php echo 'Hello ' . $_POST['civility'] . ' ' . $_POST['firstName'] . ' ' . $_POST['lastName'] ?></h3>
            <p><?php  echo 'File\'s name : ' . $_FILES['myFile']['name'] ?></p>
            <p><?php  echo 'File\'s extention : ' . $_FILES['myFile']['type'] ?></p>
            <a href="forms.php"><button>Show form</button></a>
        <?php } else {
        ?>
        <form action="forms.php" method="post" enctype="multipart/form-data">
            <input type="text" name="lastName" placeholder="Your last name here" required>
            <input type="text" name="firstName" placeholder="Your first name here" required>
            <select name="civility" size="1">
            <option>Mme
            <option>Mr
            </select>
            <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
            <input type="file" name="myFile" accept=".pdf" required>
            <button type="submit">Send</button>
        </form>
        <?php } ?>
    </div>

</body>
</html>