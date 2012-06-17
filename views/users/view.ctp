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
	<li><a <?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Usuarios', true)), array('action' => 'index')); ?> </a></li>
	<li><a <?php echo $this->Html->link(sprintf(__('Nuevo %s', true), __('Usuario', true)), array('action' => 'add')); ?> </a></li>
	<li><a <?php echo $this->Html->link(__('Salir', true), array('action' => 'logout'))?> </a></li>
	<h3 id="lugar">Descripcion Usuario</h3>
</ul>

<table id="general" width="" align="center">

  <thead>
     <th valign="top" align="center" width="800" colspan="5"></th>
   </thead>

   <tr class="encabezado">
     <th valign="top" align="left" width="10">Id</th>
     <th valign="top" align="left" width="100">Cedula</th>
     <th valign="top" align="left" width="100">Nombres</th>
     <th valign="top" align="left" width="100">Apellidos</th>
     <th valign="top" align="left" width="100">Email</th>
     <th valign="top" align="left" width="100">Usuario</th>
     <th valign="top" align="left" width="100">Password</th>
     <th valign="top" align="left" width="20"></th>
     <th valign="top" align="left" width="20"></th>
     
     
   </tr>

   <tr class="registros">
     <td valign="top" align="left" width="10"> <?php echo $user['User']['id']; ?> </td>
     <td valign="top" align="left" width="100"> <?php echo $user['User']['cedula']; ?> </td>
     <td valign="top" align="left" width="100"> <?php echo $user['User']['nombres']; ?> </td>
	 <td valign="top" align="left" width="100"> <?php echo $user['User']['apellidos']; ?> </td>
	 <td valign="top" align="left" width="100"> <?php echo $user['User']['email']; ?> </td>
	 <td valign="top" align="left" width="100"> <?php echo $user['User']['username']; ?> </td>
	 <td valign="top" align="left" width="100"> <?php echo $user['User']['password']; ?> </td>
	 
	 <td valign="top" align="left" width="20"> <div id="editar" class="tooltip2"> <?php echo $this->Html->link(__('', true), array('action' => 'edit', $user['User']['id'])); ?> <span class="classic2">Modificar</span> </div></td>
	 <td valign="top" align="left" width="20"> <div id="eliminar" class="tooltip2"> <?php echo $this->Html->link(__('', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> <span class="classic2">Eliminar</span> </div></td>
   </tr>

</table>

<div id="separador"><br /></div>
