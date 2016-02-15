<?php
require 'pdo.php';
require 'emulatePut.php';

// Parameter id required
if(isset($_GET['id'])){
    $id = intval($_GET['id']);
}else{
//    header('HTTP/1.1 ...');
//    echo json_encode(array('errors' => array(
//        '...',
//    )));
    return;
}

// Test if ressource exists
$stmt = $pdo->prepare('SELECT id FROM events WHERE id = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$event = $stmt->fetch();
if(empty($event->id)){
//    header('HTTP/1.1 ...');
    return;
}


switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        // cast
        $event->id = intval($event->id);

//        header('HTTP/1.1 ...');
        echo json_encode($event);
        break;

    case 'PUT':
        if(isset($_PUT['titre']) and isset($_PUT['description'])){
            $stmt = $pdo->prepare('UPDATE events SET titre = :titre, description = :description WHERE id = :id');
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->bindValue(':titre', $_PUT['titre'], PDO::PARAM_STR);
            $stmt->bindValue(':description', $_PUT['description'], PDO::PARAM_STR);
        }
        $stmt->execute();
        break;

    case 'DELETE':
//        $nb = $pdo->exec('...');
        if($nb == 1){
//            header('HTTP/1.1 ...');
            return;
        }
        break;
}
