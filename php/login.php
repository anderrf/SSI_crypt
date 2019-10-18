<?php
try{
    $conecta = mysqli_connect("localhost", "id10375082_bookregister", "cadlivros", "id10375082_bd_cadlivros");
                              //servidor, usuário banco, senha, nome do banco

    $nome = $_POST['nome'];
    $senha = crypt('$2$55vdv51ds', $_POST['senha']);

    $query = "SELECT * FROM usuario WHERE nome = '$nome';";

    $resultado = mysqli_query($conecta, $query);

    $linha = mysqli_num_rows($resultado); 
	 
	if ($linha == 0) 
	{
		die('Não há registros.');
	}
	
	
	
	for($x = 0; $x < $linha; $x++) 
	{
		$nomeVerificar = mysqli_result($resultado, $x, 'nome'); 
		$senhaVerificar = mysqli_result($resultado, $x, 'senha'); 
		if($nome == $nomeVerificar){ 
			if($senha == $senhaVerificar){  
        echo "<script>alert('Login realizado com sucesso!')</script>";
        header('location: file:///F:/3DS2/SSI/atvHash_Ex1/index.html');
			}
			else{ 
        echo "<script>alert('Nome e/ou senha incorretos!')</script>";
        header('location: file:///F:/3DS2/SSI/atvHash_Ex1/login.html');
			}
		}
		else{ 
      echo "<script>alert('Nome e/ou senha incorretos!')</script>";
      header('location: file:///F:/3DS2/SSI/atvHash_Ex1/login.html');
		}
  }
  
  } catch (Exception $e) {
    echo "Erro ao entrar: ".$e;
  }