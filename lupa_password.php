<?php
    include 'config.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lupa Password</title>
    <link rel="stylesheet" type="text/css" href="css-login/style.css">
</head>
<body>
    <div class="padding-all">
        <div class="header">
            <h1>Raot-HUB Lupa Password</h1>
        </div>

        <div class="design-w3l">
            <div class="mail-form-agile">
                <form action="lupa.php" method="POST">
                    <input class="padding" type="text" name="email" placeholder="Masukan Email..." require/>
                    <input type="submit" name="next" value="Next">
                </form>
            </div>
        </div>
    </div>
</body>
</html>