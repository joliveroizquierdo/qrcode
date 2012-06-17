<ul id="menuSession">
	<li><a <?php echo $this->Html->link(__('Home', true), array('controller' => 'users', 'action' => 'logout'))?></a></li>
	<h3 id="lugar">Departamentos</h3>
</ul>

<table id="usuarios" width="" align="center">

  <thead>
     <th valign="top" align="center" width="800" colspan="5"><h2 id="subtitulos">Listado de Los Departamentos de La Universidad de Cordoba.</h2></th>
   </thead>

   <tr class="encabezado">
    
     <th valign="top" align="left" width="100">Nombre</th>
     <th valign="top" align="left" width="100">Ubicacion</th>
     <th valign="top" align="left" width="100">Mision</th>
     <th valign="top" align="left" width="100">Vision</th>
     <th valign="top" align="left" width="20">Ver</th>
   </tr>
<?php foreach ($departments as $department):?>
   <tr class="registros">
  
     <td valign="top" align="left" width="100"> <?php echo $department['Department']['nombre']; ?> </td>
     <td valign="top" align="left" width="100"> <?php echo $department['Department']['ubicacion'];?> </td>
	 <td valign="top" align="left" width="100"> <?php echo substr($department['Department']['mision'],0,40);?>...</td>
	 <td valign="top" align="left" width="100"> <?php echo substr($department['Department']['vision'],0,40);?>...</td>
	 <!--<td valign="top" align="left" width="100"> <?php echo $this->Html->link($department['Faculty']['id'], array('controller' => 'faculties', 'action' => 'view', $department['Faculty']['id'])); ?> </td>-->
	 <td valign="top" align="left" width="20"> <div id="ver" class="tooltip2"> <?php echo $this->Html->link(__('', true), array('action' => 'view2', $department['Department']['nombre'])); ?> <span class="classic2">Ver&nbsp;&nbsp;&nbsp;Datos</span> </div></td>
	  
	 </tr>
<?php endforeach;?>
</table>

<div id="separador"><br /></div>