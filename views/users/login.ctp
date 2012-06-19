<?php $this->Javascript->link(array('jquery-1.4.min.js'), false);?>
<?php $this->Javascript->link(array('loopedslider.js'), false);?>
<script type="text/javascript">
	$(function(){
		$('#slider').loopedSlider({
			autoStart: 5000,
			restart: 4000
		});

	});
</script>
<div id="slider">
  <div class="container">
  
    <ul class="slides">
      <li>
        <div class="thumbholder"><img src="img/f5.jpg" width="350" height="220" alt="I Mac Immagine Disegno" /></div>
        <div class="txtholder">
          <h3 class="cursive">Aprovechar el servicio de identificacion por medio de la tecnologia QR-code accediendo con tu movil y con una conexion a internet.</h3>
        </div>
      </li>
      <li>
        <div class="thumbholder"><img src="img/f3.jpg" width="350" height="220" alt="First Image" /></div>
        <div class="txtholder">
          <h3 class="cursive">Tendras acceso a recorrido virtuales que te guiaran al destino desea dentro del campus de la Universidad de Cordoba.</h3>
        </div>
      </li>
      <li>
        <div class="thumbholder"><img src="img/f4.jpg" width="350" height="220" alt="First Image" /></div>
        <div class="txtholder">
          <h3 class="cursive">Con tu movil podras conocer la ubicacion exacta de las diferentes instalaciones y oficinas a las cuales deseas llegar.</h3>
        </div>
      </li>
     
    </ul>
  </div>
</div> 
<div id="mapa">
	<ul class="localidades">
	 <h4>UniCordoba</h4>
	 <li><a class="Facu" <?php echo $this->Html->link(sprintf(__('Facultades', true), __('', true)), array('controller' => 'faculties','action' => 'index2')); ?></a></li>
	 <li><a class="Dpto" <?php echo $this->Html->link(sprintf(__('Departamentos', true), __('', true)), array('controller' => 'departments','action' => 'index2')); ?></a></li>
	 <li><a class="Labo" <?php echo $this->Html->link(sprintf(__('Laboratorios', true), __('', true)), array('controller' => 'laboratories','action' => 'index2')); ?> </a></li>
	 <li><a class="Ofic" <?php echo $this->Html->link(sprintf(__('Oficinas', true), __('', true)), array('controller' => 'dependences','action' => 'index2')); ?></a></li>
  </ul>
</div>
   <ul class="instaladores">
	 <h4>Lectores de Qr-Code</h4>
	 <li><a class="a" href="http://www.i-nigma.com/i-nigmahp.html" title="i-nigma">I-nigma</a></li>
	 <li><a class="b" href="http://reader.kaywa.com" title="http://reader.kaywa.com">Kaywareader</a></li>
	 <li><a class="c" href="http://www.quickmark.com.tw/En/basic/index.asp" title="http://www.quickmark.com.tw/En/basic/index.asp">Quickmark</a></li>
	 <li><a class="d" href="http://www.beetagg.com" title="http://www.beetagg.com">Beetagg</a></li>
  </ul>
<div id="inicio">
	   
  <?php //echo $session->flash('auth'); ?>
  <?php
  
    $session->flash('auth');
	 echo $form->create('User',array('action'=>'login'));
	 echo $form->input('username');
     echo $form->input('password');
     //echo $form->end('Ingresar');
     echo $this->Form->end(__('Login', true));
   ?>
  
  <?php //esto sirve para colocar mensajes pero tambien exito uno que esta en la vista defaul y e sla que predominaecho $this->Session->flash();?>
    
</div>



   
     
        
	




