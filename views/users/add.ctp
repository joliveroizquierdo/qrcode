<meta http-equiv="Expires" content="0" />
<meta http-equiv="Pragma" content="no-cache" />
<script type="text/javascript">

{
if(history.forward(1))
location.replace(history.forward(1))
}

</script>  

<ul id="menuSession">
	<li><?php echo $this->Html->link(sprintf(__('Menu', true), __('', true)), array('controller' => 'users','action' => 'menu')); ?> </li>
	<li><a <?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Usuarios', true)), array('action' => 'index'));?> </a></li>
	<li><a <?php echo $this->Html->link(__('Salir', true), array('action' => 'logout'))?></a></li>
	<h3 id="lugar">Nuevo Usuario</h3>
</ul>


<?php echo $this->Form->create('User');?>
   
    <?php
		echo $this->Form->input('cedula');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('email');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
    ?>

<?php echo $this->Form->end(__('Guardar', true));?>

</div>
<div id="separador"><br /></div>


