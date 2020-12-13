<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <title>Elysium Trading Card Game</title>
    </head>
    <body>
        <h1 class="Title">Elysium TCG</h1>
        <div class="Token">
            <h2>Enter your token</h2>
            <form name="form" action="" method="get">
                <input type="text" name="Token_input" value="Token here :">
            </form>
            <?php include 'php/verif_card.php' ?>
        </div>
    </body>
</html>