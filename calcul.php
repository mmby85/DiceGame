<?php
    if(array_key_exists('dices',$_POST)) {
    echo 'Les dés sont jettés : ';
    print_r($_POST['dices']);
    
}
?>