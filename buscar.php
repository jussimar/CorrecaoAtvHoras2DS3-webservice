<?php
$conexao = mysqli_connect("localhost","id10374988_bancohora","bancohora","id10374988_bancohora");
//                  onde esta o banco    usuario banco          senha        nome banco de dados
    $nome = $_POST['nome'];
    $query = "SELECT * FROM horas WHERE nm_funcionario = '$nome'";
    $result = mysqli_query($conexao,$query);
    while($linha = mysqli_fetch_assoc($result)){
      $registro = array(
          'funcionario'=>array(
            'nome' => $linha['nm_funcionario'],
            'funcao' => $linha['ds_funcao'],
            'entrada' => $linha['hr_entrada'],
            'saida' => $linha['hr_saida'],
            'valor' => $linha['vl_pagar']
          )
      );
    }
    echo json_encode($registro);
