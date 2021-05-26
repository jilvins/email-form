<?php
    require('formValidator.php');
    require('./classes/passesData.php');

    if(isset($_POST['submit'])){
        $validation = new FormValidator($_POST);
        $errors = $validation->validateForm();
        //save data to db
        $newProduct = new PassedData($_POST);
        $newProduct->addNewEmail();
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sass/styles.css">
    <script src="https://kit.fontawesome.com/b8a12c1a8c.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <script type = "text/javascript">  
          function validate() {
    let email = document.forms["form"]["email"].value;
    let checkbox = document.getElementById("agree");
    let emailerr = document.getElementById("email-error")
    let checkboxerr = document.getElementById("checkbox-error")
 if(email==""){
    emailerr.innerHTML ="Please enter the email";
 return false;
 }else{
    let re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
    let x=re.test(email);
    if(x){
    }else{
        emailerr.innerHTML ="Email is not in correct format";
    return false;
    } 
    if(!checkbox.checked){
     checkboxerr.innerHTML = "Please accept terms";
 return false;}
}}


        </script>  
</head>
<body>
    
        <div class="form-container">
            <header>
                <div class="logo-section">
                <img src="./images/Union.png" alt="icon">
                <img src="./images/pineapple..png" alt="icon">
                </div>
                <navbar class="navbar">
                    <ul class="nav-list">
                        <li><a class="nav-list-item" href="#">About</a></li>
                        <li><a class="nav-list-item" href="#">How it works</a></li>
                        <li><a class="nav-list-item" href="#">Contact</a></li>
                    </ul>
                </navbar>
            </header>
            <main>
                <div class="subscription-form" id="subscription-form">
                <h1>Subscribe to newsletter</h1>
                <p>Subscribe to our newsletter and get 10% discount on pineapple glasses</p>
                <form id="form" name="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" onsubmit="return validate()" method="post">
                    <div class="input-wrapper">
                    <input type="text" id="email-input" name="email">
                    <input type="submit" id="email-submit" value="->" name="submit">
                    </div>
                    <div class="error" id="email-error"><?php echo $errors['email'] ?? '' ?></div>
                    <br>
                    <input type="checkbox" id="agree" name="agree" value="true">
                    <label for="agree">I agree to <span>terms of servce</span></label>
                    <div class="error" id="checkbox-error"><?php echo $errors['agree'] ?? '' ?></div>
                </form>
                </div>
                <div class="submited" id="submited-form" style="display: none;">
                    <img src="./images/Union2.png" alt="icon">
                    <h1>Thanks for subscribing!</h1>
                    <p>You have successfully subscribed to our email listing. Check your email for the discount code.</p>
                </div>
                <div class="icon-container">
                <i class="fab fa-facebook-f fa-2x sicon" id="icon" ></i>
                <i class="fab fa-instagram fa-2x sicon" id="icon"></i>
                <i class="fab fa-twitter fa-2x sicon" id="icon"></i>
                <i class="fab fa-youtube fa-2x sicon" id="icon"></i>
            </div>
            </main>

        </div>
        <div class="image-container">
            <img class="main-img" src="./images/image_summer.png" alt="Pineapple with earphones">
        </div>
    
    


  <!--<script src="index.js" type = "text/javascript"></script>-->
    
</body>
</html>