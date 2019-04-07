<?php 

 require '../model/createClass.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/custom.css">
  
  <title>Adicionar Cliente</title>
</head>

<body>
    <div class="container">
        <div clas="span10 offset1">
          <div class="card">
            <div class="card-header">
                <h3 class="well"> Adicionar Cliente</h3>
            </div>
            <div class="card-body">
            <form class="form-horizontal" action="create.php" method="post">

                <div class="control-group <?php echo !empty($nomeErro)?'error ' : '';?>">
                    <label class="control-label">Nome</label>
                    <div class="controls">
                        <input size="50" class="form-control" name="nome" type="text" placeholder="Nome" required="" value="<?php echo !empty($nome)?$nome: '';?>">
                        <?php if(!empty($nomeErro)): ?>
                            <span class="help-inline"><?php echo $nomeErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($nascimentoErro)?'error ': '';?>">
                    <label class="control-label">Data de Nascimento</label>
                    <div class="controls">
                        <input size="35" class="form-control " id="nascimento" name="nascimento" type="text" placeholder="Data de Nascimento" required="" value="<?php echo !empty($nascimento)?$nascimento: '';?>">
                        <?php if(!empty($emailErro)): ?>
                            <span class="help-inline"><?php echo $nascimentoErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($telefoneErro)?'error ': '';?>">
                    <label class="control-label">Telefone</label>
                    <div class="controls">
                        <input size="35" class="form-control" id="telefone" name="telefone" type="text" placeholder="Telefone" required="" value="<?php echo !empty($telefone)?$telefone: '';?>">
                        <?php if(!empty($emailErro)): ?>
                            <span class="help-inline"><?php echo $telefoneErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($emailErro)?'error ': '';?>">
                    <label class="control-label">Email</label>
                    <div class="controls">
                        <input size="40" class="form-control" name="email" type="text" placeholder="Email" required="" value="<?php echo !empty($email)?$email: '';?>">
                        <?php if(!empty($emailErro)): ?>
                            <span class="help-inline"><?php echo $emailErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

               <div class="control-group <?php echo !empty($sexoErro)?'error':'';?>">
                        <label class="control-label">Sexo</label>
                        <div class="controls">
                            <div class="form-check">
                                <p class="form-check-label">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="M"/> Masculino
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo" id="sexo" value="F" /> Feminino
                            </div>
                            </p>
                            <?php if (!empty($sexoErro)): ?>
                                <span class="help-inline"><?php echo $sexoErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>
               
                <div class="form-actions">
                    <br/>

                    <button type="submit" class="btn btn-success">Adicionar</button>
                    <a href="../index.php" type="btn" class="btn btn-default">Voltar</a>

                </div>
            </form>
          </div>
        </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script src="../assets/js/custom.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>

