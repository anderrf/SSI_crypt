<?php
  try{
    $conecta = mysqli_connect("localhost", "id10375082_bookregister", "cadlivros", "id10375082_bd_cadlivros");
                              //servidor, usuário banco, senha, nome do banco

    $nome = $_POST['nome'];
    $senha = crypt('$2$55vdv51ds', $_POST['senha']);

    $query = "INSERT INTO usuario VALUES (NULL, '$nome', '$senha');";

    mysqli_query($conecta, $query);
    echo "Cadastro realizado com sucesso. Veja sua senha criptografada: $senha";
    header('location: file:///F:/3DS2/SSI/atvHash_Ex1/index.html');

  } catch (Exception $e) {
    echo "Erro ao cadastrar: ".$e;
  }
