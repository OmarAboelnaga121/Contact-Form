<?php 

    $user = $_POST['username'];
    $gmail = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];

     $formErrors = array();

    if (strlen($user) < 3) {
        $formErrors[] = 'The User Name have to be more than 3 letters';
    }
    if (strlen($msg) < 10) {
        $formErrors[] = "The Message can't be less than";
    }
    if (strlen($phone) < 11 || strlen($phone) > 11) {
        $formErrors[] = 'The number have to be equel 11 letters';
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <title>Contact Form</title>
</head>
<body>
    
    <!--Start Form -->
    <div class="container text-center">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <h2 class="d-block text-primary">Contact Me</h2>
            <div class="errors">
            
            <?php if (isset($formErrors)) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php foreach ($formErrors as $errors) {echo $errors . '<br>';}?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 
            <?php  } ?>

            </div>
            <input class="form-control mb-3" placeholder="Enter user user name" name="username" type="text">
            <i class="fa-solid fa-user fa-fw"></i>
            <input class="form-control mb-3 " placeholder="Enter user email" name="email" type="email">
            <i class="fa-solid fa-at fa-fw"></i>
            <input class="form-control mb-3" placeholder="Enter user phone" name="phone" type="text">
            <i class="fa-solid fa-phone fa-fw"></i>
            <i class="fa-solid fa-envelope fa-fw textarea"></i>
            <textarea name="msg" class="form-control mb-3" placeholder="Enter Your Message"></textarea>
            <input type="submit" class="btn btn-primary d-block " value="Send Message">
            <i class="fa-solid fa-paper-plane fa-fw"></i>
        </form>
    </div>
    <!--End Form -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>