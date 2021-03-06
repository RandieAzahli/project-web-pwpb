<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style/pricing.css">
</head>

<body>
    <div class="container-fluid p-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/project-web-pwpb/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">History</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-5">
                <div class="p-3 mt-3">
                    <h1 class="display-4 fw-normal">Get History with NESCAFÉ</h1>
                    <p class="text-style">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi, vel
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, odit veritatis
                        <span id="dots">... </span><span id="more">Officia similique fugit quae nihil recusandae eos
                            aspernatur dolor
                            debitis quibusdam fuga.
                            Veniam, ratione quam tempora vitae recusandae, quia asperiores sint aliquid maxime delectus
                            nobis, debitis beatae totam nam consequatur necessitatibus voluptatum magnam accusamus esse
                            error? Rem, tempore veritatis!</span>
                    </p>
                    <button class="btn btn-primary mt-3 p-2" id="read" onclick="readMoreLess()">Read more</button>
                </div>
            </div>
            <div class="col-6">
                <img src="assets-img/img/43122.jpg" alt="" width="700" height="450">
            </div>
        </div>

        <div class="timeline">
            <ul>
                <li>
                    <div class="content">
                        <h3>Lorem, ipsum dolor. ?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi accusantium voluptatem
                            dolore distinctio perspiciatis vitae obcaecati commodi animi recusandae a.</p>
                    </div>
                    <div class="time">
                        <h5>January 2018</h5>
                    </div>
                </li>
                <li>
                    <div class="content">
                        <h3>Lorem, ipsum dolor. ?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi accusantium voluptatem
                            dolore distinctio perspiciatis vitae obcaecati commodi animi recusandae a.</p>
                    </div>
                    <div class="time">
                        <h5>January 2019</h5>
                    </div>
                </li>
                <li>
                    <div class="content">
                        <h3>Lorem, ipsum dolor. ?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi accusantium voluptatem
                            dolore distinctio perspiciatis vitae obcaecati commodi animi recusandae a.</p>
                    </div>
                    <div class="time">
                        <h5>January 2020</h5>
                    </div>
                </li>
                <li>
                    <div class="content">
                        <h3>Lorem, ipsum dolor. ?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi accusantium voluptatem
                            dolore distinctio perspiciatis vitae obcaecati commodi animi recusandae a.</p>
                    </div>
                    <div class="time">
                        <h5>January 2021</h5>
                    </div>
                </li>
                <li>
                    <div class="content">
                        <h3>Lorem, ipsum dolor. ?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi accusantium voluptatem
                            dolore distinctio perspiciatis vitae obcaecati commodi animi recusandae a.</p>
                    </div>
                    <div class="time">
                        <h5>January 2022</h5>
                    </div>
                </li>
                <li>
                    <div class="content">
                        <h3>Lorem, ipsum dolor. ?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi accusantium voluptatem
                            dolore distinctio perspiciatis vitae obcaecati commodi animi recusandae a.</p>
                    </div>
                    <div class="time">
                        <h5>Coming Soon</h5>
                    </div>
                </li>
                <div style="clear: both;"></div>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="index.js"></script>
</body>

</html>