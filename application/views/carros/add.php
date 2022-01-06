
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
            <li class="breadcrumb-item"><a href="<?php echo base_url('carros') ?>">Carros</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo ?></li>
          </ol>
        </nav>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
            <form class="user" method="POST" name="form_add">
              <?php if (isset($carro)): ?>
              <p><strong><i class="fas fa-clock"></i>&nbsp;&nbsp;Última atualização:&nbsp;</strong><?php echo formata_data_banco_com_hora($carro->carro_data_alteracao); ?></p>
              <?php endif; ?>
              <div class="form-group row">
                <div class="col-md-3">
                  <label>Placa*</label>
                  <input type="text" class="form-control form-control-user" name="carro_placa" placeholder="Placa" value="<?php echo strtoupper(set_value('carro_placa')); ?>">
                  <?php echo form_error('carro_placa', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Carro*</label>
                  <input type="text" class="form-control form-control-user" name="carro_nome" placeholder="Carro" value="<?php echo strtoupper(set_value('carro_nome')); ?>">
                  <?php echo form_error('carro_nome', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Modelo</label>
                  <input type="text" class="form-control form-control-user" name="carro_modelo" placeholder="Modelo do carro" value="<?php echo strtoupper(set_value('carro_modelo')); ?>">
                  <?php echo form_error('carro_modelo', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Combustivel*</label>
                  <select class="custom-select" name="carro_combustivel">
                    <option value="0">Etanol</option>
                    <option value="1">Gasolina</option>
                    <option value="2">Flex</option>
                    <option value="3">Diesel</option>
                  </select>
                  <?php echo form_error('carro_combustivel', '<small class="form-text text-danger">','</small>'); ?>
                </div>
              </div>  
              <div class="form-group row">
                <div class="col-md-3">
                  <label>Ano*</label>
                  <input type="text" class="form-control form-control-user" name="carro_ano" placeholder="Ano do carro" value="<?php echo set_value('carro_ano'); ?>">
                  <?php echo form_error('carro_ano', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Cor*</label>
                  <input type="text" class="form-control form-control-user" name="carro_cor" placeholder="Cor do carro" value="<?php echo strtoupper(set_value('carro_cor')); ?>">
                  <?php echo form_error('carro_cor', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Portas*</label>
                  <select class="custom-select" name="carro_portas">
                    <option value="0">2 Portas</option>
                    <option value="1">4 Portas</option>
                  </select>
                  <?php echo form_error('carro_portas', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Acessorio*</label>
                  <input type="text" class="form-control form-control-user" name="carro_acessorio" placeholder="Acessórios" value="<?php echo set_value('carro_acessorio'); ?>">
                  <?php echo form_error('carro_acessorio', '<small class="form-text text-danger">','</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3">
                  <label>Status*</label>
                  <input type="text" class="form-control form-control-user" name="carro_status" placeholder="Status do carro" value="<?php echo strtoupper(set_value('carro_status')); ?>">
                  <?php echo form_error('carro_status', '<small class="form-text text-danger">','</small>'); ?>
                </div>  
                <div class="col-md-3">
                  <label>Lts Tanque</label>
                  <input type="text" class="form-control form-control-user" name="carro_tanque" placeholder="Tamanho do tanque" value="<?php echo set_value('carro_tanque'); ?>">
                  <?php echo form_error('carro_tanque', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>KM</label>
                  <input type="text" class="form-control form-control-user" name="carro_km" placeholder="Informe o KM" value="<?php echo set_value('carro_km'); ?>">
                  <?php echo form_error('carro_km', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Ativo</label>
                  <select class="custom-select" name="carro_ativo">
                    <option value="0">Sim</option>
                    <option value="1">Não</option>
                  </select> 
                </div>
              </div>
               
              <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
              <a title="Cadastrar novo carro" href="<?php echo base_url($this->router->fetch_class()); ?>" class="btn btn-sm btn-success ml-2">Voltar</a> <BR>
              <label>*Campos obrigatórios</label>
            </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      