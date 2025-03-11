<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <h1>Mis noticias</h1>
    </section>

    <?php foreach ($noticias as $noticia) : ?>
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title"><?php echo $noticia["titulo"] ?></h4>
                <p class="card-text"><?php echo $noticia["contenido"] ?></p>
            </div>
        </div>
    <?php endforeach ?>
</body>

</html>