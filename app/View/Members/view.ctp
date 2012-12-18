<div class="members view">
<h2><?php  echo __('Member'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($member['Member']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Member'), array('action' => 'edit', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Member'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ownerships'), array('controller' => 'ownerships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ownership'), array('controller' => 'ownerships', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ownerships'); ?></h3>
	<?php if (!empty($member['Ownership'])): ?>
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
		foreach ($member['Ownership'] as $ownership): ?>
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
