<?php
// Definição da função
function gerarNumeroAleatorio() {
    $numero = rand(min: 1, max: 100); // Gera um número aleatório entre 1 e 100
    return $numero; // Retorna o número gerado
}

// Chamada da função e exibição do resultado
$numeroAleatorio = gerarNumeroAleatorio();
echo "Número aleatório gerado: $numeroAleatorio";
?>
