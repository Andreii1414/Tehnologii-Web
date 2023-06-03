<?php 

function accountInfo(){
    $db = new Database();
    $conn = $db->connect();

    session_start();
    $sessionId = $_SESSION['id'];

    $punctaj = null;
    $nume = null;
    $email = null;
    $created_at = null;
    $query = "SELECT nume, email, sum(punctaj_quiz + punctaj_categorie), created_at FROM users u
    join punctaje p on p.id_user = u.id WHERE id_user = ? GROUP BY nume, email, u.id";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $sessionId);
    $stmt->execute();
    $stmt->bind_result($nume, $email, $punctaj, $created_at);
    $stmt->fetch();

    $response = [
        'nume' => $nume,
        'email' => $email,
        'punctaj' => $punctaj,
        'created_at' => $created_at
    ];

    echo json_encode($response);

    $stmt->close();
    $conn->close();
}

?>