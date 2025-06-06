<?php

$cursos = [
    "PHP" => [
        "nome_curso" => "Curso de PHP Fundamentos",
        "versao_ferramenta" => 7.4,
        "carga_horaria" => 40,
        "status" => true,
    ],
    "Java" => [
        "nome_curso" => "Curso de Java Fundamentos",
        "versao_ferramenta" => 11.4,
        "carga_horaria" => 30,
        "status" => false,
    ],
    "C#" => [
        "nome_curso" => "Curso de C# Fundamentos",
        "versao_ferramenta" => 5,
        "carga_horaria" => 60,
        "status" => true,
    ]
];

foreach ($cursos as $curso) {

    if ($curso['status'] == false) {
        continue; // pula uma interação de laço
        /* break; // finaliza o laço; */
    }

    echo $curso['nome_curso'];
    echo "<br>";
    echo "Versão da ferramenta: {$curso['versao_ferramenta']}";
    echo "<br>";
    echo "Carga horária: {$curso['carga_horaria']}";
    echo "<br>";
    echo "Status: {$curso['status']}";
    echo "<br><br>";
}
