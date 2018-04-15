<?php

function createCart(){
  if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
    $_SESSION['cart']['label']=array();
    $_SESSION['cart']['qt']=array();
    $_SESSION['cart']['priceCart']=array();

  }
  return true;
}

function addToCart($game, $qt, $price){
  if(createCart()){
    $position = array_search($game, $_SESSION['cart']['label']);
    if($position !== false){
      $_SESSION['cart']['label'][$position] += $qt;
    }
    else{
      array_push($_SESSION['cart']['label'], $game);
      array_push($_SESSION['cart']['qt'], $qt);
      array_push($_SESSION['cart']['priceCart'], $price);
    }
  }
  else{
    $error = "Erreur lors de l'ajout!";
  }
}

function setQt($game, $qt){
  if(createCart()){
    if(qt>0){
      $position = array_search($game, $_SESSION['cart']['label'], $game);
      if($position !== false){
        $_SESSION['cart']['label'][$position] = $qt;
      }
    }
    else{
      delGameFromCart($game);
    }
  }
  else{
    $error = "Erreur lors de la modification!";
  }
}

function delGameFromCart($game){
  if(createCart()){
    $tmp=array();
    $tmp['label']=array();
    $tmp['qt']=array();
    $tmp['priceCart']=array();
    for($i; $i<count($_SESSION['cart']['label']); $i++){
      if($_SESSION['cart']['label'][$i] !== $game){
        array_push($_SESSION['cart']['label'], $_SESSION['cart']['label'][$i]);
        array_push($_SESSION['cart']['qt'], $_SESSION['cart']['qt'][$i]);
        array_push($_SESSION['cart']['priceCart'], $_SESSION['cart']['priceCart'][$i]);
      }
    }
    $_SESSION['cart']=$tmp;
    unset($tmp);
  }
  else{
    $error = "Erreur lors de la suppression!";
  }
}

function delCart(){
  if(isset($_SESSION['cart'])){
    unset($_SESSION['cart']);
  }
}

function cartCount(){
  if(isset($_SESSION['cart'])){
    return count($_SESSION['cart']['label']);
  }
}

function total(){
  $total = 0;
  for($i; $i<count($_SESSION['cart']['label']); $i++){
    $total += $_SESSION['cart']['qt'][$i]+$_SESSION['cart']['priceCart'];
  }

  return $total;

}

?>
