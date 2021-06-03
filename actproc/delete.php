<?php 

require("../classes/passesData.php");

if(isset($_POST['mass_delete'])){
    $all_id = $_POST["deleteid"];
    $extract_id = implode(',' , $all_id);

    $deleteProduct = new PassedData(null, $extract_id);
    $deleteProduct -> deleteSelectedEmails();
 
}