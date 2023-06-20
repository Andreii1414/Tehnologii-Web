<?php

require_once 'database.php';

function getPoints(){ //returneaza punctele utilizatorului conectat, la categoria specificata in header

    $category = $_SERVER['HTTP_CATEGORY'];
    
    $db = new Database();
    $conn = $db->connect();

    session_start();
    $sessionId = $_SESSION['id'];

    $punctaj = null;
    //query care returneaza punctele de la acea categorie
    $query = "SELECT punctaj_quiz FROM punctaje WHERE id_user = ? and categorie = ?";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $sessionId, $category);
    $stmt->execute();
    $stmt->bind_result($punctaj);
    $stmt->fetch();

    //formarea raspunsului => numarul de puncte
    $response = [
        'punctaj' => $punctaj
    ];

    //returnarea raspunsului sub forma de json
    echo json_encode($response);

    $stmt->close();
    $conn->close();
}

function addPoints(){//adaugarea numarului de puncte la categoria primita in header

    $puncte = $_SERVER['HTTP_PUNCTE'];
    $category = $_SERVER['HTTP_CATEGORY'];

    $db = new Database();
    $conn = $db->connect();

    session_start();
    $sessionId = $_SESSION['id'];

    //query care updateaza numarul de puncte pentru o anumita categorie
    $query = "UPDATE punctaje set punctaj_quiz = ? where id_user = ? and categorie = ?";
    $stmt = $conn -> prepare($query);
    $stmt->bind_param('iss',$puncte, $sessionId, $category);
    $stmt->execute();

    //mesaj de succes/esec
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
    //returnarea raspunsului
    echo json_encode($response);

    //inchiderea conexiunilor
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