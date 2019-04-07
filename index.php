<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <title>Desafio GRTS Digital</title>
   </head>
   <body>
      <div class="container">
         <div class="jumbotron">
            <div class="row">
               <h2>Desafio GRTS Digital</h2>
            </div>
         </div>
         </br>
         <div class="row">
            <?php
             // Verifica se foi INSERT OU UPDATE e dispara uma msg 
               if(isset($_GET['create'])&& $_GET['create'] == true){
               echo '<div id="success-alert" class="alert alert-success alert-dismissible fade in">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Success!</strong> O Cadastro foi realizado !
               </div>';
               }else if(isset($_GET['create'])&& $_GET['create'] == false){
                   echo '<div id="erro-alert" class="alert alert-danger alert-dismissible fade in">
                   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <strong>Erro!</strong> O Cadastro não foi efetuado !
                 </div>';
               }

               if(isset($_GET['update'])&& $_GET['update'] == true){
                echo '<div id="success-alert" class="alert alert-success alert-dismissible fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> O Cadastro foi atualizado !
                </div>';  
               }else if(isset($_GET['update'])&& $_GET['update'] == false){
                echo '<div id="erro-alert" class="alert alert-danger alert-dismissible fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Erro!</strong> O Cadastro não foi efetuado.
              </div>';
                }

               if(isset($_GET['delete'])&& $_GET['delete'] == true){
                  echo '<div id="success-alert" class="alert alert-success alert-dismissible fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong> O Cadastro foi deletado !
                  </div>';  
                 }else if(isset($_GET['delete'])&& $_GET['delete'] == false){
                  echo '<div id="erro-alert" class="alert alert-danger alert-dismissible fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Erro!</strong> O Cadastro não foi deletado.
                </div>';
                  }
               ?>
            <p>
               <a href="./views/create.php" class="btn btn-success">Adicionar Cliente</a>
               <a href="./views/createEndereco.php" class="btn btn-success">Adicionar Endereço</a>
            </p>
            <table  class="table table-striped">
               <thead class="thead-dark">
                  <tr>
                     <th scope="col">Id</th>
                     <th scope="col">Nome</th>
                     <th scope="col">Data de Nascimento</th>
                     <th scope="col">Telefone</th>
                     <th scope="col">Email</th>
                     <th scope="col">Sexo</th>
                     <th scope="col">CEP</th>
                     <th scope="col">Logradouro</th>
                     <th scope="col">Complemento</th>
                     <th scope="col">Número</th>
                     <th scope="col">Bairro</th>
                     <th scope="col">Cidade</th>
                     <th scope="col">Estado</th>
                     <th scope="col">País</th>
                     <th scope="col">Ação</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     // Chamando o Banco e dando um Select nas tabelas para entrar no foreach e pegar todos os campos no banco.
                     include 'controller/banco.php';
                     $pdo = Banco::conectar();
                     $sql = 'SELECT * ,cliente.id AS id_cliente FROM cliente INNER JOIN endereco on cliente.id = endereco.cliente_id';
                     
                     foreach($pdo->query($sql) as $row)
                     {
                         echo '<tr>';
                         echo '<th scope="row">'. $row['cliente_id'] . '</th>';
                         echo '<td>'. $row['nome'] . '</td>';
                         echo '<td>'. $row['nascimento'] . '</td>';
                         echo '<td>'. $row['telefone'] . '</td>';
                         echo '<td>'. $row['email'] . '</td>';
                         echo '<td>'. $row['sexo'] . '</td>';

                         echo '<td>'. $row['cep'] . '</td>';
                         echo '<td>'. $row['logradouro'] . '</td>';
                         echo '<td>'. $row['complemento'] . '</td>';
                         echo '<td>'. $row['numero'] . '</td>';
                         echo '<td>'. $row['bairro'] . '</td>';
                         echo '<td>'. $row['cidade'] . '</td>';
                         echo '<td>'. $row['estado'] . '</td>';
                         echo '<td>'. $row['pais'] . '</td>' ;

                      
                         echo '<td width=250>';
                         echo '<a style="margin-bottom: 5px"; class="btn btn-warning" href="./views/update.php?id='.$row['cliente_id'].'&idEndereco='.$row['id'].'"><span class="glyphicon glyphicon-edit"></span></a>';
                         echo '';
                         echo '<a style="margin-left: 10px;margin-bottom: 3px;" class="btn btn-danger" href="./views/delete.php?id='.$row['cliente_id'].'"><span class="glyphicon glyphicon-trash"></span></a>';
                         echo '</td>';
                         echo '</tr>';
                     
                     }
                     
                     
                     
                     
                     Banco::desconectar();
                     ?>
               </tbody>
            </table>           
         </div>   
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="assets/js/custom.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
   </body>
</html>