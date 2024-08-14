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
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRol-Z3xirU8ge6fT763pn6T-b-Au5jQtJNcw&s" class="d-block w-100" alt="Slide 1">
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
    <h3 class="text-center m-5">Categorias</h3>
    <section class="d-flex justify-content-center">
        <div class="card mb-4">
            <img src="https://i.pinimg.com/564x/3c/32/dd/3c32dd0c7a92841b887f8cf4511c1f79.jpg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
            <div class="card-body text-center">
                <h5 class="card-title">Shonen</h5>
                <p class="card-text"> Los Animes shonen suelen enfocarse en la aventura, la acción, y el crecimiento personal de los <br> personajes </p>
                <a href="hombre" class="btn btn-primary">Ver Mas..</a>
            </div>
        </div>
        <div class="card mb-4">
            <img src="https://i.pinimg.com/236x/4a/16/a2/4a16a2ac4c5fe7396e7d88fdc3454387.jpg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
            <div class="card-body text-center">
                <h5 class="card-title">Seinen</h5>
                <p class="card-text">Seinen es un género dirigido a un público adulto masculino, Los animes Seinen tienden a tener  tramas más <br> complejas y maduras que los shōnen</p>
                <a href="mujer" class="btn btn-primary">Ver Mas..</a>
            </div>
        </div>
        <div class="card mb-4">
            <img src="https://i.pinimg.com/564x/19/9d/b2/199db23cb91d1ead52ae90a626457ac3.jpg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
            <div class="card-body text-center">
                <h5 class="card-title">Romance</h5>
                <p class="card-text">El género de romance se centra en el desarrollo de los personajes, Puede variar desde historias ligeras y cómicas <br> hasta dramas intensos y emocionales</p>
                <a href="niños" class="btn btn-primary">Ver Mas..</a>
            </div>
        </div>
        <div class="card mb-4">
            <img src="https://i.pinimg.com/736x/34/b8/d9/34b8d93cffbd704664517929bf249553.jpg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
            <div class="card-body text-center">
                <h5 class="card-title">Isekai</h5>
                <p class="card-text"> Es un subgénero popular de fantasía donde el protagonista es transportado, renacido, o atrapado en un <br> mundo paralelo</p>
                <a href="calzado" class="btn btn-primary">Ver Mas..</a>
            </div>
        </div>
    </section>
    <br><br>
    </div>
    <br><br><br>
</body>
@include('include.footer')
</html>
