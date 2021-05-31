<?php
session_start();

class FormValidator {
    private $data;
    private $errors = [];
    private static $fields = ['email', 'agree'];

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
        header ("Location: ./newemail.php"); exit;} 
        $this->errors = 'passed';
        return $this->errors;
    }

    private function validateEmail(){
        $val = trim($this->data['email']);
        $forbiddenDomains = ['co'];
        $splitEmail = explode('.', $val);
        if(empty($val)){
            $this->addError('email', 'email cannot be empty (from php)');
        } else {
            if(!preg_match('/^[^ ]+@[^ ]+\.[a-z]{2,3}$/', $val)){
                $this->addError('email', 'must be valid email (from php)');
            } else {
                
                if(in_array($forbiddenDomains[0], $splitEmail)){
                    $this->addError('email', 'cant accept from co (from php)');
                } 
            }
        }
    }
    private function validateCheckbox(){
        $val =  isset($this->data['agree']) ? trim($this->data['agree']) : null;
        if(empty($val)){
            $this->addError('agree', 'you have to acept terms (from php)');
        }

    }
    private function addError($key, $val){
        $this->errors[$key] = $val;
    }
}

?>