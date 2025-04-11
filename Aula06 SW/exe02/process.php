<?php
$colunas  = $_GET['colunas'];
$linhas  = $_GET['linhas'];


echo "<table>";
echo"<tr>";
$i = 1;

while($i <= $colunas){
    echo"<th> coluna $i </th>";
    $i++;
    } 
echo "</tr>";
$j = 1;
while($j <= $linhas){
    echo "<tr>";
$k = 1;
    while($k<= $colunas){
        echo"<td> linha $j</td>";
        $k++;
    }
    $j++;
    echo"</tr>";


}
echo"</table>";
?>

<style style = "background-color : red">
    table{
        border: 3px solid black;
    }
    tr,td,th{
        border: 2px solid black;
    }
</style>