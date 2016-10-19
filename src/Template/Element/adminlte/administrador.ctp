

  <!-- Sidebar Menu -->
    
  <ul class="sidebar-menu">
    <li class="header">Menu do Módulo</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="#"><i class="fa fa-home"></i> <span>Início</span></a></li>
	<li class="treeview">
      <a href="#"><i class="fa fa-circle"></i> <span>Avançado</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<li><a href="#"><i class="fa fa-circle-o"></i>Estatística do sistema</a></li>
		<li><a href="#"><i class="fa fa-circle-o"></i>Reabrir eventos</a></li>
        <li><li><a href="#"><i class="fa fa-circle-o"></i>Integração SOF / IGSIS</a></li>
      </ul>
    </li>
	<li class="treeview">
      <a href="#"><i class="fa fa-bullhorn"></i> <span>Chamados</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><?= $this->Html->link(__('Listar'), ['controller' => 'Chamados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo', ['Chamados']), ['action' => 'add']) ?></li>
      </ul>
    </li>
	<li class="treeview">
      <a href="#"><i class="fa fa-institution"></i> <span>Instituição</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><?= $this->Html->link(__('Listar'), ['controller' => 'Instituicaos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo', ['Instituicaos']), ['action' => 'add']) ?></li>
      </ul>
    </li>
	<li class="treeview">
      <a href="#"><i class="fa fa-map-marker"></i> <span>Local</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><?= $this->Html->link(__('Listar'), ['controller' => 'Locals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo', ['Locals']), ['action' => 'add']) ?></li>
      </ul>
    </li>
	<li class="treeview">
      <a href="#"><i class="fa fa-folder-open-o"></i> <span>Módulos</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><?= $this->Html->link(__('Listar'), ['controller' => 'Modulos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo', ['Modulo']), ['action' => 'add']) ?></li>
      </ul>
    </li>
	<li class="treeview">
      <a href="#"><i class="fa fa-pencil-square-o"></i> <span>Projetos</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><?= $this->Html->link(__('Listar'), ['controller' => 'ProjetoEspecials', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo', ['ProjetoEspecials']), ['action' => 'add']) ?></li>
      </ul>
    </li>
	<li class="treeview">
      <a href="#"><i class="fa fa-circle"></i> <span>Scripts</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<li><a href="#"><i class="fa fa-circle-o"></i>Atualizar status N.E.</a></li>
		<li><a href="#"><i class="fa fa-circle-o"></i>Importar base</a></li>
		<li><a href="#"><i class="fa fa-circle-o"></i>Script 3</a></li>		
      </ul>
    </li>
	<li class="treeview">
      <a href="#"><i class="fa fa-user"></i> <span>Usuários</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><?= $this->Html->link(__('Listar'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo', ['Usuarios']), ['action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('Online'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
      </ul>
    </li>	
	<li class="treeview">
      <a href="#"><i class="fa fa-dollar"></i> <span>Verbas</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><?= $this->Html->link(__('Listar'), ['controller' => 'Verbas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo', ['Verbas']), ['action' => 'add']) ?></li>
      </ul>
    </li>
	<!-- INÍCIO MENU PADRÃO 
	<li class="header">---------------</li>
	<li class="treeview">
      <a href="#"><i class="fa fa-plus"></i> <span>Outras opções</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o  text-blue"></i> Mural de avisos</a></li>
		<li><a href="#"><i class="fa fa-circle-o text-red"></i> Carregar módulos</a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Ajuda</a></li>
		<li><a href="#"><i class="fa fa-circle-o  text-green"></i> Sair</a></li>
      </ul>
    </li>   
	--><!-- FIM MENU PADRÃO -->
  </ul>
  <!-- /.sidebar-menu -->
