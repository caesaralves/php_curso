<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<title>projecto 1</title>
<?php require_once "helpers/Session.php";?>
<?php Session::checkUser(); require_once "ui/menus.php";?>

<body>
<div class="container">

    <?php require_once "functions/pageLoad.php"; ?>


    <footer class="footer">
        <div class="container">
            <p class="text-muted">Todos os direitos reservados <?php echo date("Y") ?></p>
        </div>
    </footer>
</div>
</body>

</html>
