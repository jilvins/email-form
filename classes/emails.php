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

    protected function sortEmails($dname, $srch, $order, $sort, $start){
        $perpage =10;
        $sql = "SELECT * FROM emails WHERE (email LIKE '%$dname%') AND (email LIKE '%$srch%') ORDER BY $order $sort LIMIT $start, $perpage";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }
    protected function getEmailcount($dname, $srch){
        $sql = "SELECT * FROM emails WHERE (email LIKE '%$dname%') AND (email LIKE '%$srch%')";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $email_count = $stmt->rowCount();
        return $email_count;
    }

    protected function filterEmails(){
        $sql = "SELECT email FROM emails";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }
    
    protected function filterEmailDomain($dname){
        $sql = "SELECT * FROM emails WHERE email LIKE '%$dname%' ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }
    
    protected function searchEmail($srch){
        $sql = "SELECT * FROM emails WHERE email LIKE '%$srch%' ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }
    
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