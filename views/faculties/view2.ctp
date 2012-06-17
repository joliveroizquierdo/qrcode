<?php $this->Javascript->link(array('jquery-1.7.1.min.js'), false);?>
<?php $this->Javascript->link(array('jquery.lightbox-0.5.js'), false);?>
<!--<script type="text/javascript">
alert("hola");
</script>-->
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
	<li><a <?php echo $this->Html->link(__('Listar Facultades', true), array('controller' => 'faculties', 'action' => 'index2'))?></a></li>
	<h3 id="lugar">Descripcion Facultad</h3>
</ul>

<div id="datos">

	    
	    	<?php //echo $faculty['Faculty']['id']; ?>
	   
			<p class="datos-usuario"><b>Nombre:&nbsp;</b><?php echo $faculty['Faculty']['nombre']; ?></p>
		
			<p class="datos-usuario"><b>Ubicacion:&nbsp;</b><?php echo $faculty['Faculty']['ubicacion']; ?></p>
	
			<p class="datos-usuario"><b>Decano:&nbsp;</b><?php echo $faculty['Faculty']['decano']; ?></p>
	        </br>
		    <p class="datos-usuario"><b>Misi&oacute;n.&nbsp;</b></br><?php echo $faculty['Faculty']['mision']; ?></p>
            </br>
		    <p class="datos-usuario"><b>Vsi&oacute;n.&nbsp;</b></br><?php echo $faculty['Faculty']['vision']; ?></p>
		    </br>
            <a href="#video1">Entrada Autos</a>
		    
		    <a href="#video2">Entrada Estudiantes</a>
		    
		<!--<div id="qrCode">
		    <?php echo $html->image (''.$faculty['Faculty']['nombre'].'.png',array('alt' => 'CAKEPHP', 'width' => '100','height'=>'100')); ?>
		</div>-->
	
</div>
<div id="separador"><br /></div> 
<div class="lightbox" id="video1">
			<div class="w640 h386">
              <iframe width="640" height="386" src="<?php echo $faculty['Faculty']['video1']; ?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<p class="close"><a href="#" title="Cerrar"><span>X</span></a></p>
</div>
<div class="lightbox" id="video2">
			<div class="w640 h386">
              <iframe width="640" height="386" src="<?php echo $faculty['Faculty']['video2']; ?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<p class="close"><a href="#" title="Cerrar"><span>X</span></a></p>
</div>
