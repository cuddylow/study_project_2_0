<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="utf-8">
    <title>Сколько процентов инфа?</title>
</head>
<body class="background">
    <div class="button_holder">
    <form action="/" method="get">
        <input type="submit" name="randomPercentRequire" value="1">
    </form>
    </div>
    <?php echo $isRandomPercentRequired ? ('Инфа ' . getRandomPercent() . '%!') : '' ?>
</body>
</html>