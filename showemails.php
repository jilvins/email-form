<?php 
require("classes/emailView.php");
if(isset($_POST['search'])){
    $id = $_POST['searchInp'];
} else {
    $id = '';
}

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
//
$sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';

$test = new EmailsView($click, $id, $order, $sort);
$received=$test->showSortedEmails($click, $id, $order, $sort);
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
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="searchInp" placeholder="enter email to search"/> </br>
    <input type="submit" name="search" value="search email">
</form>
<div class="filter-container">
<h2>Filter the emails by specific email providers name:</h2>
<?php foreach($filtered as $fltr) : ?>
    <a class="fltr-btn" href='?filter=<?= $fltr ?>&&order=date&&sort=<?= $sort ?>'><?= $fltr ?></a>
<?php endforeach ?>
<a class="fltr-btn-off" href='?filter=&&order=date&&sort=<?= $sort ?>'>Turn off filter</a>
</div>
<form method="POST" action="delete.php">
<button type="submit" name="mass_delete" id="mass-delete">Mass delete</button>
        <div class="email-container">
        <table width="1000" border="5" align="center">
            <caption>Email list</caption>
            <tr>
                <th>ID</th>
                <th><a href='?filter=<?= $click ?>&&order=email&&sort=<?= $sort ?>'>Email</a></th>
                <th><a href='?filter=<?= $click ?>&&order=date&&sort=<?= $sort ?>'>Date</a></th>
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

  <script src="index.js" type = "text/javascript"></script>
    
</body>
</html>