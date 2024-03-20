<?php

$usuario = $_POST["nome"];
$email = $_POST["email"];
$veiculo = $_POST["veiculo"];

echo $usuario; $email; $tipo;

$arquivo = fopen("pedido.csv", "a");
fwrite($arquivo, $usuario . "; " );
fwrite($arquivo, $email . "; ");
fwrite($arquivo, $veiculo . "\n");
fclose($arquivo );

?>
<?php

header("Location: index.php");

?>
