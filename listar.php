<?php
$nomearquivo = "clientes.txt";
$arquivo = fopen($nomearquivo, "r");
while(!feof($arquivo)){
    $linha = fgets($arquivo, 1000);
    if ($linha != ""){
        echo "<li>$linha</li>";
    }
}

fclose($arquivo);

?>