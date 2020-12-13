<?php 
    $input = $_GET['Token_input']; 

    if ($input == "Hello World") {
        header("Location: card_list.php", true, 301);
        exit();
    } else if ($input != "Token here :") {
        echo("Wrong token !");
    }
?>