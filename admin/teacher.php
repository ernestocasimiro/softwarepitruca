<?php
session_start();
if (isset($_SESSION['admin_id']) && 
    isset($_SESSION['role'])) {

        if($_SESSION['role'] == 'Admin'){
            include "../req/DB_connection.php";
            include "data/teacher.php";
            include "data/disciplina.php";
            include "data/notas.php";
            $teachers = getAllTeachers($conn);
            
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Professores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../images/logopitru.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

            <?php 
            include "inc/navbar.php";
            if($teachers != 0){
            ?>
           
            <div class="container mt-5">
                <a href="teacher-add.php" class="btn btn-dark">Adicionar Novo Professor</a>
                <div class="table-responsive">
                <table class="table table-bordered mt-3 n-table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Primeiro Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Nome De Usuário</th>
                        <th scope="col">Disciplina</th>
                        <th scope="col">Notas</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($teachers as $teacher){  ?>
                        <tr>
                        <th scope="row">1</th>
                        <td><?=$teacher['teacher_id']?></td>
                        <td><?=$teacher['fname']?></td>
                        <td><?=$teacher['lname']?></td>
                        <td><?=$teacher['username']?></td>
                        <td>
                            <?php 
                            $s = '';
                            $subjects = str_split(trim($teacher['disciplinas']));
                            foreach ($subjects as  $subject){
                                $s_temp = getSubjectById($subject, $conn);
                                if($s_temp != 0){
                                $s .=$s_temp['disciplina_code'].', ';

                                }
                            }
                            echo $s;
                            ?>
                        </td>
                        <td>
                        <?php 
                            $g = '';
                            $grades = str_split(trim($teacher['notas']));
                            foreach ($grades as  $grade){
                                $g_temp = getGradeById($grade, $conn);
                                if($g_temp != 0){
                                $g .=$g_temp['nota_code'].'-'.
                                $g_temp['nota'].', ';

                                }
                            }
                            echo $g;
                            ?>
                        </td>
                       
                        <td>
                            <a href="" class="btn btn-warning">Editar</a>
                            <a href="" class="btn btn-danger">Apagar</a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </div>
                <?php }else{  ?>
                    <div class="alert alert-info .w-450 m-5" 
                    role="alert">
                    Vazio!
                    </div>
                <?php } ?>
            </div>
        
     


    
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script>
    $(document).ready(function(){
        $("#navLinks li:nth-child(2) a").addClass('active');
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