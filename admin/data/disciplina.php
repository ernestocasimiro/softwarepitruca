<?php 
//All subjects
function getAllSubjects($conn){
    $sql = "SELECT * FROM disciplinas";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    if($stmt->rowCount() >= 1){
        $subjects = $stmt->fetchAll();
        return $subjects;
    }else {
        return 0;
    }
}

//All subjects
function getSubjectById($disciplina_id, $conn){
    $sql = "SELECT * FROM disciplinas
            WHERE disciplina_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$disciplina_id]);
    
    if($stmt->rowCount() == 1){
        $subject = $stmt->fetch();
        return $subject;
    }else {
        return 0;
    }
}


?>