  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('/') ?>">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-globe"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Doctor OS</div>
  </a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo base_url('/')?>">
    <i class="fas fa-home"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Cadastros
</div>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-database"></i>
      <span>Cadastros</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Escolha uma opção:</h6>
        <a title="Gerenciar clientes" class="collapse-item" href="<?php echo base_url('clientes') ?>"><i class="fas fa-user-tie text-gray-900"></i>&nbsp;Clientes</a>
        <a title="Gerenciar fornecedores" class="collapse-item" href="<?php echo base_url('fornecedores') ?>"><i class="fas fa-user-tag text-gray-900"></i>&nbsp;Fornecedores</a>
        <a title="Gerenciar carros" class="collapse-item" href="<?php echo base_url('carros') ?>"><i class="fas fa-car text-gray-900"></i>&nbsp;Carros</a>
        <!-- <a title="Gerenciar vendedores" class="collapse-item" href="<?php echo base_url('vendedores') ?>"><i class="fas fa-user-secret text-gray-900""></i>&nbsp;Vendedores</a> -->
        <!-- <a title="Gerenciar serviços" class="collapse-item" href="<?php echo base_url('servicos') ?>"><i class="fas fa-laptop text-gray-900""></i>&nbsp;Serviços</a> -->
      </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Faturas
</div>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-file-invoice-dollar"></i>
      <span>Faturas</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Escolha uma opção:</h6>
        <a title="Gerenciar fatura prime" class="collapse-item" href="<?php echo base_url('fprimes') ?>"><i class="fas fa-receipt text-gray-900"></i></i>&nbsp;Fatura Prime</a>
        <a title="Gerenciar fatura empreendimentos" class="collapse-item" href="<?php echo base_url('fatura_empreendimentos') ?>"><i class="fas fa-receipt text-gray-900"></i></i>&nbsp;Fatura Empreendimentos</a>
        <a title="Gerenciar fatura " class="collapse-item" href="<?php echo base_url('fatura_') ?>"><i class="fas fa-receipt text-gray-900"></i></i>&nbsp;Fatura</a>
        
      </div>
    </div>
</li>

<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Configurações
</div>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-database"></i>
      <span>Configurações</span>
    </a>
    <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Escolha uma opção:</h6>
        <a title="Gerenciar usuarios" class="collapse-item" href="<?php echo base_url('usuarios') ?>"><i class="fas fa-user-tie text-gray-900"></i>&nbsp;Usuários</a>
        <a title="Gerenciar sistema" class="collapse-item" href="<?php echo base_url('sistema') ?>"><i class="fas fa-user-tag text-gray-900"></i>&nbsp;Sistema</a>
      </div>
    </div>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
  