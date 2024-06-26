<?php
session_start();
if (isset($_SESSION['admin_id']) && 
    isset($_SESSION['role'])) {

        if($_SESSION['role'] == 'Admin'){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Ínicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../images/logopitru.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

            <?php 
            include "inc/navbar.php";
            ?>
            <div class="container mt-5">
                <div class="container text-center">
                    <div class="row row-cols-5">
                        <a href="teacher.php" 
                        class="col btn btn-dark m-2 py-3">
                        <i class="fa fa-users fs-1" aria-hidden="true"></i><br>
                        Professores
                        </a>
                        <a href="" class="col btn btn-dark m-2 py-3">
                        <i class="fa fa-graduation-cap fs-1" aria-hidden="true"></i><br>
                        Estudantes
                        </a>
                        <a href="" class="col btn btn-dark m-2 py-3">
                        <i class="fa fa-pencil-square fs-1" aria-hidden="true"></i><br>
                        Registrar Office
                        </a>
                        <a href="" class="col btn btn-dark m-2 py-3">
                        <i class="fa fa-cubes fs-1" aria-hidden="true"></i><br>
                        Turmas
                        </a>
                        <a href="" class="col btn btn-dark m-2 py-3">
                        <i class="fa fa-columns fs-1" aria-hidden="true"></i><br>
                        Secção
                        </a>
                        <a href="" class="col btn btn-dark m-2 py-3">
                        <i class="fa fa-calendar fs-1" aria-hidden="true"></i><br>
                        Agendamento
                        </a>
                        <a href="" class="col btn btn-dark m-2 py-3">
                        <i class="fa fa-book fs-1" aria-hidden="true"></i><br>
                        Cursos
                        </a>
                        <a href="" class="col btn btn-dark m-2 py-3">
                        <i class="fa fa-envelope fs-1" aria-hidden="true"></i><br>
                        Mensagem
                        </a>
                        <a href="" class="col btn btn-primary m-2 py-3 col-5">
                        <i class="fa fa-cogs fs-1" aria-hidden="true"></i><br>
                        Definições
                        </a>
                        <a href="../logout.php" class="col btn btn-warning m-2 py-3 col-5">
                        <i class="fa fa-sign-out fs-1" aria-hidden="true"></i><br>
                        Sair
                        </a>
                        
                    </div>
                </div>
            </div>
     


    
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script>
    $(document).ready(function(){
        $("#navLinks li:nth-child(1) a").addClass('active');
    });
   </script>
</body>
</html>
<?php 

}else {
header("Location: ../req/login.php");
exit;
}
}else {
header("Location: ../req/login.php");
exit;
}
 ?>