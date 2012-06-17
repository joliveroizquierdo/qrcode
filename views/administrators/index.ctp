<div class="administrators index">
	<h2><?php __('Administrators');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('cedula');?></th>
			<th><?php echo $this->Paginator->sort('nombres');?></th>
			<th><?php echo $this->Paginator->sort('apellidos');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($administrators as $administrator):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $administrator['Administrator']['id']; ?>&nbsp;</td>
		<td><?php echo $administrator['Administrator']['cedula']; ?>&nbsp;</td>
		<td><?php echo $administrator['Administrator']['nombres']; ?>&nbsp;</td>
		<td><?php echo $administrator['Administrator']['apellidos']; ?>&nbsp;</td>
		<td><?php echo $administrator['Administrator']['email']; ?>&nbsp;</td>
		<td><?php echo $administrator['Administrator']['username']; ?>&nbsp;</td>
		<td><?php echo $administrator['Administrator']['password']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $administrator['Administrator']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $administrator['Administrator']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $administrator['Administrator']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $administrator['Administrator']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Administrator', true)), array('action' => 'add')); ?></li>
	</ul>
</div>