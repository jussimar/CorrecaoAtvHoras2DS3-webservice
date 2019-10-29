<?php
    $conexao = mysqli_connect("localhost","id10374988_bancohora","bancohora","id10374988_bancohora");
    //                  onde esta o banco    usuario banco          senha        nome banco de dados
    $nome = $_POST['nome'];
    $entrada = $_POST['entrada'];
    $saida = $_POST['saida'];
    $funcao = $_POST['funcao'];
    $valor = $_POST['valor'];

    $query = "insert into horas values (null,'$nome','$funcao','$entrada','$saida',$valor)";

    mysqli_query($conexao,$query);

    echo "Registro Salvo com Sucesso!";
