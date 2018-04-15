<?php
require 'db.php';
function getGame($gtitle) {
    $db = getDb();
    $response = $db->prepare('SELECT * FROM item WHERE title = :gtitle');
    $response->execute(array('title' => $gtitle));
    $datas = $response->fetch();
    $response->closeCursor(); // Termine le traitement de la requête
    return $datas;
}
function getGames() {
    $db = getDb();
    $response = $db->query('SELECT * FROM item');
    $datas = $response->fetchAll();
    $response->closeCursor(); // Termine le traitement de la requête
    return $datas;
}
function getGameById($id) {
    $db = getDb();
    $response = $db->prepare('SELECT * FROM item WHERE id = :id');
    $response->execute(array('id' => $id));
    $datas = $response->fetch();
    $response->closeCursor(); // Termine le traitement de la requête
    return $datas;
}
function setGame($id, $values) {
    $query = 'UPDATE item SET';
    foreach ($values as $name => $value) {
        $query = $query.' '.$name.' = :'.$name.',';
    }
    $query = substr($query, 0, -1).' WHERE id = :id;';
    $db = getDb();
    $response = $db->prepare($query);
    $response->execute(array_merge(array('id' => $id), $values));
    $response->closeCursor(); // Termine le traitement de la requête
}
function deleteGame($id) {
    $db = getDb();
    $response = $db->prepare('DELETE FROM item WHERE id = :id;');
    $response->execute(array('id' => $id));
    $response->closeCursor(); // Termine le traitement de la requête
}
function newGame($values) {
    $query = 'INSERT INTO item SET';
    foreach ($values as $name => $value) {
        $query = $query.' '.$name.' = :'.$name.',';
    }
    $query = substr($query, 0, -1);
    $db = getDb();
    $response = $db->prepare($query);
    $response->execute($values);
    $response->closeCursor(); // Termine le traitement de la requête
}
function cartByUser($id){
    $db = getDb();
    $query = "SELECT bi.*, i.title, b.user_id, b.status_id FROM item AS i JOIN book AS b JOIN book_item AS bi ON item_id = i.id AND book_id = b.id WHERE b.user_id = :id";
    $response = $db->prepare($query);
    $response->execute(array('id' => $id));
    $datas = $response->fetchAll();
    $response->closeCursor(); // Termine le traitement de la requête
    return $datas;
}
?>
