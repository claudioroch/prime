
  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php $this->load->view('layout/sidebar'); ?>

      <!-- Main Content -->
      <div id="content">

  <?php $this->load->view('layout/navbar'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('fornecedores') ?>">Fornecedores</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo ?></li>
          </ol>
        </nav>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
            <form class="user" method="POST" name="form_add">
              <?php if (isset($fornecedor)): ?>
              <p><strong><i class="fas fa-clock"></i>&nbsp;&nbsp;Última atualização:&nbsp;</strong><?php echo formata_data_banco_com_hora($fornecedor->fornecedor_data_alteracao); ?></p>
              <?php endif; ?>
              <div class="form-group row">
                <div class="col-md-4">
                  <label>Razão social*</label>
                  <input type="text" class="form-control form-control-user" name="fornecedor_razao" placeholder="Razão social" value="<?php echo set_value('fornecedor_razao'); ?>">
                  <?php echo form_error('fornecedor_razao', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-4">
                  <label>Nome fantasia*</label>
                  <input type="text" class="form-control form-control-user" name="fornecedor_nome_fantasia" placeholder="Nome fantasia" value="<?php echo set_value('fornecedor_nome_fantasia'); ?>">
                  <?php echo form_error('fornecedor_nome_fantasia', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-2">
                  <label>CNPJ</label>
                  <input type="text" class="form-control form-control-user cnpj" name="fornecedor_cnpj" placeholder="CNPJ" value="<?php echo set_value('fornecedor_cnpj'); ?>">
                  <?php echo form_error('fornecedor_cnpj', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-2">
                  <label>Inscrição estadual</label>
                  <input type="text" class="form-control form-control-user" name="fornecedor_ie" placeholder="Inscrição estadual" value="<?php echo set_value('fornecedor_ie'); ?>">
                  <?php echo form_error('fornecedor_ie', '<small class="form-text text-danger">','</small>'); ?>
                </div>
              </div>  
              <div class="form-group row">
                <div class="col-md-3">
                  <label>E-mail*</label>
                  <input type="email" class="form-control form-control-user" name="fornecedor_email" placeholder="Seu e-mail" value="<?php echo set_value('fornecedor_email'); ?>">
                  <?php echo form_error('fornecedor_email', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-2">
                  <label>Telefone</label>
                  <input type="text" class="form-control form-control-user phone_with_ddd" name="fornecedor_telefone" placeholder="Informe um telefone" value="<?php echo set_value('fornecedor_telefone'); ?>">
                  <?php echo form_error('fornecedor_telefone', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-2">
                  <label>Celular*</label>
                  <input type="text" class="form-control form-control-user sp_celphones" name="fornecedor_celular" placeholder="Informe um celular" value="<?php echo set_value('fornecedor_celular'); ?>">
                  <?php echo form_error('fornecedor_celular', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-2">
                  <label>Contato</label>
                  <input type="text" class="form-control form-control-user" name="fornecedor_contato" placeholder="Informe um contato" value="<?php echo set_value('fornecedor_contato'); ?>">
                  <?php echo form_error('fornecedor_contato', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>CEP</label>
                  <input type="text" class="form-control form-control-user cep" name="fornecedor_cep" placeholder="Informe um cep" value="<?php echo set_value('fornecedor_cep'); ?>">
                  <?php echo form_error('fornecedor_cep', '<small class="form-text text-danger">','</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-4">
                  <label>Endereço*</label>
                  <input type="text" class="form-control form-control-user" name="fornecedor_endereco" placeholder="Informe endereço" value="<?php echo set_value('fornecedor_endereco'); ?>">
                  <?php echo form_error('fornecedor_endereco', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-1">
                  <label>Número</label>
                  <input type="text" class="form-control form-control-user" name="fornecedor_numero_endereco" placeholder="Informe número" value="<?php echo set_value('fornecedor_numero_endereco'); ?>">
                  <?php echo form_error('fornecedor_numero_endereco', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Complemento</label>
                  <input type="text" class="form-control form-control-user" name="fornecedor_complemento" placeholder="Informe complemento" value="<?php echo set_value('fornecedor_complemento'); ?>">
                  <?php echo form_error('fornecedor_complemento', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-4">
                  <label>Bairro*</label>
                  <input type="text" class="form-control form-control-user" name="fornecedor_bairro" placeholder="Informe um bairro" value="<?php echo set_value('fornecedor_bairro'); ?>">
                  <?php echo form_error('fornecedor_bairro', '<small class="form-text text-danger">','</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-4">
                  <label>Cidade*</label>
                  <input type="text" class="form-control form-control-user" name="fornecedor_cidade" placeholder="Informe uma cidade" value="<?php echo set_value('fornecedor_cidade'); ?>">
                  <?php echo form_error('fornecedor_cidade', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-1">
                    <label>UF*</label>
                    <input type="text" class="form-control form-control-user uf" name="fornecedor_estado" placeholder="Informe UF" value="<?php echo set_value('fornecedor_estado'); ?>">
                    <?php echo form_error('fornecedor_estado', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-1">
                  <label>Ativo</label>
                  <select class="custom-select" name="fornecedor_ativo">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                  </select> 
                </div>
                <div class="col-md-6">
                  <label>Observação</label>
                    <textarea class="form-control form-control-user" name="fornecedor_obs" placeholder="Texto"><?php echo set_value('fornecedor_obs'); ?></textarea>
                    <?php echo form_error('fornecedor_obs', '<small class="form-text text-danger">','</small>'); ?>  
                </div> 
              </div>
               
              <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
              <a title="Cadastrar novo fornecedor" href="<?php echo base_url($this->router->fetch_class()); ?>" class="btn btn-sm btn-success ml-2">Voltar</a> <BR>
              <label>*Campos obrigatórios</label>
            </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      