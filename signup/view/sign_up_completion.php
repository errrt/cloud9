<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>dugout</title>
    </head>
    <body>
        <p>Welcome <?php echo htmlspecialchars($_SESSION['signup']['username'], ENT_QUOTES,'UTF-8'); ?></p>
        <p><a href="/dogout_top.php">sign_in</a></p>
    </body>
</html>