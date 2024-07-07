<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PHP MVC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL ?>/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL ?>/mahasiswa">Mahasiswa</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<h1>About Me</h1>

<div class="card" style="width: 18rem;">
    <img src="<?= BASEURL ?>/img/profile.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Rizky Ardiansyah</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>