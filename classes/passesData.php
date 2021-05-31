<?php
require("emailcontr.php");

class PassedData extends EmailsContr{
   
   function __construct($session, $post){
       $this->post = $post;
       $this->session = $session;
       $this->email = trim($this->session['email']);
       
    }
       public function addNewEmail(){
           $this->createProduct($this->email);

               $update = "successful";
               header("Location:index.php?update=".$update);
               exit();
       }
       public function deleteSelectedEmails() {
            $this->deleteProduct($this->post);

                header("Location:showemails.php");
                exit();
       }
       
}