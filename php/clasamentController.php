<?php

function first20()
{
    $db = new Database();
    $conn = $db->connect();
    $query = "select nume, sum(p.punctaj_quiz + p.punctaj_categorie) as punctaj 
              from users u join punctaje p on u.id = p.id_user
              group by nume, u.id order by punctaj desc
              LIMIT 20;";
    
    $rs = $conn->query($query);

    //verific ca a functionat query-ul 
    if($rs)
    {
        $rows = [];
        //iau fiecare linie din rs
        while($row = $rs->fetch_assoc())
        {
            $rows[] = $row;
        }

        //returnez un json cu userii si punctajul
        echo json_encode($rows);
    }
    else{
        echo "Error: " . $query . $conn->error;
    }
    $conn->close();

}

function puncteleTale(){
    $db = new Database();
    $conn = $db->connect();

    session_start();
    $sessionId = $_SESSION['id'];


    //extrag punctajul si pozitia lui in clasament
    $query = "SELECT (SELECT sum(p.punctaj_quiz + p.punctaj_categorie) from punctaje p
              WHERE p.id_user = ?) as punctaj,
             (SELECT COUNT(*) + 1
              FROM (
                    SELECT id_user, sum(punctaj_quiz + punctaj_categorie) as total
                    FROM punctaje group by id_user
                    )AS ranking
                    WHERE total > 
                    (SELECT sum(punctaj_quiz + punctaj_categorie)
                    FROM punctaje where id_user = ?)) as loc;";
    
    $loc = null;
    $punctaj = null;
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $sessionId, $sessionId);
    $stmt->execute();
    $stmt->bind_result($punctaj, $loc);
    $stmt->fetch();

    $response = [
        'punctaj' => $punctaj,
        'loc' => $loc
    ];

    echo json_encode($response);

    $stmt->close();
    $conn->close();
}


?>