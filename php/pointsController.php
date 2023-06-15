<?php

require_once 'database.php';

function getPoints(){

    $category = $_SERVER['HTTP_CATEGORY'];
    
    $db = new Database();
    $conn = $db->connect();

    session_start();
    $sessionId = $_SESSION['id'];

    $punctaj = null;
    $query = "SELECT punctaj_quiz FROM punctaje WHERE id_user = ? and categorie = ?";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $sessionId, $category);
    $stmt->execute();
    $stmt->bind_result($punctaj);
    $stmt->fetch();

    $response = [
        'punctaj' => $punctaj
    ];

    echo json_encode($response);

    $stmt->close();
    $conn->close();
}

function addPoints(){

    $puncte = $_SERVER['HTTP_PUNCTE'];
    $category = $_SERVER['HTTP_CATEGORY'];

    $db = new Database();
    $conn = $db->connect();

    session_start();
    $sessionId = $_SESSION['id'];

    $query = "UPDATE punctaje set punctaj_quiz = ? where id_user = ? and categorie = ?";
    $stmt = $conn -> prepare($query);
    $stmt->bind_param('iss',$puncte, $sessionId, $category);
    $stmt->execute();

    if($stmt->affected_rows > 0)
    {
        $response = [
            'success' => true,
            'message' => 'Puncte adaugate'
        ];
    }
    else{
        $response = [
            'success' => false,
            'message' => 'Puncte nu au putut fi adaugate'
        ];
    }
    echo json_encode($response);

    $stmt->close();
    $conn->close();
}


function getAllCategories(){
    
    $db = new Database();
    $conn = $db->connect();

    session_start();
    $sessionId = $_SESSION['id'];

    $categorie = null;
    $punctaj = null;
    $query = "SELECT categorie, punctaj_quiz FROM punctaje WHERE id_user = ?";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $sessionId);
    $stmt->execute();
    $stmt->bind_result($categorie, $punctaj);

    $response = array();
    while($stmt->fetch()){
        $res = array(
            'categorie' => $categorie,
            'punctaj' => $punctaj
        );
        $response[] = $res;
    }

    echo json_encode($response);

    $stmt->close();
    $conn->close();
}

?>