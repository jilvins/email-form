<?php
session_start();

class FormValidator {
    private $data;
    private $errors = [];

    public function __construct($received){
       $this->data = $received; 
    }

    public function validateForm() {
     
        $this->validateEmail();
        $this->validateCheckbox();
        if($this->errors !== []){
            return $this->errors;
    } else {
        
        $_SESSION['session-data'] = $this->data;
        header ("Location: ./actproc/newemail.php"); exit;} 
        $this->errors = 'passed';
        return $this->errors;
    }

    private function validateEmail(){
        $val = trim($this->data['email']);
        $forbiddenDomains = ['co'];
        $splitEmail = explode('.', $val);
        if(empty($val)){
            $this->addError('email', '*Email address is required');
        } else {
            if(!preg_match('/^[^ ]+@[^ ]+\.[a-z]{2,3}$/', $val)){
                $this->addError('email', '*Please provide a valid e-mail address');
            } else {
                
                if(in_array($forbiddenDomains[0], $splitEmail)){
                    $this->addError('email', '*We are not accepting subscriptions from Colombia emails');
                } 
            }
        }
    }
    private function validateCheckbox(){
        $val =  isset($this->data['agree']) ? trim($this->data['agree']) : null;
        if(empty($val)){
            $this->addError('agree', '*You must accept the terms and conditions');
        }

    }
    private function addError($key, $val){
        $this->errors[$key] = $val;
    }
}

?>