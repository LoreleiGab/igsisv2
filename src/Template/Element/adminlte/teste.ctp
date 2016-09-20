

  <!-- Sidebar Menu -->
    
  <ul class="sidebar-menu">
    <li class="header">Menu do Módulo</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Início</span></a></li>
	<li><?= $this->Html->link(__('Instituição'), ['controller' => 'Instituicaos', 'action' => 'index']) ?></li>
	<li><?= $this->Html->link(__('Local'), ['controller' => 'Locals', 'action' => 'index']) ?></li>
	<li><?= $this->Html->link(__('Módulos'), ['controller' => 'Modulos', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Projetos'), ['controller' => 'ProjetoEspecials', 'action' => 'index']) ?>
	<li><?= $this->Html->link(__('Usuários'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
	<li><?= $this->Html->link(__('Verbas'), ['controller' => 'Verbas', 'action' => 'index']) ?></li>
	<li><a href="#"><i class="fa fa-laptop"></i> <span>Chamados</span></a></li>
	<!--
    <li class="treeview">
      <a href="#"><i class="fa fa-link"></i> <span>Outras opções</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><a href="#">Carregar módulos</a></li>
        <li><a href="#">Ajuda</a></li>
		<li><a href="#">Sair</a></li>
      </ul>
    </li>-->
  </ul>
  <!-- /.sidebar-menu -->
