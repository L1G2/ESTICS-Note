<?php $title = 'ESTICS | Register'; ?>
 
<?php ob_start() ?>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="username" class="form-control" value="<?php echo "email"; ?>">

            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="username" class="form-control" value="<?php echo "email"; ?>">

            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo "password"; ?>">

            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo "passord confirm"; ?>">

            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </form>
    </div>    
<?php $content = ob_get_clean();?>
<?php require('template.php');?>

