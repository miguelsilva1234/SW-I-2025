<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>


<style>
    table{
        border: 0px solid black;
        border-collapse: collapse;
        display: flex;
        justify-content: center;
    }
    tr,td,th{
        border: 3px solid black;
    }
    tr{
        background-color :rgb(247, 160, 218);
    }
</style>

<body>
    <?php
        $produtos = [
            [ 'categoria'=> 'Roupas', 'nome' => 'Camiseta', 'preco' => 100,] ,
            [ 'categoria'=> 'Calcados', 'nome' => 'Tenis', 'preco' => 300,] ,
            [ 'categoria'=> 'Comida', 'nome' => 'frango', 'preco' => 25,] ,
        ];
        echo"<Table border ='1'>";
        echo"<tr>
                <th>Categoria</th>
                <th>Nome</th>
                <th>Preço</th>
            </tr>";
            $i = 0;
        foreach ($produtos as $produto) {
            if($i == 0){
                $cor_fundo = "background-color:#3399ff;";
            }
            elseif($i == 1){
                $cor_fundo = 'background-color:#ff3b3b;';
            }
            elseif($i == 2){
                $cor_fundo = 'background-color:#eaffea;';
            }

            echo "<tr>
                    <td style = '$cor_fundo'>{$produto['categoria']}</td>
                    <td style = '$cor_fundo'>{$produto['nome']}</td>
                    <td style = '$cor_fundo'>{$produto['preco']}</td>
                </tr>";
                $i++;
        }
        echo "</table>";

    ?>
    
</body>
</html>