 <?php 

  $id = 88888;
  $ler = new Ler();
  $ler->Leitura('dados', "WHERE id = :id", "id={$id}");
  if($ler->getResultado()){
    foreach($ler->getResultado() as $dados);
    $dados = (object) $dados;
  }

 ?>
   <!-- Main Content -->
   <div class="main-content">

     <!-- INICIO NAVEGAÇÃO SITE--->
     <nav aria-label="breadcrumb">
       <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="">Inicio</a></li>

         <li class="breadcrumb-item active" aria-current="page">Dados</li>
       </ol>
     </nav>
     <!-- FIM NAVEGAÇÃO SITE--->

     <section class="section">

      <!--INICIO TOKEN E RETORNOS TOPO clientes SITE--->
      <?php include_once 'token.php'; ?>
      <!--FIM TOKEN E RETORNOS TOPO clientes SITE--->
      



       <form action="<?= URL_CAMINHO_PAINEL . FILTROS?>sheep-dados/filtros/dados&token=<?=$_SESSION['timeWT']?>" method="post" enctype="multipart/form-data">


         <div class="section-body">
           <div class="row">
             <div class="col-12">
               <div class="card">

                 <div class="card-footer text-right">

                   <a href="" class="btn btn-primary"><i class="fa fa-exclamation-circle"></i> Lista </a>


                 </div>

                 <div class="card-header">
                   <h4>Configurações</h4>
                 </div>
                 <div class="card-body">



                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logomarca(300px-90px)</label>
                     <div class="col-sm-12 col-md-7">
                       <div id="image-preview" class="image-preview">
                         <label for="image-upload" id="image-label">Buscar Imagem</label>
                          <?php if($dados->logo){?>
                            <img src="<?= SHEEP_IMG_LOGOMARCA . $dados->logo ?>" alt="<?= $dados->nome?>" style="width:100%; height:auto;">
                            <?php }else{?>
                              <img src="assets/img/sem-imagem.png" style="width:100%; height:auto;">
                              <?php } ?>
                              <input type="file" name="logo" id="image-upload" />
                       </div>
                     </div>
                   </div>


                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Favicon(50px-50px)</label>
                     <div class="col-sm-12 col-md-7">
                       <div id="image-preview" class="image-preview">
                         <label for="image-upload2" id="image-label">Favicon</label>
                          <?php  if($dados->icone){ ?>
                            <img src="<?= SHEEP_IMG_LOGOMARCA . $dados->icone ?>" alt="<?= $dados->nome ?>" style="width:100%; height:auto;">
                          <?php }else{ ?>
                          <img src="assets/img/sem-imagem.png" style="width:100%; height:auto;">
                         <?php }?>
                       </div>
                       <input type="file" name="icone" id="image-upload2" />
                     </div>
                   </div>

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nome da Empresa(Obrigatório)</label>
                     <div class="col-md-7">
                       <input type="text" class="form-control" name="nome" placeholder="Digite o nome da sua empresa" value="<?=$dados->nome ? $dados->nome : null?>">
                     </div>

                   </div>

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Descrição da Empresa</label>
                     <div class="col-md-7">
                       <textarea class="summernote" name="descricao"><?=$dados->descricao ? htmlspecialchars($dados->descricao) : null?></textarea>

                     </div>

                   </div>

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">CNPJ(Opcional)</label>
                     <div class="col-md-7">
                       <input type="text" id="cnpj" class="form-control" name="cnpj" placeholder="Adicione o CNPJ" value="<?=$dados->cnpj ? $dados->cnpj : null?>">
                     </div>

                   </div>



                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">E-mail(Obrigatório)</label>
                     <div class="col-md-7">
                       <input type="email" class="form-control" name="email" placeholder="E-mail" value="<?=$dados->email ? $dados->email : null?>">
                     </div>

                   </div>

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Senha E-mail(Obrigatório)</label>
                     <div class="col-md-7">
                       <input type="password" class="form-control" name="senha_email" placeholder="Senha do e-mail" value="<?=$dados->senha_email ? $dados->senha_email : null?>">
                     </div>

                   </div>

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telefone(Opcional)</label>
                     <div class="col-md-7">
                       <input type="text" id="fone" class="form-control" name="fone" placeholder="Telefone" value="<?=$dados->fone ? $dados->fone : null?>">
                     </div>

                   </div>



                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Whatsapp(Opcional)</label>
                     <div class="col-md-7">
                       <input type="text" id="cel" class="form-control" name="whatsapp" placeholder="whatsapp" value="<?=$dados->whatsapp ? $dados->whatsapp : null?>">
                     </div>

                   </div>

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Valor da entrega(Obrigatório)</label>
                     <div class="col-md-7">
                       <input type="text" class="form-control" name="frete" placeholder="valor do frete" value="<?=$dados->frete ? $dados->frete : 0?>">
                     </div>

                   </div>


                   <div class="form-group row mb-4">

                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Endereço</label>
                     <div class="col-md-4">
                       <input type="text" class="form-control" name="endereco" value="<?=$dados->endereco ? $dados->endereco : null?>">
                     </div>


                     <div class="col-md-3">
                       <input type="number" class="form-control" name="numero" value="<?=$dados->numero ? $dados->numero : null?>">
                     </div>

                   </div>

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">CEP</label>
                     <div class="col-md-7">
                       <input type="text" id="cepmj" class="form-control" name="cep" placeholder="Digite um CEP Válido!" value="<?=$dados->cep ? $dados->cep : null?>">
                     </div>

                   </div>

                   <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Estado</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control select2 load_estados" name="estado">

                                            <?php 
                                                $sheep->Leitura('app_estados', "ORDER BY estado_nome ASC");
                                                $estadosUsuario = Formata::Resultado($sheep);
                                                if($estadosUsuario){
                                                    foreach($sheep->getResultado() as $estado){
                                                        $estado = (object) $estado;
                                               
                                            ?>
                                            <option value="<?= $estado->estado_id ?>" <?= $dados->estado == $estado->estado_id ? 'selected' : null ?>><?= $estado->estado_nome ?></option>
                                            <?php }} ?>


                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cidade</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control select2" name="cidade" id="load_cidades">

                                        <?php 
                                                $sheep->Leitura('app_cidades', "ORDER BY cidade_nome ASC");
                                                $cidadeUsuario = Formata::Resultado($sheep);
                                                if($cidadeUsuario){
                                                    foreach($sheep->getResultado() as $cidade){
                                                        $cidade = (object) $cidade;
                                               
                                            ?>
                                            <option value="<?= $cidade->cidade_id ?>" <?= $dados->cidade == $cidade->cidade_id ? 'selected' : null ?>><?= $cidade->cidade_nome ?></option>
                                            <?php }} ?>


                                        </select>
                                    </div>
                                </div>

                   <input type="hidden" name="usuario" value="<?=$_SESSION['sheep_user']['id']?>">
                   <input type="hidden" name="sheep_firewall" value="<?=$_SESSION['_sheep_firewall']?>">
                   <input type="hidden" name="tipo" value="config">
                   <input type="hidden" name="id" value="<?=$id?>">

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                     <div class="col-sm-12 col-md-7">
                       <button type="submit" class="btn btn-lg btn-primary" name="sendSheep">Salvar</button>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </form>
     </section>



   </div>