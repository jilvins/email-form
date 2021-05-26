<?php
require("emails.php");

class EmailsContr extends Emails {
  
    protected function createProduct($email){
        $this->setEmail($email);
    }
    protected function deleteProduct($id){
        $this->setDelete($id);
    }
    
}

?>