<?php

require '../controller/banco.php';

$id         = !empty($_GET['id']) ? $_REQUEST['id'] : header("location: ../index.php");
$idEndereco = !empty($_GET['idEndereco']) ? $_REQUEST['idEndereco'] : header("location: ../index.php");

if (!empty($_POST)) {
    
    $nomeErro           = null;
    $nascimentoErro     = null;
    $telefoneErro       = null;
    $emailErro          = null;
    $sexoErro           = null;
    $cepErro            = null;
    $logradouroErro     = null;
    $complementoErro    = null;
    $bairroErro         = null;
    $numeroErro         = null;
    $cidadeErro         = null;
    $estadoErro         = null;
    $paisErro           = null;
    
    $nome       = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $telefone   = $_POST['telefone'];
    $email      = $_POST['email'];
    $sexo       = $_POST['sexo'];
    
    $cep         = $_POST['cep'];
    $logradouro  = $_POST['logradouro'];
    $complemento = $_POST['complemento'];
    $bairro      = $_POST['bairro'];
    $numero      = $_POST['numero'];
    $cidade      = $_POST['cidade'];
    $estado      = $_POST['estado'];
    $pais        = $_POST['pais'];
    
    //Validação
    $validacao = true;
    if(empty($cep))
        {
            $cepErro = 'Por favor digite o cep!';
            $validacao = false;
        }

        if(empty($logradouro))
        {
            $logradouroErro = 'Por favor digite o cep!';
            $validacao = false;
        }

        if(empty($complemento))
        {
            $complementoErro = 'Por favor digite o cep!';
            $validacao = false;
        }

        if(empty($numero))
        {
            $numeroErro = 'Por favor digite o cep!';
            $validacao = false;
        }

        if(empty($bairro))
        {
            $bairroErro = 'Por favor digite o cep!';
            $validacao = false;
        }

        if(empty($cidade))
        {
            $cidadeErro = 'Por favor digite o cep!';
            $validacao = false;
        }

        if(empty($estado))
        {
            $estadoErro = 'Por favor digite o cep!';
            $validacao = false;
        }

        if(empty($pais))
        {
            $paisErro = 'Por favor digite o cep!';
            $validacao = false;
        }
    
    // Atualizando os Dados 
    if ($validacao) {
        
        
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE cliente  set nome = ?, nascimento = ?, telefone = ?, email = ?, sexo = ? WHERE id = ?";
        $q   = $pdo->prepare($sql);
        $q->execute(array(
            $nome,
            $nascimento,
            $telefone,
            $email,
            $sexo,
            $id
        ));
        
        $pdo2 = Banco::conectar();
        $pdo2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql2 = "UPDATE endereco  set logradouro = ?, complemento = ?, numero= ?, bairro = ?, cidade = ?, estado = ?, pais = ?, cep = ? WHERE cliente_id = ? AND id = ?";
        $q2   = $pdo->prepare($sql2);
        
        $q2->execute(array(
            $logradouro,
            $complemento,
            $numero,
            $bairro,
            $cidade,
            $estado,
            $pais,
            $cep,
            $id,
            $idEndereco
        ));
        
        
        Banco::desconectar();
        header("Location: ../index.php?update=true");
        
    } else {
        
    }
} else {
    
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * ,cliente.id AS id_cliente FROM cliente INNER JOIN endereco on cliente.id = endereco.cliente_id where cliente.id  = ?";
    $q   = $pdo->prepare($sql);
    $q->execute(array(
        $id
    ));
    $data       = $q->fetch(PDO::FETCH_ASSOC);
    $nome       = $data['nome'];
    $nascimento = $data['nascimento'];
    $telefone   = $data['telefone'];
    $email      = $data['email'];
    $sexo       = $data['sexo'];
    
    $logradouro  = $data['logradouro'];
    $complemento = $data['complemento'];
    $numero      = $data['numero'];
    $bairro      = $data['bairro'];
    $cidade      = $data['cidade'];
    $estado      = $data['estado'];
    $pais        = $data['pais'];
    $cep         = $data['cep'];
    
    Banco::desconectar();
}
?>
