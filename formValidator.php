<?php

class FormValidator {
    private $data;
    private $errors = [];
    private static $fields = ['email', 'agree'];

    public function __construct($received){
       $this->data = $received; 
    }

    public function validateForm() {
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not present i data");
                return;
            }
        }
        $this->validateEmail();
        $this->validateCheckbox();
        return $this->errors;
    }

    private function validateEmail(){
        $val = trim($this->data['email']);
        if(empty($val)){
            $this->addError('email', 'email cannot be empty');
        } else {
            if(!preg_match('/^[^ ]+@[^ ]+\.[a-z]{2,3}$/', $val)){
                $this->addError('email', 'must be valid email');
            }
        }
    }
    private function validateCheckbox(){
        $val = trim($this->data['agree']);
        if(empty($val)){
            $this->addError('agree', 'you have to acept terms');
        }

    }
    private function addError($key, $val){
        $this->errors[$key] = $val;
    }
}

?>