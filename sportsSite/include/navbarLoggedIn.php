<?php
    session_start();
    if(isset($_SESSION["username"])) {
        echo("<a href='logout.php'><button class='btn btn-primary' type='button'>Logout</button></a><a href='userpage.php'><button class='btn btn-primary' type='button'>". $_SESSION["username"] ."</button></a>");                   
    }
    else {
        echo("<a href='signup.php'><button class='btn btn-primary' type='button'>Sign up</button></a><a href='signin.php'><button class='btn btn-primary' type='button'>Login</button></a>");
    }
?>