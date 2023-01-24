<h3>
    <?php
    $paragrafo = $_POST["paragrafo"];
    $censura = $_POST["censurare"];
    echo $paragrafo;
    ?>

</h3>

<h3>
    <?php
    $lunghezzaPargrafo = "La lunghezza è " . strlen($paragrafo);
    echo $lunghezzaPargrafo;
    ?>
</h3>

<h3>
    <?php
    $censurata = str_replace($censura, '***', $paragrafo);
    echo $censurata;
    ?>
</h3>

<h3>
    <?php
    $lunghezzaCensura = "La lunghezza è " . strlen($censurata);
    echo $lunghezzaCensura;
    ?>
</h3>