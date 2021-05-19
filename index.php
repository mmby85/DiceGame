

<div style="margin: 30px; margin-top:30px">
<form action="index.php" method="POST">
Enter Dice Nember : <input type="number" name="dices" <?php echo "value='" . $_POST['dices'] . "' "; ?> >
<br>
<select name="face" id="faces">
    <option value=""></option>
</select>

<input type="submit" />
</form>
</div> 

<h1>
<?php
    echo '<br>' . '<div style="margin: 30px; margin-top:30px">';
    
    include 'calcul.php';

    echo '</div>' ;

?>
</h1>
