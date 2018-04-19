<?php
require_once ('db.php');
require_once ('order.php');
require_once ('game.php');

function addToCart($id, $gameId, $price){
  $db = getDb();
  $response = $db->prepare('SELECT * FROM book WHERE status_id = 2 AND user_id = :id;');
  $response->execute(array('id' => $id));
  $datas = $response->fetch();
  $response->closeCursor();
  if(!$datas){
    echo $id . 'rentre if';

    $newBookItem = array('book_id' => $datas['id'], 'item_id' => $gameId, 'price' => $price);
    $bookItem = newBookItem($newBookItem);

  }
  else{
    echo $id . 'rentre else';
    $user = $id;
    $status = '2';
    $values = array('user_id' => $id, 'status_id' => $status);
    $order = newOrder($values);
    addToCart($id, $gameId, $price);
  }
}
function cartByUser($cartOrder){
      $db = getDb();
      $query = "SELECT b.*, i.title FROM book_item AS b JOIN item AS i ON b.item_id = i.id WHERE b.book_id = :cartOrder";
      $response = $db->prepare($query);
      $response->execute(array('cartOrder' => $cartOrder));
      $datas = $response->fetchAll();
      $response->closeCursor(); // Termine le traitement de la requête
      return $datas;
  }

function orderForCart($id){
      $db = getDb();
      $query="SELECT id FROM book WHERE status_id = 2 AND user_id = :id";
      $response = $db->prepare($query);
      $response->execute(array('id' => $id));
      $datas = $response->fetch();
      $response->closeCursor();
      return $datas;
  }

function cartQt($id){
      $db = getDb();
      $stmt = $db->prepare("SELECT COUNT(*) FROM book_item where book_id= :id");
      $stmt->execute(array('id' => $id));
      $count = $stmt->fetchColumn();
      return $count;
  }

function removeFromId($id){
      $db = getDb();
      $response = $db->prepare('DELETE FROM book_item WHERE id = :id;');
      $response->execute(array('id' => $id));
      $response->closeCursor(); // Termine le traitement de la requête

}

function newBookItem($values) {
    $query = 'INSERT INTO book SET';
    foreach ($values as $name => $value) {
        $query = $query.' '.$name.' = :'.$name.',';
    }
    $query = substr($query, 0, -1);
    $db = getDb();
    $response = $db->prepare($query);
    $response->execute($values);
    $response->closeCursor(); // Termine le traitement de la requête
}
