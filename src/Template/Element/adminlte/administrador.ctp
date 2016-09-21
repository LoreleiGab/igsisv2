

  <!-- Sidebar Menu -->
    
  <ul class="sidebar-menu">
    <li class="header">Menu do Módulo</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="#"><i class="fa fa-home"></i> <span>Início</span></a></li>
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
      <a href="#"><i class="fa fa-user"></i> <span>Usuários</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><?= $this->Html->link(__('Listar'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo', ['Usuarios']), ['action' => 'add']) ?></li>
      </ul>
    </li>	
	<li class="treeview">
      <a href="#"><i class="fa fa-dollar"></i> <span>Verbas</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><?= $this->Html->link(__('Listar'), ['controller' => 'Verbas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo', ['Verbas']), ['action' => 'add']) ?></li>
      </ul>
    </li>
  </ul>
  <!-- /.sidebar-menu -->
