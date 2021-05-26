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

    protected function sortEmails($order, $sort){
        $sql = "SELECT * FROM emails ORDER BY $order $sort";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;

        /*
        if(isset($_GET['order'])){
            $order =$_GET['order'];
        }else {
            $order = 'email';
        }
        if(isset($_GET['sort'])){
            $sort = $_GET['sort'];
        }else{
            $sort='ASC';
        }

        //$resultSet = $mysqli->query("SELECT * FROM email_form ORDER BY $order $sort");
        if($resultSet->num_rows >0){
            $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';

            echo "
            <table border='1'>
            <tr>
            <th><a href='?order=email&&sort=$sort'>emails</a></th>
            <th><a href='?order=date&&sort=$sort'>date</a></th>
            </tr>
            ";
            while($rows = $resultSet->fetch_assoc()){
                $email = $rows['email'];
                $date = $rows['date'];
                echo"
                <tr>
                    <td>$email</td>
                    <td>$date</td>
                </tr>
                ";
            }
            echo"
            </table>";
        }else {
            echo "No records returned";
        }*/
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