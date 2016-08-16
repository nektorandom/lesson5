<?php
include_once('db.php');

function addPost ($text){
    GLOBAL $db;
    $stmt = $db->prepare("INSERT INTO `MESSAGES` (`message`) VALUES (?)");
    $stmt->execute([ $text ]);
    
    if ($stmt->errorCode() [0] == 00000) {
        return ($stmt->errorCode() [0]);
    }
    return false;
}

function getPosts(){
    GLOBAL $db;
    $stmt = $db->prepare("SELECT * FROM `MESSAGES`");
    $stmt->execute();
    $aResult = $stmt->fetchall();

    if ($stmt->errorCode() [0] == 00000) {
        return $aResult;
    }
    return false;
}

function getPost($id){
    GLOBAL $db;
    $stmt = $db->prepare("SELECT * FROM `MESSAGES` WHERE `id` = :id");
    $stmt->execute([ 'id' => $id ]);
    $aResult = $stmt->fetchall();

    if ($stmt->errorCode() [0] == 00000) {
        return $aResult;
    }
    return false;
}

function removePost ($id){
    GLOBAL $db;
    $stmt = $db->prepare("DELETE FROM `MESSAGES` WHERE `id` = :id");
    $stmt->execute([ 'id' => $id ]);
    
    if ($stmt->errorCode() [0] == 00000) {
        return ($stmt->errorCode() [0]);
    }
    return false;
}

function updatePost ($id, $name){
    GLOBAL $db;
    $stmt = $db->prepare("UPDATE `MESSAGES` SET `message`= :message WHERE `id` = :id");
    $stmt->execute([ 'message' => $name, 'id' => $id ]);
    
    if ($stmt->errorCode() [0] == 00000) {
        return ($stmt->errorCode() [0]);
    }
    return false;
}
