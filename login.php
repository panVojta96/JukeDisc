<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JukeDisc</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body>

    <?php
    include("includes/header.php")
    ?>
    <div class="login">
        <form method="post" class="form-example">
            <div class="form-example">
                <label for="email">Zadejte email: </label>
                <input class="formin" type="email" name="email" id="email" required />
            </div>
            <div class="form-example">
                <label for="password">Zadajte heslo: </label>
                <input class="formin" type="password" name="password" id="password" required />
            </div>
            <div class="form-example">
                <input class="submit" type="submit" value="Přihlásit se" />
            </div>
        </form>
    </div>
    <?php
    include("includes/footer.php")
    ?>
</body>

</html>