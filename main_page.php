<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="utf-8">
    <title>Сколько процентов инфа?</title>
    <link rel="stylesheet" href="default_style.css">
</head>
<body class="background">
    <div class="button_holder">
    <form action="/" method="get">
    <input type="submit" name="randomPercentRequire" value="1">
    </form>
    </div>
    <?php if ($isRandomPercentRequire === TRUE) {
        echo $result;
    }
    ?>
</body>
</html>