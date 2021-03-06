
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
            <li class="breadcrumb-item"><a href="<?php echo base_url('servicos') ?>">Servicos</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo ?></li>
          </ol>
        </nav>
        <!-- DataTales Example -->
          <div class="card shadow mb-4">
            
            <div class="card-body">
            <form class="user" method="POST" name="form_edit">
              <p><strong><i class="fas fa-clock"></i>&nbsp;&nbsp;Última atualização:&nbsp;</strong><?php echo formata_data_banco_com_hora($servico->servico_data_alteracao); ?></p>
              <div class="form-group row">
                <div class="col-md-6">
                  <label>Serviço*</label>
                  <input type="text" class="form-control form-control-user" name="servico_nome" placeholder="Seu serviço" value="<?php echo $servico->servico_nome; ?>">
                  <?php echo form_error('servico_nome', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Preço*</label>
                  <input type="text" class="form-control form-control-user money" name="servico_preco" placeholder="Seu preço" value="<?php echo $servico->servico_preco; ?>">
                  <?php echo form_error('servico_preco', '<small class="form-text text-danger">','</small>'); ?>
                </div>
                <div class="col-md-3">
                  <label>Ativo</label>
                  <select class="custom-select" name="servico_ativo">
                    <option value="0" <?php echo ($servico->servico_ativo == 0) ? 'selected' : '' ?>>Não</option>
                    <option value="1" <?php echo ($servico->servico_ativo == 1) ? 'selected' : '' ?>>Sim</option>
                  </select> 
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label>Descrição*</label>
                  <textarea class="form-control form-control-user" name="servico_descricao" placeholder="Descrição" style="min-height: 100px !important;"> <?php echo $servico->servico_descricao; ?></textarea>
                  <?php echo form_error('servico_descricao', '<small class="form-text text-danger">','</small>'); ?>                 
                </div>
              </div>                          
                <div class="form-group row">
                  <input type="hidden" name="servico_id" value="<?php echo $servico->servico_id; ?>"/>
                </div>
              <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
              <a title="Cadastrar novo servico" href="<?php echo base_url($this->router->fetch_class()); ?>" class="btn btn-sm btn-success ml-2">Voltar</a> <BR>
              <label>*Campos obrigatórios</label>
            </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      