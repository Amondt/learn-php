<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User redirection form</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'sans serif'
    }
    h3 {
        text-align: center;
        margin: 40px;
    }
    button {
        padding: 10px;
        display: block;
        margin: auto;
        width: 15%;
        font-size: 1.4em;
    }
    a {
        text-decoration: none;
    }
    </style>
</head>
<body>
    <h3><?php echo (isset($_GET['lastName']) && isset($_GET['firstName'])) ? ('Hello ' . $_GET['lastName'] . ' ' . $_GET['firstName']) : '' ?></h3>

    <h3><?php echo (isset($_POST['lastName']) && isset($_POST['firstName'])) ? ('Hello ' . $_POST['lastName'] . ' ' . $_POST['firstName']) : '' ?></h3>

    <a href="forms.php"><button>Back</button></a>
</body>
</html>