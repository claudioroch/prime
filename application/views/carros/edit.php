
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
            <form class="user" method="POST" name="form_edit">
              <p><strong><i class="fas fa-clock"></i>&nbsp;&nbsp;Última atualização:&nbsp;</strong><?php echo formata_data_banco_com_hora($carro->carro_data_alteracao); ?></p>  
              <div class="form-group row">
                <div class="col-md-3">
                  <label>Placa*</label>
                  <input type="text" class="form-control form-control-user" name="carro_placa" placeholder="Placa" value="<?php echo $carro->carro_placa; ?>">
                  <?php echo form_error('carro_placa', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Carro*</label>
                  <input type="text" class="form-control form-control-user" name="carro_nome" placeholder="Carro" value="<?php echo $carro->carro_nome; ?>">
                  <?php echo form_error('carro_nome', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Modelo</label>
                  <input type="text" class="form-control form-control-user" name="carro_modelo" placeholder="Modelo do carro" value="<?php echo $carro->carro_modelo; ?>">
                  <?php echo form_error('carro_modelo', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Combustivel*</label>
                  <select class="custom-select" name="carro_combustivel">
                    <option value="0"<?php echo ($carro->carro_combustivel == 0) ? 'selected' : ''?>>Etanol</option>
                    <option value="1"<?php echo ($carro->carro_combustivel == 1) ? 'selected' : ''?>>Gasolina</option>
                    <option value="2"<?php echo ($carro->carro_combustivel == 2) ? 'selected' : ''?>>Flex</option>
                    <option value="3"<?php echo ($carro->carro_combustivel == 3) ? 'selected' : ''?>>Diesel</option>
                  </select>
                  <?php echo form_error('carro_combustivel', '<small class="form-text text-danger">','</small>'); ?>
                </div>
              </div>  
              <div class="form-group row">
                <div class="col-md-3">
                  <label>Ano*</label>
                  <input type="text" class="form-control form-control-user" name="carro_ano" placeholder="Ano do carro" value="<?php echo $carro->carro_ano; ?>">
                  <?php echo form_error('carro_ano', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Cor*</label>
                  <input type="text" class="form-control form-control-user" name="carro_cor" placeholder="Cor do carro" value="<?php echo $carro->carro_cor; ?>">
                  <?php echo form_error('carro_cor', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Portas*</label>
                  <select class="custom-select" name="carro_portas">
                    <option value="0" <?php echo ($carro->carro_portas == 0) ? 'selected' : ''?>>2 Portas</option>
                    <option value="1" <?php echo ($carro->carro_portas == 1) ? 'selected' : ''?>>4 Portas</option>
                  </select>
                  <?php echo form_error('carro_portas', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Acessorio*</label>
                  <input type="text" class="form-control form-control-user" name="carro_acessorio" placeholder="Acessórios" value="<?php echo $carro->carro_acessorio; ?>">
                  <?php echo form_error('carro_acessorio', '<small class="form-text text-danger">','</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3">
                  <label>Status*</label>
                  <input type="text" class="form-control form-control-user" name="carro_status" placeholder="Status do carro" value="<?php echo $carro->carro_status; ?>">
                  <?php echo form_error('carro_status', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Lts Tanque</label>
                  <input type="text" class="form-control form-control-user" name="carro_tanque" placeholder="Tamanho do tanque" value="<?php echo $carro->carro_tanque; ?>">
                  <?php echo form_error('carro_tanque', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>KM</label>
                  <input type="text" class="form-control form-control-user" name="carro_km" placeholder="Informe o KM" value="<?php echo$carro->carro_km; ?>">
                  <?php echo form_error('carro_km', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Ativo</label>
                  <select class="custom-select" name="carro_ativo">
                    <option value="0"<?php echo ($carro->carro_ativo == 0) ? 'selected' : '' ?>>Sim</option>
                    <option value="1"<?php echo ($carro->carro_ativo == 1) ? 'selected' : '' ?>>Não</option>
                  </select> 
                </div>
              </div>
                <div class="form-group row">
                  <input type="hidden" name="carro_id" value="<?php echo $carro->carro_id; ?>"/>
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

      