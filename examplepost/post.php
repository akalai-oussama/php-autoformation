<?php
    if($_POST['name']  || $_POST['Email'] || $_POST['message']){
        
        echo "name " . ":" . $_POST['name'] . "<br />";
        echo "<br />";
        echo "Email " . ":" . $_POST['Email'] . "<br />";
        echo "<br />";
        echo "youre message " . ":" . $_POST['message'] . "<br />";
    }

?>