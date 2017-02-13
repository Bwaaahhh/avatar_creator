<?php

class Avatar{


public function getFront(){
    global $dbh;
    $query = $dbh->query("SELECT * FROM front ");
    return $query->fetchAll();
}

public function getYeux(){
    global $dbh;
    $query = $dbh->query("SELECT * FROM yeux ");
    return $query->fetchAll();
}

public function getNez(){
    global $dbh;
    $query = $dbh->query("SELECT * FROM nez ");
    return $query->fetchAll();
}

public function getBouche(){
    global $dbh;
    $query = $dbh->query("SELECT * FROM bouche ");
    return $query->fetchAll();
}

public function getRandomAvatar(){
    global $dbh;
    $query = $dbh->query("SELECT date_creation , nom_avatar , url_avatar FROM avatar ORDER BY RAND() LIMIT 5 ")
}

}

 ?>
