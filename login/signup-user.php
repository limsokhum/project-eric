<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="shortcut icon" href="../asset/images/logo-eric.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/customcss.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <img src="../asset/images/logo-eric-bar.png" alt="" style="width: 24rem">
                    <p class="text-center">It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                    <div class="alert alert-danger text-center">
                        <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                    </div>
                    <?php
                    }elseif(count($errors) > 1){
                        ?>
                    <div class="alert alert-danger">
                        <?php
                            foreach($errors as $showerror){
                                ?>
                        <li><?php echo $showerror; ?></li>
                        <?php
                            }
                            ?>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="fname" placeholder="First Name" required
                                    value="<?php echo $fname ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="lname" placeholder="Last Name" required
                                    value="<?php echo $lname ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" placeholder="Email Address"
                                    required value="<?php echo $email ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="phonenumber" placeholder="Phone Number"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                        <div class="form-group">
                                <input class="form-control" type="password" name="password" placeholder="Password"
                                    required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password"
                            required>
                        </div> 
                        </div>
                    </div>

                        <div class="form-grouop d-flex justify-content-center">
                        <input class="btn button button-login" type="submit" name="signup" value="Signup" style="width: 8rem">
                        </div>

                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>