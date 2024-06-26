<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-Vindo ao Pitruca</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logopitru.png">
</head>
<body class="body-home">
        <div class="black-fill"><br /> <br />
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-body-tertiary" id="homeNav">
                    <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="images/logotipo_pitruquinha-removebg.png" width="40 ">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contacto</a>
                        </li>
                        </ul>
                        <ul class="navbar-nav me-right mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        </ul>
                    </div>
                    </div>
                </nav>
                <section class="welcome-text d-flex justify-content-center align-items-center flex-column">
                    <img src="images/logopitru.png">
                    <h4>Bem Vindo ao Pitruca</h4>
                    <p>Transformando potenciais em realizações, juntos no Colégio Pitruca.</p>
                </section>

                <section id="about" 
                class="d-flex justify-content-center align-items-center flex-column">
                    <div class="card mb-3 card-1" style="max-width: 540px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/logopitru.png" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                <h5 class="card-title">Sobre Nós</h5>
                                <p class="card-text">No Colégio Pitruca, estamos comprometidos em fornecer uma educação excepcional e um ambiente de aprendizado inclusivo, onde cada aluno é valorizado e capacitado a alcançar seu pleno potencial. Desde a nossa fundação, temos buscado inspirar, desafiar e capacitar jovens mentes, preparando-as para os desafios e oportunidades do mundo em constante mudança.</p>
                                <p class="card-text"><small class="text-body-secondary">Colégio Pitruca</small></p>
                                </div>
                            </div>
                            </div>
                      </div>
                </section>
                <section id="contact" 
                class="d-flex justify-content-center align-items-center flex-column">
                <form>
                    <h3>Contacte-nos</h3>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Nome</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Nome</label>
                      <textarea class="form-control" rows="4"></textarea> 
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </form>
                </section>
                <div class="text-center text-light">
                    Direitos Autorais &copy; 2024 Grupo Pitruca. Todos Direitos Reservados.
                </div>
               


            </div>  
    </div>
    

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>