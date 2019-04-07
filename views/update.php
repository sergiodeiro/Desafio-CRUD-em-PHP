<?php 
    require '../model/updateClass.php'
    
    ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/custom.css">
        <title>Atualizar Cliente</title>
    </head>
    <body>
        <div class="container">
            <div class="span10 offset1">
                <div class="card">
                    <div class="card-header">
                        <h3 class="well"> Atualizar Cliente</h3>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="update.php?id=<?php echo $id ?>&idEndereco=<?php echo $idEndereco ?>" method="post">
                            <div class="control-group <?php echo !empty($nomeErro)?'error':'';?>">
                                <label class="control-label">Nome</label>
                                <div class="controls">
                                    <input name="nome" class="form-control" size="50" type="text" placeholder="Nome" value="<?php echo !empty($nome)?$nome:'';?>">
                                    <?php if (!empty($nomeErro)): ?>
                                    <span class="help-inline"><?php echo $nomeErro;?></span>
                                    <?php endif; ?>
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
                            <div class="control-group <?php echo !empty($telefoneErro)?'error':'';?>">
                                <label class="control-label">Telefone</label>
                                <div class="controls">
                                    <input name="telefone"id="telefone" class="form-control" size="30" type="text" placeholder="Telefone" value="<?php echo !empty($telefone)?$telefone:'';?>">
                                    <?php if (!empty($telefoneErro)): ?>
                                    <span class="help-inline"><?php echo $telefoneErro;?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="control-group <?php echo !empty($email)?'error':'';?>">
                                <label class="control-label">Email</label>
                                <div class="controls">
                                    <input name="email" class="form-control" size="40" type="text" placeholder="Email" value="<?php echo !empty($email)?$email:'';?>">
                                    <?php if (!empty($emailErro)): ?>
                                    <span class="help-inline"><?php echo $emailErro;?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- CEP -->
                            <div class="control-group">
                                <?php echo !empty($cep)?'': '';?>
                                <label class="control-label">CEP</label>
                                <div class="controls">
                                    <input id="cep" type="text" name="cep" class="form-control" placeholder="CEP" value="<?php echo !empty($cep)?$cep:'';?>">
                                </div>
                            </div>
                            <!-- LOGRADOURO -->
                            <div class="control-group">
                                <?php echo !empty($logradoroErro)?'error ': '';?>
                                <label class="control-label">Logradouro</label>
                                <div class="controls">
                                    <input id="logradouro" type="text" name="logradouro" class="form-control" placeholder="Logradouro" value="<?php echo !empty($logradouro)?$logradouro:'';?>"required>
                                    <?php if(!empty($logradoroErro)): ?>
                                    <span class="help-inline"><?php echo $logradoroErro;?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                            <!-- Complemento -->
                            <div class="control-group">
                                <?php echo !empty($complementoErro)?'error ': '';?>
                                <label class="control-label">Complemento</label>
                                <div class="controls">
                                    <input id="complemento" type="text" name="complemento" class="form-control" placeholder="Complemento" value="<?php echo !empty($complemento)?$complemento:'';?>">
                                    <?php if(!empty($complementoErro)): ?>
                                    <span class="help-inline"><?php echo $complementoErro;?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                            <!-- Número -->
                            <div class="control-group">
                                <?php echo !empty($numeroErro)?'error ': '';?>
                                <label class="control-label">Número</label>
                                <div class="controls">
                                    <input id="numero" type="text" name="numero" class="form-control" placeholder="Número" value="<?php echo !empty($numero)?$numero:'';?>">
                                    <?php if(!empty($numeroErro)): ?>
                                    <span class="help-inline"><?php echo $numeroErro;?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                            <!-- Bairro -->
                            <div class="control-group">
                                <?php echo !empty($bairroErro)?'error ': '';?>
                                <label class="control-label">Bairro</label>
                                <div class="controls">
                                    <input id="bairro" type="text" name="bairro" class="form-control" placeholder="Bairro" value="<?php echo !empty($bairro)?$bairro:'';?>">
                                    <?php if(!empty($bairroErro)): ?>
                                    <span class="help-inline"><?php echo $bairroErro;?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                            <!-- Cidade -->
                            <div class="control-group">
                                <?php echo !empty($cidadeErro)?'error ': '';?>
                                <label class="control-label">Cidade</label>
                                <div class="controls">
                                    <input id="cidade" type="text" name="cidade" class="form-control" placeholder="Cidade" value="<?php echo !empty($cidade)?$cidade:'';?>"required>
                                    <?php if(!empty($cidadeErro)): ?>
                                    <span class="help-inline"><?php echo $cidadeErro;?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                            <!-- Estado -->
                            <div class="control-group">
                                <?php echo !empty($estadoErro)?'error ': '';?>
                                <label class="control-label">Estado</label>
                                <div class="controls">
                                    <input id="estado" type="text" name="estado" class="form-control" placeholder="Estado" value="<?php echo !empty($estado)?$estado:'';?>">
                                    <?php if(!empty($estadoErro)): ?>
                                    <span class="help-inline"><?php echo $estadoErro;?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                            <!-- País --><?php echo !empty($paisErro)?'error ': '';?>
                            <div class="control-group">
                                <label class="control-label">País</label>
                                <div class="controls">
                                    <input id="pais" type="text" name="pais" class="form-control" placeholder="País" value="<?php echo !empty($pais)?$pais:'';?>">
                                    <?php if(!empty($paisErro)): ?>
                                    <span class="help-inline"><?php echo $paisErro;?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="control-group <?php echo !empty($sexoErro)?'error':'';?>">
                                <label class="control-label">Sexo</label>
                                <div class="controls">
                                    <div class="form-check">
                                        <p class="form-check-label">
                                            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="M" <?php echo ($sexo=="M" ) ? "checked" : null; ?>/> Masculino
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sexo" id="sexo" value="F" <?php echo ($sexo=="F" ) ? "checked" : null; ?>/> Feminino
                                    </div>
                                    </p>
                                    <?php if (!empty($sexoErro)): ?>
                                    <span class="help-inline"><?php echo $sexoErro;?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <br/>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-warning">Atualizar</button>
                                <a href="../index.php" type="btn" class="btn btn-default">Voltar</a>
                            </div>
                        </form>
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