<div class="departments view">
<h2><?php  __('Departmentos');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $department['Department']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $department['Department']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ubicacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $department['Department']['ubicacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mision'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $department['Department']['mision']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vision'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $department['Department']['vision']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Faculty'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($department['Faculty']['nombre'], array('controller' => 'faculties', 'action' => 'view', $department['Faculty']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Editar %s', true), __('Departmento', true)), array('action' => 'edit', $department['Department']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Eliminar %s', true), __('Departmento', true)), array('action' => 'delete', $department['Department']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $department['Department']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Departmentos', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Nuevo %s', true), __('Departmento', true)), array('action' => 'add')); ?> </li>
	   <li> <?php echo $this->Html->link(__('Cerrar sesion', true), array('controller' => 'users', 'action' => 'logout'))?></li>
    </ul>
</div>
