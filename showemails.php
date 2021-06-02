<?php 
require("classes/emailView.php");

//
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
//
$sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';

$test = new EmailsView($click, $idp, $order, $sort);
$received=$test->showSortedEmails($click, $idp, $order, $sort);
$filtered =$test->showFilteredEmails();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sass/styles.css?v=<?php echo time(); ?>">">
    <script src="https://kit.fontawesome.com/b8a12c1a8c.js" crossorigin="anonymous"></script>
    <title>Document</title>
 
</head>
<body>
<div class="main-container">
<?php
var_dump($click); echo '<br>';
var_dump($idp); echo '<br>';
var_dump($order); echo '<br>';
var_dump($sort); echo '<br>';
?>
<form id="searchform" action='' method="POST">
    <input id="searchInp" type="text" name="searchInp" placeholder="enter email to search"/> </br>
    <input class="fltr-btn" type="submit" name="search" value="search email">
    <a class="fltr-btn-off" href='?filter=<?= $click ?>&&order=date&&srch=&&sort=<?= $sort ?>'>Turn off search</a>
</form>
<div class="filter-container">
<h2>Filter the emails by specific email providers name:</h2>
<?php foreach($filtered as $fltr) : ?>
    <a class="fltr-btn" href='?filter=<?= $fltr ?>&&order=date&&srch=<?=  $idp ?>&&sort=<?= $sort ?>'><?= $fltr ?></a>
<?php endforeach ?>
<a class="fltr-btn-off" href='?filter=&&order=date&&srch=<?=  $idp ?>&&sort=<?= $sort ?>'>Turn off filter</a>
</div>
<form method="POST" action="delete.php">
<button class="fltr-btn-off" type="submit" name="mass_delete" id="mass-delete">Delete selected</button>
        <div class="email-container">
        <table width="1000" border="5" align="center">
            <caption>Email list</caption>
            <tr>
                <th>ID</th>
                <th>Email<a href='?filter=<?= $click ?>&&order=email&&srch=<?=  $idp  ?>&&sort=<?= $sort ?>'><i class="fas fa-sort"></i></a></th>
                <th>Date<a href='?filter=<?= $click ?>&&order=date&&srch=<?=  $idp  ?>&&sort=<?= $sort ?>'><i class="fas fa-sort"></i></a></th>
            </tr>
            <?php foreach ($received as $result) : ?>
  <tr>
  
    <td><input type="checkbox" class="item1" name="deleteid[]" id="deleteid" value="<?= $result['id'] ?>"></td>
    <td><?= $result['email'] ?></td>
    <td><?= $result['date'] ?></td>
    </tr>
  

   <?php endforeach ?>

        </table>
        </div>
        </form>
        </div>

        <script src="email.js?v=<?php echo time(); ?>" type = "text/javascript"></script>
    
</body>
</html>