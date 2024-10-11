<main>
    <section>
        <img
            src="<?= $poster_url; ?>" width="200" alt="Poster de <?= $title; ?>"
            style="border-radius: 16px" />

        <hgroup>
            <h3><?= $title; ?> - <?= $untilMesage; ?></h3>
            <p>Fecha de estreno: <?= $release_date; ?></p>
            <p>La siguiente es: <?= $following_production; ?></p>
        </hgroup>
    </section>


</main>