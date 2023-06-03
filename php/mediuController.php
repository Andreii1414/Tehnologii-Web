<?php

function addPointsCategory()
{
    $puncte = $_SERVER['HTTP_PUNCTE'];
    $category = $_SERVER['HTTP_CATEGORY'];

    $db = new Database();
    $conn = $db->connect();

    session_start();
    $sessionId = $_SESSION['id'];

    $query = "UPDATE punctaje set punctaj_categorie = ? where id_user = ? and categorie = ?";
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
?>