<?php 

function addFeedback(){
    $db = new Database();
    $conn = $db->connect();

    //preluarea mesajului si a rating-ului introdus de utilizator
    $mesaj = $_POST['text'];
    $rating = $_POST['rating'];

    session_start();
    $sessionId = $_SESSION['id'];

    //query care adauga feedback-ul utilizatorului in baza de date
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
    //query care returneaza tot feedback-ul din baza de date
    $query = "select nume, mesaj, f.created_at, rating from feedback f join users u on u.id = f.id_user order by f.created_at;";
    
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $stmt->bind_result($nume, $mesaj, $data, $rating);

    $response = array();
    //este creat un array pentru a putea returna raspunsul
    while($stmt->fetch()){
        $res = array(
            'nume' => $nume,
            'mesaj' => $mesaj,
            'data' => $data,
            'rating' => $rating
        );
        $response[] = $res;
    }

    //raspunsul este returnat sub forma de json
    echo json_encode($response);

    $stmt->close();
    $conn->close();
}

?>