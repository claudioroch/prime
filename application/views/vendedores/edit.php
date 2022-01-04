
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
            <li class="breadcrumb-item"><a href="<?php echo base_url('vendedores') ?>">vendedores</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo ?></li>
          </ol>
        </nav>
        <!-- DataTales Example -->
          <div class="card shadow mb-4">
            
            <div class="card-body">
            <form class="user" method="POST" name="form_edit">
              <p><strong><i class="fas fa-clock"></i>&nbsp;&nbsp;Última atualização:&nbsp;</strong><?php echo formata_data_banco_com_hora($vendedor->vendedor_data_alteracao); ?></p>
              <div class="form-group row">
                <div class="col-md-4">
                  <label>Nome*</label>
                  <input type="text" class="form-control form-control-user" name="vendedor_nome_completo" placeholder="Seu nome" value="<?php echo $vendedor->vendedor_nome_completo; ?>">
                  <?php echo form_error('vendedor_nome_completo', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-2">
                  <label>CPF*</label>
                  <input type="text" class="form-control form-control-user cpf" name="vendedor_cpf" placeholder="Seu CPF" value="<?php echo $vendedor->vendedor_cpf; ?>">
                  <?php echo form_error('vendedor_cpf', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-2">
                  <label>RG</label>
                  <input type="text" class="form-control form-control-user" name="vendedor_rg" placeholder="RG" value="<?php echo $vendedor->vendedor_rg; ?>">
                  <?php echo form_error('vendedor_rg', '<small class="form-text text-danger">','</small>'); ?>                 
                </div>
                <div class="col-md-2">
                  <label>Telefone*</label>
                  <input type="text" class="form-control form-control-user" name="vendedor_telefone" placeholder="Seu telefone" value="<?php echo $vendedor->vendedor_telefone; ?>">
                  <?php echo form_error('vendedor_telefone', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-2">
                    <label>Celular</label>
                    <input type="text" class="form-control form-control-user" name="vendedor_celular" placeholder="Seu celular" value="<?php echo $vendedor->vendedor_celular; ?>">
                    <?php echo form_error('vendedor_celular', '<small class="form-text text-danger">','</small>'); ?>                 
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-4">
                  <label>E-mail*</label>
                  <input type="email" class="form-control form-control-user" name="vendedor_email" placeholder="Seu e-mail" value="<?php echo $vendedor->vendedor_email; ?>">
                  <?php echo form_error('vendedor_email', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-2">
                    <label>CEP*</label>
                    <input type="text" class="form-control form-control-user cep" name="vendedor_cep" placeholder="Informe um cep" value="<?php echo $vendedor->vendedor_cep; ?>">
                    <?php echo form_error('vendedor_cep', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-4">
                    <label>Endereço*</label>
                    <input type="text" class="form-control form-control-user" name="vendedor_endereco" placeholder="Informe um endereço" value="<?php echo $vendedor->vendedor_endereco; ?>">
                    <?php echo form_error('vendedor_endereco', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-2">
                  <label>Número</label>
                  <input type="text" class="form-control form-control-user" name="vendedor_numero_endereco" placeholder="Informe número" value="<?php echo $vendedor->vendedor_numero_endereco; ?>">
                  <?php echo form_error('vendedor_numero_endereco', '<small class="form-text text-danger">','</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3">
                  <label>Bairro*</label>
                  <input type="text" class="form-control form-control-user" name="vendedor_bairro" placeholder="Informe um bairro" value="<?php echo $vendedor->vendedor_bairro; ?>">
                  <?php echo form_error('vendedor_bairro', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-4">
                  <label>Complemento</label>
                  <input type="text" class="form-control form-control-user" name="vendedor_complemento" placeholder="Informe complemento" value="<?php echo $vendedor->vendedor_complemento; ?>">
                  <?php echo form_error('vendedor_complemento', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                    <label>Cidade*</label>
                    <input type="text" class="form-control form-control-user" name="vendedor_cidade" placeholder="Informe uma cidade" value="<?php echo $vendedor->vendedor_cidade; ?>">
                    <?php echo form_error('vendedor_cidade', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-1">
                    <label>UF*</label>
                    <input type="text" class="form-control form-control-user uf" name="vendedor_estado" placeholder="Informe o estado" value="<?php echo $vendedor->vendedor_estado; ?>">
                    <?php echo form_error('vendedor_estado', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-1">
                  <label>Ativo</label>
                  <select class="custom-select" name="vendedor_ativo">
                    <option value="0" <?php echo ($vendedor->vendedor_ativo == 0) ? 'selected' : '' ?>>Não</option>
                    <option value="1" <?php echo ($vendedor->vendedor_ativo == 1) ? 'selected' : '' ?>>Sim</option>
                  </select> 
                </div>
              </div>              
              <div class="form-group row">
                <div class="col-md-12">
                 <label>Observação</label>
                  <textarea class="form-control form-control-user" name="vendedor_obs" placeholder="Texto"><?php echo $vendedor->vendedor_obs; ?></textarea>
                  <?php echo form_error('vendedor_obs', '<small class="form-text text-danger">','</small>'); ?>
                </div>
              </div>              
                <div class="form-group row">
                  <input type="hidden" name="vendedor_id" value="<?php echo $vendedor->vendedor_id; ?>"/>
                </div>
              <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
              <a title="Cadastrar novo vendedor" href="<?php echo base_url($this->router->fetch_class()); ?>" class="btn btn-sm btn-success ml-2">Voltar</a> <BR>
              <label>*Campos obrigatórios</label>
            </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      