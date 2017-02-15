<?php

class Avatar{


    public function getFront(){
        global $dbh;
        $query = $dbh->query("SELECT * FROM front ORDER BY RAND()");
        return $query->fetchAll();
    }
    public function getYeux(){
        global $dbh;
        $query = $dbh->query("SELECT * FROM yeux ORDER BY RAND()");
        return $query->fetchAll();
    }
    public function getNez(){
        global $dbh;
        $query = $dbh->query("SELECT * FROM nez ORDER BY RAND()");
        return $query->fetchAll();
    }
    public function getBouche(){
        global $dbh;
        $query = $dbh->query("SELECT * FROM bouche ORDER BY RAND()");
        return $query->fetchAll();
    }
    public function getRandomAvatar(){
        global $dbh;
        $query = $dbh->query("SELECT url_avatar FROM avatar ORDER BY RAND() LIMIT 5 ");
        return $query->fetchall();
    }
    public function getUrlAvatar(){
        global $dbh;
        $lastInsertId = $dbh->lastInsertId();
        $query = $dbh->query("SELECT url_avatar FROM avatar ORDER BY id_avatar DESC LIMIT 0,1");
        return $query->fetchall();
    }

    public function countAvatar(){
        global $dbh;
        $query = $dbh->query("SELECT count(*) as total from avatar");
        return intval($query->fetch()->total);
    }

    public function setAvatar(){
      global $dbh;
      $count = $this->countAvatar()+1 ;
      $req = $dbh->prepare("INSERT INTO avatar (url_avatar) VALUES (:url_avatar)");
      $req->execute(array(
        "url_avatar" => "http://cyrile.marmier.codeur.online/avatar_creator/view/images/avatar/avatar".$count.".png"
      ));

    }


// ".$this->countAvatar()."

}
?>
