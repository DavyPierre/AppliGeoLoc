<?php

require 'BDD.php';

foreach ($_GET as $key => $value) {
    $parameters[":$key"] = $value;
}

$json = array(
    'error' => true
);

$db = new BDD();
$db->DB();
if (isset($_GET['salt'])) {

    $login = $parameters[':login'];

    // http://pierredavy.com/login.php?login=davypier&password=if26

    $sql = "SELECT login, salt FROM User WHERE login = '" . $parameters[':login'] . "';";
    //print_r($sql);
    $req = $db->pdo->query($sql);
    $result = $req->fetch(PDO::FETCH_ASSOC);

    //print_r($result);
    if ($result !== false) {

        $json = array(
            'error' => false,
            'user' => $result,
        );
    }


    echo json_encode($json);
} else {


    $pass = $parameters[':password'];

    // http://pierredavy.com/login.php?login=davypier&password=if26

    $sql = "SELECT login,token FROM User WHERE login = '" . $parameters[':login'] . "' AND password = '" . $pass . "';";
    //print_r($sql);
    $req = $db->pdo->query($sql);
    $result = $req->fetch(PDO::FETCH_ASSOC);

    //print_r($result);
    if ($result !== false) {

        $json = array(
            'error' => false,
            'user' => $result,
        );
    }


    echo json_encode($json);
}

