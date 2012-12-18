<div class="lands view">
<h2><?php  echo __('Land'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($land['Land']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($land['Land']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($land['Land']['Description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Land'), array('action' => 'edit', $land['Land']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Land'), array('action' => 'delete', $land['Land']['id']), null, __('Are you sure you want to delete # %s?', $land['Land']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lands'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Land'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ownerships'), array('controller' => 'ownerships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ownership'), array('controller' => 'ownerships', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ownerships'); ?></h3>
	<?php if (!empty($land['Ownership'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Member Id'); ?></th>
		<th><?php echo __('Land Id'); ?></th>
		<th><?php echo __('Number Undecked'); ?></th>
		<th><?php echo __('Number Decked'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($land['Ownership'] as $ownership): ?>
		<tr>
			<td><?php echo $ownership['id']; ?></td>
			<td><?php echo $ownership['member_id']; ?></td>
			<td><?php echo $ownership['land_id']; ?></td>
			<td><?php echo $ownership['number_undecked']; ?></td>
			<td><?php echo $ownership['number_decked']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ownerships', 'action' => 'view', $ownership['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ownerships', 'action' => 'edit', $ownership['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ownerships', 'action' => 'delete', $ownership['id']), null, __('Are you sure you want to delete # %s?', $ownership['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ownership'), array('controller' => 'ownerships', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
