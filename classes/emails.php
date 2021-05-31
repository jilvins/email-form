<?php
require("db.php");

class Emails extends Db {
    protected function getEmails(){
        $sql = "SELECT * FROM emails";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function sortEmails($dname, $srch, $order, $sort){
        $sql = "SELECT * FROM emails WHERE (email LIKE '%$dname%') AND (email LIKE '%$srch%') ORDER BY $order $sort";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function filterEmails(){
        $sql = "SELECT email FROM emails";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }
    ///izm pārnsets uz sortEmails
    protected function filterEmailDomain($dname){
        $sql = "SELECT * FROM emails WHERE email LIKE '%$dname%' ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }
    ////////

    ////izm pārnsets uz sortEmails
    protected function searchEmail($srch){
        $sql = "SELECT * FROM emails WHERE email LIKE '%$srch%' ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }
    /////////
    
    protected function setEmail($email){
        $sql = "INSERT INTO emails(email) VALUES (?)";
        $stmt = $this->connect()->prepare($sql);
        $Execute = $stmt->execute([$email]);
        return $Execute;
    }

    protected function setDelete($id){
        $sql = "DELETE FROM emails WHERE id IN($id)";
        $stmt = $this->connect()->prepare($sql);
        $Execute = $stmt->execute([$id]);
        return $Execute;
    }
}

?>