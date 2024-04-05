<div class="main-content">


  <!-- INICIO NAVEGAÇÃO SITE--->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="sheep.php">Inicio</a></li>
      <li class="breadcrumb-item"><a href="<?= URL_CAMINHO_PAINEL . FILTROS ?>sheep-usuarios/criar&token=<?= $_SESSION['timeWT'];?>">Novo</a></li>
      <li class="breadcrumb-item active" aria-current="page">Listar</li>
    </ol>

  </nav>
  <!-- FIM NAVEGAÇÃO SITE--->

  <section class="section">
    <div class="section-body">
      <!--INICIO LINKS TOPO clientes SITE--->
      <?php include_once 'topo.php'; ?>
      <!--FIM LINKS TOPO clientes SITE--->
      <br>
      
      <!--INICIO TOKEN E RETORNOS TOPO clientes SITE--->
      <?php include_once 'token.php'; ?>
      <!--FIM TOKEN E RETORNOS TOPO clientes SITE--->
      


      <!-- INICIO TABELA  SITE -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Relatorio</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Nº</th>
                      <th>Criado</th>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th>Função</th>
                      <th>Status</th>

                    </tr>
                  </thead>
                  <tbody>


                  
                        <?php
                          $sheep->Leitura('usuarios', "ORDER BY data DESC");
                          $usuarios = Formata::Resultado($sheep);
                          if($usuarios){
                            foreach($sheep->getResultado() as $cliente){
                              $cliente = (object) $cliente;
                            
                          

                        ?>
                        <tr>
                          <td><?=$cliente->id?></td>

                          <td><?= date('d/m/Y', strtotime($cliente->data))?></td>
                          <td><?=$cliente->nome ? $cliente->nome : null; ?> <?=$cliente->sobrenome ? $cliente->sobrenome : null; ?></td>
                          <td><?= $cliente->cpf ? $cliente->cpf: null?></td>

                          <td> <?php
                            if($cliente->nivel == 'M'){
                              echo "Administrador";
                            }else{
                              echo "Cliente";
                            }
                          ?>  
                          </td>
                          <td>
                            <?php if($cliente->status == "S"){ ?>
                            <button class="btn btn-icon btn-success"><i class="fas">Ativo</i></button>
                            <?php }else{ ?>
                              <button class="btn btn-icon btn-danger"><i class="fas">Cancelado</i></button>

                            <?php }?>
                          </td>

                        </tr>
                        <?php 
                            } 
                          }
                          ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>
 
  




</div>

<?php
$sheep = null;
$ler = null;

?>