<?php 

function addFeedback(){
    $db = new Database();
    $conn = $db->connect();

    $mesaj = $_POST['text'];
    $rating = $_POST['rating'];

    session_start();
    $sessionId = $_SESSION['id'];

    $query = "INSERT INTO feedback (id_user, mesaj, rating) VALUES ('$sessionId', '$mesaj', '$rating');";
   
    if(!empty($mesaj))
         mysqli_query($conn, $query);

    $conn->close();

    header("Location: ../Tehnologii-web/about/about.php");
}

function getAllFeedback(){
    $db = new Database();
    $conn = $db->connect();

    $nume = null;
    $mesaj = null;
    $data = null;
    $rating = null;
    $query = "select nume, mesaj, f.created_at, rating from feedback f join users u on u.id = f.id_user order by f.created_at;";
    
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $stmt->bind_result($nume, $mesaj, $data, $rating);

    $response = array();
    while($stmt->fetch()){
        $res = array(
            'nume' => $nume,
            'mesaj' => $mesaj,
            'data' => $data,
            'rating' => $rating
        );
        $response[] = $res;
    }

    echo json_encode($response);

    $stmt->close();
    $conn->close();
}

?>