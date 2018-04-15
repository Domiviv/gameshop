<?php
require 'db.php';
function getUser($login) {
    $db = getDb();
    //$response = $db->query('SELECT * FROM USER WHERE login = \''.$login.'\'');
    $response = $db->prepare('SELECT * FROM user WHERE login = :login');
    $response->execute(array('login' => $login));
    $datas = $response->fetch();
    $response->closeCursor(); // Termine le traitement de la requête
    return $datas;
}
function getUsers() {
    $db = getDb();
    $response = $db->query('SELECT r.name, u.* FROM `user` AS u JOIN role AS r ON role_id = r.id; ');
    $datas = $response->fetchAll();
    $response->closeCursor(); // Termine le traitement de la requête
    return $datas;
}
function getUserById($id) {
    $db = getDb();
    $response = $db->prepare('SELECT * FROM user WHERE id = :id');
    $response->execute(array('id' => $id));
    $datas = $response->fetch();
    $response->closeCursor(); // Termine le traitement de la requête
    return $datas;
}
function setUser($id, $values) {
    $query = 'UPDATE user SET';
    foreach ($values as $name => $value) {
        $query = $query.' '.$name.' = :'.$name.',';
    }
    $query = substr($query, 0, -1).' WHERE id = :id;';
    $db = getDb();
    $response = $db->prepare($query);
    $response->execute(array_merge(array('id' => $id), $values));
    $response->closeCursor(); // Termine le traitement de la requête
}
function deleteUser($id) {
    $db = getDb();
    $response = $db->prepare('DELETE FROM USER WHERE id = :id;');
    $response->execute(array('id' => $id));
    $response->closeCursor(); // Termine le traitement de la requête
}
function newUser($values) {
    $query = 'INSERT INTO user SET';
    foreach ($values as $name => $value) {
        $query = $query.' '.$name.' = :'.$name.',';
    }
    $query = substr($query, 0, -1);
    $db = getDb();
    $response = $db->prepare($query);
    $response->execute($values);
    $response->closeCursor(); // Termine le traitement de la requête
}
?>
