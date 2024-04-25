<?php

// Função para verificar se a pessoa passou ou não de ano
function passouDeAno($pessoa) {
    $notasAbaixoDeSeis = 0;
    foreach ($pessoa['notas'] as $nota) {
        if ($nota < 6) {
            $notasAbaixoDeSeis++;
            if ($notasAbaixoDeSeis >= 3) {
                return "Passou de ano!";
            }
        }
    }
    return "Não passou de ano!";
}


$pessoa = [
    'nome' => 'João',
    'notas' => [
        'matematica' => 5,
        'portugues' => 6,
        'historia' => 7,
        'filosofia' => 10,
        'sociologia' => 9,
        'fisica' => 5,
        'quimica' => 1
    ]
];
echo passouDeAno($pessoa) . "\n";

function calcularMediaIdade($pessoas) {
    $somaIdades = 0;
    foreach ($pessoas as $pessoa) {
        $somaIdades += $pessoa['idade'];
    }
    return $somaIdades / count($pessoas);
}

$pessoas = [
    ['nome' => 'João', 'idade' => 20],
    ['nome' => 'Maria', 'idade' => 30],
    ['nome' => 'José', 'idade' => 40],
    ['nome' => 'Ana', 'idade' => 50],
];
echo calcularMediaIdade($pessoas) . "\n";

function pessoaMaisVelha($pessoas) {
    $idadeMaisVelha = 0;
    $pessoaMaisVelha = null;
    foreach ($pessoas as $pessoa) {
        if ($pessoa['idade'] > $idadeMaisVelha) {
            $idadeMaisVelha = $pessoa['idade'];
            $pessoaMaisVelha = $pessoa;
        }
    }
    return $pessoaMaisVelha;
}

echo pessoaMaisVelha($pessoas)['nome'] . "\n";

function senhaForte($senha) {
    return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $senha);
}

$senha = 'SenhaForte123';
echo senhaForte($senha) ? "Senha forte\n" : "Senha fraca\n";

function contarPostsPorAutor($posts) {
    $quantidadePosts = [];
    foreach ($posts as $post) {
        $autor = $post['autor'];
        if (isset($quantidadePosts[$autor])) {
            $quantidadePosts[$autor]++;
        } else {
            $quantidadePosts[$autor] = 1;
        }
    }
    return $quantidadePosts;
}