<?php 
require("classes/emailView.php");
require("actproc/varsetter.php");

$test = new EmailsView($click, $idp, $order, $sort, $startpnt);
$emailcount=$test->emailCount($click, $idp);
$received=$test->showSortedEmails($click, $idp, $order, $sort, $startpnt);
$filtered =$test->showFilteredEmails();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sass/styles.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/b8a12c1a8c.js" crossorigin="anonymous"></script>
    <title>Document</title>
 
</head>
<body>
<div class="main-container">
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
<form method="POST" action="./actproc/delete.php">
    <button class="fltr-btn-off" type="submit" name="mass_delete" id="mass-delete">Delete selected</button>
    <div class="email-container">
        <table width="1000" border="5" align="center">
            <h1>Email list</h1>
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
            <?php for($p=1; $p<=(intdiv($emailcount, 10)+1); $p++){?>
            
                <li class="pag-btn <?= $page == $p ? 'active' : ''; ?>"><a href="<?= '?page='.$p; ?>&&filter=<?= $click ?>&&order=email&&srch=<?=  $idp  ?>&&sort=<?= $sort ?>"><?= $p; ?></a></li>
            <?php }?>
</div>
      
        <script src="./js/email.js?v=<?php echo time(); ?>" type = "text/javascript"></script>
    
</body>
</html>