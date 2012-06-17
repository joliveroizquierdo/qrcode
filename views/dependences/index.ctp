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
	<li><a <?php echo $this->Html->link(sprintf(__('Nueva %s', true), __('Oficina', true)), array('action' => 'add')); ?> </a></li>
	<li><a <?php echo $this->Html->link(__('Salir', true), array('controller' => 'users', 'action' => 'logout'))?></a></li>
	<h3 id="lugar">Oficinas</h3>
</ul>

<table id="general" width="" align="center">

  <thead>
     <th valign="top" align="center" width="800" colspan="5"></th>
   </thead>

   <tr class="encabezado">
     <th valign="top" align="left" width="10">Id</th>
     <th valign="top" align="left" width="100">Nombre</th>
     <th valign="top" align="left" width="100">Ubicacion</th>
     <th valign="top" align="left" width="100">Funcion</th>
     
     <th valign="top" align="left" width="20"></th>
     <th valign="top" align="left" width="20"></th>
     <th valign="top" align="left" width="20"></th>
     
   </tr>
<?php foreach ($dependences as $dependence):?>
   <tr class="registros">
     <td valign="top" align="left" width="10"> <?php echo $dependence['Dependence']['id']; ?> </td>
     <td valign="top" align="left" width="100"> <?php echo $dependence['Dependence']['nombre']; ?> </td>
     <td valign="top" align="left" width="100"> <?php echo $dependence['Dependence']['ubicacion'];?> </td>
	 <td valign="top" align="left" width="100"> <?php echo substr($dependence['Dependence']['funcion'],0,20);?>...</td>

	 <td valign="top" align="left" width="20"> <div id="ver" class="tooltip2"> <?php echo $this->Html->link(__('', true), array('action' => 'view', $dependence['Dependence']['id'])); ?> <span class="classic2">Descripcion</span> </div></td>
	 <td valign="top" align="left" width="20"> <div id="editar" class="tooltip2"> <?php echo $this->Html->link(__('', true), array('action' => 'edit', $dependence['Dependence']['id'])); ?> <span class="classic2">Modificar</span> </div></td>
	 <td valign="top" align="left" width="20"> <div id="eliminar" class="tooltip2"> <?php echo $this->Html->link(__('', true), array('action' => 'delete', $dependence['Dependence']['id']), null, sprintf(__('Esta totalmente seguro de eliminar # %s?', true), $dependence['Dependence']['id'])); ?> <span class="classic2">Eliminar</span> </div></td>
   </tr>
<?php endforeach;?>
</table>

<div id="separador"><br /></div>