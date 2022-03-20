<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="Fopi tankeu">
    <title>easy digital</title>
 <link rel="stylesheet" href="bootstrap-5.1.1-dist\css\bootstrap.min.css">
</head>
<body>
<header class="bg-dark p-2">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="img\02.png" alt="logo" sizes="" srcset=""  width="70" height="70">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Accueil</a></li>
          <li><a href="#" class="nav-link px-2 text-white">A propos</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Réalisations</a></li>
          <li><a href="page\blog.php" class="nav-link px-2 text-white">Blog</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <a href="admin/login.php" target="_blank" rel="noopener noreferrer"><button type="button" class="btn btn-outline-warning me-2">Login</button></a>
        </div>
      </div>
    </div>
  </header>
  <main class="px- text-center bg-dark mt-4 text-light">
    <h1 class="p-2">EASY DIGITAL</h1>
    <h6>Le web c'est nous.</h6>
    <p class="lead"></p>
    <p class="lead">
      <a href="#" class="btn btn-lg  fw-bold border-white bg-warning m-4 ">Learn more</a>
    </p>
  </main>
  <section>
  <div class="row featurette bg-secondary w-50 m-4 p-4">
      <div class="col-md-7 ">
        <h2 class="featurette-heading"><?php echo strip_tags($_POST['titre']);?><span class="text-muted"> facebook </span></h2>
        <p class="lead"><?php echo $_POST['commentaire'];?></p>
      </div>
      <div class="col">
      <img src="img\04.jpg" alt="logo" sizes="" srcset=""  width="500" height="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto ">
      </div>
    </div>
  </section>
  <footer class="row  py-4 my-4 border-top bg-warning">

    <div class="col ">

    </div>
    <div class="col">
      <h5>Marketing digital</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Création ppage réseaux sociaux</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sponsoring</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Création de contenu texte et image</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Briefing et conseils médias sociaux</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">stratégie d'acquisition des abonnés</a></li>
      </ul>
    </div>
    <div class="col">
      <h5>Web digital</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Site nternet vtrine</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Site e-commerce</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Référencement</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Hébergement web</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Mails marketing</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Développement web</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Création plugin wordpress</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Création plugins prestashop</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Créationd'app web</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Developpement spécifique</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Développement mobile</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Développement android</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">developpement ios</a></li>
      </ul>
    </div>
    <div class="col">
      <h5>Graphisme</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Création logo</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Création flyers</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Création brochures</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Création dépliants</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">création plan architectural</a></li>
      </ul>
    </div>
    <ul class="nav justify-content-center border-bottom pb-3 mb-4 mt-4 bg-dark">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Accueil</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-light">A propos</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Réalisations</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Blog</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Contact</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2022 Easy digital, Inc</p>
  </footer>
</body>
</html>