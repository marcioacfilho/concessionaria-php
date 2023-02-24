<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <a class="navbar-brand" href="#"><img src="img/logo1.png" heigth="70px" width="90px"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">PRODUTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CADASTRO</a>
                    </li>
                    <li class="nav-item dropdown">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">CONTATOS</a>
                    </li>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/car.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/camaro.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/porshe.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/ferrari.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/lambo.jpg" class="d-block w-100" alt="...">
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
    <main class="container mt-5">
        <div class="row">
            <div class="col"></div>
            <div class="card" style="width: 18rem;">
                <img src="img/porshe.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Porshe</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            <div class="col"></div>
            <div class="card" style="width: 18rem;">
                <img src="img/camaro.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Camaro SS</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            <div class="col"></div>
            <div class="card" style="width: 18rem;">
                <img src="img/car.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Audi</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            <div class="col"></div>
            <div class="card" style="width: 18rem;">
                <img src="img/ferrari.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ferrari</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>

        </div>

    </main>
    <main class="container mt-5">
        <div class="row">
            <div class="col"></div>
            <div class="card" style="width: 18rem;">
                <img src="img/mustang1.jpg" class="card-img-top" alt="...">
                <div class="card-bod0y">
                    <h5 class="card-title">Mustang GT</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            <div class="col"></div>
            <div class="card" style="width: 18rem;">
                <img src="img/bmw.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">BMW</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            <div class="col"></div>
            <div class="card" style="width: 18rem;">
                <img src="img/camaro2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Camaro</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            <div class="col"></div>
            <div class="card" style="width: 18rem;">
                <img src="img/mercedes.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mercedes</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>

            <form>
                <div class="mb-3">
                    <h1 class="text-center"><br>Formulário<br></h1>
                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">E-mail</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Cidade</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                    <br>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                
                
            </form>
            
            <div class="row"> <div class="col"> 
                <h1 class="text-center">Localização</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14716.95640252894!2d-47.32173480215869!3d-22.756506322827047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c899effec3d255%3A0x6eb0cec2f996476d!2sGerm%C3%A2nica%20Volkswagen!5e0!3m2!1spt-BR!2sbr!4v1677200799983!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div></div>
        </div>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>