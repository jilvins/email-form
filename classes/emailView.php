<?php
require("emails.php");


class EmailsView extends Emails {
    public $order;
    public $date;

    function __construct($order, $sort)
    {
        $this->order= $order;
        $this->email= $sort;
    }
    
   public function showEmails(){
    $results = $this->getEmails();
    return $results;
   }

   public function showSortedEmails($order, $sort){
    $results = $this->sortEmails($order, $sort);
    return $results;
   }
}

