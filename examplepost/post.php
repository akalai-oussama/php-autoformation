<?php
    if($_POST['name'] || $_POST['lastname'] || $_POST['Email'] || $_POST['message']){
        
        echo "name " . "=" . $_POST['name'] . "<br />";
        echo "Email " . "=" . $_POST['Email'] . "<br />";
        echo "youre message " . "=" . $_POST['message'] . "<br />";
    }

?>