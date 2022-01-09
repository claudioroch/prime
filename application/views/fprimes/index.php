
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
            <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo ?></li>
          </ol>
        </nav>
        <?php if($message = $this->session->flashdata('error')): ?>   
          <div class="row">
            <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;<?php echo $message ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            </div>
          </div>
        <?php endif;?>  

        <?php if($message = $this->session->flashdata('sucesso')): ?>   
          <div class="row">
            <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong><i class="far fa-smile-wink"></i>&nbsp;&nbsp;<?php echo $message ?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            </div>
          </div>
        <?php endif;?>  

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a title="Cadastrar nova Fatura" href="<?php echo base_url('faturas_prime/add') ?> " class="btn btn-sm btn-success float-right"><i class="fas fa-plus"></i>&nbsp;Novo</a> 
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome cliente</th>
                      <th>Descrição</th>
                      <th>Valor</th>
                      <th>Vencimento</th>
                      <th class="text-center">Ativo</th>
                      <th class="text-right no-sort pr-2">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($faturas_prime as $fatura_prime):?>
                    <tr>
                      <td><?php echo $fatura_prime->fatura_prime_id ?></td>
                      <td><?php echo $fatura_prime->fatura_prime_cliente_id ?></td>
                      <td><?php echo $fatura_prime->fatura_prime_descricao ?></td>
                      <td><?php echo $fatura_prime->fatura_prime_valor ?></td>
                      <td><?php echo $fatura_prime->fatura_prime_vencimento ?></td>
                      <td class="text-center pr-4"><?php echo ($fatura_prime->fatura_prime_ativo == 1 ? '<span class="badge badge-success btn-sm">Sim</span>' : '<span class="badge badge-danger btn-sm">Não</span>') ?></td>
                      <td class="text-right">
                        <a title="Editar" href="<?php echo base_url('faturas_prime/edit/'.$fatura_prime->fatura_prime_id) ?>" title="Editar" class="btn btn-sm btn-primary"><i class="fas fa-user-edit"></i></a>
                        <a title="Deletar" href="javascript(void)"  data-toggle="modal" data-target="#fatura_prime-<?php echo $fatura_prime->fatura_prime_id; ?>" title="Excluir" class="btn btn-sm btn-danger"><i class="fas fa-user-times"></i></a>
                      </td>
                    </tr>
                      <!-- Logout Modal-->
                    <div class="modal fade" id="fatura_prime-<?php echo $fatura_prime->fatura_prime_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Deseja realmente deletar?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">Para excluir o registro clique em <strong>Sim</strong></div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Não</button>
                            <a class="btn btn-danger btn-sm" href="<?php echo base_url('faturas_prime/del/'.$fatura_prime->fatura_prime_id); ?>">Sim</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      