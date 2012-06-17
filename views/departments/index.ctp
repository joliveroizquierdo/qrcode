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
	<li><a <?php echo $this->Html->link(sprintf(__('Nuevo %s', true), __('Departamento', true)), array('action' => 'add')); ?> </a></li>
	<li><?php echo $this->Html->link(__('Salir', true), array('controller' => 'users', 'action' => 'logout'))?></li>
	<h3 id="lugar">Departamentos</h3>
</ul>

<table id="general" width="" align="center">

  <thead>
     <th valign="top" align="center" width="800" colspan="5"></th>
   </thead>

   <tr class="encabezado">
     <th valign="top" align="left" width="10">Id</th>
     <th valign="top" align="left" width="100">Nombre</th>
     <th valign="top" align="left" width="100">Ubicacion</th>
     <th valign="top" align="left" width="100">Mision</th>
     <th valign="top" align="left" width="100">Vision</th>
     <th valign="top" align="left" width="100">Facultad</th>
     <th valign="top" align="left" width="20"></th>
     <th valign="top" align="left" width="20"></th>
     <th valign="top" align="left" width="20"></th>
     
   </tr>
<?php foreach ($departments as $department):?>
   <tr class="registros">
     <td valign="top" align="left" width="10"> <?php echo $department['Department']['id']; ?> </td>
     <td valign="top" align="left" width="100"> <?php echo $department['Department']['nombre']; ?> </td>
     <td valign="top" align="left" width="100"> <?php echo $department['Department']['ubicacion'];?> </td>
	 <td valign="top" align="left" width="100"> <?php echo substr($department['Department']['mision'],0,20);?>...</td>
	 <td valign="top" align="left" width="100"> <?php echo substr($department['Department']['vision'],0,20);?>...</td>
	 <td valign="top" align="left" width="100"> <?php echo $this->Html->link($department['Faculty']['id'], array('controller' => 'faculties', 'action' => 'view', $department['Faculty']['id'])); ?> </td>
	 
	 <td valign="top" align="left" width="20"> <div id="ver" class="tooltip2"> <?php echo $this->Html->link(__('', true), array('action' => 'view', $department['Department']['id'])); ?> <span class="classic2">Descripcion</span> </div></td>
	 <td valign="top" align="left" width="20"> <div id="editar" class="tooltip2"> <?php echo $this->Html->link(__('', true), array('action' => 'edit', $department['Department']['id'])); ?> <span class="classic2">Modificar</span> </div></td>
	 <td valign="top" align="left" width="20"> <div id="eliminar" class="tooltip2"> <?php echo $this->Html->link(__('', true), array('action' => 'delete', $department['Department']['id']), null, sprintf(__('Esta totalmente seguro de eliminar # %s?', true), $department['Department']['id'])); ?> <span class="classic2">Eliminar</span> </div></td>
   </tr>
<?php endforeach;?>
</table>

<div id="separador"><br /></div>