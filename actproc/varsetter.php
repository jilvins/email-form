<?php
if(isset($_GET['order'])){
    $order =$_GET['order'];
}else {
    $order = 'date';
}

if(isset($_GET['sort'])){
    $sort = $_GET['sort'];
}else{
    $sort='ASC';
}

if(isset($_GET['filter'])){
    $click = $_GET['filter'];
}else {
    $click = '';
}

if(isset($_GET['srch'])){
    $idp = $_GET['srch'];
}else {
    $idp = '';
}

if (!isset($_GET['page'])) {
    $page = 1;
} else{
    $page = $_GET['page'];
}

if($page==1){
    $startpnt=0;
}else{
    $startpnt=($page*10)-9;
}

$sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';