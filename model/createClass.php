<?php
    require '../controller/banco.php';

    if(!empty($_POST))
    {
        
        $nome = $_POST['nome'];
        $nascimento = $_POST['nascimento'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        

        //Validaçao dos campos:
        $validacao = true;
        if(empty($nome))
        {
            $nomeErro = 'Por favor digite o seu nome!';
            $validacao = false;
        }

        if(empty($nascimento))
        {
            $nascimentoErro = 'Por favor digite seu nascimento!';
            $validacao = false;
        }

        if(empty($telefone))
        {
            $telefoneErro = 'Por favor digite o número do telefone!';
            $validacao = false;
        }

        if(empty($email))
        {
            $telefoneErro = 'Por favor digite o endereço de email';
            $validacao = false;
        }
        elseif (!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $emailError = 'Por favor digite um endereço de email válido!';
            $validacao = false;
        }

        if(empty($sexo))
        {
            $sexoErro = 'Por favor digite o campo!';
            $validacao = false;
        }


        //Inserindo no Banco:
        if($validacao)
        {
            $pdo = Banco::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO cliente (nome, nascimento, telefone, email, sexo) VALUES(?,?,?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$nascimento,$telefone,$email,$sexo));



            Banco::desconectar();
            header("Location: ../index.php?create=true");
        } 
        else {
            header("Location: ../index.php?create=false");
        } 
    }

?>