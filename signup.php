<?php
include_once("header.php");
?>
<div class="form">
    <h1>Signup Form</h1>
    <form action="includes/signup.inc.php" method="post">

        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
        <button name="submit" type="submit">Register</button>
    </form>
    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo '<div class="error">Fill all the fields</div>';
            }
            elseif ($_GET["error"] == "invaliduid") {
                echo '<div class="error">Invalid Username</div>';

            } 
            elseif ($_GET["error"] == "invalidEmail") {
            echo '<div class="error">Invalid Email</div>';
            } 
            elseif ($_GET["error"] == "passwordmismatch") {
            echo '<div class="error">Passwords do not match</div>';
            } 
            elseif ($_GET["error"] == "usernametaken") {
            echo '<div class="error">Username or Email already exists</div>';
            } 
            elseif ($_GET["error"] == "stmtfailed") {
            echo '<div class="error">Oops! Something went wrong</div>';
            } 
            elseif ($_GET["error"] == "none") {
            echo '<div class="error">Account Created</div>';
            }
        }
    ?>
    <p>Already have an account ? <a href="login.php">Login</a></p>
</div>

<?php
include_once("footer.php");
?>