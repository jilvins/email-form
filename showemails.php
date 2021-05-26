<?php 
require("classes/emailView.php");
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
$sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';
$test = new EmailsView($order, $sort);
$received=$test->showSortedEmails($order, $sort);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sass/styles.css">
    <script src="https://kit.fontawesome.com/b8a12c1a8c.js" crossorigin="anonymous"></script>
    <title>Document</title>
 
</head>
<body>
<form method="POST" action="delete.php">
<button type="submit" name="mass_delete" id="mass-delete">Mass delete</button>
        <div class="email-container">
        <table width="1000" border="5" align="center">
            <caption>Email list</caption>
            <tr>
                <th>ID</th>
                <th><a href='?order=email&&sort=<?= $sort ?>'>Email</a></th>
                <th><a href='?order=date&&sort=<?= $sort ?>'>Date</a></th>
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

  <script src="index.js" type = "text/javascript"></script>
    
</body>
</html>