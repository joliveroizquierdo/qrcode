<?php $this->Javascript->link(array('jquery'), false);?>
<?php $this->Javascript->link(array('scripts'), false);?>
<script type="text/javascript">var _siteRoot='index.html',_root='index.html';</script>

<?php 
/*
copyright Jhon Bray Ramos Alean y Jose Elias Paternina Petro
vista login del controlador Users
*/
?>

<div id="encabezado"></div>
<div id="login">
     <?php //echo $session->flash('auth'); ?>
<?php
        $session->flash('auth');
	echo $form->create('User',array('action'=>'login'));
	      
	      

?>
	<fieldset>
 		<legend><?php printf(__('', true), __('', true)); ?></legend>
         <br />
            <br />
              <br />
                <br />
                  <br />
                    <br />
                      <br />
                       <br/><br/>
                        
     <div class="camposlogin">
       <?php
	  echo $form->input('username');
        ?>
     </div>  
     
     <div class="camposlogin">
      <?php
	  echo $form->input('password');
    	?>
     </div>
     
     <div>
       <center>
         <?php
	   	echo $form->end('Ingresar');
       	  ?>
       </center>
     </div>  
     <table bgcolor="white">
     <tr bgcolor="white">
     <td style="color: red;" bgcolor="white"><?php echo $this->Session->flash(); ?></td>
     </tr>
     </table>
        
	</fieldset>

</div>



<div id="pie"></div>
