<div class="ownerships index">
	<h2><?php echo __('Ownerships'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('member_id'); ?></th>
			<th><?php echo $this->Paginator->sort('land_id'); ?></th>
			<th><?php echo $this->Paginator->sort('number_undecked'); ?></th>
			<th><?php echo $this->Paginator->sort('number_decked'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($ownerships as $ownership): ?>
	<tr>
		<td><?php echo h($ownership['Ownership']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ownership['Member']['name'], array('controller' => 'members', 'action' => 'view', $ownership['Member']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ownership['Land']['id'], array('controller' => 'lands', 'action' => 'view', $ownership['Land']['id'])); ?>
		</td>
		<td><?php echo h($ownership['Ownership']['number_undecked']); ?>&nbsp;</td>
		<td><?php echo h($ownership['Ownership']['number_decked']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ownership['Ownership']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ownership['Ownership']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ownership['Ownership']['id']), null, __('Are you sure you want to delete # %s?', $ownership['Ownership']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Ownership'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lands'), array('controller' => 'lands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Land'), array('controller' => 'lands', 'action' => 'add')); ?> </li>
	</ul>
</div>
