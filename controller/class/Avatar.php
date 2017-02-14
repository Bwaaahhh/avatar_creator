<?php

class Avatar{


    public function getFront(){
        global $dbh;
        $query = $dbh->query("SELECT * FROM front ORDER BY RAND() LIMIT 1");
        return $query->fetchAll();
    }

    public function getYeux(){
        global $dbh;
        $query = $dbh->query("SELECT * FROM yeux ORDER BY RAND() LIMIT 1");
        return $query->fetchAll();
    }

    public function getNez(){
        global $dbh;
        $query = $dbh->query("SELECT * FROM nez ORDER BY RAND() LIMIT 1");
        return $query->fetchAll();
    }

    public function getBouche(){
        global $dbh;
        $query = $dbh->query("SELECT * FROM bouche ORDER BY RAND() LIMIT 1");
        return $query->fetchAll();
    }

    public function getRandomAvatar(){
        global $dbh;
        $query = $dbh->query("SELECT date_creation , nom_avatar , url_avatar FROM avatar ORDER BY RAND() LIMIT 5 ");
        return $query->fetchall();
    }

    public function getUrlAvatar(){
        global $dbh;
        $lastInsertId = $dbh->lastInsertId();
        $query = $dbh->query("SELECT url_avatar FROM avatar WHERE id_avatar = ".$lastInsertId." ");
        return $query->fetchall();
    }

}

 ?>
