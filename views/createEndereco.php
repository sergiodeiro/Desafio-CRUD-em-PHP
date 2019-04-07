<?php 
    require '../model/createEnderecoClass.php';
    
    $pdo = Banco::conectar();
    $sql = 'SELECT * FROM cliente';
    
    
    ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/custom.css">
        <title>Adicionar Endereço</title>
    </head>
    <body>
        <div class="container">
            <div clas="span10 offset1">
                <div class="card">
                    <div class="card-header">
                        <h3 class="well"> Adicionar Endereço</h3>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="createEndereco.php" method="post">
                            <div class="control-group">
                                <label class="control-label">Cliente</label>
                                <div class="controls">
                                    <select name="cliente_id">
                                        <?php // Retornando a quantidade de clientes no banco 
                                        foreach( $pdo->query($sql) as $rows ) {?>
                                        <option value="<?php echo $rows['id'];?>"><?php echo $rows['nome']; }?></option>
                                        */
                                    </select>
                                </div>
                            </div>
                            <!-- CEP -->
                            <div class="control-group">
                                <?php echo !empty($cepErro)?'error ': '';?>
                                <label class="control-label">CEP</label>
                                <div class="controls">
                                    <input id="cep" type="text" name="cep" class="form-control" placeholder="CEP" required>
                                    <?php if(!empty($cepErro)): ?>
                                    <span class="help-inline"><?php echo $cepErro;?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                            <!-- LOGRADOURO -->
                            <div class="control-group">
                                <?php echo !empty($logradoroErro)?'error ': '';?>
                                <label class="control-label">Logradouro</label>
                                <div class="controls">
                                    <input id="logradouro" type="text" name="logradouro" class="form-control" placeholder="Logradouro" required>
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
                                    <input id="complemento" type="text" name="complemento" class="form-control" placeholder="Complemento" required>
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
                                    <input id="numero" type="text" name="numero" class="form-control" placeholder="Número" required>
                                    <?php if(!empty($numeroErro)): ?>
                                    <span class="help-inline"><?php echo $numeroErro;?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                            <!-- Bairro -->
                            <div class="control-group<?php echo !empty($bairroErro)?'error ': '';?>">
                                <label class="control-label">
                                Bairro</label>
                                <div class="controls">
                                    <input id="bairro" type="text" name="bairro" class="form-control" placeholder="Bairro" required>
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
                                    <input id="cidade" type="text" name="cidade" class="form-control" placeholder="Cidade" required>
                                </div>
                            </div>
                            <!-- Estado -->
                            <div class="control-group">
                                <?php echo !empty($estadoErro)?'error ': '';?>
                                <label class="control-label">Estado</label>
                                <div class="controls">
                                    <input id="estado" type="text" name="estado" class="form-control" placeholder="Estado" required>
                                    <?php if(!empty($estadoErro)): ?>
                                    <span class="help-inline"><?php echo $estadoErro;?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                            <!-- País --><?php echo !empty($paisErro)?'error ': '';?>
                            <div class="control-group">
                                <label class="control-label">País</label>
                                <div class="controls">
                                    <input id="pais" type="text" name="pais" class="form-control" placeholder="País" required>
                                    <?php if(!empty($paisErro)): ?>
                                    <span class="help-inline"><?php echo $paisErro;?></span>
                                    <?php endif;?>
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