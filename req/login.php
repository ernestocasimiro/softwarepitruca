<?php 
session_start();

if(isset($_POST['uname']) &&    
   isset($_POST['pass']) &&
   isset($_POST['role'])){

    include "../req/DB_connection.php";

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];

    if(empty($uname)){
        $em = "Nome de Usuário Não Preenchido!";
        header("Location: ../login.php?error=$em");
        exit;
    }else if(empty($pass)){
        $em = "Palavra-Passe Não Preenchida";
        header("Location: ../login.php?error=$em");
        exit;
    }else if(empty($role)){
        $em = "Ocorreu um erro!";
        header("Location: ../login.php?error=$em");
        exit;
    }else{
        if ($role == '1'){
            $sql = "SELECT * FROM admin WHERE username = ?";
            $role = "Admin";
        }else if ($role == '2'){
            $sql = "SELECT * FROM professores WHERE username = ?";
            $role = "Professor";
        }else{
            $sql = "SELECT * FROM estudantes WHERE username = ?";
            $role = "Estudante";
        }
        $stmt = $conn->prepare($sql);
        $stmt->execute([$uname]);

        if($stmt->rowCount() == 1){
            $user = $stmt->fetch();
            $username = $user['username'];
            $password = $user['password'];
            
            if ($username === $uname){
                if(password_verify($pass, $password)){
               $_SESSION['fname'] = $fname;
               $_SESSION['role'] = $role;
               if($role == 'Admin'){
                $id = $user['admin_id'];
                $_SESSION['admin_id'] = $id;
                header("Location: ../admin/index.php");
                exit;
               }

                }else {
                $em = "Nome de Usuário ou Palavra-Passe Incorretos";
                header("Location: ../login.php?error=$em");
                exit;
                }
            }else {
                $em = "Nome de Usuário ou Palavra-Passe Incorretos";
                header("Location: ../login.php?error=$em");
                exit;
            }



        }else {
            $em = "Nome de Usuário ou Palavra-Passe Incorretos";
            header("Location: ../login.php?error=$em");
            exit;
        }
    }

   }else{
    header("Location: ../login.php");
    exit;
   }




















?>