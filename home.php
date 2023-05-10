<?php 

session_start();

if (!isset($_SESSION['auth'])) {
    header('location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <h1>Bom dia, <?= $_SESSION['name'] ?>, pau no seu cu</h1>
    <div>
        <a href="logout.php">logout</a>
    </div>
    <div>
        <a href="delete.php">delete your account</a>
    </div>
    <div>
        <a href="update_page.php">Edit your account</a>
    </div>
    <div>
        <form action="api.php" method="POST">
            <input type="number" name="cep" placeholder="type your cep">
            <button>Consult it</button>
        </form>
        <?php if (isset($_SESSION['address'])): ?>
            <?php foreach ($_SESSION['address'] as $index => $element): ?>
                <div>
                    <?= $index ?> <span>: <?= $element ?></span>
                </div>
            <?php endforeach ?>
        <?php endif ?>
    </div>
</body>
</html>