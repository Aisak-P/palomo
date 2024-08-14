<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCLL3ay6kP05VywsiR-KYJa4wfMF8eIYhIZw&s">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>The World Of Anime</title>
</head>
<body>
    @include('include.nav')
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5RE9aMw4hACZHKlmPxlGolqaLijTuwgklaA&s" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="https://i.redd.it/jpc798apewk41.png" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <br><br>
    <section class="d-flex justify-content-center">
        <div class="card mb-4" style="width: 12rem; height: 23rem; margin-right: 30px;">
            <img src="https://i.pinimg.com/564x/a7/6c/19/a76c192b499ebdbe4d1b997833751566.jpg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
            <div class="card-body text-center">
                <h5 class="card-title">Komi <br> San</h5>
                <a href="hombre" class="btn btn-primary">Ver Mas</a>
            </div>
        </div>
        <div class="card mb-4" style="width: 12rem; height: 23rem; margin-right: 30px;">
            <img src="https://i.pinimg.com/564x/75/6f/6b/756f6b5bcc07d38008bd08e487f4d18a.jpg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
            <div class="card-body text-center">
                <h5 class="card-title">Solo  <br> Leveling</h5>
                <a href="hombre" class="btn btn-primary">Ver Mas</a>
            </div>
        </div>
        <div class="card mb-4" style="width: 12rem; height: 23rem; margin-right: 30px;">
            <img src="https://i.pinimg.com/564x/11/c8/3f/11c83fa12622e5aea3df62f66023c709.jpg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
            <div class="card-body text-center">
                <h5 class="card-title">Sengoku  <br> Youko</h5>
                <a href="hombre" class="btn btn-primary">Ver Mas</a>
            </div>
        </div>
        <div class="card mb-4" style="width: 12rem; height: 23rem; margin-right: 30px;">
            <img src="https://i.pinimg.com/564x/19/70/b9/1970b98eae1a8cf097df2f1bc0ed74e8.jpg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
            <div class="card-body text-center">
                <h5 class="card-title">Kimesu no <br> yaiba</h5>
                <a href="hombre" class="btn btn-primary">Ver Mas</a>
            </div>
        </div>
        <div class="card mb-4" style="width: 12rem; height: 23rem; margin-right: 30px;">
            <img src="https://i.pinimg.com/564x/16/f6/b1/16f6b1d1e7d1968cae404de2ca645dda.jpg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
            <div class="card-body text-center">
                <h5 class="card-title">Chiyu Maho no Machigatta</h5>
                <a href="hombre" class="btn btn-primary">Ver Mas</a>
            </div>
        </div>
        <div class="card mb-4" style="width: 12rem; height: 23rem; margin-right: 30px;">
            <img src="https://i.pinimg.com/736x/6f/fa/aa/6ffaaa9df86d5df1a3233712a023410f.jpg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
            <div class="card-body text-center">
                <h5 class="card-title">My Deer Friend NokotaN</h5>
                <a href="hombre" class="btn btn-primary">Ver Mas</a>
            </div>
        </div>
    </section>
    <br><br>
</body>
@include('include.footer')
</html>
