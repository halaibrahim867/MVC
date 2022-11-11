<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>about</h1>

    <?php if(! empty($articles)){ ?>
        <?php foreach($articles as $article ) :?>
            <h1><?= $article['title'] ?></h1>
            <p><?=$article['description'] ?></p>
        <?php endforeach; ?>
</body>
</html>