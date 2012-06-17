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
	<li><a <?php echo $this->Html->link(sprintf(__('Nuevo %s', true), __('Laboratorio', true)), array('action' => 'add')); ?> </a></li>
	<li><a <?php echo $this->Html->link(sprintf(__('Listar %s', true), __('Laboratorios', true)), array('action' => 'index')); ?> </a></li>
	<li><a <?php echo $this->Html->link(__('Salir', true), array('controller' => 'users', 'action' => 'logout'))?></a></li>
	<h3 id="lugar">Descripcion Laboratorio</h3>
</ul>

<div id="formulario">
	<div id="datos">

	    
	    	<p class="datos-usuario"><b>Id:&nbsp;</b><?php echo $laboratory['Laboratory']['id']; ?></p>
	   
		    
		
			<p class="datos-usuario"><b>Nombre:&nbsp;</b><?php echo $laboratory['Laboratory']['nombre']; ?></p> 
		
		    
		
			<p class="datos-usuario"><b>Ubicacion:&nbsp;</b><?php echo $laboratory['Laboratory']['ubicacion']; ?></p>
		
		    
		
			<p class="datos-usuario"><b>Departamento:&nbsp;</b><?php echo $laboratory['Department']['id']; ?></p>
		    </br>
		    <a href="#video1">Entrada Autos</a>
		    
		    <a href="#video2">Entrada Estudiantes</a>
		    
		
		<div id="qrCode">
		  <?php echo $html->image (''.$laboratory['Laboratory']['nombre'].'.png',array('alt' => 'CAKEPHP', 'width' => '100','height'=>'100')); ?>
		</div>
	</div>
</div>
	
<div id="separador"><br /></div>
<div class="lightbox" id="video1">
			<div class="w640 h386">
              <iframe width="640" height="386" src="<?php echo $laboratory['Laboratory']['video1']; ?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<p class="close"><a href="#" title="Cerrar"><span>X</span></a></p>
</div>
<div class="lightbox" id="video2">
			<div class="w640 h386">
              <iframe width="640" height="386" src="<?php echo $laboratory['Laboratory']['video2']; ?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<p class="close"><a href="#" title="Cerrar"><span>X</span></a></p>
</div>
