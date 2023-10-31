<style>
    .carde:hover {
        transform: scale(1.05);
        transition: transform 0.2s;
        background-image: url(image/images\ \(12\).jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
    .desc{
       color: rgb(194, 11, 54);
    }

</style>
<?php include 'header.php' ?>
<div class="row mt-5 ms-5   ">
        <div class="col-6 mt-2">
            <h3 class=" mt-5 fw-bold">Bienvenue sur le site <span class="text-danger fw-bold fs-1">Sarr Apple</span> </h3>
            <p class=" mt-3">Nous vous offrons la meilleure sélection d'iPhones et d'accessoires de qualité. Découvrez nos produits exceptionnels et profitez d'une expérience de shopping en ligne inégalée.</p>
            <a href="#" class="btn btn-danger">Découvrir nos produits</a>
        </div>
        <div class="col-6">
            <div id="carouselExample" class="carousel slide m-5 ms-5">
                <div class="carousel-inner ">
                  <div class="carousel-item active">
                    <img src="image/slide3.png" class="d-block w-75" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="image/slide4.png" class="d-block w-75" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="image/slide3.png" class="d-block w-75" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
    <div class="container mt-5" id="service">
        <h1 class="text-center text-danger fw-bold">Produits Apple</h1>
        <p class=" fw-bold">Découvrez notre sélection de produits Apple de haute qualité.</p>
        
        <div class="row">
            <div class="col-md-4">
                <div class="carde shadow-lg">
                    <i class="fas fa-mobile-alt fa-5x card-img-top text-center text-danger mt-3"></i>
                    <div class="card-body">
                        <h5 class="card-title desc">iPhone</h5>
                        <p class="card-text desc">Découvrez les derniers modèles d'iPhone.</p>
                        <a href="produit.php" class="btn btn-danger">Voir les iPhones</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="carde shadow-lg">
                    <i class="fas fa-laptop fa-5x card-img-top text-center text-danger mt-3"></i>
                    <div class="card-body">
                        <h5 class="card-title desc">MacBook</h5>
                        <p class="card-text desc">Explorez notre gamme de MacBook.</p>
                        <a href="#" class="btn btn-danger">Voir les MacBook</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="carde shadow-lg">
                    <i class="fas fa-tablet fa-5x card-img-top text-center text-danger mt-3"></i>
                    <div class="card-body">
                        <h5 class="card-title  desc">iPad</h5>
                        <p class="card-text desc">Découvrez nos derniers modèles d'iPad.</p>
                        <a href="#" class="btn btn-danger">Voir les iPad</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>