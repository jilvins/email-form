<?php
    require('formValidator.php');
    require('./classes/passesData.php');
    $displayForm = true;
    
    if(isset($_POST['submit'])){  
        $validation = new FormValidator($_POST);
        $errors = $validation->validateForm();    
    }
    if($_GET){
        $displayForm = false;       
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
            <?php
            
            if($displayForm){ ?>
                <div class="subscription-form" id="subscription-form">
                <h1>Subscribe to newsletter</h1>
                <p>Subscribe to our newsletter and get 10% discount on pineapple glasses</p>
                <form id="form" name="emailform" action="<?php //echo $_SERVER['PHP_SELF'] ?>" onsubmit="return validate()" method="POST">
                    <div class="input-wrapper">
                    <input type="text" id="email-input" name="email" oninput="valEmail()">
                    <input type="submit" id="email-submit" value="->" name="submit">
                    </div>
                    <div class="error" id="email-error"><?php echo $errors['email'] ?? '' ?></div>
                    <br>
                    <input type="checkbox" id="agree" name="agree">
                    <label for="agree">I agree to <span>terms of servce</span></label>
                    <div class="error" id="checkbox-error"><?php echo $errors['agree'] ?? '' ?></div>
                </form>
                </div>
                <?php  }  else { ?>
               
                <div class="submited" id="submited-form">
                    <img src="./images/Union2.png" alt="icon">
                    <h1>Thanks for subscribing!</h1>
                    <p>You have successfully subscribed to our email listing. Check your email for the discount code.</p>
                </div>
                <?php  } ?>
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
    
    


  <script src="index.js?v=<?php echo time(); ?>" type = "text/javascript"></script>
    
</body>
</html>