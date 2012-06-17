<ul id="menuSession">
	<li><a <?php echo $this->Html->link(__('Home', true), array('controller' => 'users', 'action' => 'logout'))?></a></li>
	<h3 id="lugar">Facultades</h3>
</ul>

<table id="usuarios" width="" align="center">

  <thead>
     <th valign="top" align="center" width="800" colspan="5"><h2 id="subtitulos">Listado de Las Facultades de La Universidad de Cordoba.</h2></th>
   </thead>

   <tr class="encabezado">
     
     <th valign="top" align="left" width="100">Nombre</th>
     <th valign="top" align="left" width="100">Ubicacion</th>
     <th valign="top" align="left" width="100">Decano</th>
     <th valign="top" align="left" width="100">Mision</th>
     <th valign="top" align="left" width="100">Vision</th>
     <th valign="top" align="left" width="20">Ver</th>
    
     
   </tr>
<?php foreach ($faculties as $faculty):?>
   <tr class="registros">
  
     <td valign="top" align="left" width="100"> <?php echo $faculty['Faculty']['nombre']; ?> </td>
     <td valign="top" align="left" width="100"> <?php echo $faculty['Faculty']['ubicacion'];?> </td>
	 <td valign="top" align="left" width="100"> <?php echo $faculty['Faculty']['decano']; ?> </td>
	 <td valign="top" align="left" width="100"> <?php echo substr($faculty['Faculty']['mision'],0,40);?>...</td>
	 <td valign="top" align="left" width="100"> <?php echo substr($faculty['Faculty']['vision'],0,40);?>...</td>
	 <td valign="top" align="left" width="20"> <div id="ver" class="tooltip2"> <?php echo $this->Html->link(__('', true), array('action' => 'view2', $faculty['Faculty']['nombre'])); ?> <span class="classic2">Ver&nbsp;&nbsp;&nbsp;Datos</span> </div></td>
	 
	  </tr>
<?php endforeach;?>
</table>

<div id="separador"><br /></div>


		
		
		