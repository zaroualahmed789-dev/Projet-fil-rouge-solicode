<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReLink</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h2>Re<span>.</span>link</h2>
        <nav class="navbar">
            <a href="#discover">discorde</a>
            <a href="#lost items">lost items</a>
            <a href="#found items">found items</a>
            <a href="#our mission">our mission</a>
        </nav>
        <a class="lien1" href="#log in">log in </a>
        <a class="lien" href="#report in items">+report in items</a>
    </header>

    <main>

        <div class="hero-contunar">
            <div class="contenu">
                <p class="p1"><span>.</span> A COMMINITY THAT CARES</p>
                <h1>Every Lost Thing<br> deserves a <span>way<br> back.</span> </h1>
                <p>
                    Lost something important? Or found something that belongs <br>to someone else?
                    Let's bring people and their belongings together.
                </p>
                <div class="search-wrapper">
                    <input type="text" placeholder="Rechercher un objet : téléphone, sac, clés...">
                    <button class="search-btn">Rechercher <span>➔</span></button>
                </div>
            </div>
        </div>

    </main>
    <div class="contenu5">
        <div class="p2">
            <p> <span>.</span>Latest Posted Items</p>
        </div>
        <div class="p3">
            <p>View All ➜</p>
        </div>
    </div>

    <div class="objet">

    <?php foreach ($articles as $article): ?>

        <div class="<?= htmlspecialchars($article['classe']) ?>">

            <img
                src="<?= htmlspecialchars($article['image']) ?>"
                alt="<?= htmlspecialchars($article['titre']) ?>"
            >

            <p>
                <?= htmlspecialchars($article['icone']) ?>
                <?= htmlspecialchars($article['titre']) ?>
            </p>

            <span>📍 <?= htmlspecialchars($article['ville']) ?></span>
            <br>
            <span>📅 <?= htmlspecialchars($article['date']) ?></span>

        </div>

    <?php endforeach; ?>

</div>

    <div class="contenu6">
        <div class="par3">
            <p>How It Works?</p>
            <h3>3 <span>Simple</span> Steps<br> to Find or Return<br> an Item</h3>
        </div>
        <div>
            <h4>Post an Item</h4>
            <p>Describe your lost <br> item or an item you've<br> found, including a photo<br> and relevant details.</p>
        </div>
        <div>
            <h4>Search for an Item</h4>
            <p>Browse available listings<br> or use the search bar to<br> find what you're looking for.</p>
        </div>
        <div>
            <h4>Contact the Person</h4>
            <p>Connect through the platform <br>and arrange a safe handover<br> of the item.</p>
        </div>
    </div>



    <section class="stats">

        <div class="item">
            <span class="icon">🛡️</span>
            <div>
                <h3>100%</h3>
                <p>Sécurisé</p>
                <small>Vos données sont protégées</small>
            </div>
        </div>

        <div class="item">
            <span class="icon">👥</span>
            <div>
                <h3>+5 000</h3>
                <p>Utilisateurs</p>
                <small>Une grande communauté</small>
            </div>
        </div>

        <div class="item">
            <span class="icon">🍃</span>
            <div>
                <h3>+2 000</h3>
                <p>Objets retrouvés</p>
                <small>Grâce à votre solidarité</small>
            </div>
        </div>

        <div class="message">
            Ensemble,<br>on retrouve plus !
        </div>

    </section>

    <div class="contenu8">
        <div>
            <span>SOLIDARITY STARTS HERE</span>
            <h1>Have You Found Something?</h1>
            <p>Your listing could bring a smile to someone's face.</p>
            <button>Share a Found Item ➜</button>
        </div>
    </div>

    <footer>
        <div class="footer">
            <div class="footer-box">
                <h3>RE.Link</h3>
                <p>- An item lost today,<br> found tomorrow.</p>
            </div>
            <div class="footer-box">
                <h3>Liens rapides</h3>
                <p>.Accueil</p>
                <p>.lost items</p>
                <p>.found items</p>
                <p>.our mission</p>
            </div>
            <div class="footer-box">
                <h3>Me contacter</h3>
                <p>.ahmedzaroual@email.com</p>
                <p>.Maroc</p>
                <p>.+212 0723715915</p>

            </div>
            <div class="footer-box">
                <h3>Suivez-moi</h3>
                <p>.GitHub</p>
                <p>.LinkedIn</p>
                <p>.Instagram</p>
            </div>
        </div>
    </footer>
</body>

</html>