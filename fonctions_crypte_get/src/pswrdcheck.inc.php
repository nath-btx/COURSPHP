<?php

    const password = "motdepasse";
    if (isset($_GET['pswrd'])){
        password_hash($_GET['pswrd'], PASSWORD_DEFAULT);
        if ($_GET['pswrd'] == password){
            echo "<p> Code correct </p>";
        }
        else{
            echo "<p> Code incorrect </p>";
        }
    }

?>