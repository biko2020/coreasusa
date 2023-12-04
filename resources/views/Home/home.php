<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/coreasusa/public/css/style.css">

</head>

<body>

    <h1>
        <?= isset($lang['home_Title1']) ? $lang['home_Title1'] : 'Default Title' ?>
    </h1>
    <p>
        <?= isset($lang['home_Section1']) ? $lang['home_Section1'] : 'Default Content' ?>
    </p>

    <script src="/coreasusa/public/js/script.js"></script>
</body>

</html>