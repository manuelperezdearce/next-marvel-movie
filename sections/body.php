<body>
    <main>
        <section>
            <h1 class="title"><?= $data["title"]; ?></h1>
            <h2 class="title"><?= $message ?></h2>
            <picture>
                <img class="poster_url" src="<?= $data["poster_url"]; ?>" alt="">
            </picture>
            <p><?= $data["overview"]; ?></p>
            <p><?= $data["release_date"]; ?></p>
            <p><?= $data["type"]; ?></p>
        </section>
    </main>
</body>