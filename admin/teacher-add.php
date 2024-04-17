<?php
session_start();
if (isset($_SESSION['admin_id']) && 
    isset($_SESSION['role'])) {

        if($_SESSION['role'] == 'Admin'){
            
            include "../req/DB_connection.php";
            include "data/disciplina.php";
            include "data/notas.php";
            $subjects = getAllSubjects($conn);
            $notas = getAllGrades($conn);
            
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Adicionar Professor</title>
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
                <a href="teacher.php" 
                   class="btn btn-dark">Voltar</a>

    <form method="post" 
          class="shadow p-3 mt-5 form-w"
          action="req/teacher-add.php">

    <h3>Adicionar Novo Professor</h3><hr>

    <div class="mb-3">
    <label class="form-label">Primeiro nome</label>
    <input type="text" 
           class="form-control" 
           name="fname">
    </div>
    <div class="mb-3">
    <label class="form-label">Sobrenome</label>
    <input type="text" 
           class="form-control" 
           name="fname">
    </div>
    <div class="mb-3">
    <label class="form-label">Nome de usuário</label>
    <input type="text" 
           class="form-control" 
           name="fname">
    </div>
    <div class="mb-3">
    <label class="form-label">Palavra-Passe</label>
    <div class="inout-group mb-3">
        <input type="text" 
               class="form-control" 
               name="fname"
               id="passInput">
               <button class="btn btn-secondary" id="gBtn">Aleatório</button>
    </div>
    </div>
    <div class="mb-3">
    <label class="form-label">Disciplina</label>
    <div class="row row-cols-5">
        <?php foreach ($subjects as $subject): ?>
        <div class="col">
             <input type="checkbox"  
                   name="subjects[]"
                   value="<?=$subject['disciplina_id']?>">
                   <?=$subject['disciplina']?>
        </div>
        <?php endforeach ?>
           
    </div>
    </div>
    
    <div class="mb-3">
    <label class="form-label">Nota</label>
    <div class="row row-cols-5">
        <?php foreach ($notas as $nota): ?>
        <div class="col">
            <input type="checkbox"  
                   name="notas[]"
                   value="<?=$nota['nota_id']?>">
                   <?=$nota['nota_id']?>-<?=$nota['nota']?>
        </div>
        <?php endforeach ?>
           
    </div>
    </div>

    


    <button type="submit" class="btn btn-primary">Add</button>
    </form>
                
            
    </div>
        
     


    
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
   <script>
    $(document).ready(function(){
        $("#navLinks li:nth-child(2) a").addClass('active');
    });


    function makePass(length){
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVXWYZabcdefghijklmnopqrstuvxwyz0123456789';
        var charactersLength = characters.length;
        for ( var i = 0; i < length; i++){
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        var passInput = document.getElementById('passInput');
        passInput.value = result;
    }

    var gBtn = document.getElementById('gBtn');
    gBtn.addEventListener('click', function(e){
        e.preventDefault();
        makePass(4);
    });

    console.log(makePass(4));
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