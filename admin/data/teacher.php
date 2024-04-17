<?php 

//todos os professores
function getAllTeachers($conn){
    $sql = "SELECT * FROM professores";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    if($stmt->rowCount() >= 1){
        $teachers = $stmt->fetchAll();
        return $teachers;
    }else {
        return 0;
    }
}

//Verifica se o nome de utilizador é único
function unameIsUnique($uname, $conn){
    $sql = "SELECT username FROM professores
            WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$uname]);
    
    if($stmt->rowCount() >= 1){
        return 0;
    }else {
        return 1;
    }
}


?>