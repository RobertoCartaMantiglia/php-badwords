<h2>
    <?php
    $paragrafo = $_POST["paragrafo"];
    $censura = $_POST["censurare"];

    echo $paragrafo;

    ?>

</h2>
<h3>
    <?php

    $lunghezzaPargrafo = "La lunghezza è " . strlen($paragrafo);

    echo $lunghezzaPargrafo;
    ?>
</h3>


<h3>
    <?php
    $paragrafo = $_POST["paragrafo"];
    $censura = $_POST["censurare"];

    str_replace($censura, '***', $paragrafo);
    echo $paragrafo;
    echo $lunghezzaPargrafo;

    ?>
</h3>