<?php
    require '../controller/banco.php';

    if(!empty($_POST))
    {
        //Acompanha os erros de validação
        $cepErro = null;
        $logradouroErro = null;
        $complementoErro = null;
        $numeroErro = null;
        $bairroErro = null;
        $cidadeErro = null;
        $estadoErro = null;
        $paisErro = null;

        
        $cep = $_POST['cep'];
        $logradouro = $_POST['logradouro'];
        $complemento = $_POST['complemento'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $pais = $_POST['pais'];
        $clienteId = $_POST['cliente_id'];

        //Validaçao dos campos:
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

        //Inserindo no Banco:
        if($validacao)
        {

            $pdo2 = Banco::conectar();
            $pdo2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql2 = "INSERT INTO endereco (logradouro, complemento, numero, bairro, cidade, estado,pais,cep,cliente_id) VALUES(?,?,?,?,?,?,?,?,?)";
            $q2 = $pdo2->prepare($sql2);
            $q2->execute(array($logradouro,$complemento,$numero,$bairro,$cidade,$estado,$pais,$cep,$clienteId));

            Banco::desconectar();
            header("Location: ../index.php?create=true");
        } 
        else {
            header("Location: ../index.php?create=false");
        } 
    }

?>