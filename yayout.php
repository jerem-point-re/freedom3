<!-- That one page that will rule over all the other pages -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" defer>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>
    <!-- Ionic Icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet" defer>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/stayi<?= $title ?>.css">
    <title>Freedom 3 | <?= $title ?></title>
</head>
<body>

<!-- 🙃 -->
    <div class="hideure">
        <div class="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?p=post">Post</a></li>
                <li><a href="index.php?p=login">Login</a></li>
            </ul>
        </div>
    </div>

    <!-- 🤸‍♂️ -->
    <div class="main">
        <?= $content ?>
    </div>

    <!-- 🧦 -->
    <div class="footer">
        <p>&copy;2023 | Freedom 3</p>
    </div>

</body>
</html>