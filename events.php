<?php
require 'pdo.php';

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if(isset($_GET['start']) && isset($_GET['end'])){
            $start = intval($_GET['start']);
            $end = intval($_GET['end']);
        }else{
//            header('HTTP/1.1 ...');
//            echo json_encode(array('errors' => array(
//                '...',
//                '...',
//            )));
            break;
        }

        $stmt = $pdo->prepare ('SELECT id, titre, description FROM events ORDER BY id ASC LIMIT :start, :nb');
        $stmt->bindValue(':start', $start, PDO::PARAM_INT);
//        $stmt->bindValue(':nb', ... , PDO::PARAM_INT);
        $stmt->execute();
        $events = $stmt->fetchAll();
        $stmt->closeCursor();

        // cast
        foreach($events as $event){
            $event->id = intval($event->id);
        }

//        header('HTTP/1.1 ...');
        echo json_encode($events);
        break;

    case 'POST' :
//        ...
}
