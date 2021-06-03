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
    public function emailCount($dname, $search){
    $totalresults = $this->getEmailcount($dname, $search);
    return $totalresults;
    }

    public function showSortedEmails($dname, $srch, $order, $sort, $start){
    $results = $this->sortEmails($dname, $srch, $order, $sort, $start);
    return $results; 
    }

    public function showFilteredEmails(){
    $results = $this->filterEmails();
    function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }
    foreach ($results as $res){
        $parsed = get_string_between(implode($res), '@', '.');
        $fltr[] = $parsed;
    }

    return array_unique($fltr);
    }

    public function showSortedEmailDomain($dname){
    $results = $this->filterEmailDomain($dname);
    return $results;
    }

    public function showFoundEmails($srch) {
       $result = $this->searchEmail($srch);
       return $result;
    }
}

