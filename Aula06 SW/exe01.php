<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>

<style style = "background-color : gray">
    table{
        border-collapse: collapse;
        display: flex;
        justify-content: center;
    }
    tr,td,th{
        border: 4px solid black;
        padding: 10px;
    }
</style>
<?php
    echo "<table>";
        echo"<tr>";
        for ($i = 1; $i <= 4 ; $i++) { 
            echo"<th> coluna $i </th>";
        }
        echo "</tr>";

        for($j = 1; $j <=8; $j++){
            echo "<tr>";
            for ($k=1; $k <=4 ; $k++) {
                if($j % 2 == 0){
                    echo"<td style='background-color:red;'> linha $j</td>";
                }
                else{
                    echo"<td style = 'background-color:green '> linha $j</td>";
                }
            }
            echo"</tr>";


        }
        echo"</table>";
    ?>

    
</body>
</html>