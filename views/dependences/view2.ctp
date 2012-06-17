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
	<li><a <?php echo $this->Html->link(__('Listar Oficinas', true), array('controller' => 'dependences', 'action' => 'index2'))?></a></li>
	<h3 id="lugar">Descripcion Oficina</h3>
</ul>

<div id="datos">

	    
	    	<?php //echo $dependence['Dependence']['id']; ?>

			<p class="datos-usuario"><b>Nombre:&nbsp;</b><?php echo $dependence['Dependence']['nombre']; ?></p>
			
			<p class="datos-usuario"><b>Ubicacion:&nbsp;</b><?php echo $dependence['Dependence']['ubicacion']; ?></p>
			</br>
			<p class="datos-usuario"><b>Funcion.</b></br><?php echo $dependence['Dependence']['funcion']; ?></p>
            </br>
			<a href="#video1">Entrada Autos</a>
		    
		    <a href="#video2">Entrada Estudiantes</a>
		<!--<div id="qrCode">
		    <?php echo $html->image (''.$dependence['Dependence']['nombre'].'.png',array('alt' => 'CAKEPHP', 'width' => '100','height'=>'100')); ?>
		
		</div>-->
	
</div>

<div id="separador"><br /></div>
<div class="lightbox" id="video1">
			<div class="w640 h386">
              <iframe width="640" height="386" src="<?php echo $dependence['Dependence']['video1']; ?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<p class="close"><a href="#" title="Cerrar"><span>X</span></a></p>
</div>
<div class="lightbox" id="video2">
			<div class="w640 h386">
              <iframe width="640" height="386" src="<?php echo $dependence['Dependence']['video2']; ?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<p class="close"><a href="#" title="Cerrar"><span>X</span></a></p>
</div>

