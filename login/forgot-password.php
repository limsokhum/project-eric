<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <!-- <link rel="shortcut icon" href="img/logo-eric.png" type="image/x-icon"> -->
    <link rel="shortcut icon" href="../asset/images/logo-eric.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/customcss.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <img src="../asset/images/logo-eric-bar.png" alt="" style="width: 20rem">
                    <p class="text-center">Enter your email address</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                    <div class="alert alert-danger text-center">
                        <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                    </div>
                    <?php
                        }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required
                            value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button button-login" type="submit" name="check-email"
                            value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>