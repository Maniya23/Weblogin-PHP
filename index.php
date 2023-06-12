<?php
include_once("header.php");
?>

<h1>Hello <?php 
if (isset($_SESSION["username"])){
    echo $_SESSION["username"]; 
}else{
    echo "User !";
}
?></h1>
<p>Welcome to website Manishka</p>

<?php
include_once("footer.php");
?>