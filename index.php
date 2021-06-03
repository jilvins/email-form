<?php
    require('./classes/formValidator.php');
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
    <link rel="stylesheet" href="./sass/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <script type = "text/javascript">  </script>  
</head>

<body onload="valCheckbox(), valEmail()">
            <div class="header">
                <div class="logo-section">
                <img src="./images/Union.png" alt="icon">
                <img class="logo-text" src="./images/pineapple..png" alt="icon">
                </div>
                <div class="navbar">
                    <ul class="nav-list">
                        <li><a class="nav-list-item" href="#"><p>About</p></a></li>
                        <li><a class="nav-list-item" href="#"><p>How it works</p></a></li>
                        <li><a class="nav-list-item" href="#"><p>Contact</p></a></li>
                    </ul>
                </div>
            </div>
            <div class="subscription-form" id="subscription-form">
                <?php if($displayForm){ ?>
                    <div class="text-container">
                    <h1 class="tittle">Subscribe to newsletter</h1>
                    <p class="info">Subscribe to our newsletter and get 10% discount on pineapple glasses</p>
                    </div>
                <form id="form" name="emailform" action="" onsubmit="" method="POST">
                    <div class="input-wrapper">
                    <input type="text" id="email-input" name="email" oninput="valEmail ()"
                    placeholder="Type your email address here...">
                    <input type="submit" id="email-submit" value="➔" name="submit">
                    </div>
                    <div class="error" id="email-error"><?php echo $errors['email'] ?? '' ?></div>
                    <div class="checkbox-container">
                    <input class="checkbox" type="checkbox" id="agree" name="agree" onclick="valCheckbox()">
                    <label for="agree">I agree to <span>terms of servce</span></label>
                    </div>
                    <div class="error" id="checkbox-error"><?php echo $errors['agree'] ?? '' ?></div>
                    
                </form>
                
                <?php  }  else { ?>
               
                    <div class="text-container" id="submited-form">
                    <img class="sub-icon" src="./images/Union2.png" alt="icon">
                    <h1>Thanks for subscribing!</h1>
                    <p>You have successfully subscribed to our email listing. Check your email for the discount code.</p>
                    </div>
                <?php  } ?>
                    <div class="icon-container">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                    </div>
                </div>

                <img class="main-img" src="./images/image_summer.png" alt="Pineapple with headphones">
   
  <script src="./js/index.js?v=<?php echo time(); ?>" type = "text/javascript"></script>
    
</body>
</html>