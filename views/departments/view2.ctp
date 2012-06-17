<meta http-equiv="Expires" content="0" />
<meta http-equiv="Pragma" content="no-cache" />
<script type="text/javascript">

{
if(history.forward(1))
location.replace(history.forward(1))
}

</script>
<ul id="menuSession">
	<li><a <?php echo $this->Html->link(__('Home', true), array('controller' => 'users', 'action' => 'logout'))?></a></li>
	<li><a <?php echo $this->Html->link(__('Listar Departamentos', true), array('controller' => 'departments', 'action' => 'index2'))?></a></li>
	<h3 id="lugar">Descripcion Departamento</h3>
</ul>

<div id="datos">
	
			<?php //echo $department['Department']['id']; ?>
			 
			<p class="datos-usuario"><b>Nombre:&nbsp;</b><?php echo $department['Department']['nombre']; ?></p>
			
			<p class="datos-usuario"><b>Ubicacion:&nbsp;</b><?php echo $department['Department']['ubicacion']; ?></p>
			
			<?php //echo $this->Html->link($department['Faculty']['id'], array('controller' => 'faculties', 'action' => 'view', $department['Faculty']['id'])); ?>
			</br>
			<p class="datos-usuario"><b>Misi&oacute;n.</b></br><?php echo $department['Department']['mision']; ?></p>
			</br>
			<p class="datos-usuario"><b>Visi&oacute;n.</b></br><?php echo $department['Department']['vision']; ?></p>
			</br>
		    <a href="#video1">Entrada Autos</a>
		    
		    <a href="#video2">Entrada Estudiantes</a>
		<!--<div id="qrCode">
		    <?php echo $html->image (''.$department['Department']['nombre'].'.png',array('alt' => 'CAKEPHP', 'width' => '100','height'=>'100')); ?>
		</div>-->
	
</div>
		
<div id="separador"><br /></div>
<div class="lightbox" id="video1">
			<div class="w640 h386">
              <iframe width="640" height="386" src="<?php echo $department['Department']['video1']; ?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<p class="close"><a href="#" title="Cerrar"><span>X</span></a></p>
</div>
<div class="lightbox" id="video2">
			<div class="w640 h386">
              <iframe width="640" height="386" src="<?php echo $department['Department']['video2']; ?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<p class="close"><a href="#" title="Cerrar"><span>X</span></a></p>
</div>


			

