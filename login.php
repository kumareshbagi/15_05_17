<?php
session_start();

include_once 'conn.php';

//check if form is submitted
if (isset($_POST['login'])) {

    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $result = mysqli_query($conn, "SELECT * FROM MEMBERS WHERE USERNAME = '" . $uname. "' and PASSWORD = '" . $pwd . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['usr_id'] = $row['id'];
        $_SESSION['usr_name'] = $row['name'];
        $successmsg = "Login Successfully";
    } else {
        $errormsg = "Incorrect name or Password!!!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- add header -->
		<!--
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Book Your Tickets</a>
        </div>  -->
		
        <!-- menu items 
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </div>
    </div>
</nav>
-->
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                <fieldset>
                    <legend>Login</legend>
                    
                    <div class="form-group">
                        <label for="name">USERNAME</label>
                        <input type="text" name="uname" required class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="name">PASSWORD</label>
                        <input type="password" name="pwd" required class="form-control" />
                    </div>

                    <div class="form-group">
                        <input type="submit" name="login" value="Login" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        New User? <a href="signup.php">Sign Up Here</a>
        </div>
    </div>
</div>

<script src="jquery-1.10.2.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>