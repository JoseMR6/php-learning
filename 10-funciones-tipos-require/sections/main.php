<main>
    <section>
        <img
            src="<?= $data["poster_url"]; ?>" width="200" alt="Poster de <?= $data["title"]; ?>"
            style="border-radius: 16px" />

        <hgroup>
            <h3><?= $data["title"]; ?> - <?= $untilMesage; ?></h3>
            <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
            <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
        </hgroup>
    </section>


</main>