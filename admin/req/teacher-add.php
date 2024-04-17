<?php
session_start();
if(isset($_SESSION['admin_id']) &&    
   isset($_SESSION['role'])) {

if($_SESSION['role'] == 'Admin') {


if(isset($_POST['fname']) &&    
   isset($_POST['lname']) &&
   isset($_POST['username']) &&
   isset($_POST['pass']) &&    
   isset($_POST['disciplinas']) &&
   isset($_POST['notas'])){







   }else{
    $em = "Ocorreu um erro!";
    header("Location: admin/req/teacher-add.php?error=$em");
    exit;
   }

   }else{
    header("Location: logout.php");
    exit;
   }

   }else{
    header("Location: logout.php");
    exit;
   }

?>

    






    