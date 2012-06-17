<div class="administrators form">
<?php echo $this->Form->create('Administrator');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Administrator', true)); ?></legend>
	<?php
		echo $this->Form->input('cedula');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('email');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Administrators', true)), array('action' => 'index'));?></li>
	</ul>
</div>