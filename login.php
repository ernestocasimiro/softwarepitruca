<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Colégio Pitruca</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logopitru.png">
</head>
<body class="body-login">
        <div class="black-fill"><br /> <br />
            <div class="d-flex justify-content-center align-items-center flex-column">
               
<form class="login" method="post" action="req/login.php">
    <div class="text-center">
        <img src="images/logotipo_pitruquinha-removebg.png" width="100">
    </div>
    <h3>LOGIN</h3>
    <?php if(isset($_GET['error'])) { ?>
    <div class="alert alert-danger" role="alert">
        <?=$_GET['error'] ?>
    </div>
    <?php } ?>
    <div class="mb-3">
        <label class="form-label">Nome de Usuário</label>
        <input type="text" class="form-control" name="uname">
    </div>

    <div class="mb-3">
        <label class="form-label">Palavra-Passe</label>
        <input type="password" class="form-control" name="pass">
    </div>

    <div class="mb-3">
        <label class="form-label">Logar Como</label>
        <select class="form-control" name="role">
            <option value="0">Escolha uma opção</option>
            <option value="1">Admin</option>
            <option value="3">Estudante</option>
            <option value="2">Professor</option>
        </select>
    </div>


    <button type="submit" class="btn btn-primary">Login</button>
    <a href="index.php" class="text-decoration-none">Home</a>
</form>
        <br /><br />
                <div class="text-center text-light">
                    Direitos Autorais &copy; 2024 Grupo Pitruca. Todos Direitos Reservados. 
                </div>
               


            </div>  
    </div>
    

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>