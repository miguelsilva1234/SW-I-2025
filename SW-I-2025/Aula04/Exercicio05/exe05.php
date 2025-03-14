<?php

$color = $_POST['favcolor']

?>
<style>
        .box {
            width: 400px;
            height: 150px;
            border: 5px solid #000;

            
        }
</style>
<p>Sua cor favorita é : </p>
<div class= "box" style="background-color:<?php echo "$color"?>;"></div>
