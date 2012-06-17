    <script type="text/javascript" language="JavaScript">
    <!--
    javascript:window.history.forward(1);
    //-->
    </script>

<ul id="menuSession">
	<li><a <?php echo $this->Html->link(__('Salir', true), array('controller' => 'users', 'action' => 'logout'))?> </a></li>
	<h3 id="lugar">Menu Administrador</h3>
</ul>

<ul id="menuAdmin">
		<li id="uno"><?php echo $this->Html->link(sprintf(__('', true), __('', true)), array('action' => 'index')); ?> </li>
		<li id="dos"><?php echo $this->Html->link(sprintf(__('', true), __('', true)), array('controller' => 'faculties','action' => 'index')); ?> </li>
		<li id="tres"><?php echo $this->Html->link(sprintf(__('', true), __('', true)), array('controller' => 'departments','action' => 'index')); ?> </li>
		<li id="cuatro"><?php echo $this->Html->link(sprintf(__('', true), __('', true)), array('controller' => 'dependences','action' => 'index')); ?> </li>
        <li id="cinco"><?php echo $this->Html->link(sprintf(__('', true), __('', true)), array('controller' => 'laboratories','action' => 'index')); ?> </li>
</ul>
<div id="separador"><br /></div>