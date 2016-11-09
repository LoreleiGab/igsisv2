<ul class="sidebar-menu">
	<li class="active"><a href="#"><span>Informações Gerais</span></a></li>
	<li class="treeview"><a href="#"><span>Serviços</span> <i class="fa fa-angle-left pull-right"></i></a>
		<ul class="treeview-menu">
			<li><?= $this->Html->link(__('Interno'), ['controller' => 'Producers', 'action' => 'index']) ?></li>
			<li><?= $this->Html->link(__('Externo'), ['controller' => 'Services', 'action' => 'index']) ?></li>
		</ul>
	</li> 
	<li class="treeview"><a href="#"><span>Especificidades</span> <i class="fa fa-angle-left pull-right"></i></a></li>
	<li class="treeview"><a href="#"><span>Arquivos<br/> Comunicação / Produção</span> <i class="fa fa-angle-left pull-right"></i></a></li>
	<li class="treeview"><a href="#"><span>Ocorrências</span> <i class="fa fa-angle-left pull-right"></i></a>
		<ul class="treeview-menu">
			<li><?= $this->Html->link(__('Listar'), ['controller' => 'Institutions', 'action' => 'index']) ?></li>
			<li><?= $this->Html->link(__('Novo', ['Institutions']), ['action' => 'add']) ?></li>
		</ul>
	</li>
	<li class="treeview"><a href="#"><span>Contratados</span> <i class="fa fa-angle-left pull-right"></i></a></li>
	<li class="treeview"><a href="#"><span>Enviar</span> <i class="fa fa-angle-left pull-right"></i></a></li>
</ul>
