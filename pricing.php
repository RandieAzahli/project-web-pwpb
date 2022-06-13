<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/project-web-pwpb/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="mt-4 p-5 bg-light rounded">
            <h1>Get Pricing with NESCAFÉ</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis itaque, accusantium fugit dignissimos
                doloribus officia aspernatur cupiditate iste beatae quidem nostrum. Fuga, provident quos nihil quo
                eligendi eaque omnis officia.</p>
        </div>
    </div>
    <div class="row justify-content-around mt-5">
        <div class="col-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" style="width: 700px;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="assets-img/img/wp4144075-nestle-wallpapers.jpg" class="d-block w-100" alt="..."
                            width="500" height="400">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="assets-img/img/wp8578259-nescafe-wallpapers.jpg" class="d-block w-100" alt="..."
                            width="500" height="400">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="assets-img/img/wp8578254-nescafe-wallpapers.jpg" class="d-block w-100" alt="..."
                            width="500" height="400">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-5"></div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</body>

</html>