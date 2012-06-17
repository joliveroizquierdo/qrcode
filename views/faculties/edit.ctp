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
	<li><a <?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Facultades', true)), array('action' => 'index'));?> </a></li>
	<li><a <?php echo $this->Html->link(__('Salir', true), array('action' => 'logout'))?></a></li>
	<h3 id="lugar">Editar Facultad</h3>
</ul>

<div id="formulario">
<?php echo $this->Form->create('Faculty');?>
	
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('ubicacion');
		echo $this->Form->input('decano');
		//echo $this->Form->input('mision');
		//echo $this->Form->input('vision');
		echo $this->Form->input('mision',array('type'=>'TextArea','label'=> 'Mision'));
		echo $this->Form->input('vision',array('type'=>'TextArea','label'=> 'Vision'));
	?>
	
<?php echo $this->Form->end(__('Editar', true));?>

</div>
<div id="separador"><br /></div>
