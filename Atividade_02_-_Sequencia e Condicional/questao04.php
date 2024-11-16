<?php
// Questão 04  - Elabore um algoritmo que dada a idade de um nadador classifica-o em uma das seguintes categorias:

# • infantil A = 5 -7 anos
# • infantil B = 8-10 anos
# • juvenil A = 11-13 anos
# • juvenil B = 14-17 anos
# • adulto = maiores de 18 anos

$idade = 18;

if ($idade >= 5 && $idade <= 7) {
    echo "Infantil A";
} elseif ($idade >= 8 && $idade <= 10) {
    echo "Infantil B";
} elseif ($idade >= 11 && $idade <= 13) {
    echo "Juvenil A";
} elseif ($idade >= 14 && $idade <= 17) {
    echo "Juvenil B";
} else {
    echo "Adulto";
}

?>