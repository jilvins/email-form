<?php
require("emailcontr.php");

class PassedData extends EmailsContr{
   
   function __construct($post){
       $this->post = $post;
       $this->email = trim($this->post['email']);
       
    }
       public function addNewEmail(){
           $this->createProduct($this->email);
          
               header("Location:index.php");
               exit();
       }
       public function deleteSelectedEmails() {
            $this->deleteProduct($this->post);

                header("Location:index.php");
                exit();
       }
       
}