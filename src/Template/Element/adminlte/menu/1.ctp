<!-- Sidebar Menu -->
    
  <ul class="sidebar-menu">
	<li class="active"><a href="#"><i class="fa fa-home"></i> <span>Início</span></a></li>
  <!-- Menu Administrador -->
    <li class="treeview"><a href="#"><i class="fa fa-circle"></i> <span>Administrador</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
		<li class="treeview">
		  <a href="#"><i class="fa fa-circle"></i> <span>Avançado</span> <i class="fa fa-angle-left pull-right"></i></a>
		  <ul class="treeview-menu">
			<li><a href="#"><i class="fa fa-circle-o"></i>Estatística do sistema</a></li>
			<li><a href="#"><i class="fa fa-circle-o"></i>Reabrir eventos</a></li>
			<li><a href="#"><i class="fa fa-circle-o"></i>Integração SOF / IGSIS</a></li>
		  </ul>
		</li>
		<li class="treeview">
		  <a href="#"><i class="fa fa-bullhorn"></i> <span>Chamados</span> <i class="fa fa-angle-left pull-right"></i></a>
		  <ul class="treeview-menu">
			<li><?= $this->Html->link(__('Listar'), ['controller' => 'Calls', 'action' => 'index']) ?></li>
			<li><?= $this->Html->link(__('Novo', ['Calls']), ['action' => 'add']) ?></li>
		  </ul>
		</li>
		<li class="treeview">
		  <a href="#"><i class="fa fa-folder-open-o"></i> <span>Grupos</span> <i class="fa fa-angle-left pull-right"></i></a>
		  <ul class="treeview-menu">
			<li><?= $this->Html->link(__('Listar'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
			<li><?= $this->Html->link(__('Novo', ['Groups']), ['action' => 'add']) ?></li>
		  </ul>
		</li>
		<li class="treeview">
		  <a href="#"><i class="fa fa-institution"></i> <span>Instituição</span> <i class="fa fa-angle-left pull-right"></i></a>
		  <ul class="treeview-menu">
			<li><?= $this->Html->link(__('Listar'), ['controller' => 'Institutions', 'action' => 'index']) ?></li>
			<li><?= $this->Html->link(__('Novo', ['Institutions']), ['action' => 'add']) ?></li>
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
		  <a href="#"><i class="fa fa-folder-open-o"></i> <span>Permissão</span> <i class="fa fa-angle-left pull-right"></i></a>
		  <ul class="treeview-menu">
			<li><?= $this->Html->link(__('Listar'), ['controller' => 'Permissions', 'action' => 'index']) ?></li>
			<li><?= $this->Html->link(__('Novo', ['Permissions']), ['action' => 'add']) ?></li>
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
			<li><?= $this->Html->link(__('Listar'), ['controller' => 'Users', 'action' => 'index']) ?></li>
			<li><?= $this->Html->link(__('Novo', ['Users']), ['action' => 'add']) ?></li>
			<li><?= $this->Html->link(__('Online'), ['controller' => 'Users', 'action' => 'index']) ?></li>
		  </ul>
		</li>	
		<li class="treeview">
		  <a href="#"><i class="fa fa-dollar"></i> <span>Verbas</span> <i class="fa fa-angle-left pull-right"></i></a>
		  <ul class="treeview-menu">
			<li><?= $this->Html->link(__('Listar'), ['controller' => 'Funds', 'action' => 'index']) ?></li>
			<li><?= $this->Html->link(__('Novo', ['Funds']), ['action' => 'add']) ?></li>
		  </ul>
		</li>
		</ul>
	  </li><!-- FIM Menu Administrador -->
	  <!-- Menu Evento -->
	  <li class="treeview"><a href="#"><i class="fa fa-circle"></i> <span>Evento</span> <i class="fa fa-angle-left pull-right"></i></a>
	    <ul class="treeview-menu">		
			<li><?= $this->Html->link(__('Listar'), ['controller' => 'Events', 'action' => 'index']) ?></li>
			<li><?= $this->Html->link(__('Novo', ['Events']), ['action' => 'add']) ?></li>
			<li>  
				<?php
					if($controller == 'Events' || $controller == 'Producers'){
						include 'Events.ctp';
					}else{
						echo "teste";
					}  
				?>
			</li>		  
		</ul>
	  </li>
  </ul>
  <!-- /.sidebar-menu -->
  
  
  